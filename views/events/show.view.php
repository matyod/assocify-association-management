<?php

use Core\DateTimeCustom;

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>

  <!--  -->

  <div>
    <?php if (!$eventDetails): ?>
      <p>There are no events to display.</p>
    <?php else: ?>
      <p><?= htmlspecialchars($eventDetails['event_name']); ?></p>
      <p>Date: <?= htmlspecialchars((new DateTimeCustom($eventDetails['event_date']))->formatDate_dmY() ?? ''); ?></p>
      <p>Day: <?= htmlspecialchars((new DateTimeCustom($eventDetails['event_date']))->formatDay_l() ?? ''); ?></p>
      <p>Time:
        <?= htmlspecialchars((new DateTimeCustom($eventDetails['event_date']))->formatTime_12HrsMeridiem() ?? ''); ?>
      </p>
      <p><?= htmlspecialchars($eventDetails['description']); ?></p>
    <?php endif; ?>
  </div>
</div>

<?php

require view_path('partials/bottom.php');

?>