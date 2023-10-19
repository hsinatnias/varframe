<?php

require APP_ROOT.'/vendor/autoload.php';


use Varsha\Varframe\Application\Application;
require APP_ROOT.'/app/Config/Routes.php';

$app = new Application(APP_ROOT, $routes);
$app->run();
$app->dispatch();

// $requestData =$app->getTest();
// dump($requestData);

