<?php


 $routes = [

    rootUrl => ["home" => "home", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["sections/getStarted"]  ],

    rootUrl . "getStarted" => ["getStarted" => "home", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["sections/getStarted"]  ],
    rootUrl . "routing"=> ["name" => "routing", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["sections/routing"]  ],
    rootUrl . "superOrm" => ["name" => "superOrm", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["sections/superOrm"]  ],
    rootUrl . "controllers" => ["name" => "controllers", "controller" => "App\Controllers\FrontController" , "method" =>  "displayPage" , "parameters" => ["sections/controllers"]  ]

];