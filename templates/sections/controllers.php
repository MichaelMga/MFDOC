 </br>

 <div class="textBlock">


<h1>Controllers</h1>

 </br>


  This framework being based on an MVC architecture, controllers are of course the cornerstone of our structure. </br> 

   Of course, to understand how to use controllers, </br> </br>

 
   Here, we'll consider you took notice of the <a href="#">routing</a> section, and you know how to call a controller in your application.  </br> </br>


   Every controller extend the AbstractController class. It gives those a set of built in functions.  </br> </br>




<p>Controllers come with a set of built in functions</p> </br>


<p>Let's take an example : </p> </br>


 </br>
 </br>


<h3>Rendering a page</h3>
 
 </br>
 </br>

 Let's say you want to render an article. </br>
 </br>

  First build a folder "articles" in the templates folder.</br>
 
 </br>
 </br>

  Then, build a file called "show.php" in this folder.

  </br>

  You template file looks like this :


  </br>
  </br>



  </br>
  </br>


  Now, write a few things in it :  </br>



  <img class="controllerImgSmall2" src="public/assets/img/controllers1.PNG">   </br>  </br>



  </br>
  </br>

  Now, let's build a method dedicated to render an article : </br>




  <img class="controllerImgSmall2" src="public/assets/img/controllers2.PNG">   </br>  </br>


  Now, notice we used a built in function called "render", coming from the AbstractController.

  </br>
  </br>

  Now, when you call the function renderPage("article/show"), it renders the file <b>"templates/show.php".</b>

  </br>
  </br>
  

 There is another handy tool coming with the  <b>render()</b> function.

 You can actually pass it a bunch of variables, directly usable into the templates.   
 
  </br>
  </br>


  <img class="controllerImgMedium" src="public/assets/img/controllers3.PNG">   </br>  </br>



</br>
</br>



Now, when you'll render your template : </br>




<img class="controllerImgSmall" src="public/assets/img/controllers4.PNG">   </br>  </br>



  Magical, right?

  </br>
  </br>

  Now, as mentionned in the ==>get started section, this project follows psr7 reglementation. So, you shouldn' forget to add a "use on top";

  </br>
  </br>
  </br>
  </br>

  


  <h3>SuperOrm</h3> </br>


   You can reach the superOrm class anywhere you want within your function :   </br> </br>

   <img class="controllerImgSmall" src="public/assets/img/controllers5.PNG">   </br>  </br>



     To learn more about the superOrm, visit the <a href="<?php echo rootUrl ?>superOrm"> dedicated section</a>.   </br>  </br>  </br>   </br>


   </div>


   </br>
   </br>
