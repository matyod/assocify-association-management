<?php

use Core\DateTimeCustom;

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    For Regular Members:
    - Display a list of upcoming and past events, with descriptions, dates, and locations.
    - Ability to register for events they are not yet signed up for.

    For Committee Members (Admins):
    - Display events, organized by what committee, and detailed info on registrants (who is attending).
    - Access to register/remove members for specific events.
  </pre>

  <!--  -->

  <table>
    NOTE: MEMBER(USER)
    <?php if ($events ?? false): ?>
      <tr>
        <th>Date</th>
        <th>Day</th>
        <th>Time</th>
        <th>Event</th>
        <th>Description</th>
        <th></th>
      </tr>
      <?php foreach ($events as $event): ?>
        <tr>
          <td><?= htmlspecialchars((new DateTimeCustom($event['event_date']))->formatDate_dmY() ?? ''); ?></td>
          <td><?= htmlspecialchars((new DateTimeCustom($event['event_date']))->formatDay_l() ?? ''); ?></td>
          <td><?= htmlspecialchars((new DateTimeCustom($event['event_date']))->formatTime_12HrsMeridiem() ?? ''); ?></td>
          <td>
            <?= '<a href="/event?id=' . ($event['event_id'] ?? '') . '">' . htmlspecialchars($event['event_name'] ?? '') . '</a>'; ?>
          </td>
          <td><?= htmlspecialchars($event['description'] ?? ''); ?></td>
        <tr>
        <?php endforeach; ?>
      <?php else: ?>
      <tr>
        <td>No events found.</td>
      </tr>
    <?php endif; ?>
  </table>

  <!--  -->

  <table>
    NOTE: ADMIN
    <?php if ($events ?? false): ?>
      <tr>
        <th>Date</th>
        <th>Day</th>
        <th>Time</th>
        <th>Event</th>
        <th>Description</th>
        <th>Organized by</th>
        <th>Created at</th>
        <th>Last updated</th>
        <th></th>
      </tr>
      <?php foreach ($events as $event): ?>
        <tr>
          <td><?= htmlspecialchars((new DateTimeCustom($event['event_date']))->formatDate_dmY() ?? ''); ?></td>
          <td><?= htmlspecialchars((new DateTimeCustom($event['event_date']))->formatDay_l() ?? ''); ?></td>
          <td><?= htmlspecialchars((new DateTimeCustom($event['event_date']))->formatTime_12HrsMeridiem() ?? ''); ?></td>
          <td>
            <?= '<a href="/event?id=' . ($event['event_id'] ?? '') . '">' . htmlspecialchars($event['event_name'] ?? '') . '</a>'; ?>
          </td>
          <td><?= htmlspecialchars($event['description'] ?? ''); ?></td>
          <td>
            <?= '<a href="/committee?id=' . ($event['committee_id'] ?? '') . '">' . htmlspecialchars($event['committee_name'] ?? '') . '</a>'; ?>
          </td>
          <td><?= htmlspecialchars((new DateTimeCustom($event['created_at']))->formatDateTime_dMYHiS() ?? ''); ?></td>
          <td><?= htmlspecialchars((new DateTimeCustom($event['updated_at']))->formatDateTime_dMYHiS() ?? ''); ?></td>
          <td><a href="/event/new/participant?id=<?= htmlspecialchars($_SESSION['user_id'] ?? ''); ?>">Register as
              participant</a></td>
        <tr>
        <?php endforeach; ?>
      <?php else: ?>
      <tr>
        <td>No events found.</td>
      </tr>
    <?php endif; ?>
  </table>
</div>

<?php

require view_path('partials/bottom.php');

?>