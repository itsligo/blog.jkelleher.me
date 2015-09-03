---
title: "Entity Framework limitations"
date: 2010/06/02
slug: EF-limitations
taxonomy:
    tag: [EF]
status: publish
image: ef.jpg
highlight:
  theme: dark
---

# Entity Framework limitations

_Entity Framework _(EF) is the latest in a long line of DAL (Data Access Layers). It kicked LINQ-to-SQL firmly to touch and much is promised by it. It dove-tails reasonably with _RIA Services_ (RIA) too. However, once you’ve watch one or two (or in my case, around 50) tutorials/videos on RIA/EF, you’ll see a trend – lots of full table access bound to a data grid. There’s a reason for that and it has a lot to do with neat _DomainDataSource_ packaged code which hides (read – buries) the supporting code. Take for example, the (not-unreasonable) need to join some fields from one table with some from another. EF can do this using either Entity-SQL (yup, another data query language) or LINQ-to-SQL (including using lambda expressions). Okay, this is (somewhat) straight-forward.

However, RIA services (or WCF if that’s your bag) can’t send back anonymous types. So, say you do a Join on the EF and have a _new_ view to return – you can’t. There are a few work-arounds.

### Alternatives….
Right, to look at some alternatives to the above...

#### Work with SQL Views on SQL Server

Essentially, you script some Views at the back-end. These Views are imported to the EDMX file, effectively as a table (i.e. entity). The EDMX in case you don’t know is an XML definition of a conceptual model, a storage model, and the mapping between these models. An .edmx file also contains information that is used by the ADO.NET Entity Data Model Designer (Entity Designer) to render a model graphically. This imported View (from the database) is easily queried by EF and is effectively seen as a table (read, Entity) by EF.

Downsides? Well, if you want a custom view of your data, you have to head over to the database and write up another View, then (explicitly, but easily) update the EDMX in Visual Studio. This isn’t ideal since even if your database model is now stable, you’re likely (during development) to need different views of the data. I always saw LINQ-to-SQL (or any successor like EF) being the ideal vehicle for just this kind of thing. There’s worse to follow – these Views are read-only. To submit changes through these Views (using _SubmitChanges()_), you need to use SPROCS and import these as functions. This is a manual process and requires you to map the parameters of your SPROC (as well as return types). Additionally, there are issues around dependencies when deleting through a View.

#### EF-style View (aka Defining Query or QueryView)

This requires editing of the EDMX-xml file and given that this can be explicitly updated by changes to the database, this worries me. In any case, the approach is an order more difficult than tripping back to create a View on the database. If interested, [Julie Lerman](http://msdn.microsoft.com/en-us/magazine/ee336312.aspx) has an excellent discussion on how to do this though she refers to this as creating a QueryView whereas MSDN has this as ‘[Adding a Defining Query](http://msdn.microsoft.com/en-us/library/cc982038.aspx)’.

#### DTOs (Data Transfer Objects)

This approach is less than the open-heart surgery of the previous approach. You’ll be familiar with the creation of various queries on the DomainContext (i.e. DomainService on the client-side):


    public IQueryable<TaxKey> GetTaxKeysAndAuthors()
            {
                return this.ObjectContext.TaxKeys.Include("Author").OrderBy(k => k.TaxKeyName);
            }


For example, the above query from the DomainService (on the Web project), pulls down a join on the _TaxKey_ table and the _Author_ table. This query was actually the genesis for my investigation. The _Author_ table has a _Picture_ field that (can) holds an image which could be large and isn’t always required. However, in RIA Services you’ll see that the return type is _IQueryable<TaxKey>_ – only legitimate entities can be returned. So, even though EF will let me do a join on certain fields from certain tables, the anonymous table that is created by any Join can’t be returned. This should be obvious since if we have to specify the return type, then the new class won’t be anonymous!

The workaround here is to create a [DTO](http://en.wikipedia.org/wiki/Data_Transfer_Object) – data transfer object (well, actually a class). Sometimes referred to as a Presentation Model, this involves creating a new set of classes on the server-side (web project). Here’s one of mine to handle the Join between the _TaxKey _and _Author _tables mentioned earlier.


    namespace tax_sil4_net35.Web
    {
        public class TaxKeyAuthorPicture
        {
            [Key]
            public int TaxKeyID { get; set; }
            public string TaxKeyName { get; set; }
            public string TaxKeyAuthorName { get; set; }
            public byte[] AuthorPicture { get; set; }
        }
    }

This now gets around the problem we had earlier where we couldn’t return anonymous types – we now have actual types (i.e. classes) to return so the earlier query method could now return: public IQueryable<TaxKeyAuthorPicture> GetTaxKeysAndAuthors()

This class can be annotated similar to the EF entity classes so we can do certain validation on the properties. Brad Abrams has a [good post](http://blogs.msdn.com/b/brada/archive/2009/07/16/business-apps-example-for-silverlight-3-rtm-and-net-ria-services-july-update-part-6-data-transfer-objects-dtos.aspx) on this approach as does Fredrik Normen in [his post](http://weblogs.asp.net/fredriknormen/archive/2009/11/28/wcf-ria-services-and-a-guide-to-use-dto-presentation-model.aspx) (model diagram opposite credited). Here’s the DomainService query method that populates the collection for return to the client-side for viewing:


    public IQueryable<TaxKeyAuthorPicture> GetTaxKeysAndAuthorsRecentlyUpdated()
            {
               return from t in ObjectContext.TaxKeys
                       .Include("Authors")
                       select new TaxKeyAuthorPicture()
                       {
                           TaxKeyID = t.TaxKeyID,
                           TaxKeyAuthorName = t.Author.AuthorName,
                           TaxKeyName = t.TaxKeyName,
                           AuthorPicture = t.Author.Picture
                       };  
            }
