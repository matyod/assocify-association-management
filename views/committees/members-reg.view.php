<?php

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    Register Committee Members (For Committee Members only)
    - Form to assign new members to committees, selecting from a list of available members.
    - Option to remove or reassign members.
  </pre>
</div>

<?php

require view_path('partials/bottom.php');

?>