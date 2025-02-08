<?php

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    Update Committees (For Committee Members only)
    - Ability to modify committee details, such as name and description.
    - Manage committee member assignments.
  </pre>
</div>

<?php

require view_path('partials/bottom.php');

?>