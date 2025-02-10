<?php

$title = 'All Members | Assocify';
$h1 = 'All Members';

$members = $member->getAllMembers();

require view_path('members/index.view.php');