<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once("vendor/autoload.php");

//instantiate the F3 Base class
$f3=Base::instance();

//define the default route
$f3->route("GET /",function (){
    $view = new Template();
    echo $view->render('views/home.html');
});

//run fat free
$f3->run();