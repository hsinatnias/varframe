<?php
define('APP_ROOT', __DIR__.'/../');
require APP_ROOT.'/vendor/autoload.php';
use Varsha\Varframe\Application\Application;





require APP_ROOT.'src/functions.php';
$router = new \Varsha\Varframe\Router\Router();
$app = new Application(APP_ROOT);
$app->run();
$sample = $app->getTest();
dd($sample);


