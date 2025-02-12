<?php

use Core\Logger;

function d($value)
{
  echo '<pre>';
  var_dump($value);
  echo '</pre>';
}

function dd($value)
{
  d($value);
  die();
}

function base_path($path = '')
{
  return BASE_PATH . $path;
}

function view_path($path)
{
  return base_path('views/' . $path);
}

function logError($logCategory, $logMessage)
{
  (new Logger)->logError($logCategory, $logMessage);
}