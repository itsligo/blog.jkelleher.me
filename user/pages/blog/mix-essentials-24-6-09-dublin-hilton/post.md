---
title: MIX Essentials (24-6-09, Dublin Hilton)
date: 2009/06/25 11:28:00
taxonomy: 
 tag: [ux,industry]
---

I’m attending MIX Essentials in Dublin. It highlights the best bits of MIX, Las Vegas held earlier this year.

Mike Taulty opens with a talk on Silverlight 3.

* Out of Browser
* XAP Sizing
can reduce XAP size by letting XAP download from MS those dlls that it needs rather than zip them automatically into the XAP
* Sketchtool (see later) for prototyping
Triggers, behaviors, actions
* H.264 video & AAC audio
GPU acceleration available but _not _by default (drops CPU load by c. 20%). Decoding is down in s/w but scaling in h/w. Not generally a boost.
* Validation
when exceptions are thrown by properties in classes, Silverlight 2 swallows the throwing of the exception – bad. Silverlight 3 doesn’t and with Blend you can manage how this is handled. ValidationExceptions tags enable this feature. NotifyOnValidationError when true raises a routed event (BindingOnValidationError) which you can handle.
Additionally, you can check all LayoutRoot.Children and ask them (GetHasError) if they have errors.
* Perspective transforms
Still not fully 3D but can manipulate any content (esp. video) to, for example, create a carousel.
* Easing animations – ease in, out, apply bounce etc. Many effects built in but you can plug in your own.
* Now write code to create bitmap images
* Can make it so vector graphics can be treated as bitmaps by bitmap caching to speed up stretching and other effects.
* Communication between two Silverlight apps on the same page
* Blend now surfaces sample data so makes it easier to design templates
* Adobe import
* Intellisense in Blend for XAML
* [www.silverlight.net](http://www.silverlight.net/)
* [mtaulty@microsoft.com](mailto:mtaulty@microsoft.com)
* mtaulty.com
* mtaulty tweets

**David Frost **from Copenhagen, Denmark and working at Microsoft with ASP.NET spoke of MVC (Model, View, Controller). He gave some background on ASP (launched 1996) and how it evolved into ASP.NET. Unfortunately, the talk rambled a lot and unless you have a pretty good grasp of ASP, it became heavy going. Rather than focus on where we came from, it’s likely most people are interested in how we should do it now.

Controller acts are first stop upon a web request. The web request must map to a method in your app. It directs the Model to make database calls or web services to yield data. The View element then fashions a display for response to the initial request. I found a good [post](http://weblogs.asp.net/scottgu/archive/2007/10/14/asp-net-mvc-framework.aspx) by Scott Guthrie (The Gu) though.

Sadly, David’s talk didn’t hit the spot for me so I skip to….

**Sabrina Dent: The Stalinist Web Design Model**

![Sabrina Dent](http://lh6.ggpht.com/_-8eBgLSYyzA/Skd0PUDVmEI/AAAAAAAAEkk/YREYI4SBE8s/image31.png?imgmax=800) [Sabrina](http://www.sabrinadent.com/) operates a web design service in Dublin and spoke of her distinctive approach to her discipline. A unashamedly brash individualistic style pervaded the presentation. One useful insight was an initial questions Sabrina sometimes asks clients: “Send me 10 sites that you like”.

I found the lack of objectivity difficult to accept. Sabrina claims her designs are good (and I can be accept that) and that her clients know this – but surely the clients are not typically ill-informed on what typifies a good design; that’s a function of the marketplace. In fairness, Sabrina spoke of her style suiting low-budget clients and this can justify a certain quantum of pragmatism. Still, it niggles me…

![image](http://lh6.ggpht.com/_-8eBgLSYyzA/Skd0QNBOQgI/AAAAAAAAEko/_qbsRoGkCqE/image32.png?imgmax=800)

**[Martin Tirion**](http://blogs.microsoft.nl/blogs/ux/default.aspx)**: From Concept to Production: Prototyping with Blend 3 & SketchFlow**

[SketchFlow](http://team.silverlight.net/announcements/sketchflow-rapid-prototyping-that-works/) is an innovative quick prototyping tool built into Blend 3. It permits designers to make interactive in-expensive mock-ups of their user experiences. It makes sense to bundle this with Expression Blend given Blend’s targeting of the design community.

The investment in the Expression suite appears to be reaping benefits. Given that this suite now targets both the client-side and web-side environments (from WPF to Silverlight), there would seem to be a good payback for the investment.

