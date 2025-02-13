<?php

use Core\DateTimeCustom;

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>

  <!--  -->

  <div>
    <?php if (!$committeeDetails): ?>
      <p>There are no committees to display.</p>
    <?php else: ?>
      <table>
        <thead>
          <tr>
            <th>Role</th>
            <th>Member ID</th>
            <th>Username</th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($committeeDetails as $committeeDetail): ?>
            <tr>
              <td><?= htmlspecialchars($committeeDetail['role'] ?? ''); ?></td>
              <td><?= isset($committeeDetail['c_member_id']) ? '<a href="/member?id=' . htmlspecialchars($committeeDetail['c_member_id']) . '">' . htmlspecialchars($memberObj->padMemberId($committeeDetail['c_member_id']) ?? '') . '</a>' : '';  ?></td>
              <td>
                <?= htmlspecialchars($committeeDetail['username'] ?? ''); ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>
</div>

<?php

require view_path('partials/bottom.php');

?>