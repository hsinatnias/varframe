<?php
function dd($value)
{

    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function view($path, $attributes=[]){

    extract($attributes);
    require base_path("views/".$path);
    die();
}
function base_path($path)
{
    return APP_ROOT . $path;
}

 function setEnvironment()
{
    ini_set('default_charset', 'UTF-8');
}