<?php

namespace Core;

class Session
{
  public function __construct()
  {
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }
  }

  public function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  public function get($key)
  {
    return $_SESSION[$key] ?? null;
  }

  public function login($params = [])
  {
    foreach ($params as $key => $value) {
      $this->set($key, $value);
    }
    session_regenerate_id(true);
  }

  public function logout()
  {
    // clear session superglobal
    $_SESSION = [];

    // destroy all data registered to a session
    session_destroy();

    // grab the cookie parameter
    $params = session_get_cookie_params();

    // delete the session cookie
    setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    // 3600 is the seconds in an hour
    // time() - 3600 means set the expiration time to an hour ago
  }
}