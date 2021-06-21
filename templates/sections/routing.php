</br>

<div class="textBlock">

The Routing system is the cornerstone of this framework. </br></br>

Like stated in the <a href="#">get started </a> section, using the htaccess file, all requests are redirected to your root folder. </br></br>

<h4>Here is how it works : </h4> </br>


   Let's imagine you want to access a page you call "welcome page". </br></br>

   Let's create a controller called : Welcome Controller. </br> </br>

   <img class="docImgSmall" src="public/assets/img/routing1.PNG"> </br>


  Let's also create a very simple welcome template.

  (We go over templates in details <a href="#">over there</a>) :  </br>

     
  Now, here is how the rooting will happen :  </br>



  You need to register your routes in the routeArray, that you can find in the "Routes.php" file (for now, the array is totally empty). </br>


   <img class="docImgSmall" src="public/assets/img/routing2.PNG"> </br>



   <h5> Let's create our first route in it. </h5> </br>

  Here is a prototype root : [exampleUrl =>  [ "name" => "exampleName" , "controller" => "exampleController" , "method" => "exampleMethod" , "parameters" => ["exampleParam1", "exampleParam1"] ]; </br></br>


  Using this, let's create our welcome route.</br>


  $routes =  [rootUrl =>  [ "name" => "exampleName" , "controller" => "exampleController" , "method" => "exampleMethod" , "parameters" => ["exampleParam1", "exampleParam1"] ]; </br></br>

  
  What is the rootUrl constant? .</br></br>
 
 As stated here, you can access, in your whole application, all constants define in the file : const.php .</br></br>

      One of the constant is : rootUrl. By default, it is set at the root of your folder.</br></br></br>


      <h5> Now, lets go element by element </h5></br></br>

  Obviously, you can imagine the <b>"name"</b> attribute represents the name you want to give to your route. </br> </br>


  -Now, the <b>"controller" </b> attribute.</br> </br> 
  
  
  Simply enter the name of the controller you already created in the folder <b>"controllers"</b>.</br></br> 
  
  The Framework will authomatically call it when the request is done. .</br></br> 

  You can imagine the  <b>"method"</b> attribute refers to a method of this controller. .</br></br> 

  Finally, the <b>"parameters"</b> attribute refers to the parameters to pass to the method we just mentioned (it can be empty). </br> </br>
  
</div>

  </br></br></br>


