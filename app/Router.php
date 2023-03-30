<?php

namespace App;

use App\Exceptions\RouteNotFoundException;

class Router
{

    private array $routes = [];

    public function register(string $route, callable|array $action): self
    {
        $this->routes[$route] = $action;
        return $this;
    }

    public function resolve(string $uri)
    {
        $parsed = parse_url($uri);
        $path = $parsed['path'];

        $action = $this->routes[$path] ?? null;

        if (!$action) {
            throw new RouteNotFoundException();
        }

        if (is_callable($action)) {
            return call_user_func($action);
        }

        if (is_array($action)) {
            [$className, $method] = $action;

            if (!class_exists($className)) {
                throw new RouteNotFoundException(sprintf('Class [%s] does not exist', $className));
            }

            $class = new $className();

            if (!method_exists($class, $method)) {
                throw new RouteNotFoundException(sprintf('Method [%s::%s] does not exist', $className, $method));
            }

            return call_user_func_array([$class, $method], []);
        }

        throw new RouteNotFoundException();
    }
}
