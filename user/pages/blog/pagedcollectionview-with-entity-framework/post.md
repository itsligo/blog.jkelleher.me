---
title: PagedCollectionView with Entity Framework
date: 2010/06/03 19:51:30
taxonomy: 
 tag: EF
highlight:
  theme: dark
---

I always liked _CollectionViews_ in WPF. It worked well with binding. For example, when you bind an _ItemsControl _(e.g. _ListBox_) to an IEnumerable collection, a default _CollectionView _is created. Most folk aren’t aware of its existence but it’s there nonetheless. Once you summon up that CollectionView, you can apply sorting and filtering operations – nothing complicated but the bang per buck is high.

In a previous [post](/blog/EF-limitations), I looked at how to effect joins through Entity Framework (EF) and concluded that DTOs (Data Transfer Objects) were the way to go. Regardless of how you pull the data down, it’s likely that the UI will want to apply some client-side sorting or filtering on the fly. There’s little point round-tripping back to the server for a re-query and pulling down all that data again. Enter _PagedCollectionView:_

```
dc.Load<TaxKey>(dc.GetTaxKeysAndAuthorsQuery(), LoadOperation =>
{
taxKeyListBox.DataContext = LoadOperation.Entities;
}, null);
PagedCollectionView pcv = (lbxRecentlyUpdated.DataContext as PagedCollectionView);
if (pcv!=null) pcv.SortDescriptions.Add(new SortDescription("TaxKeyAuthorName", ListSortDirection.Descending));

By wrapping the query results in a _PagedCollectionView_, you can then add (for different levels of sorting) multiple SortDescriptions (or GroupDescriptions). All this is handled client-side, quickly.
```
