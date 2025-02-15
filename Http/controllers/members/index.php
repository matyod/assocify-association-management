<?php

use Core\Member;

$title = 'All Members | Assocify';
$h1 = 'All Members';

$memberObj = new Member($db);

$members = $memberObj->getAllMembers();

require view_path('members/index.view.php');