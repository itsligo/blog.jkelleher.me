---
title: EF DomainDataSource binding to SQL table-join
date: 2010/05/15 19:46:37
taxonomy: 
 category: blog 
---

# EF DomainDataSource binding to SQL table-join

There are some conveniences brought by Entity Framework (EF). One is the provision of _navigation properties_ for entities. Essentially, these provide easy access to entities (or collections thereof) in associated tables. For example, an _Order_ entity would have an _OrderItems_ property which not surprisingly yields a collection of _OrderItem_ rows. When implemented as part of RIA Services, the ready-made queries provided by EF are exposed on the client side for Silverlight to access. You are encouraged to extend these boilerplate queries to better support your needs. So, here, for example, is a query with a parameter added to look up a particular record in the TaxKey table:


public Arc GetArcsByID(int aID)
{
return this.ObjectContext.Arcs.SingleOrDefault(a => a.ArcID == aID);
}

The _ObjectContext_ is the Entity Framework wrapper for your database connection so what we see here is a simple lambda expression to query for a particular value. Or we could use LINQ. But this would result in code like this:


public IQueryable<WHAT TYPE???> GetNodesByTaxKeyQuery(int tKey)
{
//return this.ObjectContext.Nodes.Include("Arc").Where(n => n.TaxKey == tKey);
var q = from n in ObjectContext.Nodes
join a in ObjectContext.Arcs on n.ArcID equals a.ArcID
where n.TaxKey == tKey
select new { n.NodeID, n.IsRoot, n.ArcID };
return q;
}

The problem here is what to put down as the return type? The anonymous type I create in the LINQ query doesn’t have a name. So the IQueryable<> return type is ill-defined. The solution on the ether is to create what is called a DTO (unknown acronym) which looks a lot like this:


public IQueryable<Node_Arc_Row> GetNodesByTaxKeyQuery(int tKey)
{
return from n in ObjectContext.Nodes
join a in ObjectContext.Arcs on n.ArcID equals a.ArcID
where n.TaxKey == tKey
select new Node_Arc_Row { NodeID = n.NodeID, ArcID = a.ArcID, ArcLabel = a.ArcLabel, Terminal = n.Terminal, IsRoot = n.IsRoot, TaxKey = n.TaxKey };
}

public class Node_Arc_Row
{
[Key]
public int NodeID { get; set; }
[Key]
public int ArcID { get; set; }

[Association("label", "ArcID", "ArcID")]
public string ArcLabel { get; set; }
public bool? Terminal { get; set; }
public bool? IsRoot { get; set; }
public int? TaxKey { get; set; }
}

This doesn’t work – an error in the generated .g files complaining about the custom class, Node_Arc_Row. I lucked out at this point and anyhow, it seems a heck of a lot of effort to do something the _navigated property _methods are perfect for. So the solution was (as always) ridiculously simple:


public IQueryable<Node> GetNodesByTaxKeyQuery(int tKey)
{
return this.ObjectContext.Nodes.Include("Arc").Where(n => n.TaxKey == tKey);
}

You’ll see the _Include_ method permits you to specify an associated table to join with your results. This _Arc_ join can then be further exposed from your UI element to access its constituent attributes. Still, there is a role for these so-called DTO classes that might prove useful at some point.

## Comments

**[paul](#38 "2010-05-16 11:23:17"):** Hey John I looked at the Include method a few interations back. It works well for two tables of a Master/Detail but when you attempt to include other tables in that are linked to say the Arc table, then it runs into difficulty with the return type. I think you can possibly overcome this by adding attributes in the metadata. Although I haven't examined the metadata attributes too much. To my knowledge the linq code var q is linq to sql and the include is linq to Entity, which is more in line with the entity framework.

**[paul](#39 "2010-05-16 21:24:24"):** Hey John. Actually I just thining about this afterward as I drove back to Sligo from Dublin. If you have a plan on what needs to be retrieved early, then you are better off using a database View for complex combinations specified in the database and either specifying a parameter on the database side or qualifying the retrieval with a bit of linq on the services side. I suppose the idea is that if you over extend the idea of the service - just communicating with the Silverlight Application then it gets complicated in terms of implementation of logic and relational manipulation of data in a non-data driven enviroment C#. Horses for courses and services like vengence are best served up cold.



