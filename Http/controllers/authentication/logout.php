<?php
$session->logout();

// redirect user to the login page
sleep(1.5);
header('location: /login');
die();