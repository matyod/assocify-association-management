<?php

use Core\DateTimeCustom;

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    For Regular Members:
      - List of all active committees with descriptions.
      - Display which committees they are a part of, with a link to register for a committee.

    For Committee Members (Admins):
      - View all committees, their members, events, and recent activities.
      - Option to manage the committee (assign or remove members, change committee details).
  </pre>

  <table>
    NOTE: ADMIN
    <?php if ($committees ?? false): ?>
      <tr>
        <th>Committee ID</th>
        <th>Committee name</th>
        <th>Description</th>
        <th>Created at</th>
        <th>Last updated</th>
      </tr>

      <?php foreach ($committees as $committee): ?>
        <tr>
          <td><?= htmlspecialchars($committee['committee_id' ?? '-']); ?></td>
          <td>
            <?= '<a href="/committee?id=' . htmlspecialchars($committee['committee_id']) . '">' . htmlspecialchars($committee['committee_name' ?? '-']); ?>
          </td>
          <td><?= htmlspecialchars($committee['description' ?? '-']); ?></td>
          <td><?= htmlspecialchars((new DateTimeCustom($committee['created_at']))->formatDate_dmY() ?? '-'); ?></td>
          <td><?= htmlspecialchars((new DateTimeCustom($committee['updated_at']))->formatDateTime_dMYHiS() ?? '-'); ?></td>
        <tr>
        <?php endforeach; ?>
      <?php else: ?>
      <tr>
        <td>No committees found.</td>
      </tr>
    <?php endif; ?>
  </table>
</div>

<?php

require view_path('partials/bottom.php');

?>