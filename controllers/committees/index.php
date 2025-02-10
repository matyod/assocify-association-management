<?php

use Core\Committee;

$title = 'All Committees | Assocify';
$h1 = 'All Committees';

$committee = new Committee($db);

$committees = $committee->getAllCommittees();

require view_path('committees/index.view.php');