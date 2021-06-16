

 </br></br>

<h2>Install the framework</h2> </br></br>


You can download the project there : </br>

<a href="#">www.github.com/MikeFramework </a> </br></br>




<h2>The console</h2> </br>


This project comes with a console component,  with a series of commands, listed there : </br> </br>


<a href="#">www.github.com/MikeFramework/doc/console/commands.txt </a> </br></br>


Here are a few of those : </br> </br>
 
 > php bin/console/createEntity.php   </br> </br>


Type this line your cli, and you'll be offered the opportunity to build an entity in your system. </br></br>



>php bin/console/updateEntity.php  </br></br>


This line will give you the oportunity to add new property to one of your entities (meaning, a new column to one of your tables). </br></br>

>php bin/console/buildRelationship.php </br></br>




<h2>The heart of the framework</h2> </br></br>

<p>


The .htacces of the framework is initially setup to redirect all requests to the index.php file, located at the root of your folder. </br></br>



//index.php  </br></br>


<img src="public/assets/img/indexImg.PNG">

</br></br> </br>

The two main things to focus on here are the routes and url matcher.
 </br></br>


<a href="#">Here</a> is the section about the routing component , and the routes in general. </br>

 For now, you only need to understand that the <span style="color:blue">$routes</span> variable stores all the routes of your application. It stores the different of your application , and the controller methods associated with those. </br>  </br> </br>

 Imagine that you make the following request : examplewebsite.com/login. </br>

 The url matcher will look for a route, registered with the url "examplewebsite.com/login". </br>


 If it finds a route, it will find the registered controller , and execute the referenced method. </br>



 </br></br>


<h2>Autoload : </h2> </br>

This framework follows implements PSR7 reglementation. </br>

Here is an example to understand the autoloading architecture of this app : </br></br>


    <img src="public/assets/img/getStarted1.PNG"> </br>



  Now, imagine you run the following script in your index.php file </br></br>
 
  <img src="public/assets/img/getStarted2.PNG"> </br>



  This script will actually authomatically call "src/controllers/MyController.php"; </br> </br>

  Basically "App" refers to the "src" folder. </br>


  





</p>



</br></br></br></br></br>