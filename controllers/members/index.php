<?php

use Core\Member;

$title = 'All Members | Assocify';
$h1 = 'All Members';

$member = new Member($db);

$members = $member->getAllMembers();

require view_path('members/index.view.php');