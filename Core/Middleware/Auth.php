<?php

namespace Core\Middleware;

class Auth
{
  public function handle()
  {
    if (!$_SESSION['logged-in'] ?? false) {
      header('location: /login');
      die();
    }
    return;
  }
}