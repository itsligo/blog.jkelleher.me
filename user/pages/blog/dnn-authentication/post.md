---
title: DNN & Authentication
date: 2007/03/01 13:58:00
taxonomy: 
 tag: cms 
---

On the face of it, I should just get everyone to register and be done with it. However, DNN supports pass-thru Active Directory (AD) windows authentication so being a sucker for using the latest and the best, I opted for the neatest solution.

The theory is that CAMPUS verified users when they arrive at the DNN site will have the AD entry cached in DNN so that they aren't presented with a need to register to access restricted items on the site. So far, so good. All this is wonderfully seemless - well, at least for the user. The admin is a bit messy requiring various changes in the web.config to change from Forms authentication to Windows NTLM authentication. The beauty of the system is that such domain registered users can then access the site from outside the domain (say, at home) - when they visit the site the NTLM authentication dialog box pops up asking for the CAMPUSsxxxxxxx logon and entering their CAMPUS password sails them through to the site - lovely solution - and secure.

However, there are some quirks (hopefully to be ironed out in Mar 15th DNN 4.5 release) to the setup. One issue seems to be (and these only affect the admin of the system, so basically my sanity not the users') that the entries in the AD aren't always perfect - missing displaynames, email etc. These imperfections are copied to the DNN database and can affect the workings of some features such as verifying authentication (Admin..Authentication) and Admin..User Accounts. The latter means you can't get a list (easily) of the users. Again, not a problem for users, no data is corrupted but administering the site becomes a pain - read, MSSQL Managment Studio (MSSQLMSE) comes out.

The solution to date that I think works is to enter (manually, though a script would be easily written) 'DisplayNames' for those users who are missing them. This is easy in MSSQLMSE since the missing data is readily visible and there are manageable numbers of entries. I think this does fix things but you must (am I right?) wait until the database gets refreshed (so perhaps a postback is needed) and/or you remove the cookie for the DNN site.
Others (in forums) would have you run a script to fix similar problems with AD synchronisation or install some fixed binaries (from AD Fix 4.x) but these are braver (read, untested) possible solutions and not ones to be taken lightly on a live site. Well, depends how desperate I get ;)
So the moral of the story is to take little steps and don't mess too much with a system or alternatively read the f***** manual!

