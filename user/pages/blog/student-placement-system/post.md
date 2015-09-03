---
title: Student Placement System
date: 2015/04/23
taxonomy:
 tag: development
---

<iframe width="640" height="360" src="https://www.youtube.com/embed/wHOAl2fSRFs?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

Recently, along with Paul Powell (IT Sligo), I delivered a year-long project to manage student placements dealing with:

* placements - what's on offer, with whom and what kind of work
* students - who is eligible to undertake what placement, expressing preferences, exploring options
* tutors - who will visit who, submitting of reports
We'll continue to work on it through adoption. The feature set is broader than the above bullet list but the more interesting aspects are under the hood, influenced by two factors:
* end user demanded an 'easy-to-use' system as a priority
* I wanted to work with the latest thinking on building such web applications
I was happy to run with the former as it should be a given in any case. The second is more the topic of this post - how to build something like this?

#### Initial Development Stack

Back in the day, I'd have singled out Silverlight for the UI support and flexibility. Those days gave way to Microsoft's ASP.NET MVC which I still regard highly. Coupled with Entity Framework to manage the database (SQL), Bootstrap to dress up the UI and with easy hosting to Azure, it was a reasonable proposition. I did some initial 'test drilling' with ASP.NET MVC but from the outset I felt the burn of pushing data from the back-end, injecting via viewmodels and Razor into the Views for surfacing at the client. This works well for full page updates but introducing Ajax to the mix (for responsiveness, or at least the illusion of it) pushed me to partial views. I just found the structure too fragmented. I think essentially, the binding of the data to the view became too cumbersome in ASP.NET MVC and I had other things in sight that were candidates so...

#### New Kid in Town

Having worked on a MS stack for so many years, it's easy to get polarised in your views. MS's [poor handling](http://www.zdnet.com/article/microsoft-our-strategy-with-silverlight-has-shifted/) of the Silverlight demise didn't help but the market had moved on regardless and open source was coming of age. I tracked also the move away from the server towards the client, probably in response to the increasing power of hand-held devices and the pursuit of better UX. First came Ajax, jQuery and its slew of plugins. Then after the initial rush and fragmented offerings to build a significant client-side development stack, came Angular (with notable mentions to Ember, Knockout, Backbone et al). It doesn't help to have Google pushing Angular but the open source community is more democratic than that and Angular deserves the plaudits. Angular is big but it takes that to provide a credible alternative to the (server-side) stack offered by MS. The learning curve is reasonably steep but the rewards are pretty immediate. Listing the relative merits of Angular is beyond this post but the single most compelling reason that convinced me to adopt it for this project was that it retained more control on the client and thereby offering a much improved user experience.

#### Long Story Short

Once the big piece of the puzzle was in place (Angular), the supporting players are pretty easy to choose. And there is choice - remember Angular can't afford to be too opinionated and so will work with a variety of options for say CSS framework or data service. Open source is 'survival of the fittest' and Github makes finding and evaluating the alternatives so easy. In the end the stack played out as follows:

* **Data** - not wishes to reinvent everything, Paul stuck with Entity Framework (EF) as ORM (object-relational modeler) fronting a SQL Server database all hosted on Azure. While some data is returned from SQL Server in SPROCS, most is returned via LINQ queries in EF
* **Services** - we use MS Web API to expose the data via a RESTful service returning JSON data-sets for consuming at the client. And this is where the server-side involvement ceases.
* **Business Tier** - Angular and a collection of open-source Angular modules provide the **MVC** core. The **M**odel is sourced from the Services above. **C**ontrollers (in Javascript) handle the user interaction and business logic. **V**iew handle the presentation
* **UI Tier **- I use a third party SCSS variant of the Bootstrap SCSS port. Angular has excellent facility to inject the returned data into the UI (curiously not unlike Silverlight years back, ah, the irony)

#### Supporting Technologies

While MS produce arguably the finest IDE - Visual Studio - they are no longer the only choice. Seeing as I use a Mac nowadays for development and the shoddy way that Parallels delivers Windows, I wanted to see how the other half build software. Pretty well as it turns out - even if it involves a Terminal window more often than not. First off, I used **Git** for version control, a no-brainer but needs careful study to wield such a powerful tool. **Github** naturally provides the cloud sharing of the repository. Branching a new feature without fear of harm to the master branch is a wonderfully liberating way to experiment. **Azure** provides a decent cloud PaaS (among other things). Paul handled the database and EF which was pushed seamlessly to Azure deployment via a trigger on the Git repo. Basically, commit a project and moments later it appears live on Azure - a joy. However, **EF** is no longer a favourite. Data migration is still a pain and certainly from our experience databases are in flux for much longer than we'd like. There needs to be solid support for such changes and data migrations (sorry) isn't it. Next time out, it'll be some NoSQL offering, likely [MongoDb](https://www.mongodb.org/). We can drop EF and bring on [Express.js](http://expressjs.com/). This in turn would prompt a move away from IIS and to [Node.js](https://nodejs.org/). It's interesting to see how changing one piece of the puzzle prompts a complete overhaul. But for the record, the move to Node.js wasn't prompted by difficulties with EF but rather by non-MS development tooling.

#### ![sps_mockup](sps_mockup.jpg)Development Tooling

Ditching VS makes you appreciate the wide role it plays in Windows development. There isn't Windows development anymore - there's web development. And if you're on a Mac, there's plenty alternatives. First off, [Sublime Text](http://www.sublimetext.com/) is a hugely capable editor - okay, not an IDE but wait one. You can enhance Sublime in all the ways you want. For example, it can:

* let me know which files have been changed in the repo
* lint my code to improve my work
* auto-deploy my code base
* reformat the code
* infinitely customisable
But mostly it's an incredibly fast editor - and that's what needed. Next up, a replacement for [NuGet](https://www.nuget.org/) in VS. In any case, NuGet is a package manager focussed on Microsoft development. [Bower](http://bower.io/) and [npm](https://www.npmjs.com/) are just better. Bower handles front-end packages and npm for the back-end. Yes, they're predominantly terminal based but are robust no-nonsense tooling to leverage open-source excellence.
