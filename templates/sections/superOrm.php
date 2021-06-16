











This application comes with an Orm called "Super ORM".

It allows you to easily communicate with your database, using object oriented programming.


The point of this orm is to communicate with two of its sub components :

The Repository, and the entity manager.



<h1>Repository</h1>



You can use the repository, the super Orm can use a repository at any moment.

Here is how it works.

The Repository object will connect to a certain table, and will convert sql results, into entities.


Here the way to call it :


$this->getSuperOrm()->getRepository();


Here is the list of its functions:




<h1>Entity Manager</h1>


 Similarly, the super Orm can use the entity manager service at any moment.


While repositories are made to read entities, the entity manager is designed to insert, update and delete entities existing in a database.

 
 Here is the way to call it , in your controller :


 $this->getSuperOrm()->getEntityManager();


 Here is the list of its functions:
