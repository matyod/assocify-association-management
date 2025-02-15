<?php

use Core\Event;

$title = 'Event Details | Assocify';
$h1 = 'Event Details';

$event = new Event($db);

if ($_GET['id'] ?? false) {
  // TODO: sanitize id
  $eventID = $_GET['id'];
  $eventDetails = $event->getEventById($eventID);
  require view_path('events/show.view.php');
}