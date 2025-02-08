<?php

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    For Committee Members only (Admins):
    - List of all members, showing their committee memberships, events, and activity.
    - Search and filter by membership status, role, or event participation.
  </pre>
</div>

<?php

require view_path('partials/bottom.php');

?>