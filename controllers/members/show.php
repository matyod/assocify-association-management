<?php

use Core\Member;

$title = 'Member Details | Assocify';
$h1 = 'Member Details';

$memberObj = new Member($db);

if ($_GET['id'] ?? false) {
  // TODO: sanitize id
  $memberId = $_GET['id'];
  $memberDetails = $memberObj->getMemberById($memberId);
  require view_path('members/show.view.php');
}