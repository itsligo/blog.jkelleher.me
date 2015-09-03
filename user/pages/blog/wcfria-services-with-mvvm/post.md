---
title: WCF/RIA Services with MVVM
date: 2010/03/16 21:29:00
taxonomy: 
 category: blog 
---

## ![DSCN0274](http://lh6.ggpht.com/_-8eBgLSYyzA/S5_4H9WjVnI/AAAAAAABDHc/H7tud5XSdRc/DSCN0274_thumb.jpg?imgmax=800)  ![DSCN0278](http://lh6.ggpht.com/_-8eBgLSYyzA/S5_4J-GPvtI/AAAAAAABDHs/IXvZ8xikeNw/DSCN0278_thumb.jpg?imgmax=800)

## Nikhil Kothari

[Nikhil Kothari](http://www.nikhilk.net/) asks a packed room for a show of hands on who has used RIA Services and/or MVVM – about half the room has. He explains that RIA Services simplifies n-tier data driven applications, especially with Silverlight which gives you no choice. It’s a higher level    framework on top of LINQ, WCF and Metadata (as well as Entity Framework and nhibernate) – and scales well. It operates at a higher level that lets you go lower and work with WCF if you want.

He shows a 'Book Club’ web app which was built with RIA Services. ADO.Net or SProcs as well as ORM (like LINQ) work fine with RIA Services. First step is to add a Domain Service Class to model a bookshelf in the app. The new domain service class asks what classes (from the db) you want to use. The resultant domain class provides a starting point of basic CRUD operations e.g. GetBooks() returns a IQueryable collection of Book objects. Nikhil then changes this boilerplace code to retrieve the book collection in order.

He now turns his attention to the view (in XAML) and wires up the Load handler to populate the view. He plays about with the DataContext class which is actually a subclass of the DomainService. This class is then used to bind the control in the view to the data, though the actually data has not yet been called down from the remote source. The asynchronous download is handled invisibly.

He uses EntityQuery which is the LINQ equivalent in the Entity Framework (EF). EF appears similar to LINQ in this example.

## MVVM

MVVM is a pattern for separating application behaviour out of the user interface. The motivation being:

* facilitate designer/developer workflow, and aids independence of these activities
* encapsulate state and operations of application
* improve maintainability
* facilitate testability

He advocates the use of SketchFlow to think about what your ViewModel should be like. He maps the sketch of the interface and uses it to ‘call out’ the components of the ViewModel – both state and operations. This works surprisingly well – having the View determine the demands on the ViewModel. This seems like a reasonable way to proceed since the prototype should come first.

He then as is typical looks at the use of Commands to wire up event handling at the view. He sets up a number of XAML Command resources which are bound to the Data Context. This ensures that they show in VS2010 in the Properties panel. In this case, he binds the Load button to the Load Command and the CommandParameter to the Text property of the Search box.

Nikhil continues adding greater detail to the ViewModel which if done right reduces the dependencies that the View has.

**Sources**: <http://www.nikhilk.net/RIA-Services-MIX10.aspx>

## Comments

**[Shaon](#28 "2010-03-17 09:54:53"):** Link for
Source: http://www.nbikhilk.net/RIA-Services-MIX10.aspx
doesn't work. It should be

http://www.nikhilk.net/RIA-Services-MIX10.aspx

:)

**[Gregory](#34 "2010-04-30 21:37:32"):** Hi Dad!!!!!!! ;)



