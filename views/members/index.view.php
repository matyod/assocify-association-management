<?php

use Core\DateTimeCustom;

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= htmlspecialchars($h1 ?? ''); ?></h1>

  <!-- TODO: pagination of maybe 50 per pages? -->

  <pre>
    For Committee Members only (Admins):
    - List of all members, showing their committee memberships, events, and activity.
    - Search and filter by membership status, role, or event participation.
  </pre>

  <table>
    NOTE: ADMIN
    <?php if ($members ?? false): ?>
      <tr>
        <th>Member ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Phone number</th>
        <th>Member since</th>
        <th>Committee</th>
        <th>Role</th>
        <th>Joined committee</th>
        <th>Last updated</th>
      </tr>

      <?php foreach ($members as $member): ?>
        <tr>
          <td><?= htmlspecialchars(str_pad($member['member_id'], 6, '0', STR_PAD_LEFT) ?? ''); ?></td>
          <td><?= htmlspecialchars($member['username'] ?? '-'); ?></td>
          <td><?= htmlspecialchars($member['email'] ?? '-'); ?></td>
          <td><?= htmlspecialchars($member['first_name'] ?? '-'); ?></td>
          <td><?= htmlspecialchars($member['last_name'] ?? '-'); ?></td>
          <td><?= htmlspecialchars($member['phone_number'] ?? '-'); ?></td>
          <td><?= htmlspecialchars((new DateTimeCustom($member['created_at']))->formatDate_dmY() ?? '-'); ?></td>
          <td>
            <?= isset($member['committee_name']) ? '<a href="/committees/?id=' . htmlspecialchars($member['committee_id']) . '">' . htmlspecialchars($member['committee_name']) . '</a>' : '-'; ?>
          </td>
          <td><?= htmlspecialchars($member['role'] ?? '-'); ?></td>
          <td>
            <?= htmlspecialchars(isset($member['joined_at']) ? (new DateTimeCustom($member['joined_at']))->formatDate_dmY() : '-'); ?>
          </td>
          <td><?= htmlspecialchars((new DateTimeCustom($member['updated_at']))->formatDateTime_dMYHiS() ?? '-'); ?></td>
        <tr>
        <?php endforeach; ?>
      <?php else: ?>
      <tr>
        <td>No members found.</td>
      </tr>
    <?php endif; ?>
  </table>
</div>

<?php

require view_path('partials/bottom.php');

?>