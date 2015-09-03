---
title: Dotnetnuke Optimisation
date: 2007/06/12 09:41:00
taxonomy: 
 category: blog 
---

![](http://www.dotnetnuke.com/Portals/_default/Skins/DNN-Minimal/images/dotnetnukelogo.gif)
Readers of this blog will be familiar with my use of DotNetNuke (DNN) to host class-related material at [jk.itsligo.ie](http://jk.itsligo.ie/). With the release of DNN (DotNetNuke) 4.5.3, attention in the core development group has moved up the ladder to performance. (Actually, 4.4 saw the focus on efficiencies but 4.5.3 add some nice interface improvements like FCKEditor for entering text).
Some of the improvements include:


* Blowery http compression (Ben Lowery)
* Whitespace removal
* Core module efficiencies
* Smaller memory footprint
* Smaller install footprint
These do make a big improvement and you can read more [here](http://www.dotnetnuke.com/Default.aspx?tabid=825&EntryID=1229). However, one issue that I found bugged me more than most was the slow initial page load. This can be quite bad - up to 5 seconds or more on broadband. The culprit is ASP.NET server. It kicks out of cache those dlls that haven't been accessed in a while so the nicely compiled code must be jit'd again on access and reloaded into memory. This take a relative age. The solution is to 'poke' the server every so often to fool ASP.NET that the page is being accessed and so keep the necessary code in the cached memory.
There are several tools for doing this ranging from a service running on the server or remote browser. However, access to the server isn't always to hand (though you do only have to do this once) and ensuring a browser window is always open remotely to prompt the page to life isn't really pracical.
So, that's where [www.ethuongmai.com](http://www.ethuongmai.com/) comes in. It hosts a free service (there are some you can pay for like [www.keepaliveforever.com](http://www.keepaliveforever.com/)) that does exactly what you need - pinging your home page every 10 minutes to keep it alive. Signed up yesterday and my site responds incredible fast now. Remember, even previously, the site was fast save for the initial page load.

Update 3/9/07:
www.ethuongmai.com no longer seems to be working. However [www.host-tracker.com](http://www.host-tracker.com/) offers the same (though friendlier interface) facilities - for now.

