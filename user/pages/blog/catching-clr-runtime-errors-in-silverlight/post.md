---
title: Catching CLR runtime errors in Silverlight
date: 2010/08/28 18:11:46
taxonomy: 
 category: blog 
---

![CLR Exception Handling Enabled](http://www.appsolo.com/wp-content/uploads/2010/08/image_thumb4.png)Debugging Silverlight apps is fraught with problems. Often the error message is unhelpful and then there are the misleading ones (‘Page not found’ anyone?). One way to improve your diagnostic skills is to have VS catch CLR run-time errors. This seemingly isn’t enabled by default so press CTRL-ALT-E (for Error) and tick the ‘Thrown’ column for Command Language Runtime exceptions.

As an example, I had difficulty figuring out why a change to my shared ResourceDictionary was causing a problem. With the CLR exception handling enabled, you can see clearly where the problem lay. Without the CLR exception handling, well, nothing but a hung load page.

