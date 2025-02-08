<?php

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    For Regular Members:
    - List of all notifications relevant to the member, such as event reminders or committee updates.
    - Option to filter by notification type (e.g., event, general, or committee updates).

    For Committee Members (Admins):
    - Create, view, or manage notifications for members (targeting specific committees or members).
    - View past notifications and their recipients.
  </pre>
</div>

<?php

require view_path('partials/bottom.php');

?>