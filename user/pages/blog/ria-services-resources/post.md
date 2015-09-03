---
title: RIA Services Resources
date: 2010/05/11 23:22:51
taxonomy: 
 category: blog 
---

# RIA Services Resources

_Update: _RIA Services gone gold with version 1.0 (late May 2010)

![RIA Services](http://www.componentart.com/community/resized-image.ashx/__size/550x0/__key/CommunityServer.Blogs.Components.WeblogFiles/milos/1145.RIAServicesDiagram.png)RIA Services is a step-change from WCF and for those migrating to internet-hosted data access frameworks. Since RIA only came of age following its release with Silverlight 4 and the significant enhancements to VS2010 that support it, it's safe to say that it isn't the most familiar animal to many.
Various show-tours seem to parade endlessly on the net showing carefully choreographed walk-throughs of tightly scripted RIA services handling - 'Just drag the data source you like onto the canvas and lo, a datagrid miraculously binds itself to the necessary data'. And hey, here's a Pager that cleverly knows to share the same data source. And look, no code - XAML rules. Well, yes but it all gets a bit 'samey' after a time and once you start tackling a real-world task, you find that the showy stage show is just that - an act.
Now, to be fair, RIA Services is here to stay and that's a good thing. However, taken with Entity Framework (bye, bye LINQ-to-SQL), a generous update to Silverlight and a crash-course in WCF, RIA Services carries a big stick and it takes some getting used to.
But RIA Services looks like the 'next best thing' for data access across the wire. And having had a quick look at WCF, that's probably a good thing. Naturally, WCF is at the root of it all but RIA acknowledges that we don't like heavy plumbing and provides a well-balanced abstraction. So having sat through way too many videos and walk-throughs that ever so neatly avoid real code, here is my collection of resources for learning RIA that pick up where that hand-holding leaves off.

* Ronnie Saurenmann – Principal Architect MS has an excellent 45min [video](http://www.microsoft.com/switzerland/shape/videos.aspx) on RIA Services. Covering Entity Framework, DomainDataSource, Validation (including custom) and more. Not for the novice but good when you know enough to feel totally lost :)
* [Contoso Book Club](http://johnpapa.net/silverlight/wcf-ria-services-hands-on-lab/?utm_source=feedburner&utm_medium=feed&utm_campaign=Feed:+JohnPapaSilverlight+(JohnPapa.net+Silverlight)&utm_content=Google+Reader) - John Papa. Delivered at the SL4 launch [keynote](http://www.microsoft.com/silverlight/silverlight-4-launch/), this is a good worked example ([source ](http://johnpapa.net/files/downloads/BookShelfSolution.zip)& [starter ](http://johnpapa.net/files/downloads/BookShelfStarter.zip)project provided). The post walkthrough while mostly VS2010 tooling-driven, is well annotated and the example itself is rich enough to be credible.

[caption id="" align="alignright" width="292" caption="Contoso Book Club"]![Contoso Book Club](http://johnpapa.net/files/media/image/WindowsLiveWriter/WCFRIAServices_F1B2/image_thumb_39.png)[/caption]

* [Building A Data-Driven Expense App with Silverlight 3](http://msdn.microsoft.com/en-us/magazine/dd695920.aspx) - Jonathan Carter and Terry Adams. Sorry, don't know the authors but this MSDN piece (while pre-RIA RC - and man, MS like to change thing last minute) does an admirable job of walking through the code needed to wire up a DomainContext, looking at the role of Domain Operations in the generated DomainContext class, DomainDataSource objects to project data into new controls (like Data Form) - and they do it in code. Heck, I'll appreciate the fancy VS2010 control handling later, but not until I understand what going on under the hood.
* [WCF RIA Services](http://msdn.microsoft.com/en-us/library/ee707344(VS.91).aspx) (MSDN) - Though this refers to pre-release RIA, it looks fine. Maybe I'm maturing but recalling how I recoiled every time I resorted to MSDN, I now find it more appealing. When it comes to a complex, multi-faceted and highly integrated framework like RIA, I really appreciate the carefully crafted (though often clinical) language of the technical writers at MSDN. This doc is _very_ thorough and watch a good few videos before approaching it!
* [Silverlight 4 WCF RIA Services Line of Business Application Hands-On Lab](http://blogs.msdn.com/swiss_dpe_team/archive/2010/01/19/hands-on-lab-silverlight-4-line-of-business-application-using-wcf-ria-services.aspx) - Sascha Corti & Ronnie Saurenmann. Over 100 pages of hands on explanation and guidance, starter & final solutions, published Dec '09 so targets SL4 - this is complete, thorough and well-written.

