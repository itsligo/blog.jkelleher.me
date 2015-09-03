---
title: Assigning users to a SQL database
date: 2010/07/22 15:27:23
taxonomy: 
 category: blog 
---

Filing this under ‘embarrassing errors’ heading, I’m hopeful that others have stumbled upon the same problem and so view this as a public safety broadcast-like post. In the current project, we’re (too regularly) updating our data model and this means dropping and re-scripting the database. The last step is to add a user with privileges to work on the database. And it’s here that 30 minutes of my life were needlessly wasted so listen up!

![image](http://www.appsolo.com/wp-content/uploads/2010/07/image_thumb3.png)Having dropped the old database (called, say, dbOne), the user login previously associated (as dbo) still naturally exists – and maintains its dbo status on that (now gone) database. After running the script to re-instate the new version of the database, the user (we call him tax_user) re-asserts its dbo rights on the database. However, when you try to add that user as a ‘New User’ to dbOne I got an error:

The login already has an account under a different user name.

 

The rationale behind the error message is that that user (tax_user) is already associated with the database. It isn’t obvious that he is since he doesn’t appear in the list of users in the Security folder for that database. When you take a look at tax_user you may see that the default database for him is dbOne and you may be forgiven for thinking that all you need to do is change this. However, it isn’t enough – you have to delve into the User Mapping section and remove the user as dbo on the dbOne. Of course, it might be just easier to recreate tax_user. In any case, once you’re removed any reference to dbOne from tax_user, you’re good to add tax_user as a ‘New User’ for dbOne.

Now go forth and sin no more!

