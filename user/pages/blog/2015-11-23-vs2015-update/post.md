---
title: Update VS2013-VS2015
taxonomy:
    tag: [dev]
status: publish
image: change.jpg
slug: vs2015-update
highlight:
  theme: dark
---
#Updating from VS2013 to VS2015

A regular problem in class is migrating past solutions from previous versions of Visual Studio to the latest. It hits approx. every 18 months and rarely gets easier. Here's the series of hoops you'll need to jump through to make the move from VS2013 through to VS2015:

* Remove the *.nuget* folder which was previously used to enable NuGet package manager restore - thankfully no longer needed in VS2015 but this hack will break VS2015 builds
* Edit the *.sln* and *.csproj* files to remove any references to NuGet Restore. There's typically 6 lines in the latter and rarely any mention in the former but cut out offending NuGet references. Note that you'll have to unload the project in the solution so that you can edit it - right click and choose 'Unload Project'. As for the *.sln* file, I had to use Sublime to edit it.
* Remove the *packages* folder
* Update your *.gitignore* file to reflect the new folder structure - use [www.gitignore.com](www.gitignore.com) to guide you. Or use `git checkout another_branch -- .gitignore` to pull it from another branch where it has already been updated.
* Update the *Views/web.config* file (not the web.config at the project root). This will be referencing out of date packages/dlls and it's best to grab one from a recent VS2015 project and amend. Typically, the only change you'll need to make in the copied VS2015 *Views/web.config* file is to update the namespace for your project - it's a short file and easily spotted. Or use `git` as mentioned above to pull this file from another (already updated) branch.
* You also need to update all those out-of-date packages. The new NuGet integrated package manager doesn't have (unlike the old one) an **Update All** option so drop to the *Package Manager Console* and issue `Update-Packages` (exactly)
* You'll most likely also need to change the connection string to any local databases (in web.config) as VS2015 uses a new naming convention for *localdb*.
* You may also get an error concerning Newtonsoft.Json and the dll not being available. Check your **web.config** file to see if there are any duplicate entries for this (or any other dlls) that would fail. Keep the latest version in all cases - here, for Newtonsoft.Json, that is 6.0.0.0.
* For good measure, delete the `bin` and `obj` folders and do a clean rebuild.

So, easy-peasy - not. I'm a bit surprised that there's not a migration tool built-in to recognise early version solutions and prompt an upgrade. This used to be the case around VS2010-VS2012 but of late, it seems to be every man for himself to sort through these issues.

