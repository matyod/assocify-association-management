<?php

use Core\Location;

$title = 'All Locations | Assocify';
$h1 = 'All Locations';

$location = new Location($db);

$locations = $location->getAllLocations();

require view_path('locations/index.view.php');