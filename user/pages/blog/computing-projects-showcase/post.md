---
title: Computing Projects Showcase
date: 2015/04/23 19:23:25
taxonomy:
 tag: [website, cms, featured]
image: projects.jpg
---

<iframe width="600" height="370" src="https://www.youtube.com/embed/jckR3vPfZKA?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
<br/>
I developed this site as an initiative to better promote the work of computing students across the varied streams leading to a BSc. Computing at IT Sligo. The hope is to reach out to prospective students to give an idea of the work undertaken within the programmes and also to showcase this work to the broader industry audience.

#### Development

I had about 3 weeks to complete the site (aka Christmas holidays). They say constraints are a great design tool and with that time budget, it was important to choose the right approach. There was also the maintenance issue - this system needed to be updated in the main by the students themselves. And that interaction had to be frictionless (or near so) or the uptake wouldn't happen. The design had to be robust, flexible and modern. I'm pretty comfortable with the ingredients for a site like this and a ground-up development effort would afford the greatest flexibility but aside from the time issue, it would take a lot of work to build something robust enough to survive with little love for its lifetime. So this ruled out some hard-core development work and pointed me towards CMSs.

#### The State of CMSs

Though I've never taught web design or CMS, it's something that attracts me from time to time, particularly when I need a new site to serve up class resources (notes, exam papers/assessments, videos etc.). I recall spending quite a bit of time with [DotNetNuke](http://www.dnnsoftware.com/) many years back (as it's C# based), moved to [Drupal](https://www.drupal.org/) for a few years and dabbled with [Wordpress](https://wordpress.org/) for a time. I've played with cousins of these - [Joomla](www.joomla.com), [Umbraco](http://umbraco.com/). But truthfully, they never stuck me as good solutions perhaps because anything that you needed that wasn't natively provided required messing with 3rd party plugins which, for me, messed with aesthetic too much. I guess I needed more control over how the finished product 'felt' to the end-user. Wordpress, probably deservedly, wins out over the others mentioned but dealing with the idiosyncrasies of 3rd party plugins is hassle. And then there are the hackers. I've had sites in Wordpress that get hacked on a monthly basis despite regular updates to patch 'critical security issues' that seem to arise all too often. Heck, while I was writing this post, another patch came due! On top of that, I just never seemed to have the time to fully lift the hood on Wordpress and get a better understanding of its inner PHP workings. Maybe I wasn't ready, but I found it's theming engine hard to work with. Cue the next step.

#### Leaving Wordpress

I had my shopping list for the ideal CMS. I wanted clear separation between the aesthetic (theming) and the underlying engine. I looked for a long time - a new CMS seems to launch daily. Some flare out quickly, other die slowly. Some try to do too much and while that can be welcome, it often means that you are shut out of having it behave differently - if that's what you want. And it nearly always is.

![](processwire.png)

In the end, I stumbled upon [Processwire](https://processwire.com/), maintained by Ryan Cramer. It wasn't so much what Processwire can do, it's that it gets out of your way to let you use it to make what you want. And it's fast. And it's standard - just PHP and mySQL. Yes, there's the obligatory Admin panel to quickly add pages and impose a structure on your site - just like Wordpress. And yes, there are plugins to take shortcuts. But fundamentally, there is a comprehensive API that using familiar jQuery-like syntax exposes the database contents to you so that you can build whatever kind of site you like - the way you want it. If that all sounds too much like programming, then fear not. For me, with the kind of sites I needed, the focus was on the aesthetic. The navigation didn't need to be sophisticated, and the user interaction was predictable. The content entry could be easily handled by the Admin panel. This left the task of surfacing the content where and how I wanted it.

#### How I use Processwire

The process to create a site was simple. Take a HTML website template - not a fancy Wordpress (or equivalent). With a decent understanding of HTML/CSS (and the usual collection of jQuery plugins), inject PHP API calls to the Processwire engine to retrieve and present the stored data in the way the template needed it. Okay, you need to be somewhat comfortable with PHP and there isn't something like Visual Studio to help you debug but in the main, the process is way easier than working with the likes of Drupal. There isn't the same layered complexity that has built up over time - Processwire runs lean with a focus on clear separation between core CMS tasks (storing content, access control etc.) and how you choose to surface that content. I needed free rein on the latter and solid fast performance from the former. Processwire delivers exactly that. There's also the deployment. For those who think Wordpress [famous 5 minutes](https://codex.wordpress.org/Installing_WordPress#Famous_5-Minute_Install) install, Processwire's got you beat. I spun up a base Processwire site in perhaps 3 minutes last night. The hardest bit was copied the freshly minted mySQL database details across to the Processwire install page. From download to live deployment took less than 5 minutes. And one other thing. Irrespective of the tooling, there is another factor more critical - good support. Ryan is a dedicated parent to the Processwire project. Yes, there's a good, collegiate community support system but Ryan provides amazing reassurance and projects great confidence in the product. Did I mention this is free?

#### So That's It Right?

Well, it could be and Processwire is still my go-to choice for building a competent, medium-complexity site. But often I need a site or blog that has an even tighter time frame or just isn't as ambitious - like the site above. There's also the fact that Processwire (in common with the vast majority of CMSs) uses a database. While this is totally justifiable, I find this introduces a certain degree of complexity that may not be always needed. Now, of course, if you're working on sites regularly, you'll know your way around phpMyAdmin just fine, you'll have your CRON tasks backing it up nightly and you script it to your hosting without blinking. But when you build one or two sites a year, you just don't develop the kind of muscle memory needed to make that seem easy and routine.

#### Enter Static Site Generators
![](jekyll.png)

I first came across [Jekyll](http://jekyllrb.com/), static site generator, a couple years back. Frankly, it didn't make a lot of sense then. Fast forward a couple years and a better familiarity with Github and Jekyll makes a lot more sense. In essence, Jekyll takes the database out and the site's content is provided by individual files 'written' in [Markdown](http://daringfireball.net/projects/markdown/). If you haven't come across Markdown, take a whole 5 minutes out and learn it - think uber-simple html. Jekyll then (stay with me now) compiles that content into bog-standard HTML/CSS following the template provided by layout files - essentially just html/css pages with keywords hinting where the site content should go. You now have (as output) a complete generated site. You deploy this (straight ftp is fine) and voila, a super fast site (remember, no database access).
