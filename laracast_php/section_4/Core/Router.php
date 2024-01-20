<?php

namespace Core;

use Core\Middleware\Auth;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;

class Router
{
    protected $routes = [];

    public function add($method, $uri, $controller): Router
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];
        return $this;
    }

    public function get($uri, $controller): Router
    {
        return $this->add('GET', $uri,$controller);
    }

    public function post($uri, $controller): Router
    {
        return $this->add('POST', $uri,$controller);
    }

    public function delete($uri, $controller): Router
    {
        return $this->add('DELETE', $uri,$controller);
    }

    public function patch($uri, $controller): Router
    {
        return $this->add('PATCH', $uri,$controller);
    }

    public function put($uri, $controller): Router
    {
        return $this->add('PUT', $uri,$controller);
    }
    public function only($key): void
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;
    }

    /**
     * @throws \Exception
     */
    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {

                Middleware::resolve(($route['middleware']));

                return require base_path($route['controller']);
            }
        }
        $this->abort();
    }
    protected function abort($code = 404): void
    {
        http_response_code($code);

        require base_path("views/{$code}.php");

        die();
    }

}
