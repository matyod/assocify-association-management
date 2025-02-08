<?php

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    New Event (For Committee Members only)
    - Form to create a new event (name, description, date, location).
    - Option to assign the event to specific committees.
  </pre>
</div>

<?php

require view_path('partials/bottom.php');

?>