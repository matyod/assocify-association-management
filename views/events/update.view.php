<?php

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    Update Events (For Committee Members only)
    - Option to edit or delete an existing event (change description, date, location).
    - View who’s attending and the registration status.
  </pre>
</div>

<?php

require view_path('partials/bottom.php');

?>