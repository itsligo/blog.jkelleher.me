---
title: Copying DNN pages (Authoring)
date: 2007/09/19 14:23:00
taxonomy: 
 category: blog 
---

![](http://bp1.blogger.com/_-8eBgLSYyzA/RvEx8RdxygI/AAAAAAAABGc/PsHpScJ8EZ8/s320/dotnetnuke.jpg)
Small bug with DotNetNuke 4.x is when creating a new page using the modules contained in another page. This is supported in the interface but if copying or referencing a module in another page, the new page is somewhat uneditable and (worse) the source page is emptied of its contents.
The workaround fix is to insert a text/html module into the old corrupted page and curiously the lost content re-appears.

