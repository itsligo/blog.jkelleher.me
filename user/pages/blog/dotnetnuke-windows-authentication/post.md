---
title: Dotnetnuke Windows Authentication
date: 2007/03/09 13:57:00
taxonomy: 
 category: blog 
---

DNN provides for two forms of authentication to provide for access by users. Form authentication employs the familiar registration procedure whereby prospective users choose 'Register', set up their profile and are entered in the system (also possible to force verification by admin, if need be).
This is well provided for by DNN. It means non-authenticated users have access to all 'open' material and for those areas more confidential you can insist that only registered users are allowed viewing rights.
One downside is that users are forced to actually do the registration. In an intranet environment such as CAMPUS, this is an additional step that might be an inconvenience - although remember it is only necessary to provide access to those parts of the site that require confidential privileges.
An alternative is to use the Active Directory (AD) and exploit the fact that the intranet users are already authenticated by the domain network, CAMPUS. By changing some settings in the web.config and entering the necessary details in the Admin...Authentication panel, you can ensure that new users already authenticated by CAMPUS have a user profile _automatically_ set up in DNN, often without their even being aware. Now on return visits, they are automatically logged into DNN and have immediate access to registered user content.
However, away from the intranet a restriction seems to apply. Those same users (outside of the intranet) who visit the site may get logged in as registered users if they are already logged into their PC as 'cached' CAMPUS users. If not, they are prompted with an 'Integrated Authentication' challenge pop-up requesting their CAMPUSjohndoe and password combination, which if correctly filled, grants them their registered user access. However, all casual visitors (not CAMPUS users or previously registered within the intranet) are greeted by the popup challenge and therefore excluded. This is a shame and obviously some combination of the two approaches would be ideal.
My current set up is to disable in Admin...Authentication the Windows Authentication settings thereby granted public access to the site. Users who have already been setup automatically whilst Windows Authentication was in place have user accounts set up and can choose to 'Login' to access registered user material. Others who missed the boat on automatic pass-thru domain registration (i.e. when Windows Authentication was enabled) can still register as new users and get access to the registered user content. This latter option isn't ideal and not just from the pov of the extra effort on behalf of the user. It may also have implications when setting particular privileges for certain AD groups, like say, class groups. The user is responsible for properly populating their profile whereas the automatic mechanism did this for them. This may be a feature I might never exploit but it adds to the admin if the profiles have gaps in them.
For now, I'm awaiting the next big release of DNN and hope for clarity on this issue.

## Comments

**[flowburner](#4 "2008-07-28 12:59:00"):** Have you read Mike Horton's explanation on this:

http://www.dotnetnuke.com/Community/Forums/tabid/795/forumid/89/threadid/232127/scope/posts/threadpage/4/Default.aspx



