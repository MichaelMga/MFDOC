<h1>Controllers</h1>

 </br>

   Of course, to understand how to use controllers, you need to understand how the routing system functions. </br> </br>

 
   Here, we'll consider you know how to call a controller





   ArticleController extends AbstractClass{


    }



<p>Controllers have a set of built in functions</p>


<p>Let's take an example : </p>


 </br>
 </br>


 Let's say you want to render an article :

 </br>
 </br>

  First build a folder "articles" in the templates folder.

  </br>

  Build a file show.php in it.

  </br>

  You template file looks like this :


  </br>
  </br>



  templates/articles/show.php </br>


  </br>
  </br>


  Now, write a few things in it :  </br>


   <h1>I'm an article template</h1>



 ArticleController extends AbstractClass{

   public function renderArticle(){

       return $this->render("articles/show");
   }
}

  </br>
  </br>

  Now, notice we used a built in function called "render", coming from the AbstractController.

  </br>
  </br>

  Now, when you call the function renderPage("article/show"), it renders :


    //templates/show.php



    Temp^lates


 You can logically sees how it works there. However, there is another handy tool coming with this function.

 You can actually pass it a bunch of variables, directly usable into the templates.   
 
  </br>
  </br>


  templates/articles/show.php </br>

 ArticleController extends AbstractClass{

   public function renderArticle(){

       $var = "I'm a handy variable";

       return $this->render("articles/show", ["myVar" => $var]);
   }
}


</br>
</br>



Now, when you'll render your template : </br>




ArticleController extends AbstractClass{

public function renderArticle(){

    $var = "I'm a handy variable";

    return $this->render("articles/show", ["myVar" => $var]);
}
}  


</br>
</br>



Now, when you'll render your template : </br>





//templates/show.php

<h1>I'm an article template</h1>

<p> My var :

  <?php
     
     echo '$myVar';

  ?> 

</br>
</br>


  Magical, right?

  </br>
  </br>

  Now, as mentionned in the ==>get started section, this project follows psr7 reglementation. So, you shouldn' forget to add a "use on top";

  </br>
  </br>

  

  <h3>SupperOrm</h3>


   You can reach the superOrm class anywhere you want within your function

 
     $superOrm = $this->getSuperOrm();  
 
       </br>
  <h3>SupperOrm</h3>


     Now, you can know more 


     <h3>Entity Manager</h3>



     You can also reach the entity manager like this </br> </br>


     $entityManager = $this->getEntityManager();  
    

   </br>
   </br>
