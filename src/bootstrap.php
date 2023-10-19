<?php

use Varsha\Varframe\App;
use Varsha\Varframe\Container;
use Varsha\Varframe\Router\Router;



$container = new Container();
APP::setContainer($container);


$router = new Router();
require base_path('/app/Config/Routes.php');
$router->dispatch('');

//$container->bind('Router', function (){
//    $routes = require base_path('/app/Config/Routes.php');
//    return new Router($routes);
//});




