<?php

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    Show QR
    - Generate a personal QR code for the member, which could be used for event check-ins or identification.
  </pre>
</div>

<?php

require view_path('partials/bottom.php');

?>