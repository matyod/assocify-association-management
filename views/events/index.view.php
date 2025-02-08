<?php

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    For Regular Members:
    - Display a list of upcoming and past events, with descriptions, dates, and locations.
    - Ability to register for events they are not yet signed up for.

    For Committee Members (Admins):
    - Display events and detailed info on registrants (who is attending).
    - Access to register/remove members for specific events.
  </pre>
</div>

<?php

require view_path('partials/bottom.php');

?>