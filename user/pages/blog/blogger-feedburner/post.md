---
title: Blogger & Feedburner
date: 2007/03/09 18:30:00
taxonomy: 
 category: blog 
---

![](http://www.feedburner.com/fb/i/flamocon_190h.gif)
![](http://tbn0.google.com/images?q=tbn:Gwig7r7As2-1SM:http://www.mihaidragan.ro/images/imgarticole/Blogger.com_id_41a44c241fc01.jpg)
For those of you thinking of starting a blog, [Blogger](http://www.blogger.com/) (now owed by the free-wheeling good guys at Google) is a decent enough choice. Very simple to use and to post, I like it 'cause it means I have one thing less to administer, though my DotNetNuke (DNN) site handles multiple blogs real well.
However, while DotNetNuke has a neat module to take an RSS feed, it's fussy about just what kind of feed it gets. For a start, Blogger's feed is of the Atom variety (3.0, I think) and DNN really hates that. So what to do?
Enter [Feedburner](http://www.feedburner.com/) - this site takes your blog feed (or any RSS feed of any variety) and re-syndicates it into something you can work with. Now, if I were using say Google Reader (the most popular feedreader - amalgamates many RSS feeds in one interface), that wouldn't be needed since Google would probably be quite happy with Atom, but not DNN.
Feedburner converts your feed in many ways but crucially, it changes Atom to RSS (2.0 in my case). Thanks to [Mark Polino](http://www.mpolino.com/) here for sending me his XSL document that does a lovely job of formatting the incoming RSS 2.0 into a nicely formatted list of my latest blogs. The DNN news module takes my Feedburner feed, translates it with Mark's XSL document and you can see the results on my site - [jk.itsligo.ie](http://jk.itsligo.ie/)

