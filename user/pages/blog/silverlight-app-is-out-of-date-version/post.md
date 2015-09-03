---
title: Silverlight app is out of date version
date: 2011/08/10 12:30:04
taxonomy: 
 category: blog 
---

![icon_silverlight](/wp-content/uploads/2011/08/icon_silverlight-271x300.png)An interesting and frustrating problem during Silverlight development that we regularly run into is that of the app you're running during debug not reflecting the changes made to the code before the build. In other words, the version you're witnessing running in the browser isn't the one that just got compiled. This can lead to serious loss of productivity as you make further changes to your code believing that the previous changes didn't 'work' when in reality they may have but you just weren't witnessing their effect. Though I haven't fully understood this phenomenon there are a few things that seem to help:

1. Kill IIS development server before you run, forcing another session to be launched
2. If using Chrome, click Wrench...Options...Beneath the Bonnet and Clear Browsing History. Now I know you may not want this since it affects other stuff but just delete the history for the last hour will suffice. I've found this to work most times so well worth trying.
3. Sometimes, in VS2010 the running process gets attached to the wrong Silverlight runtime process. Clearing this and forcing a new Silverlight process to be instantiated can help. Do so by choose (in VS2010) Debug...Attach to Process and choose the process with the type 'Silverlight'. This task is made easier if you don't have many tabs open.
None of these are guaranteed but they all have worked on occasion. The key thing is to be aware when testing your app, that it may not reflect your work to date. Otherwise, you enter a spiral of fixes that weren't needed. Or you could just toss Silverlight and make the app from sticks and duck-tape.

