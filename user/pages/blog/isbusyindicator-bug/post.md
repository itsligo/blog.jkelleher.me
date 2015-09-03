---
title: IsBusyIndicator Bug
date: 2010/08/12 12:38:57
taxonomy: 
 category: blog 
---

![](http://t1.gstatic.com/images?q=tbn:ANd9GcTNE2gWtzBJJOx6ZQVjsYPwlUovWQU40VCmg-Uky48TsIGaPeo&t=1&usg=__odn09NQsRnGZgjRW1h5ZpmUplK4=)During testing, I noticed excessive CPU usage when working on a particular Silverlight page. It seems particular to two pages but on navigating to others, the problem disappeared, re-appearing on return either of the two pages. Fast forward 5 hours of investigation taking me to xPerf (a performance analysis tool from MS that curiously is buried inside the Windows SDK taking a hour to find!). It told me nothing more than I could see with Task Manager – though it gave a pretty graph of the problem. Google swallowed about an hour of that seeing if the problem were out there. But I still didn’t know what exactly was causing the problem since there were a few elements at play on each page. Cross-comparing, it turned out that the two pages had DomainDataSources in common so naturally (first mistake) that seemed as good a place as any to start.

![image](http://www.appsolo.com/wp-content/uploads/2010/08/image_thumb2.png) It wasn’t. There’s a lot to DomainDataSources but ultimately the fault wasn’t there. I used a DomainContext Query call in its place to see if getting the data was at fault – nope. Then the DataForm – really like this control so hoped it wasn’t the culprit. Nope. Okay, now there was nothing left on one of the pages so what gives? Turns out, that page wasn’t to blame. However, in my app, the Home pages loads first (duh) and then I navigate to the Admin page where the problem manifests. So I decided to ‘avoid’ the Home page and open directly on the problem ‘Admin’ page. And this time, no CPU hogging! Seemingly, the problem emanated from the Home page but didn’t manifest until the Admin page. Sneaky.

In the end, the Home page had something peculiar to it – a couple BusyIndicator controls from the Silverlight Toolkit. Some more investigation showed that, well, it didn’t work – you think? I played with templating it since it wasn’t so much the BusyIndicator control that was at fault but the progress bar animation within it. In the end, I took it out – amazing how templating even the simplest of controls takes >100 lines of XAML. Heck, I’m not pulling much data so it would never be seen.

So, progress for over 5 hours work – zilch, nada. Thanks MS – surely a [known](http://www.google.com/url?sa=t&source=web&cd=1&ved=0CBUQFjAA&url=http%3A%2F%2Fforums.silverlight.net%2Fforums%2Ft%2F177229.aspx&ei=IetjTJDyH4Si0gTr_8znDA&usg=AFQjCNFOC1A9MXp1BtAq1xhxYocWhdsCug) issue dating back over a year is worthy of some attention?

## Comments

**[gius](#46 "2011-01-11 23:18:24"):** You've probably already solved this issue but I ran into the same problem and couldn't easily find a solution so I guess it should be stated clearly somewhere: It seems that the excessive CPU consumption is caused by ProgressBar in BusyIndicator. See the last post here: http://forums.silverlight.net/forums/p/105191/239947.aspx . So if you remove any effects under the ProgressBar, you should be fine. Works for me!

**[gius](#47 "2011-01-15 13:12:41"):** Update: It seems that the excessive CPU consumption is caused by the ProgressBar in BusyIndicator interfering with DropShadow effect. See this: http://blogs.msdn.com/b/slperf/archive/2011/01/10/performance-on-silverlight-tv.aspx (the last demo).

**[John](#48 "2011-03-08 19:04:48"):** sulc.gusta, thanks for commenting. Been busy on other work (and ill) for a time so only now getting back to my other business. Working on another Silverlight (out-of-browser), RIA Services and Entity Framework app and ran into the BusyIndicator again. Yes, figured it was the ProgressBar animation but will check the vid for how to perhaps just kill the animation and use a simple textblock to notify the user of the delay. I've just posted on our new project and hopefully will have some news to report from our work on that.



