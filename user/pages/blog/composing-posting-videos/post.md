---
title: Composing & Posting videos
date: 2007/10/31 17:56:00
taxonomy: 
 category: blog 
---

![](http://4.bp.blogspot.com/_-8eBgLSYyzA/SjgiS6liP5I/AAAAAAAAEa4/OnZjF3_v_dM/s320/camstudio.jpg)Visitors to my web site ([jk.itsligo.ie](http://jk.itsligo.ie/)) will notice some new videos recently. I've played about with many ways of posting videos, particularly to capture in-class Visual Studio work. This is somewhat tricky since these videos need to be quite high-res to allow students see the detail - typically 1152x658 or higher. The videos obviously need to stream since even a short video results in large file e.g. 7 min. currently yields a 15mb file and that's with serious fine-tuned compression.
![](http://www.microsoft.com/windows/windowsmedia/images/forpros/hero_encoder.jpg)
As I say, I've played about with various ways of doing this. Early attempts used a free Microsoft Powerpoint addon called Presenter which was not too shabby. However, it would only work in IE and was a little clunky to use. Also, I think MS have dropped the app altogether. And finally, it didn't allow much in the way of tweaking the compression - a key needed feature given the kind of application I was after. I later used Macromedia Captivate which (though buggy) was okay and did stream but had attrocious sound processing

So, here's what I currently use: Camstudio 2.5, Windows Media Encoder and some Adobe Premiere Elements (though this bit is optional). Camstudio 2.5 is excellent, recording customised screen action (and microphone input) into an AVI using a variety of codecs. The best codec I've so far come across is MSU Screen Capture Lossless [Codec](http://www.compression.ru/video/ls-codec/screen_capture_codec_en.html) v1.2. A lesson I've learned with codecs is to try and commit to one and leave the others since they don't like company - too many on one system and they fight so none work. Camstudio lets you select a window or region and records as you go, pausing if you like (for breaks!). After this, you get a compression AVI file that needs to be compressed further and converted to WMV - MS's streaming format for the web - and that's where MS Windows Media [Encoder ](http://www.microsoft.com/windows/windowsmedia/forpros/encoder/default.mspx) (WME) comes in. Now, don't be tempted to use the latest Expression Encoder - I did and it crashed 3 hours into converting. It has a nice interface but nothing WME can't do and for free.

Incidentally, before we move to finishing, you may want an intro page or two. This is tricky and the best I've come up with so far is to create a couple Powerpoint slides and capture them as PNG files using Faststone Image viewer or similar. Then import them into Adobe Premiere Elements and put some intro music on another track. Then export as windows media file (WMV). It's tedious but using PowerPoint and Camstudio together proves messy as PP don't handle music files well.

To convert to WMV, in WME, choose to convert a file and then add your AVI file (and perhaps your intro AVI too) to the source list. Choose to convert for 'Web Server' - not media server. Then under compression, choose Screen capture (CBR) - unfortunately, WME doesn't support VBR or 2-pass encoding but the quality seems pretty good nonetheless. You can (and I do) adjust the audio quality to FM and perhaps adjust the bit rate down to 282kbps at 15fps. You can also mark in and out points on your source videos but I haven't done it much. The codec mentioned above doesn't sit well with WME so you won't get a preview of your work (same story in Expression Encoder) but it does work. It's also quite quick considering the work being done. The results are [good ](http://jk.itsligo.ie/LinkClick.aspx?link=http%3A%2F%2Fweb.omnidrive.com%2FAPIServer%2Fpublic%2FmExIpaxtloIZQ8aujKi8bmUN%2Fvs+shortcuts.wmv&tabid=105&mid=860)- a avi of 765Mb (remember, already compression with a good lossless codec) reduces to
Finally, if you feeling enthusiastic, there is Windows Media File Editor which not only can mark ins and outs on your resulting wmv file but more importantly, can set chapters in your movie so that viewers can jump to sections within your post.

## Comments

**[Anonymous](#13 "2009-11-13 01:53:42"):** I found this site using [url=http://google.com]google.com[/url] And i want to thank you for your work. You have done really very good site. Great work, great site! Thank you!

Sorry for offtopic



