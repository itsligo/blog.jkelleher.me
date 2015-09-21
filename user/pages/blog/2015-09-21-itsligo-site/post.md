---
title: IT Sligo Site Review
slug: itsligo-review
process:
    twig: true
markdown:
    extra: true
taxonomy:
    tag: [web-dev]
status: draft
image: itsligo-branding.jpg
highlight:
  theme: dark
---

>[www.itsligo.ie](http://www.itsligo.ie) has been live now for 10 months today. While the design is fresh and colourful, the performance and some UX issues needs addressing.

##itsligo.ie - First Impressions
I like the dynamic nature and general styling of the new site, certainly a big improvement over the last. It adapts well to mobile in some ways (though not all) but here I'm going to focus on performance and UI issues and let the 'look' be judged by others.

####UI Issues
Higher Education Sites (HEI) are problematic. They have a varied audience with disparate tastes and objectives:

* Current Students - ranging from freshers to post-grads/researchers.
* Prospective students - perhaps from 15 upwards including mature students, post-grad and foreign applicants
* Research/Industry - contacts for research/investment
* Parents of prospective students (or perhaps current)
* Staff
* Community - local community and discipline-based or virtual communities as well as PR

####Wordpress
I should put out an initial rider here - I'm not a Wordpress (WP) fan. I do love the fact that anyone can get a full-featured site (well, blog) up and running in about 1 minute - that's not unique (there are others) but it's still commendable. It's also relatively easy to use and that has earned WP its accolades. However, the honeymoon wears off quickly.

From my experience, it's slow and has a big bulls-eye target on it for hackers. No matter how much I curated WP sites, I was being hacked almost on a monthly basis. And yes I was patching to latest versions as soon as they dropped and I carefully selected themes (a common backdoor for hacking) but nonetheless I was being hit. Never had that level of 'attention' with Drupal, Joomla or Dotnetnuke. And naturally, nothing like that with flat-file CMSs or static-gen sites. But it's the peformance that concerned me most - and that doesn't seem to have changed. Now, before we start I agree there are improvements that can be made to ameliorate performance woes but I see too many sites that just don't bother making the effort needed. So let's see how we (at IT Sligo) have faired...

<!-- ![Full page view](full-page-capture.png) -->
{{page.media['full-page-capture.png'].cropResize(600,1000)}}

Running [www.itsligo.ie](http://www.itsligo.ie) through an array of web page metrics here's a smattering of results:

![google mobile](google-mobile-friendly.png)
Some good news - the site gets Google's approval as being mobile compatible which improves SEO on google searches.

![google pagespeed-mobile](google-pagespeed-mobile.png)
Not so good. [Google](http://googlewebmastercentral.blogspot.ie/2015/04/rolling-out-mobile-friendly-update.html) is prioritising its search results for responsive, fast sites - that's sites that look good and peform well on mobile.

![google-pagespeed-desktop](google-pagespeed-desktop.png)
A score of 59% is better but far below a typical 80% baseline I'd regard as a reasonable speed for desktop.

[![dynatrace.com site response](dynatrace-perf.png)](http://www.dynatrace.com/en_us/application-performance-management/products/performance-center.html)
[![dynatrace.com site weight](dynatrace-heavy.png)](http://www.dynatrace.com/en_us/application-performance-management/products/performance-center.html)
Two more poor results - there's a pattern beginning here. The site is heavy and slow. There's different reasons behind each but first some more statistics.

[![gtmetrix report](gtmetrix-page-details.png)](https://gtmetrix.com/reports/itsligo.ie/xXDcyh7R)
[![pingdom report](pingdom-score.png)](http://tools.pingdom.com/fpt/#!/c64kWt/itsligo.ie)
There's a lot to report here. Being slower than **96%** of sites tested should grab our attention. So let's look at the problems:

####Poor CSS handling
There are 18 CSS requests hitting the server. Thankfully most of these (and especially the larger ones) are minified but really these need to be combined. Also 121kb for CSS alone would suggest some fat could be trimmed here.
####Poor JS handling
We're looking at 53 server hits for JS alone. And they weigh in at 653Kb, even after minifying and gzipping.
####Server requests
The server is being hammered with 194 requests for just the home page. Fully 109 requests alone come for images. Many of these are reasonably optimised but let's look at just two. The following is a single image from the homepage (21-9-15). 

|Before  | After  |
| ------ | ----------- |
| Size: (2662 kb / 2.6Mb) | Optimised size: (215 kb) ~8% of original|
| Dimensions: 5760x3840 200dpi | Revised dimensions:1152x768, 72dpi |
| {{page.media['homepage-img-1.jpg'].cropResize(400,250).html()}} |  {{page.media['homepage-img-1-opt.jpg'].cropResize(400,250).html()}}
| Before Closeup|After Closeup |
| {{page.media['homepage-img-1-close.jpg'].cropResize(400,250).html()}} |  {{page.media['homepage-img-1-opt-close.jpg'].cropResize(400,250).html()}}
| Further optimised with [TinyPNG](http://tinypng.com) (118kb)<br/> ~5% of original| ...and [JPEG Optimizer](http://jpeg-optimizer.com) (124kb)<br/> ~5% of original|
| {{page.media['homepage-img-1-opt-tiny.jpg'].cropResize(400,250).html()}} |  {{page.media['homepage-img-1-opt-jpeg-optimizer.jpg'].cropResize(400,250).html()}}

This is a particularly stark example for sure. There's a few compounding faults in the image handling:

* **Under-cropped** - the downloaded image is not fully utilised with the visible part only 5760x2192 (remember the image is 3840 tall). This alone would shave a significant **43%** of the download were cropping performed beforehand.
* **DPI too high** - for a majority of screens, 72 dpi is still fine. Here 200dpi is over-kill unless targeting retina screens which is not the case here. Rendering at 72dpi would result in an image **25%** of the original with no discernable difference in appearance on most screens.
* **Device aware** - even the highest resolution desktops are throwing away most of the downloaded image. For mobile, only a fraction of the downloaded pixels are consumed. We really should be serving up different resolution images depending on the device. Even on the highest quality retina iPhones, more than half the pixels are thrown away - but (crucially) downloaded.

>The reworked images were rendered through Photoshop CC. The reworked image was exported with 85% quality JPG setting (a reasonable norm).

####Smaller images
There are many smaller images bugging the server - ~100 files under 30kb. It's poor practice to hit the server for such small payloads - the act of servicing the request is far more expensive than the quantity downloaded for such small files. Instead, these small images should be grouped into a [CSS image sprite](http://www.w3schools.com/css/css_image_sprites.asp). In this way, a single downloaded image could actually house a large number of smaller images which can then be referenced individually through CSS offsets.

####Fonts
Fonts are a luxury. Sensibly, itsligo.ie employs only two. However you feel about the aesthetics of [Rocksalt](https://www.google.com/fonts/specimen/Rock+Salt), it's a relative heavy font rich in glyphs which I guess is its appeal. But I can find only one instance of its use throughout the site - as overlapping text on the homepage carousel, obscuring as it does the 'expensive' images discussed above.
It's difficult to justify the 50kb hit to the site for such limited usage.

###Video
I like the use of video half-way down the page. But video when poorly managed can add bulk to a site. Fortunately, just as with images, we have a good array of tooling to optimise the medium and gets the best 'bang per buck'. However, this **2.1Mb** movie is not sufficiently finessed to stop it being a heavy resource. 

Here's the original pulled from the site:
![Original](itsligo_lo.mp4)

I ran it through [Handbrake](https://handbrake.fr) and here's the result:
![Original](itsligo_lo_opt.mp4) 

You'll probably agree that there's little appreciable difference in appearance. However, the reworked video weighs in at **1.5Mb** or 71% of the original. Still, though the video is [below the fold](https://en.wikipedia.org/wiki/Above_the_fold), for my liking this is still a big price to pay for the video. But if you look closer at the site you'll notice that the video you see above is actually significantly obscured by other elements of the page. At higher resolutions (e.g. desktops) this is even more obvious. I reworked my optimised video above to represent something similar to that witnessed on the site:

![Cropped to 300px height](itsligo_lo_opt_crop_300.mp4) 

This cropped & optimised version weighs in at **1.1Mb** or just over half the size of the original. Again, the viewer will be the judge whether the optimisation 'costs' too much but at these sizes, there is a compromise to be struck. Indeed, [Adobe Media Encoder](https://www.adobe.com/products/media-encoder.html) might well improve matters further beyond what the open-source Handbrake could manage.
Sensibly, the video is swapped for an image on resolutions below 1024px which means mobile users don't take the hit of this video - a good choice.

###Hosting
It came as a bit of surprise that the site is hosted at [Rapidswitch](http://www.rapidswitch.com) - "one of the UK’s leading server hosting companies". I'm sure there's good service to be had but given that a majority of the traffic to the site would originate from Ireland, you might be forgiven for thinking an Irish hosting service would be a more obvious choice.

##UI Issues
Leaving behind some of the technical observations for a while, let's look at a couple UI concerns. Home pages need plenty care and attention - they may be your only chance to grab the attention of your audience and lure them deeper into your site. As such, every element of the home page must answer for its place on the page.
One element that is crucial is navigation. I find the primary navigation at the top of the homepage a little confusing. We're presented with three layers of navigation (four if you count the social links). The lowest of these represents a sub-menu contingent on your choice above it.

![primary navigation](navigation.png)

This presents a lot of options to users which must be discriminated between. Even apparently obvious links such as 'Contact' aren't answered competently. For example, one would expect 'Contact' to yield a contact form. It instead presents a global email address (info@itsligo.ie) which is itself different to the single email contact provided on the home page.

