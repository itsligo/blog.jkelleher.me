---
title: Windows Live Writer and Code Syntax styling
date: 2010/05/13 09:18:02
taxonomy: 
 category: blog 
---

As a Silverlight developer, you’re likely to need to blog occasionally on your app. I use [Windows Live Writer](http://windowslivewriter.spaces.live.com/blog/cns!D85741BB5E0BE8AA!1650.entry) (WLW) to handle all my posting – even with WordPress’s super-easy UI, I like the desktop shortcuts inherent in WLW – keyboard shortcuts (e.g. Ctrl-K for links), drag ‘n drop images (including auto uploading). There are also some neat plugins that make WLW even better. One I really like is [Code Snippet](http://lvildosola.blogspot.com/2007/02/code-snippet-plugin-for-windows-live.html) by Leo Vildosola – takes you IDE code and keep it just as is in your post. For example, here’s method from a recent app:


1: private void trvArcs_SelectionChanged_1(object sender, SelectionChangedEventArgs e)


2:         {


3:             Node n = (Node)trvArcs.SelectedItem;


4:             TaxFullDbDom tdc = new TaxFullDbDom();


5:             EntityQuery<Arc> query =


6:             from c in tdc.GetArcsQuery()


7:             where c.ArcID == n.ArcID


8:             select c;


9:             LoadOperation<Arc> loadOp = tdc.Load(query);


10:             this.arcDataForm.ItemsSource = loadOp.Entities;


11:             arcDataForm.AutoEdit = true;


12:             arcDataForm.CurrentIndex = 0;

## Comments

**[paul](#37 "2010-05-13 19:30:54"):** Hey john I was wondering were all those Code Windows came from on MS Bloggs. Snippit works quite well, some minor clitches if you start to redo formats and stuff. But I changed my blog entry above to use it and it was gooood.



