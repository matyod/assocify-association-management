<?php

namespace Core\Middleware;

class Middleware
{
  const MAP = [
    'guest' => Guest::class,
    'auth' => Auth::class,
  ];
  // NOTE: This return the fully qualified name of the class including its namespace

  public static function resolve($key)
  {
    if (!$key) {
      return;
    }
    $middleware = static::MAP[$key];

    if(!$middleware){
      throw new \Exception("No matching middleware found for $key");
    }
    (new $middleware)->handle();
    // NOTE: Late Static Binding allows the method or property to refer to the class that was called at runtime, not where the method was defined.
    // NOTE: If Middleware is extended by another class let say CustomMiddleware, the static::MAP would resolve to CustomMiddleware::MAP instead of Middleware::MAP depending on which class calls resolve().
  }
}