---
title: Extending your Wi-Fi signal range
date: 2011/08/04 00:35:00
taxonomy: 
 category: blog 
---

![](http://ecx.images-amazon.com/images/I/31qVxXUcSsL._SL500_AA300_.jpg)

Recently, I switched broadband (and phone) provider to [UPC](http://www.upc.ie/broadband/twentyfive/). For what it's worth, a good move - getting consistently 20mb (of 25mb advertised) and no dropouts. One problem though was the fact that the new cable modem/router now resides in a place where my office PCs are not. So I needed a means of getting broadband across the house. The obvious choice was to buy a pair of wifi usb dongles for the PCs but the location of the PCs (in a cabinet) would mean a poor reception. Couple that with the fact that occasionally I might need connect an extra PC or cable in a laptop, I got to looking and found the [Edimax 7228apn](http://www.amazon.co.uk/Edimax-EW-7228APN-150mbps-Extender-5-Port/dp/B004JV42A0/ref=sr_1_1?ie=UTF8&qid=1312416278&sr=8-1).
The reviews were mixed but the price and spec was spot on so I jumped. Actually, the initial install was pretty easy. Stick in the CD, connect on a hard line and the whole thing was ready to use within 30 minutes.
However, a week later it failed. To get it going took more time than is reasonable and the email support was pretty hopeless. Instead, it was a process of elimination to find what part of my reasoning was faulty.
So, for those others out there struggling, this is how it works. First off, drop the CD, I could never get it to work. Best approach is to connect directly to the box at 192.168.2.1. To access this subnet though, you'll need to change your connecting PC's IP configuration. Do this by changing from the 'automatically get IP address using DHCP' to a specific IP address, say, 192.168.2.10. Change the subnet to 255.255.255.0 and you can leave the gateway alone.


![](http://3.bp.blogspot.com/-iikIfh-kqGE/TjnnsYgtitI/AAAAAAABmc0/kRYTPCqdhWc/s320/Screen+Shot+2011-08-04+at+01.27.49.png)

Basic Settings on Edimax 7228apn
Use admin/1234 as the username and password (these are under the unit). Once 'in', you need to change the Basic Settings as shown. Change the security settings as for your own wifi setup but note that I'm told the Edimax 7228apn doesn't do mixed mode WPA/WPA2 though it shows as an option.


![](http://3.bp.blogspot.com/-G4WLa2WWmbI/TjnoLeoqRxI/AAAAAAABmc4/ZFar2uRW8fc/s320/Screen+Shot+2011-08-04+at+01.29.31.png)

Security Settings

And finally, the IP settings:

![](http://2.bp.blogspot.com/-jx3djYweO9Y/TjnoZ93sUXI/AAAAAAABmc8/fZSgotWNsuo/s320/Screen+Shot+2011-08-04+at+01.31.13.png)

System Utility
Not that you don't have to assign a static IP on the router for the Edimax. Just pick an IP address that isn't in use though it's hard to know how DHCP avoids this. I might persist further and try assigning a static IP again. In my case, the Gateway address is 192.168.1.1 but yours may differ.

All in all, a not very happy experience for what could be a great gadget.

