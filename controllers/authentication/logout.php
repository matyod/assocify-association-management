<?php
$session->logout();

// redirect user to the homepage
sleep(1.5);
header('location: /login');
die();