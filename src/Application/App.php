<?php

namespace Varsha\Varframe\Application;

class App
{
    protected static $container;

    public static function setContainer($container){

        static::$container = $container;

    }

    public static function conatiner()
    {
        return static::$container;
    }

    public static function resolve($key){
        return static::$container->resolve($key);
    }

}