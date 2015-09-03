---
title: RIA Services, DataForm, & PageCollectionView
date: 2011/04/18 20:10:54
taxonomy: 
 category: blog 
---

![master-detail-dataform](http://www.appsolo.com/wp-content/uploads/2011/04/master-detail-dataform_thumb.png)A common UI pattern is master-detail record viewing and editing (see opposite). In the example opposite, the user can filter the Customers in the (empty) text box and selecting a Customer allows him to edit the details opposite (in the DataForm, from the Silverlight toolkit). It’s a very typical scenario but very poorly supported by Silverlight, though on the surface, it doesn’t appear so. Here begineth the lesson!

I won’t go into extolling the virtues of using DataForm in detail so here’s the highlights; not using it wouldn’t solve the problems we encounter later:

* built-in data validation handling
* multiple templates for viewing, editing, adding new records
* tooltips for fields (pulled from annotations in the DomainService)

In this case, I have the Listbox and DataForm bound to the DataContext of the page grid so they stay neatly in sync. This is binding 101. Normally, folk will use a DomainDataSource created as a Resource in the XAML, load it with a query call to the DomainContext that it’s assigned and from there populate the listbox and DataForm. I don’t particularly like DomainDataSource elements and I’m not alone in this. It’s just not good practice to mix data access elements in the presentation layer. It’s a popular approach since the xaml to make the DomainDataSource filter, sort and group is a breeze. It is a compromise though and many are working to improve it (using what is being christened a [DomainCollectionView](http://blogs.msdn.com/b/kylemc/archive/2010/12/02/introducing-an-mvvm-friendly-domaindatasource-the-domaincollectionview.aspx), under development) – I look forward to its release.

### Another issue with DomainDataSource

DomainDataSource elements make the querying process very easy. You can pass parameters or bind UI elements back to it. In the case shown above, I wanted the user to type (partial) Customer names into the text box and have the listbox beneath filter the results. However, with a DomainDataSource, this forces a requery back on the server. Now, this app is running OOB (out of browser) locally but the latency would still kill this feature. On top of this, I don’t see the reason. I’ve already queried the Customer table to populate the listbox – okay, I needn’t pull down all the data and related records in other tables, but I now I’ll need this data soon enough and there isn’t a huge volume, so I download _all_ the records (and it’s quick). To avoid this server-side re-querying I embark on a journey…

### Alternatives means of Binding

[Colin Blair](http://www.riaservicesblog.com/Blog/post/View-Model-Collection-Properties-for-WCF-RIA-Services.aspx) gives a good account of our options here. Most folk will bind _LoadOperation.Entities_ to the DataContext but this is a read-only collection and so is only suited to browsing. One down!
Next contender is the cached EntitySet<> exposed by the DomainContext. This is ready to hand and supports INPC (INotifyPropertyChanged) so will reflect changes made without additional plumbing. However, it doesn’t support filtering (I need this) and the DataForm (or DataGrid) doesn’t permit add/delete operations on EntitySet<> objects. Two down!
Next up is to use our old friend _ObservableCollection_<>. While this implements INPC and is not read-only, I would now be responsible to manage propagate every change to the ObservableCollection<> back to the EntitySet<> for persisting to the DomainContext. A bridge too far. Three down!

### Enter PagedCollectionView

Initially, I was happy with PagedCollectionView. I wrapped the LoadOperation.Entities query result in a PagedCollectionView and happily browsed and edited data. In the above example, the DataContext of the main grid is bound to a PagedCollectionView wrapper. However, a colleague pointed out the disabled nature of the ‘+’ button on the navigation bar of the DataForm – not a good sign. It turns out that (according to [Colin Blair](http://www.riaservicesblog.com/Blog/post/View-Model-Collection-Properties-for-WCF-RIA-Services.aspx)):

> The PCV’s implementations of IEditableCollectionView and IPagedCollectionView are not compatible with the EntitySet. However, the incompatibility is reported by the PCV so the built in add/remove abilities of the DataForm and DataGrid are properly disabled.

Now I won’t pretend to fully ‘get’ this but the upshot is that the DataForm (and the DataGrid suffers from the same problem) can’t add/delete from a collection wrapped in a PCV (PagedCollectionView). I was running out of options at this point so dug about and found that if I convert the cached EntitySet<> (returned by the Load() on the DomainContext) to a List(), and then wrap it in a PCV, the Add/Delete buttons on the DataForm are magically enabled. Yippee!

You saw this coming, didn’t you? Well, what happens is that changes (e.g. additions) to the PCV don’t propagate back to the EntitySet<>. So while the UI experience worked fine, there was no persisting of data back to the database. Though by this point my enthusiasm for DataForms was waning, I didn’t fancy the alternative so ploughing on I began to look at the copious event hooks that DataForm exposes. There are lots and (typical MS this), they change the line-up regularly.

One that caught my eye was _AddingNewItem_. However, this fires just when the user clicks the ‘+’ (Add) button on the navigation header. By this point, the user hasn’t had an opportunity to enter any new data. We need an event that is fired later. The way I worked around this was to edit the NewItemTemplate of the DataForm. A DataForm can have different a DataTemplate for readonly, edit and for creating a new item. I made a DataTemplate for NewItemTemplate which includes an Add button. The user (after entering the new item details) clicks the button and puts in play the following:


private void btnAdd_Click(object sender, RoutedEventArgs e)
{
LocusDomainContext _lds = ((App)Application.Current).lds;
if (_IsAddingCustomer != null)
{
_IsAddingCustomer = dfCustomerDetails.CurrentItem as Customer;
_lds.Customers.Add(_IsAddingCustomer);
(_IsAddingCustomer as IEditableObject).EndEdit();
_lds.SubmitChanges();
}
}

This works in conjunction with my handling of the AddignNewItem event as follows:


private void dfCustomerDetails_AddingNewItem(object sender, DataFormAddingNewItemEventArgs e)
{
LocusDomainContext _lds = ((App)Application.Current).lds;
_IsAddingCustomer = new Customer { EntityName = "Company Name" };
}

You’ll see that I begin the creation of the new Customer in the AddingNewItem handler. Then when the user clicks the Add button later, I test for non-null in the _IsAddingCustomer_ _variable. If this is non-null, there’s a new Customer to be created. I cast the object currently being editing in the DataForm (the new Customer) and add it to the cached EntitySet<Customer> exposed by the DomainContext.

