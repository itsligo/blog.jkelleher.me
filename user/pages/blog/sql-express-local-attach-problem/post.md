---
title: SQL Express Local Attach Problem
date: 2013/02/08 12:26:04
taxonomy: 
 category: blog 
---

![logo_SQL2008R2](/wp-content/uploads/2013/02/logo_SQL2008R2.png)There's an issue when you try to attach a local MDF SQL database file to the local instance of SQL Express. VS typically will insert a USER INSTANCE = true into the connection string that it generates when you add the LINQ-to-SQL or ADO.NET Entity modelling to your project. The connection to the database as attached to SQL EXPRESS will fail on open. Fix this by removing the User Instance clause from the connection string. Other solutions advise deleting the SQL Express folder from the AppData folder for the user but I found the first options works for me and doesn't require any privileges on the host machine.

