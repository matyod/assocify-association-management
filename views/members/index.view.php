<?php

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
          <?php foreach ($member as $key => $value): ?>
            <?php if (is_string($value) && $key === 'updated_at'): ?>
              <?php $datetime = DateTime::createFromFormat('Y-m-d H:i:s', $value); ?>
              <td><?= htmlspecialchars($datetime->format('D, d/m/Y H:i:s') ?? ''); ?></td>
            <?php elseif (is_string($value) && $key !== 'updated_at'): ?>
              <?php $datetime = DateTime::createFromFormat('Y-m-d H:i:s', $value); ?>
              <?php if ($datetime && $datetime->format('Y-m-d H:i:s') === $value): ?>
                <td><?= htmlspecialchars($datetime->format('d/m/Y') ?? ''); ?></td>
              <?php else: ?>
                <td><?= htmlspecialchars($value ?? ''); ?></td>
              <?php endif; ?>
            <?php else: ?>
              <td><?= htmlspecialchars($value ?? ''); ?></td>
            <?php endif; ?>
          <?php endforeach; ?>
        </tr>
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