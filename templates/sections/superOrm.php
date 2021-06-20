</br>
<h1>Super Orm</h1>

</br></br></br>


This application comes with an Orm called "Super ORM". </br>

It allows you to easily communicate with your database, using object oriented programming. </br></br>


The point of this orm is to communicate with two of its sub components : </br></br>

The Repository, and the entity manager. </br> </br>



<h2>Repository</h2> </br>


 
The super Orm can use a repository at any moment. </br></br>

Here is how it works : </br></br>

The Repository object will connect to a certain table, and will convert results grabbed from the database , into entities. </br></br>


Here is the way to call it : </br></br>


$this->getSuperOrm()->getRepository(); </br></br>


Here is the list of the repository's methods : </br></br>



<a href="#">www.github.com/michaelmga/MikeFramework/doc/repository/methods.txt </a> </br></br></br>




<h2>Entity Manager</h2> </br>


 Similarly, the super Orm can call the entity manager service anywhere , at any moment. </br></br>


 While repositories are made to read entities, the entity manager is designed to insert, update and delete entities existing in a database.</br></br>

 
 Here is the way to call it , in your controller : </br></br>


 $this->getSuperOrm()->getEntityManager(); </br></br>


 Here is the list of the entity manager's methods :</br></br>


 <a href="#">www.github.com/michaelmga/MikeFramework/doc/entityManager/methods.txt </a> </br></br></br></br>

