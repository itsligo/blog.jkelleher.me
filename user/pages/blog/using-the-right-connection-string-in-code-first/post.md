---
title: Using the right connection string in Code First
date: 2013/05/27 18:30:03
taxonomy: 
 category: blog 
---

Here's a curious one. In deploying a recent application, I changed the connection string in web.config to point to the Azure-hosted SQL database. The web.config entry looks like: <add name="MyAppDb" connectionString="Server=tcp:dhgifx5yo0.database.windows.net,1433; Database=MyAzureDb;User ID=myLogin@dhgifx5yo0;Password=myPassword; Trusted_Connection=False;Encrypt=True;Connection Timeout=30;" providerName="System.Data.SqlClient" /> In typical fashion, I commented out the connection string to the local database. So I run the application and for a while didn't notice that anything was wrong since the remote database was seeded similarly to the local one. However, it soon emerged that the database I was seeing was actually the local one - this despite the fact that the (only) connection string pointed to remote database. How could the app (still locally hosted) be pulling data from a local database that it didn't have a connection string to? I don't have the full answer but the fix was to ensure that the name of the DbContext class that you create to invoke Code First must match the name of the connection string in your web.config. So, in the above connection string where the 'name' is 'MyAppDb', you must ensure that the DbContext class is called the same identifier. Apparently if a match isn't found, it reverts to 'DefaultConnection' but I'm not convinced of this behaviour. For now, don't accept defaults - name the connection string appropriately.

