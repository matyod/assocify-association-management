<?php

require view_path('partials/top.php');

?>

<div class="p-4 pt-20 sm:ml-64 min-h-screen">
  <?php if ($_SESSION) {
    dump($_SESSION);
  } ?>
  <h1 class="text-2xl"><?= $h1 ?? ''; ?></h1>
  <pre>
    For Regular Members:
    - Overview of upcoming events they are interested in or have registered for.
    - Quick access to notifications (recent updates, event reminders).
    - Quick link to their profile and personal info.

    For Committee Members (Admins):
    - A similar view as regular members but also showing quick stats like number of upcoming events, 
    active committees, or any pending actions (e.g., unassigned members or events).
    - Quick link to manage members and events.

    Additional Suggestions for Improvements:

    Event Registration Status (New)
    - Display event registration status for members (e.g., whether they are already registered or have been 
    accepted into the event). This could be an additional feature under the Events section.

    Member Communication (New)
    - An internal messaging system (for admins and committee members to communicate with members). 
    This could be added in the Members section. For example, a “Send Message” button where admins can send 
    direct messages to regular members, or vice versa.

    Event Analytics (New for Admins)
    - Under Events or a dedicated Analytics section, provide admin users with insights like event attendance rates, 
    popular events, and member participation history. You can extract this from the events and committees data.

    Event Feedback (New)
    - Allow event participants (regular members) to provide feedback after attending an event. Admins can review the feed
  </pre>
</div>

<!-- <div class="antialiased bg-gray-50 dark:bg-gray-900">
  <main class="p-4 md:ml-64 h-auto pt-20">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
      <div class="border-2 border-dashed border-gray-300 rounded-lg dark:border-gray-600 h-32 md:h-64"></div>
      <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
      <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
      <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-32 md:h-64"></div>
    </div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
    <div class="grid grid-cols-2 gap-4 mb-4">
      <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
      <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
      <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
      <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    </div>
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-4"></div>
    <div class="grid grid-cols-2 gap-4">
      <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
      <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
      <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
      <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72"></div>
    </div>
  </main>
</div> -->

<?php

require view_path('partials/bottom.php');

?>