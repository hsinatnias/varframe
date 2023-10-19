<?php

namespace Varsha\Varframe\Router;

class Router implements RouterInterface
{

    protected array $routes = [];

    protected array $params = [];


    public function __construct()
    {
        echo "Created<br>";
    }
    public function add(string $route, array $params = []): void
    {
        // Convert the route to a regular expression: escape forward slashes
        $route = preg_replace('/\//', '\\/', $route);

        // Convert variables e.g. {controller}
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z-]+)', $route);

        // Convert variables with custom regular expressions e.g. {id:\d+}
        $route = preg_replace('/\{([a-z]+):([^\}]+)\}/', '(?P<\1>\2)', $route);

        // Add start and end delimiters, and case insensitive flag
        $route = '/^' . $route . '$/i';

        $this->routes[$route] = $params;
    }

    public function dispatch(string $url): void
    {
        $parsed_url = parse_url($url);
        $path = trim($parsed_url['path'], '/');
        $path = explode('/', $path);
        $controller = $path[0];
        $action = $path[1] ?? '';

        if ($this->match($controller)) {
            echo "Found match <br>";
            dump($this->params);
        } else {
            echo "No match found";
        }
    }

    private function match(string $url): bool
    {
        if (preg_match("/^\/beta/i", 'beta', $matches)) {
            return true;
        }
        foreach ($this->routes as $route => $params) {
           
            if (preg_match($route, $url, $matches)) {
                foreach ($matches as $key => $param) {
                    if (is_string($key)) {
                        $params[$key] = $param;
                    }
                }
                $this->params = $params;
                return true;
            }
        }
        return false;
    }

    protected function formatQueryString($url)
    {
        if ($url != '') {
            $parts = explode('&', $url, 2);

            if (strpos($parts[0], '=') === false) {
                $url = $parts[0];
            } else {
                $url = '';
            }
        }

        return rtrim($url, '/');
    }

    public function getRoutes()
    {
        return $this->routes;
    }
}
