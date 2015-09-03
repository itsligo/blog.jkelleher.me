---
title: Getting VS Intellisense to work with JQuery
date: 2012/11/02 20:30:20
taxonomy: 
 category: blog 
---

![sm-logo4](/wp-content/uploads/2012/11/sm-logo4-300x84.png)Having recently begun development proper with ASP.NET MVC, I can say I like the structured MVC approach a lot. However, there's no getting away from the fact that modern web development is a pastiche of open-source with occasional clear strategies (ASP.NET MVC) being one, trying their best to bring order to the chaos and fashion a more coherent approach. MS have made strides to welcome open-source technologies aboard and JQuery is an obvious choice. However, even with the advances that the Razor view engine brings and the reduced syntactical sugar that it brings, there's no easy way to work with html, razor/C# and Javascript (w/ JQuery) in the one space. This is made all the more difficult by the loss of Intellisense once you stray from the C# path. However, there is a way to bring Intellisense to bear on JQuery in Views. And here's how to do it in VS2012:

* [Download](http://appendto.com/community/jquery-vsdoc) the jsdoc file corresponding to your current version of JQuery
* include the jsdoc file in your project in the same folder as the JQuery js file but ensure that the file names match albeit for the -vsdoc suffix
VS2012 plays nice with these steps alone but VS2010 often needs two additional steps:
* Add the following into *each* View that you want Intellisense support: @if(false) {}
* You may also need to press CTRL+SHIFT+J to update the Javascript Intellisense support
I need to do both these steps to get VS2010 to recognise the vsdoc Intellisense commentary but it's well worth the effort. On a general note, I like VS2012 but do note that while you can open VS2010 solutions in VS2012, work on them and still be able to open those same solutions in VS2010, there are limitations. If, for example, you create a solution in VS2012, it won't open (no way) in VS2010. Equally, I'm encountering very odd compile errors in VS2012 solutions - problems with missing references to metadata files - that go away if you open the same solution in VS2010. Reverting back to VS2012, the same solution now works - for a time. MS - not good enough for a core tool.

## Comments

**[Seth Mercado](#50 "2012-11-03 05:58:52"):** Now that jQuery has been around for so long it’s become a staple for modern JavaScript development. There are specific rules and syntax regulations to follow, and these standards have been adopted from the open source movement.



