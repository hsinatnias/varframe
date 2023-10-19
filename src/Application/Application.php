<?php

namespace Varsha\Varframe\Application;


use Varsha\Varframe\Router\Router;
use Varsha\Varframe\Request\RequestParser;


class Application
{
    protected string $appRoot;
    protected Router $route;
    protected RequestParser $request;

    public function __construct(string $appRoot, Router $routes)
    {
        $this->appRoot = $appRoot;
        $this->route = $routes;
        $this->request = new RequestParser();
    }



    public function run(): self
    {

        $this->appContants();
        // dump("Running Application");
        $this->loadTheRouter();

        return $this;
    }

    /**
     * Set default framework and application settings
     *
     * @return void
     */


    /**
     * Private function to define constants useful for application
     */
    private function appContants(): void
    {
        defined('APP_ROOT') or define('APP_ROOT', $this->appRoot);
        defined('CONFIG_PATH') or define('CONFIG_PATH', APP_ROOT . '/app/Config');
    }
    private function loadTheRouter()
    {
        //require CONFIG_PATH . '/Routes.php';
        //$this->route = $routes;
       
    }

    private function matchRequest()
    {
    }
    public function getTest()
    {

        // $this->request = new RequestParser();
        // $requestData =  $this->request->getUrlAndMethod();
        // $requestData = $this->route->getRoutes();

        // return $requestData;
    }


    public function dispatch()
    {
        $url = $this->request->getUrlAndMethod();
        $this->route->dispatch($url['request_uri']);
    }

    /**
     * Undocumented function
     *
     * @param string $url
     * @param array $routes
     * @return self
     */
    // public function setRouteHandler(string $url = null, array $routes = []) : self
    // {
    //     $url =  $url ?? $_SERVER['QUERY_STRING'];
    //     $routes =  $routes ?? YamlConfig::file('routes');

    //     $factory = new RouterFactory($url, $routes);
    //     $factory->create(\Magma\Router\Router::class)->buildRoutes();
    //     return $this;
    // }
}
