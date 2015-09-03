---
title: Entity Framework Model Building
date: 2012/09/16 14:54:30
taxonomy:
 tag: [EF]
---

With the arrival of Entity Framework (EF) 5.0, we've seen an explosion of options to integrate with a database. Being an early adopter of EF, one of the major bugbears was the plethora of problems that emerged when (I don't mean if) your database schema updated. The ripple effect through your edmx model was chaotic to manage. Check our past posts to see how we managed that natural evolution of a database while embracing the other benefits of EF.

As we begin another project (this time eschewing Silverlight and heading to MVC4) we're still happy to work with EF but it's only prudent that we check to see how schema changes are accommodated. The vista of possible options are muddied by the many CTPs and advances viewings of MS's offerings in this area (I'm even looking at you, Pluralsight). With the release of VS2012 and EF5, thankfully, they have been accompanied by an excellent (blessedly, short) collection of videos. One of the new options is to generate a new database from your (still evolving) set of POCO - known as EF Code First.

Being a programmer and looking for any opportunity to undermine the few remaining tasks of our DBA colleagues, this does appeal. However, before shacking up with Code First (afterall, this is MS and this is a new approach), the important question is how are changes to the underlying POCO propagated to the database after your first stab and a data model (never your last). Enter 'Code First Migrations'. Not to give too much away, this handles, and crucially exposes the processes, the updating of the database schema prompted by changes to the underlying POCOs.
