

The Routing system is the cornerstone of this framework. </br></br>

Like stated in the <a href="#">get started </a> section, using the htaccess file, all requests are redirected to your root folder. </br></br>

<h4>Here is how it works : </h4> </br>


   Let's imagine you want to access a page you call "welcome page". </br></br>

   Let's create a controller called : Welcome Controller. </br> </br>

   <img src="public/assets/img/routing1.PNG"> </br>


  Let's also create a very simple welcome template.

  (We go over templates in details <a href="#">over there</a>) :  </br>

     
  Now, here is how the rooting will happen :  </br>



  You need to register your routes in the routeArray, that you can find in the "Routes.php" file (for now, the array is totally empty).   </br>


   <img src="public/assets/img/routing2.PNG"> </br>



  Let's create our first route in it.

  Here is a prototype root : [exampleUrl =>  [ "name" => "exampleName" , "controller" => "exampleController" , "method" => "exampleMethod" , "parameters" => ["exampleParam1", "exampleParam1"] ];


  Using this, let's create our welcome route.


  $map =  [rootUrl =>  [ "name" => "exampleName" , "controller" => "exampleController" , "method" => "exampleMethod" , "parameters" => ["exampleParam1", "exampleParam1"] ]

  
  What is the rootUrl constant? 

 As stated here, you can access, in your whole application, all constants define in the file : const.php

      One of the constant is : rootUrl. By default, it is set at the root of your folder.


  Now, lets go element by element.

  Obviously, you can imagine the "name" attribute represents the name you want to give to your route.


  Now, the controller attribute. Simply enter the name of the controller you already created in the folder "controllers". The Framework will authomatically call it when the request is done.

  You can imagine the method attribute refers to a method of this controller.

  Finally, the parameters attribute refers to the parameters to pass to the method we just mentioned (it can be empty).
  




      //const.php


      define("rootUrl", "const.php");

   
   Let's imagine your application is hosted on : 

   www.myApp.fr





