<?php

use Core\DateTimeCustom;

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>

  <!--  -->

  <div>
    <?php if (!$memberDetails): ?>
      <p>There are no member to display.</p>
    <?php else: ?>
      <p>Member ID: <?= htmlspecialchars($memberObj->padMemberId($memberDetails['member_id']) ?? ''); ?></p>
      <p>Username: <?= htmlspecialchars($memberDetails['username'] ?? ''); ?></p>
      <p>First name: <?= htmlspecialchars($memberDetails['first_name'] ?? ''); ?></p>
      <p>Last name: <?= htmlspecialchars($memberDetails['last_name'] ?? ''); ?></p>
      <p>Email: <?= htmlspecialchars($memberDetails['email'] ?? ''); ?></p>
      <p>Phone number: <?= htmlspecialchars($memberDetails['phone_number'] ?? ''); ?></p>
      <p>Member since: <?= htmlspecialchars((new DateTimeCustom($memberDetails['created_at']))->formatDate_dmY() ?? ''); ?></p>
      <p>Last updated: <?= htmlspecialchars((new DateTimeCustom($memberDetails['updated_at']))->formatDateTime_dMYHiS() ?? ''); ?></p>
    <?php endif; ?>
  </div>
</div>

<?php

require view_path('partials/bottom.php');

?>