<?php

// use Core\Session;

// $session = new Session();
$session->destroy();

sleep(2);
// header('Location: /');
header('Location: /login');
die();