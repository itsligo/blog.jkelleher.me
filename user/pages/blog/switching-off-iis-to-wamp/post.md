---
title: Switching off IIS to WAMP
date: 2013/06/13 16:11:37
taxonomy:
 category: blog
---

![WampServer-logo](WampServer-logo.png?resize=300,300)

Lately I looked to migrating from WordPress to [Kirby](http://www.getkirby.com) for my class [website](http://jkwp.itsligo.ie). The VM I use runs Windows Server 2008 so IIS (Internet Information Services) was the initial choice for WordPress. Initially, I thought I could just create a new web site through IIS, power down the existing sites while I migrate and away she goes. That wasn't to be. IIS is in that category of products/services that I visit only very occasionally and the myriad of settings that pertain to IIS are enough to humble the bravest souls. In the end, I learned to embrace the inevitable and took Kirby where any PHP product likes to live - Apache+PHP. The choices here are pleasantly few - WAMP (from [Wampserver](http://www.wampserver.com/en/)) or [XAMP](http://sashtown.de/how-to-install-kirby-on-xampp/). Having played with WAMP in the past, it seemed the natural choice. Setup was a breeze though I gave mySQL a miss since Kirby rocks without the need for a database - I'm guessing it needed a user set up on mySQL but this served only to confirm my reasons for moving from database-centric CMSs. That's the good news - after that, things got messy. There were many guides to be found on setting up WAMP and frankly getting it working locally (as Localhost) is easy, there seemed a lot of misinformation around how to expose the site publicly. So here are a few pointers worth noting:

1. First off, identify the IP assigned to the server you're hosting your site at. Use ipconfig on the cmd or just look to IIS which will show the IP address. You'll notice that the address is suffixed with :80 to indicate port 80 is being used.
2. You'll need to shut down IIS, at least for the site on port 80. I've left the ftp server running on port 21 as this won't cause interference.
3. From the WAMP task bar system tray, check the version of PHP is >5.3 (at least for some Kirby extensions)
4. From WAMP, check that the Rewrite_Module for Apache is enabled - seems this should really be on by default as most PHP CMSs rely on this.
5. I wanted to experiment with using Dropbox to host my site so that I could update from anywhere and let Dropbox do its thing. I need to let Apache know where the web site files are at so I create an alias directory (like a virtual directory for IIS). Mine looks a bit like this:

```
Alias / "C:/Users/jkelleher/Dropbox/kirby/"
<Directory "C:/Users/jkelleher/Dropbox/kirby/">
  Options Indexes FollowSymLinks MultiViews
  AllowOverride all
  Order allow,deny
  Allow from all
</Directory>
```

1. This means that Apache will look for the index.php (or other default files) at a different location. It also lets me leave the dropbox folder alone if it's already in situ.
2. Next up to edit the httpd.conf file. You can get this from the system tray or dig down the folder structure beginning at c:wampbinapacheapache 2.2.22confhttpd.conf - yea, this could be easier. There's a few things to change in here so...
3. Find the line with 'Listen 80' (or similar) and change to 'Listen 10.19.2.54:80' (or whatever your statically allocated IP address is as found out earlier)
4. Change the line with 'ServerName localhost:80' to be 'ServerName jkwp.itsligo.ie:80'
5. Change the line with 'DocumentRoot' to be 'DocumentRoot "C:myWebSiteFolder"
6. In the <Directory> section, comment out 'AllowOverride None' to 'AllowOverride All'. Do the same for 'Deny from all', changing it to 'Allow from all'
7. A few lines further down is another reference to <Directory>. Change the folder reference to that which you used above.
8. Some guides will direct you to edit the hosts.txt file buried deep in c:windowssystem32driversetc but this is of no concern if you're publishing beyond the server. Similarly, there is a line in httpd.conf that some suggest to uncomment (#Include conf/extra/httpd-vhosts.conf) but which equally is of no concern.
9. Btw, if you goof, you can resurrect a default https.conf file from the conf extra folder and start again.
10. Don't forget to restart all services of WAMP to test your site.
11. If things don't go right (e.g. WAMP won't go orange or green), check out the error log for Apache.
12. Finally, you'll want to enable access to wamp and apache in the Firewall rules.
So, not a walk in the park but sensible enough once you've knocked your head against a wall for a few hours. Still, it's good to have a site pop up when it's all done right.
