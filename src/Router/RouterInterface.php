<?php
namespace Varsha\Varframe\Router;

interface RouterInterface
{
    public function add(string $route, array $params =[]): void;

    public function dispatch(string $url): void;
}