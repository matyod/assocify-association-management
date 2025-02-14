<?php

namespace Core\Middleware;

class Guest
{
  public function handle()
  {
    if ($_SESSION['logged-in'] ?? false) {
      header('Location: /home');
      die();
    }
  }
}