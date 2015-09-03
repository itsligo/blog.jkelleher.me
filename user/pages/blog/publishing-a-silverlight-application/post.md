---
title: Publishing a Silverlight Application
date: 2010/09/06 18:08:52
taxonomy: 
 category: blog 
---

![incognito icon](http://www.google.com/help/hc/images/chrome_95464.gif)As we near the end of a current development, it’s worth pointing out a few tips on publishing a Silverlight application. Visual Studio has a very handy ‘Web One-Click Publishing’ facility. All that’s needed is to provide the ftp address (and authentication) and click ‘Publish’. It’s important to realise that in a Silverlight app, you’re only uploading the web project half of your solution, and not the Silverlight client source. The Silverlight component is compiled into the xap file which is deposited into the ClientBin folder of the Web Project. One reason why it’s worth pointing this out is that unless you do a build of the Silverlight client code, the xap file in the Web Project is not updated and so the Publish will be of an old xap file giving you ‘out-of-date’ results when you view the app running. One other useful tip concerns ensuring you’re looking at the actual ‘most-recently-uploaded’ version of your app. Your browser will do a very convenient job of caching everything but in this case, you want it to round-trip to the server and pull down the very latest version you’ve just uploaded. I found Chrome’s Incognito window handy since it side-steps all local data (such as cookies etc.). Internet Explorer has a similar (though less easily found) feature with InPrivate browsing.

