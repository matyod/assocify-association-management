<?php

use Core\Committee;
use Core\Member;

$title = 'Committee Details | Assocify';
$h1 = 'Committee Details';

$committeeObj = new Committee($db);
$memberObj = new Member($db);

if ($_GET['id'] ?? false) {
  // TODO: sanitize id
  $committeeID = $_GET['id'];
  $committeeDetails = $committeeObj->getCommitteeMembersByCommitteeId($committeeID);
  // dd($committeeDetails);
  require view_path('committees/show.view.php');
}