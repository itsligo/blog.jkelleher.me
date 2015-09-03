---
title: Dataforms and RIA Services
date: 2010/08/10 11:21:34
taxonomy: 
 category: blog 
---

![image](http://www.appsolo.com/wp-content/uploads/2010/08/image_thumb1.png)Initially, I didn’t take to the DataForm control but it’s growing on me. In our current app, we need to perform standard CRUD on users of the system. The client UI can be seen opposite.

The UI structure is that of a ListBox and DataForm. Both controls pull their data from a DomainDataSource which helps with sorting. The controls also keep in sync thanks to this common DataContext.

The DataForm has a lot to offer. Here’s a quick list of the jobs it handles in this example:

* AutoEdit set to true means the DataForm lets me edit a selected Author right away.
* DataField element of a DataForm lets me customise the appearance of the fields – in this case, the Photo field is rendered with a border and doubles as a Button to duplicate the functionality of the ‘Load Image’ Button.
* CommandButtons (note top right corner) make add, remove and navigation commands available.
* AutoCommit (set false here) saves changes without explicit ‘Save’ clicking.
* Say I edit Bill’s password opposite; the ‘Save’ Button enables to support persisting (see caveat below). If however, I continue editing and change password back to ‘Bill’ as per the original value, then the DataForm notices that there really isn’t any change and again disables the ‘Save’ Button. Similar for ‘Reject’ Button. Note also, the custom words used by these Buttons.

The caveat mentioned above has to do with a change introduced to RIA Services in July CTP ‘09. I’m not the best guy to explain the [thinking behind](http://forums.silverlight.net/forums/p/111826/254798.aspx) the change but the upshot is that changes made using the DataForm while handled properly, _do not_ persist to the backing store. The ‘last mile’ needs to be handled manually with a call to SubmitChanges(). For example, to delete a record:


private void dataForm_DeletingItem(object sender, System.ComponentModel.CancelEventArgs e)
{
e.Cancel = true;
// Cancel DataForm's attempt at delete for all cases since DomainDataSource.Data doesn't accommodate changes
if (MessageBox.Show("Are you sure you want to delete this author?", "Confirm Deletion", MessageBoxButton.OKCancel) == MessageBoxResult.OK)
{
// Uses DataView to ensure DataForm's currentItem is deleted
authorDomainDataSource.DataView.Remove(dataForm.CurrentItem);
authorDomainDataSource.SubmitChanges();
}
}

This does muddy the water somewhat but the DataForm is still useful. It also integrates well with metadata added to the DomainService. In the above example, note the little ‘i’ icon next to some fields. These are brought across from the DomainService to the DomainContext which is the basis for the DomainDataSource and from there displayed on screen.

Also, custom validation class added on the web service side are respected by the DataForm. The ‘Save’ Button for example is disabled if there are validation errors. All in all, a reasonably competent way to provide basis CRUD operations on data sources.

## Comments

**[Cleyton](#43 "2011-02-09 12:30:08"):** Hi, Do you have the sample code for the Dataforms and RIA Services tutorial? Cheers C

**[John](#44 "2011-03-08 19:06:51"):** Cleyton, unfortunately I can't release the code in bulk. However, if you can be more specific about what you want, I'm sure I have the sample code you need. Alternatively, I lecture on this material in the day and you'll find better presented examples over at jkwp.itsligo.ie

**[shahzad](#45 "2011-03-09 07:58:00"):** tell me how to insert and delete picture



