<?php

define('APP_ROOT', __DIR__.'/../');
require APP_ROOT.'/vendor/autoload.php';
use Varsha\Varframe\Application\Application;
Use Varsha\Varframe\App;




require APP_ROOT.'src/functions.php';
setEnvironment();

require realpath(CORE_PATH.'/bootstrap.php');
require APP_ROOT.'/app/Config/Routes.php';





