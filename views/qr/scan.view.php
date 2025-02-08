<?php

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    Scan QR
    - Use this feature to scan QR codes at events for check-ins or to access event-related materials.
  </pre>
</div>

<?php

require view_path('partials/bottom.php');

?>