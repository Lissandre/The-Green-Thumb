<?php

include '../database/database.php';

/**
 * Routing
 */

define ('URL','http://localhost/Semaine-Intensive-H2T2');

 //Get q param
 $q = !empty($_GET['q']) ? $_GET['q'] : 'home';

 //define controller
 $controller = '404';

 if($q == 'home')
{
    $controller = 'home';
} else if ($q == 'about-us')
{
    $controller = 'about';
}

/**
 * prepare your POST here
 */






 //include controller
 include '../controllers/'.$controller.'.php';