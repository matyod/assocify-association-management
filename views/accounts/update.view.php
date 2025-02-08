<?php

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    For Regular Members:
    - Personal information update form (email, password, phone, etc.).
    - Option to update communication preferences (e.g., notification settings).

    For Committee Members (Admins):
    - Same as above, but with potential admin-specific controls to reset other users’ details or permissions.
  </pre>
</div>

<?php

require view_path('partials/bottom.php');

?>