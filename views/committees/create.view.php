<?php

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    New Committee (For Committee Members only)
    - Form to create a new committee (name, description, etc.).
    - Option to assign committee members and link to events.
  </pre>
</div>

<?php

require view_path('partials/bottom.php');

?>