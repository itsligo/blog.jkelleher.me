---
title: Optimising web sites
date: 2015/05/30 17:22:17
taxonomy:
 tag: [web-design]
image: feature.jpg
highlight:
    theme: dark
---

During a severe bout of procrastination brought on by exam corrections and a lull in development work, I turned my attention to web site performance. As most of my dev work centers on the web now anyhow, I could easily rationalise the time 'invested'. First off, the testing tools:

* [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/) - basically, Google Developers way to rate performance. You can get this as a Chrome extension to DevTools but the hosted tester is easier to work with.
* [Feedthebot.com](https://www.feedthebot.com/pagespeed/) - nice site covering much more than performance.
* [GTmetrix.com](http://gtmetrix.com/) - good for making comparisons with other sites and pretty comprehensive.
* [YSlow](http://yslow.org/) - open source extension to Chrome but incorporated in GTMetrix.com results

Though not totally relevant to this post but in passing - mobile tests now that Google are (sorta) prioritising mobile-friendly sites:

1. [Mobiletest.me](mobiletest.me) - shows you what your site looks like on a range of devices (brace yourself)
2. [Mobile-Friendly Test](https://www.google.com/webmasters/tools/mobile-friendly/) - Google's consumer-friendly tool to let you know if your site passes muster.

Okay, so you now have the results and they can be harsh. Here's the BEFORE snapshot of 3 sites I've worked on lately:

**Site A** ([class.jkelleher.me](class.jkelleher.me))![class.jkelleher.me BEFORE](class.jkelleher.me-BEFORE-300x59.png) ** Site B**![appsolo.com BEFORE](appsolo.com-BEFORE-300x44.png) ** Site C** ![Site C BEFORE](siofrakelleher.com-BEFORE-300x44.png)
So, not too bad but not stellar either. **Site A** is built with [KirbyCMS](http://getkirby.com)  and the other two with [Grav](http://getgrav.org) CMS. I like both a lot and have blogged before on them. They are not static web site generators ([big list](https://iwantmyname.com/blog/2014/05/the-updated-big-list-of-static-website-generators-for-your-site-blog-or-wiki.html)) but rather no-database web sites. Since there's no database (and associated latency) involved it's a good test of the efficiency of the html/css/js. As such, I'm reasonably impressed at the performance out of the box. All of these employ caching of various kinds at the back end and these are enabled across the board.

#### Remedies

Focusing on what could be improved, there are the usual suspects:

* Minify/Uglify CSS/JS: remove whitespace/line breaks
* Pipeline CSS/JS: pull together (glob) all your individual CSS/JS and make into a single file apiece - less hits to the server is always good
* Optimise images: lots of tools online (or good old Photoshop) to take jpg/png and 'optimise' them to a (typically) fraction of their original size. The results are pretty impressive especially when you have large images (say, on home pages). Funny how I've yet to find a PNG to beat a JPG in compression.
* Keep CSS/JS out of 'above-the-fold' content - basically put your CSS/JS inserts after <body> so that content is rendered first and blocking actions of loading JS are postponed for download while the user is making sense of your site.

All these are the low-hanging fruit and Grav & Kirby both make this pretty easy. However, the scores above largely took these things into account. The major outstanding item was **GZip compression**. This is just the zipping up of your css and js on the server end before responding to the browser call. Most modern browsers will recognise the **'Content-Encoding: gzip' **in the Response Header and inflate the returning zipped file. This one is a little tricky to remedy since it's a server-side feature. In the first instance, your hosting service may not provide it. [Blacknight](www.blacknight.com) only enabled it for shared Linux hosting recently (Apr '15). To use it in your site you need to edit the .htaccess file by adding the following:

```
<IfModule mod_deflate.c>
  # compress text, html, javascript, css, xml:
  AddOutputFilterByType DEFLATE text/plain
  AddOutputFilterByType DEFLATE text/html
  AddOutputFilterByType DEFLATE text/xml
  AddOutputFilterByType DEFLATE text/css
  AddOutputFilterByType DEFLATE application/xml
  AddOutputFilterByType DEFLATE application/xhtml+xml
  AddOutputFilterByType DEFLATE application/rss+xml
  AddOutputFilterByType DEFLATE application/javascript
  AddOutputFilterByType DEFLATE text/javascript
  AddOutputFilterByType DEFLATE application/x-javascript
  AddOutputFilterByType DEFLATE image/x-icon
</IfModule>
```

Upload to your site root and you're good to go. One small footnote - some site profilers point to .woff (font files) as not compressed - that's 'cause they're already compressed, so ignore.

#### Results

So fixing up compression server side has a decent effect. Same sites, now with compression established and used on the server:

 **Site A** ([class.jkelleher.me](class.jkelleher.me))![class.jkelleher.me AFTER](class.jkelleher.me-AFTER-300x57.png)
 ** Site B** ([appsolo.com](appsolo.com)) ![appsolo.com AFTER](appsolo.com-AFTER-300x43.png)
 **Site C**![Site C AFTER](siofrakelleher.com-AFTER-300x44.png) So, pretty respectable improvements there. From memory, that's the biggest bump I've seen from a single item optimisation. Definitely worth bugging your hosting service if it isn't already there - if so, edit that .htaccess file and bang, you're golden.

##And one last thing...
Another very simple .htaccess fix is to *leverage browser cache*. Basically, this means your browser is told not to bother downloading the file again if it was previously downloaded within a specific period of time. For blog posts in particular, it's likely that you won't be refreshing images etc. on a daily basis so worth telling the browser to work with its cached version.
Edit your *.htaccess* file to include:
```
## EXPIRES CACHING ##
<IfModule mod_expires.c>
  ExpiresActive On
  ExpiresByType image/jpg "access 1 year"
  ExpiresByType image/jpeg "access 1 year"
  ExpiresByType image/gif "access 1 year"
  ExpiresByType image/png "access 1 year"
  ExpiresByType text/css "access 1 month"
  ExpiresByType text/html "access 1 month"
  ExpiresByType application/pdf "access 1 month"
  ExpiresByType text/x-javascript "access 1 month"
  ExpiresByType application/javascript "access 1 month"
  ExpiresByType application/x-shockwave-flash "access 1 month"
  ExpiresByType image/x-icon "access 1 year"
  ExpiresDefault "access 1 month"
</IfModule>
## EXPIRES CACHING ##
```

With that fix added, here are the results:

**Site A** ([class.jkelleher.me](class.jkelleher.me))![class.jkelleher.me AFTER Browser Cache](class.jkelleher.me-AFTER-browser-cache.png)
**Site B** ([appsolo.com](appsolo.com)) ![appsolo.com AFTER Browser Cache](appsolo-AFTER-browser-cache.png)
**Site C**![Site C AFTER Browser Cache](siteB-AFTER-browser-cache.png)

For the eagle-eyed out there, Site C looks to have slightly poorer performance compared to earlier - down to a doubling of the content downloaded due to added images.

####Wrap-up
It's at this point that you start seeing 'server response' raise its head - meaning your hosting service is proving to be the next weakest link. Given these sites run from shared hosting in Ireland, there's little to do here save upgrading to some hosting based around SSD devices. But with response times of around 2 seconds, I reckon I'm hitting the breakeven point in terms of my time and effort.

And it's sobering sometimes to look at a Wordpress install to get a measure of the competition. Here's the results of a Wordpress site I run. It's running the latest WP with only a couple plugins enabled (no caching plugins installed):

![Wordpress with 4 plugins, no caching](wp-sample.png)

And to be fair, here's the same site with WP-Super-Cache installed and running:

![Wordpress with WP-Super-Cache enabled](wp-cache.png)

Again, I rest my case with WP...
