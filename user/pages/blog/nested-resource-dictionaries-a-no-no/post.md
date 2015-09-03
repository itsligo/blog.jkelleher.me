---
title: Nested Resource Dictionaries a no-no
date: 2010/05/31 17:20:55
taxonomy: 
 category: blog 
---

Having spent way too long chasing down a XAML problem, the lesson learned is that you can’t nest resource dictionaries in Silverlight – so don’t. Consider the following code:


<Application.Resources>
<ResourceDictionary>
<ResourceDictionary.MergedDictionaries>
<ResourceDictionary Source="Assets/Button.xaml"/>
<ResourceDictionary Source="Assets/ScrollBar.xaml"/>
<ResourceDictionary Source="Assets/ToggleButton.xaml"/>
<ResourceDictionary Source="Assets/ScrollBar.xaml" />
<ResourceDictionary Source="Assets/ScrollViewer.xaml"/>
<ResourceDictionary Source="Assets/ComboBox.xaml"/>
<ResourceDictionary Source="Assets/Styles.xaml"/>
</ResourceDictionary.MergedDictionaries>
</ResourceDictionary>
</Application.Resources>

Here I kept getting errors to do with not being able to set the resource ![image](http://www.appsolo.com/wp-content/uploads/2010/05/image_thumb17.png)‘Source’ property (opposite). The problem lay with the ComboBox.xaml styling containing a further merged ResourceDictionary. Apparently, that’s a big no-no.

