---
title: Silverlight Debugging Issues
date: 2010/08/21 11:24:27
taxonomy: 
 category: blog 
---

![image](http://www.appsolo.com/wp-content/uploads/2010/08/image_thumb3.png)

Occasionally, a bug manifests itself when debugging a Silverlight app. The problem is that breakpoints set are not triggering a halt in execution. In the code window, the familiar red circle symbol has an exclamation mark over it with the error:

“The breakpoint will not currently be hit. No symbols have been loaded for this document”

After a lot of searching the solution that worked for me was to attach the VS Debugger to the correct process. Choose Debug..Attach to Process in VS and select the _correct_ Silverlight process. Opposite, you’ll see a number of tabs representing the distinct processes that my browser (Chrome) is using – remember, Chrome sandboxes each tab for safety.

Once you click ‘Attach’, the debug symbols are loaded and breakpoints will fire.

