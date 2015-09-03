---
title: Breakpoint will not currently be hit…
date: 2011/04/04 09:02:42
taxonomy: 
 category: blog 
---

![icon_silverlight](/wp-content/uploads/2011/08/icon_silverlight-271x300.png)This error arises spuriously. In doing so it prevents breakpoints in Silverlight code being reached. To solve, delete the obj and bin folders of the associated project. Additionally, you may need to disassociate the Silverlight app from the host web project. Do so by selecting Properties panel for the web project. Then select ‘Silverlight Applications’ and delete the associated Silverlight app. Click ‘Add’ to reinstate the Silverlight Project (already in your solution). If none of this works, try clearing the cache in your browser. Chrome makes this particularly easy, allowing you to just clear the cache et al for the last hour, rather than losing all your cached material going back months.

