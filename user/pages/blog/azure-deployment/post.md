---
title: Azure Deployment
date: 2013/05/25
taxonomy: 
 tag: azure
image: featured.jpg
highlight:
  theme: dark
---

So you want to deploy your beautiful localhost ASP.NET MVC project to Azure. Well, pack a lunch... Typically your ingredients will be:

* Visual Studio ASP.NET MVC Project (tested with VS2012 Update 2)
* SQL Server local database (tested with SQL Express 2012)
* Azure subscription
* Team Foundation Service source control

There are several ways to go about deploying and this is part of the confusion. The database deployment in particular can be difficult once you leave the same confines of SQL Server Management Studio (SSMS). Shifting the project itself can be accomplished in a few ways (link to TFS, download publish profile etc.). Here's how to go about it:

1. Sign into Azure and create a SQL Server. You don't need a database at this point as we'll create that later. Do note the administrator username and password as you'll need this later.
2. I found it best to deploy the database first as you can then attempt to connect to it from your localhost web app to ensure that the connection string is correct before you deploy the web app itself to the cloud. SSMS 2012 now has an easy way to deploy the database to Azure. You'll have to connect to the SQL Server on Azure so ensure you took careful note of the Administrator username and password. The rest of the form will be filled by SSMS.
3. You now have the database on Azure and can modify your connection string in your localhost project if you like to see if you can access it. You only have the administrator username/password for now so we'll need to create a separate Login/User combination later (best practice). You'll find the full connection string by visiting Azure and viewing the newly uploaded database. Test your localhost web app against the Azure-hosted SQL database. If using Code Migrations ensure you have updated your database with Package Console before doing these steps. While it's possible later to have code migrations run by Azure, I haven't tested this.

Next we need to set up specific a Login and User for your deployed database. This is distinct from the admin username & password we use to connect to the Azure SQL Server. Ordinarily, SSMS would be useful here but Azure isn't compliant with these kinds of operations from SSMS so we need some T-SQL. However, one problem that needs addressing is that you cannot use the T-SQL 'USE' command to switch between databases on the Azure SQL Server. This is important as we need to set up both a Login (for the master database) as well as a corresponding User (for the deployed database). 

The easiest way to do this is via SSMS but as the Login must be established on the master database, you need to make a connection to the Azure SQL Server 'master' database first. Remember to use the admin username here. Then create another connection to the Azure SQL Server but this time to your deployed SQL database. Have these two connections side by side in SSMS for convenience. Now create a Login on the master database. Ensure you have the 'master' db connection active on the left panel and press CTRL-N to create a new SQL Query window. Now create a Login with an associated password: 
```
CREATE LOGIN readonlylogin WITH password='1231!#ASDF!a';
```

Next create a User on the deployed database by switching to the other database connection: 
```
CREATE USER readonlyuser FROM LOGIN readonlylogin;
```

 Lastly, you need to assign permissions to that Login so that it can play with the database:
 ```
 EXEC sp_addrolemember 'db_datareader', 'readonlyuser';
 ```

You may find this [post](http://blogs.msdn.com/b/sqlazure/archive/2010/06/21/10028038.aspx) useful to elaborate on this aspect. Test your settings by taking the Login and changing your connection string (in your localhost app) to reflect the new Login and its password.

1. Assuming your modified connection string worked, the next step is deploy the web application. Begin by signing into Azure and creating a Web Site. Don't bother with a database for this as we'll indicate the linked database later. Next step is to upload your localhost application. But before doing this, make a connection on Azure between your Web Site (not yet uploaded) and the database created in the previous steps.
2. One new way to do this is particularly convenient (if it works) is to integrate your nascent web site on Azure with TFS (Team Foundation Service). Ensure that the Azure Live ID is the same you use to manage your TFS project (or at least, I'm guessing, is a member of the project team on TFS). Once connected in Azure, head back to VS2012 and do a trivial change and check in to Source Control. This will trigger the Build that Azure set up and begin the deployment. You can monitor the progress of this Build from within VS by calling up Team Explorer and viewing the Builds dropdown.
3. Another method which I've had better success with is to download from Azure a 'Publish Profile', available from the main web site dashboard. Save this small file locally and re-enter VS. Right click on the web application Project in Solution Explorer. Most of the information needed by this dialog will be pre-populated. However, on the Settings tab, ensure that only the necessary connection string is active - uncheck those that don't apply. The final 'Preview' screen will warn of any errors and click 'Start Preview' to see your files scanned in readiness for uploading to Azure. Click 'Publish' to deploy and try to browse to your newly published web site.
4. If you get errors (YSOD) that are not descriptive, then turn on 'CustomErrors' in your web.config file. Read more on this [here](http://stackoverflow.com/questions/4363941/asp-net-customerrors-mode-off-error-when-trying-to-access-working-webpage). This will result in better descriptions of your problems - likely to be database connection issues.
5. Also, you need to ensure that your IP address is set as an 'allowed IP address' on Azure. For public deployment you'll likely need a range of addresses that are permitted.

So, piece of cake really though I guess once you've ironed out all the pitfalls, it would be automatic. Also, republishing is simple and it will only upload those files that have changed. If using TFS integration, the a simple re-build is all that is needed - be sure to turn on continuous integration for the Build in question though.

