---
title: Localhost not refreshing to reflect code changes
date: 2012/09/14 18:16:32
taxonomy: 
 category: blog 
---

[caption id="" align="alignright" width="241" caption="IIS Express"]![IIS Express](http://weblogs.asp.net/blogs/scottgu/image_093B9E9A.png)[/caption] This problem has visited me a few times and like such problems you quickly forget what the cause/cure was. The problem is manifested when you run a debug session in Visual Studio (I use VS2010 in a Parallels VM for what it's worth). The issue is changes that I make to the code and save should be immediately available to me in the browser following a refresh (F5 or similar). Instead, the site page served is that of the (now) older file. The usual solution I've worked with was to kill the localhost session, recompile and run prompting another development server to spawn and all was fine. However this seriously hits the development process. The solution that works is to ditch the built-in VS development server. I had done this before for other reasons and installed [IIS Express](http://www.iis.net/learn/extensions/introduction-to-iis-express/iis-express-overview) - a lightweight version of IIS with the following benefits:

* It doesn't run as a service or require administrator user rights to perform most tasks.
* IIS Express works well with ASP.NET and PHP applications.
* Multiple users of IIS Express can work independently on the same computer.
You can even write batch files to spawn a IIS Express process for deployment purposes. Anyhow, this *almost* fixes the problem.

However the location of the source code as suggested in other answers is important - it works for me using the c:windows folder or c:usersDefaultAppPool - apparently it has something to do with security to ensure. Only applications running under the 'DefaultAppPool' identity are permitted under IIS. So for anyone using a VM and mapping the host OS code folder you won't be able to rectify this unless you copy to a local folder in the c:usersDefaultAppPool folder.

More on DefaultAppPool at [IIS](http://www.iis.net/learn/manage/configuring-security/application-pool-identities).

Now a further wrinkle is a likely problem you'll encounter when you move your application to the DefaultAppPool identity - if you've used the Membership Provider of ASP.NET, the database it had created on SQL Server for members won't permit access with the new identity. I looked at ways to add "IIS APPPOOLASP.NET v4.0" as a Login but it just wouldn't recognise that as a valid user in SQL Server Management Studio Express. The solution I [found](http://forums.asp.net/t/1558691.aspx/1) was to open up IIS Manager (apparently it acts as the console for IIS _Express_ as well) and choose 'View Application Pools'.

![](http://www.appsolo.com/wp-content/uploads/2012/09/Screen-Shot-2012-09-14-at-21.59.49.png)

Then choose 'Set Application Pool Defaults...' and change the _Identity_ property to _LocalSystem_ from _ApplicationPoolIdentity._

_![](http://www.appsolo.com/wp-content/uploads/2012/09/Screen-Shot-2012-09-14-at-22.00.13.png)_

So there we are. I'm thinking I might just have put up with restarting the IIS Express (or Development) server each time but I've learned something along the way.

