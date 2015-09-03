---
title: Round-tripping with a web server
date: 2010/01/11 19:23:00
taxonomy: 
 category: blog 
---

[Friendly Bit](http://friendlybit.com/css/rendering-a-web-page-step-by-step/) has a neat step by step description of what happens when you hit that return key on your browser. It certainly raises my respect for the work of a browser (and server) but you have to look at it and wonder who ever thought this up.

To be fair to [Tim Berners-Lee](http://en.wikipedia.org/wiki/Tim_Berners-Lee), much of what we now do through our browser couldn’t have been anticipated. However, it makes me wonder about the whole server-side processing approach to page rendering. What with the client-side processing ability [growing](http://www.clickz.com/3632449) (and likely to do so) at Moore’s-law rates, why don’t we better share the load between it and the server in a more equitable fashion. This is what attracts me (with reservations) to plugins like Flash and Silverlight. At least here you have an established platform to target and not the moving target of ‘conventional’ web programming – think PHP, Javascript, DOM, and/or varied mechanisms for database access.

Such plugins are right to push their other important feature – the ability to create first-class native client-side apps that operate out of browser. Silverlight are making much of their out-of-browser (OOB) experience while Adobe have been working hard (and succeeding) with their Air platform. Adobe obviously have the benefit of a fervent base of 2 million Flash developer community. However, Microsoft have pushed out two major updates to Silverlight over the last 18 months each with major new features rivalling Air – and we have a beta of Silverlight 4 now [available](http://silverlight.net/getstarted/silverlight-4-beta/). Both companies are well positioned to tap into this market. As a windows developer, it’s very attractive to target two rich markets (web and client) with a single development tool. Compare that to the myriad of constantly shifting tool sets (and it’s always a set) just for the web alone – with no spill-over benefit to support client-side.

