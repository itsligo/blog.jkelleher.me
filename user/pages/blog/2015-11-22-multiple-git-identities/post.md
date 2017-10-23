---
title: Multiple Git Identities
taxonomy:
    tag: [dev]
status: publish
image: identities.jpg
slug: multiple-git
highlight:
  theme: dark
---
#Quickly switching between git identities

I maintain a couple Github accounts to handle various work and personal identities. And so I needed each push to be properly associated with the right identity and to reflect this on Github.
Depending on how you've set up git on your computer, you may be prompted to enter your username and password to Github on each push. However, most will use the [credential helper](https://help.github.com/articles/caching-your-github-password-in-git/) to automate this. This does pose a problem though in that it doesn't support multiiple identities. In any case, many will be using SSH connections (rather than https) to their remote repositories rather than username/password prompting and this is the target audience for this solution.
Github does a good job explaining how to [set up SSH keys](https://help.github.com/articles/generating-ssh-keys/) to permit access to your repos. In essence:

* Check for existing SSH keys by `ls -al ~/.ssh` - you'll need a public/private key for each identity. If you're missing one, generate a new key with: `ssh-keygen -t rsa -b 4096 -C "your_email@example.com"`
* Add your keys to `ssh-agent`
```
ssh-agent -s
ssh-add ~/.ssh/id_rsa
```
* Add your public SSH key to your Github user account by: `clip < ~/.ssh/id_rsa.pub` and pasting to keys section of your Github user account online
* Test that the key works by: `ssh -T git@github.com` - the reponse greets you but won't permit shell access to github itself (this is by design)

Okay, this far is only to do with setting up the necessary keys for your multiple accounts. We now need to handle how to switch between identities when working with repositories. We want to be able to tell a particular repository that we have two (or more) possible identities that will be accepted for pushes to Github. To do this, we `cd` into `.git` folder and edit the `config` file therein. This is the same one you can manipulate using `git config --local user.name "John Kelleher"`, for example - it's just easier to edit it in Sublime rather than via the CLI.
Here's what a sample one looks like:
```
[core]
        repositoryformatversion = 0
        filemode = true
        bare = false
        logallrefupdates = true
        ignorecase = true
        precomposeunicode = true
[user]
        email = john@jkelleher.me
        name = John Kelleher
[remote "origin"]
        url = git@jk.github.com:jkelleher/camproll.git
        fetch = +refs/heads/*:refs/remotes/origin/*
[branch "master"]
        remote = origin
        merge = refs/heads/master
```

Note the **url** entry - it uses the SSH endpoint rather than the HTTPS. Here I'm indicating the **jkelleher** user account for Github. The key bit to notice is the `git@jk.github.com` reference - you would normally see `git@github.com` here but we will next configure the multiple identities, one of which is `jk.github.com` and so that particular identity will be used for this repo. By changing the url, I can employ another identity. The url can be changed with: `git remote set-url git@jk2.github.com:jkelleher2/camproll.git`, for example.

The multiple identites are set up in the `~/.ssh` folder in a `config` file (which probably already exists, though empty). Here's the structure reflecting two identities (one of which is used by the above repo):

```
Host jk.github.com
    HostName github.com
    PreferredAuthentications publickey
    IdentityFile ~/.ssh/jk-id_rsa

Host jk2.github.com
    HostName github.com
    PreferredAuthentications publickey
    IdentityFile ~/.ssh/jk2-id_rsa
```

Remember this `config` file requires the ssh keys mentioned at the top of the post. Github also needs to have the corresponding keys. You will need to employ the SSH endpoints for pushing/pulling to Github and this is set in the `.git/config` file in each repo. Switching is as easy as changing this endpoint - the identity is picked up from that url.
