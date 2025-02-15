<?php

namespace Core;

use Core\Response;
use Core\Middleware\Middleware;

class Router
{
  protected $routes = [];

  public function add($uri, $controller, $method)
  {
    $this->routes[] = [
      'uri' => $uri,
      'controller' => $controller,
      'method' => $method,
      'middleware' => null,
    ];

    return $this;
  }

  public function route($uri, $method)
  {
    foreach ($this->routes as $route) {
      if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
        // dumpDie($this->routes);
        Middleware::resolve($route['middleware']);

        return base_path('Http/controllers/'.$route['controller']);
      }
    }

    $this->abort();
  }

  public function only($key)
  {
    // dumpDie($this->routes);
    $this->routes[array_key_last($this->routes)]['middleware'] = $key;
    // array_key_last($this->routes) grab the last item key in the array because route request with only() is the recent item added into the routes

    // dumpDie($this->routes);
    return $this; // to potentially chain further
  }

  public function abort($status = Response::NOT_FOUND)
  {
    http_response_code($status);
    require base_path('controllers/errors/error.php');
    die();
  }

  public function get($uri, $controller)
  {
    return $this->add($uri, $controller, 'GET');
  }

  public function post($uri, $controller)
  {
    return $this->add($uri, $controller, 'POST');
  }

  public function put($uri, $controller)
  {
    return $this->add($uri, $controller, 'PUT');
  }

  public function patch($uri, $controller)
  {
    return $this->add($uri, $controller, 'PATCH');
  }

  public function delete($uri, $controller)
  {
    return $this->add($uri, $controller, 'DELETE');
  }


}