---
title: Source Control
date: 2010/08/01 09:59:50
taxonomy: 
 category: blog 
---

![SVN in action on VS2010](http://www.appsolo.com/wp-content/uploads/2010/08/image_thumb.png)Our current job has grown to a respectable size and it’s time to look at source control. To date, we’ve been happy with the [Dropbox](http://getdropbox.com) shuffle. But being more grown-up about proper versioning, it was time to examine the possibilities.

Seems [SVN](http://en.wikipedia.org/wiki/Apache_Subversion) and [Git](http://en.wikipedia.org/wiki/Git_(software)) are leading players, so too [CVS](http://en.wikipedia.org/wiki/Concurrent_Versions_System) (an older standard and used by [sourceforge](http://sourceforge.net/scm/?type=cvs&group_id=85535)). The notion behind these revision control systems is to provide a mechanism to monitor current and historical versions of files, typically source code. Around these standards, online services have developed to provide storage for distributed development efforts. Keen to keep costs to a minimum (this project is a loss leader!), there are a [number of free](http://stackoverflow.com/questions/59791/free-online-private-svn-repositories) (or nearly) providers. I plumbed for [Assembla](https://www.assembla.com/). They give 2Gb (though under review) and permit private projects. If you’re working on open source, [codeplex](www.codeplex.com) (from Microsoft) is a good alternative. Other providers seem limited at <200Mb which with maintaining unlimited versions (even of source code) would seem inadequate in the short term.

Choosing an online host for your repository (lingo for your online project unit) is one part of the solution. Next you need a means of interacting with the repository. There are two options here: shell extension to Explorer or integration into Eclipse or (in our case) Visual Studio. Right now, I’m playing with the integrated [AnkhSVN](http://ankhsvn.open.collab.net/ankhsvn/) from Collabnet which plays nice with VS2010. [TortoiseSVN](http://tortoisesvn.tigris.org/) is popular as a shell extension and seems very intuitive. Both are free.

Setup is pretty straightforward. I began by creating a free private account at [Assembla](https://www.assembla.com/). This gives you a URL address for your repository. Now install [AnkhSVN](http://ankhsvn.open.collab.net/ankhsvn/) as a plugin to VS2010. Right clicking on your solution lets you add it to the online repository at the URL you received. Then Commit your solution to the newly created repository – this uploads local files to the repository for others to check out. As you can see from the screen shot, the tick marks indicate the local source is in synch with the online repository.

