---
title: Styling a Combo-box in Silverlight
date: 2010/05/26 22:10:27
taxonomy: 
 category: blog 
---

A major selling-point of XAML/Silverlight/WPF is the whole lookless nature of the controls. We can style the appearance (![image](http://www.appsolo.com/wp-content/uploads/2010/05/image_thumb11.png)and behaviour) of controls as much as we like – even easier with Expression Blend. However, knowing _how_ to do this (even in Blend) is no small matter. Take my experience of making a combo-box change the default blue highlight that appears when the mouse rolls over the control. As you can see (opposite), I’ve achieved some initial styling by changing the simplest of things – the ItemTemplate. This is easily done (even in VS) by creating a Data Template (in this case with two TextBlocks) and assigning it to the ItemTemplate dependency property of the combo-box:


;
;



;
;

;


This is actually quite powerful in the sense that it has an immediate and visible effect. Now let’s dig deeper. As with all Silverlight/WPF controls, there is plenty of behind-the-scenes XAML handling both appearance and behaviour. A property often overlooked is the _ItemContainerStyle_. The role of this property is to act as a container for each _ComboBoxItem _(or ListBoxItem). This lets you make such simple changes as the margin inside of which each item in the contained. But the real power lies in the _ControlTemplate_ of the _ListBoxItem_ for the _ItemContainerStyle_. Yes, you read that right. Normally, when we think of a _ControlTemplate_ you associate it with a particular control and a reasonably radical alteration of its appearance (and behaviour). In this case though, we’re looking at the _ControlTemplate_ for the rendering of each item in the ItemsControl (the base class for ListBox and Combo-box). Now this is a little like open-heart surgery so break out Expression Blend (unless you talk fluent XAML). ![image](http://www.appsolo.com/wp-content/uploads/2010/05/image_thumb12.png)When you crack open a copy of the Control template for ComboBoxItem (see how opposite), you’ll see that there are a number of elements making up the container. The most obvious of these is the _contentPresenter_ – it’s into here that each _ListBoxItem _(or ComboBoxItem) gets placed. Now notice _fillColor _and _fillColor2_ – these humble rectangles actually represent the colour that appears as you mouse-over the items or select (an) item(s)_![image](http://www.appsolo.com/wp-content/uploads/2010/05/image_thumb13.png)__. _So the _Fill_ property for these Rectangles is where to go to change the appearance of the items as you navigate over them. Now, you’d think that was that – but what about the _blue_ that appears when the ComboBox is collapsed as in the first screen shot above. This isn’t controlled by the control template of the ListBoxItem in the ItemContainerStyle property (repeat that 10 times!). Long story short – the structure and appearance of the collapsed ComboBox is ![image](http://www.appsolo.com/wp-content/uploads/2010/05/image_thumb14.png) managed by the control template for the ComboBox itself (and not the ListBoxItem we’ve been talking about). By editing (the poorly named) template as shown opposite, you’re changing the fundamental behaviour of the ComboBox. ![image](http://www.appsolo.com/wp-content/uploads/2010/05/image_thumb15.png) You can see this fundamental makeup of the control by looking at the components of the control template (below). The highlight is the _ContentPresenterBorder_. Though innocently named, it contains the essential structure of the collapsed ComboBox. Note the _BtnArrow _(draw in a vector path, of course) and the _ContentPresenter_ that holds the _TextBlock_ to display the text of the collapsed ComboBox. But what we’re after is the _DropDownToggle_ ToggleButton that the whole collapsed control. This is what appears in blue when we mouse over. However, this behaviour is managed by the Visual State Manager (VSM) which is for another day. Thankfully, I don’t want to change its behaviour – just its appearance. This appearance (and the behaviour) is managed by an assigned style to the control. This is where Blend bows out and we drop to XAML in the resource editor. Digging through the various styles and trying to navigate around the massive VSM code, we find a few Rectangles named _BackGroundOverlay _and _BackGroundOverlay2_. Checking the _Fill_ property of these Rectangles tells me that they are blue. Just bind the _Fill_ property to my own StaticResources and hey presto, we dump the blue. Now I don’t feel too bad having wasted spent an evening sorting through the XAML!

## Comments

**[greg](#40 "2011-11-09 14:10:01"):** Really struggling with a combobox restyling - I have modified the fillColor and fillColor2 asper your instructions above but I am still getting the default light blue color coming through when mousing over ComboboxItems.



