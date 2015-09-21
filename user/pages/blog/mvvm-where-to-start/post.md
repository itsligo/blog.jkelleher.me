---
title: MVVM – Where to start
date: 2010/02/28 16:44:00
taxonomy: 
 tag: [web-dev,dev]
---

Generally, the job of programming nowadays is to tame complexity, making it accessible to the next maintenance cycle. Now having gotten to grips with WPF/Silverlight and its novel syntactic sugar, it’s time to refocus on the more grown-up issue of scalability.

The push to design patterns in recent times is a recognition that there are good ways to go about coding and then there is the ‘it’ll do’ approach. When teaching Level 6/7 (Yr. 2 & 3) of degree programmes, it’s all to easy to drift towards the latter since the constraints on time mean that our programs seldom grow to the point where the value of a design pattern really makes itself known.

However, given the power of WPF and the maturity of the code libraries, I’ve found my students in recent years arriving at a reasonable level of competency such that there’s time to stop and smell the roses. One of the key strengths of WPF has to be data binding – it’s pervasive. However, it also makes the separation of code responsibilities fraught. And that’s where MVVM comes in (for the older among us, think of it as MVC and work from there).

[MVVM](http://msdn.microsoft.com/en-us/magazine/dd419663.aspx) (Model-View-View Model) is a new design pattern to better manage the division of labour between your code components. Microsoft used it in the development of the Expression Studio apps. It’s an evolution of MVC (Model View Controller) from way back in [Smalltalk](http://st-www.cs.illinois.edu/users/smarch/st-docs/mvc.html) days. The thing with WPF/Silverlight is that data binding – the wiring up of controls (on the client-facing side) to the data (on the back end) is core to the WPF way of life. When used correctly, it can shrink your behind-code to nil. However, it can also make your Views (client-facing) more fragile to changes at the back end – and that’s a bad thing. MVC knew this too but MVVM takes account of the WPF inbuilt data binding.

![image](http://lh4.ggpht.com/_-8eBgLSYyzA/S4qdipr7jsI/AAAAAAABBfA/CzF0HfSigKA/image%5B4%5D.png?imgmax=800) So where to learn this paradigm nectar? A few gurus have really contributed to the debate - Josh [Smith](http://joshsmithonwpf.wordpress.com/), Craig [Shoemaker](http://weblogs.asp.net/craigshoemaker/archive/2009/02/26/hands-on-model-view-viewmodel-mvvm-for-silverlight-and-wpf.aspx), Jason [Dolinger](http://blog.lab49.com/archives/2650) and John [Gossman](http://weblogs.asp.net/craigshoemaker/archive/2008/05/22/john-gossman-architects-wpf.aspx) (who first mooted MVVM in 2005). [Microsoft](http://msdn.microsoft.com/en-us/magazine/dd419663.aspx) also has a very thorough article on MVVM and data binding. I liked Smith and Shoemaker’s [video](http://community.infragistics.com/pixel8/media/p/91950.aspx) the best – it’s almost and hour (2 hrs. if you look at the simpler Silverlight version too) but they do a great job pitching a worked solution at that right degree of complexity – not too simple as to question its usefulness and not too difficult for newbies to grasp.

Be sure you’re comfortable with data binding before jumping into MVVM – for that matter, be on friendly terms with all manner of templates, triggers, styles and data binding. [MSDN](http://msdn.microsoft.com/en-us/library/ms752347.aspx) do another thorough job on this but try some [videos](http://windowsclient.net/learn/videos_wpf.aspx) first. While all this is a major investment, the reward is worth it.

