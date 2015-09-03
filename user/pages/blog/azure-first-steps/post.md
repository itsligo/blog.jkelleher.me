---
title: Azure - First Steps
date: 2012/11/25 17:51:39
taxonomy: 
 category: blog 
---

![windowsazure-logo](/wp-content/uploads/2013/05/windowsazure-logo-300x144.png)My putting a toe in the water of Azure. Love the interface, very slick and well thought out - looks like Scott Gu kicked the team into action. Here's a few very 'MS' tricks that I've overcome so far:

* Using SSMS (SQL Server Management Studio 2008) isn't a great place to start. Upgrade to 2008 R2 or jump into SSMS 2012 or you'll get the 'sys.configurations' [error](http://intendedeffect.net/2012/07/17/sql-azure-management-studio-2008-and-the-sys-configurations-error/). I installed (the not insignificant) R2 upgrade and the problem went away and the next step rendered un-necessary.
* **For SSMS 2008 only**: Once you have the Azure SQL database set up (along with the SQL Server), don't try the normal server logon in SSMS. Instead, choose 'New Query' from the toolbar. Enter the database address (no need for https:// prefix), followed by your administrator username (not email or Azure sign-on), followed by the password for the SQL Server. It's easy to reset the password from the Azure portal if you forget it.
* I ran into difficulties in Chrome trying to 'Manage' the database server but it worked fine in Safari - problem was keystrokes wouldn't appear in logon text-boxes - silly thing but a problem none-the-less.
* I could make a connection to the server in VS2010 using View..Server Explorer but it's easier in SSMS.
* Seems now in SSMS 2008 R2, the table designer is gone for Azure table creation, so scripting is needed. Likely be simpler to let EF do the table generation.
* [This](https://www.windowsazure.com/en-us/develop/net/common-tasks/sql-azure-management/) is a good resource for marrying up a ASP.NET MVC project to begin using Azure (both as a Azure web hosted app and using Azure SQL database).
* Another thing worth remembering is that while working in a VM, ASP.NET won't permit accessing a database that is on a  UNC share. Even if your database is local (as you see it), say, C:vsmydb.mdf, ASP.NET will not access it. Mapping to a drive letter won't work either. Solution is to run native (using Bootcamp on a Mac, for example) or attach the database to a lock SQL Server instance. Or better, use an Azure SQL database.

## Comments

**[Paul](#51 "2012-11-26 21:45:44"):** VMS Bad. Native Good ;-)



