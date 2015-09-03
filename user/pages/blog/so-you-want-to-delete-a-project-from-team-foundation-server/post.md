---
title: So you want to delete a project from Team Foundation Server
date: 2012/11/16 19:15:18
taxonomy: 
 category: blog 
---

![category-team-foundation-service-200x125](/wp-content/uploads/2012/11/category-team-foundation-service-200x125.png)Source control is great - or so I know I must believe. And TFS (Team Foundation Server) is as good as any. But here's the interesting case of my efforts to delete a project from the server. You'd think that there would be a right-click...choose Delete Project...are you sure....are you real sure kind of sequence here but you'd be wrong. MS apparently really don't want you tripping up and doing something dumb like EVER kill a project and are out to make it as hard as possible. Here are the steps:

* Open a command prompt in administrator mode
'cd' your way to the %Program Files%Microsoft Visual Studio 11.0Common7IDE
* Invoke the TFSDeleteProject program (the clue is in the name)
Use the following switches: /force /collection: followed by the fully qualified name to your _CollectionProject_ Really, this needn't be this hard....![](http://www.appsolo.com/wp-content/uploads/2012/11/Screen-Shot-2012-11-16-at-19.05.29.png)

