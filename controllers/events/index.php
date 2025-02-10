<?php

use Core\Event;
use Core\DateTimeCustom;

$title = 'All Events | Assocify';
$h1 = 'All Events';

$event = new Event($db);

$events = $event->getAllEvents();

require view_path('events/index.view.php');