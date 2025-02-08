<?php

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
</div>

<?php

require view_path('partials/bottom.php');

?>