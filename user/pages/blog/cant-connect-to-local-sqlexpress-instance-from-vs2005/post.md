---
title: Can't connect to local SQLExpress instance from VS2005?
date: 2007/03/09 13:53:00
taxonomy: 
 category: blog 
---

When VS2005 says it can't find your local SQLExpress instance, DON'T BELIEVE IT. And don't go opening up remote connections like it says you should. Got this today and wasted some time chasing wild geese.
While attempting to connect to a local instance (JKITSSQLEXPRESS) of SQL Server 2005 Express, the test connection failed saying the likely cause was remote connections not be enabled for that SQL Express instance.
Well, I was connecting locally so how would that be a problem. However, every Google search pointed to this problem so I followed the advice and opened up SQLExpress instance to remote connections. I also started up the SQLExpress browser service to help find the local instance.
I didn't think this was needed since in VS2005 it showed JKITS as a local server - it was in actually finalising the connection that it failed. It didn't list the databases either for that matter.
Anyhow, the problem was way different and much simpler. When VS2005 lists the available servers it shows just the computer name - in my case, JKITS. You have to change this however to include the fully qualified SQLExpress name: JKITSSQLEXPRESS or whatever yours is called.
Go figure.

## Comments

**[Anonymous](#11 "2009-08-25 19:44:19"):** Unbelievable....
An Hour I searched to correct this error and got the same bad info of:
Enable the browser service.
Enable TCP/IP
Enable remote connections.
All rubbish. Your blog should be a shining beacon to anyone in tech support. Fantastic!

**[Anonymous](#17 "2009-12-27 09:44:58"):** Well I agree but I think the brief should acquire more info then it has.



