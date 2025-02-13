<?php

use Core\DateTimeCustom;

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    For Committee Members (Admins) only:
    - Display all locations data
  </pre>

  <!--  -->

  <!-- TODO: Maybe put map location? Using leafletjs? -->

  <table>
    NOTE: ADMIN
    <?php if ($locations ?? false): ?>
      <thead>
        <tr>
          <th>Name</th>
          <th>Full address</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($locations as $location): ?>
          <?php $fullAddress = ($location['address1'] ?? '') . ', ' . ($location['address2'] ?? '') . ', ' . ($location['address3'] ?? '') . ', ' . ($location['postcode'] ?? '') . ($location['district'] ?? '') . ', ' . ($location['state'] ?? ''); ?>
          <tr>
            <td><?= htmlspecialchars($location['name'] ?? ''); ?></td>
            <td><?= htmlspecialchars($fullAddress ?? ''); ?></td>
          <tr>
          <?php endforeach; ?>
        <?php else: ?>
        <tr>
          <td>No locations found.</td>
        </tr>
      </tbody>
    <?php endif; ?>
  </table>
</div>

<?php

require view_path('partials/bottom.php');

?>