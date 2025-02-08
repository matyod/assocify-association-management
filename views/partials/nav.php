<nav>
  <aside id="sidebar-multi-level-sidebar"
    class="fixed top-14 left-0 bottom-0 z-40 w-64 transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 bg-gray-800 dark:bg-gray-800 grid content-between">
      <div class="overflow-y-auto">
        <ul class="space-y-2 font-medium">
          <!-- <li>
            <p class="flex items-center p-2 pl-0 text-gray-900 rounded-lg dark:text-white">
              <span class="ms-3">Member ID:
                <?= isset($memberData['member_id']) ? str_pad($memberData['member_id'], 10, '0', STR_PAD_LEFT) : ''; ?></span>
            </p>
          </li>

          <hr class="w-54 h-1 mx-auto my-4 bg-gray-100 border-0 rounded-sm md:my-10 dark:bg-gray-700"> -->

          <li>
            <a href="/"
              class="<?= $uri === '/' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg
                class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path fill="currentColor"
                  d="M4 19v-9q0-.475.213-.9t.587-.7l6-4.5q.525-.4 1.2-.4t1.2.4l6 4.5q.375.275.588.7T20 10v9q0 .825-.588 1.413T18 21h-3q-.425 0-.712-.288T14 20v-5q0-.425-.288-.712T13 14h-2q-.425 0-.712.288T10 15v5q0 .425-.288.713T9 21H6q-.825 0-1.412-.587T4 19" />
              </svg>
              <span class="ms-3">Home</span>
            </a>
          </li>
          <li>
            <a href="/notifications"
              class="<?= $uri === '/notifications' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
              <svg
                class="w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 24">
                <g fill="none">
                  <path
                    d="m12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.019-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                  <path fill="currentColor"
                    d="M12 2a7 7 0 0 1 2.263.374a4.5 4.5 0 0 0 4.5 7.447L19 9.743v2.784a1 1 0 0 0 .06.34l.046.107l1.716 3.433a1.1 1.1 0 0 1-.869 1.586l-.115.006H4.162a1.1 1.1 0 0 1-1.03-1.487l.046-.105l1.717-3.433a1 1 0 0 0 .098-.331L5 12.528V9a7 7 0 0 1 7-7m5.5 1a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5M12 21a3 3 0 0 1-2.83-2h5.66A3 3 0 0 1 12 21" />
                </g>
              </svg>
              <span class="ms-3">Notifications</span>
            </a>
          </li>
          <li>
            <button type="button"
              class="<?= $uri === '/events' || $uri === '/events/create' || $uri === '/events/update' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
              aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" id="dropdown-btn-events">
              <svg
                class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 24">
                <path fill="currentColor"
                  d="M17 12h-5v5h5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19a2 2 0 0 0 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1zm3 18H5V8h14z" />
              </svg>
              <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Events</span>
              <!-- TODO for admin (president, committee secretary): add events, update event name, update event description, update event date -->
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 4 4 4-4" />
              </svg>
            </button>
            <ul id="dropdown-events" class="hidden py-2 space-y-2">
              <li>
                <a href="/events"
                  class="<?= $uri === '/events' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">All
                  Events</a>
              </li>
              <li>
                <a href="/events/create"
                  class="<?= $uri === '/events/create' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">New
                  Event</a>
              </li>
              <li>
                <a href="/events/update"
                  class="<?= $uri === '/events/update' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Update
                  Events</a>
              </li>
            </ul>
          </li>
          <li>
            <button type="button"
              class="<?= $uri === '/committees' || $uri === '/committees/create' || $uri === '/committees/update' || $uri === '/committees/member-registration' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
              aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" id="dropdown-btn-committees">
              <svg
                class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 10 12">
                <path fill="currentColor"
                  d="M5.5 4.937a2 2 0 1 1 1 0V6h2a1 1 0 0 1 1 1v1.063a2 2 0 1 1-1 0V7h-5v1.063a2 2 0 1 1-1 0V7a1 1 0 0 1 1-1h2z" />
              </svg>
              <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Committees</span>
              <!-- TODO add new committees, update committee name, update committee description, register committee members -->
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 4 4 4-4" />
              </svg>
            </button>
            <ul id="dropdown-committees" class="hidden py-2 space-y-2">
              <li>
                <a href="/committees"
                  class="<?= $uri === '/committees' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">All
                  Committees</a>
              </li>
              <li>
                <a href="/committees/create"
                  class="<?= $uri === '/committees/create' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">New
                  Committee</a>
              </li>
              <li>
                <a href="/committees/update"
                  class="<?= $uri === '/committees/update' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Update
                  Committees</a>
              </li>
              <li>
                <a href="/committees/member-registration"
                  class="<?= $uri === '/committees/member-registration' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Register
                  Committee Members</a>
              </li>
            </ul>
          </li>
          <li>
            <button type="button"
              class="<?= $uri === '/members' || $uri === '/members/create' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
              aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" id="dropdown-btn-members">
              <svg
                class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 24">
                <path fill="currentColor"
                  d="M3.5 7a5 5 0 1 1 10 0a5 5 0 0 1-10 0M5 14a5 5 0 0 0-5 5v2h17v-2a5 5 0 0 0-5-5zm19 7h-5v-2c0-1.959-.804-3.73-2.1-5H19a5 5 0 0 1 5 5zm-8.5-9a5 5 0 0 1-1.786-.329A6.97 6.97 0 0 0 15.5 7a6.97 6.97 0 0 0-1.787-4.671A5 5 0 1 1 15.5 12" />
              </svg>
              <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Members</span>
              <!-- TODO for admin (president, committee secretary): add new members -->
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 4 4 4-4" />
              </svg>
            </button>
            <ul id="dropdown-members" class="hidden py-2 space-y-2">
              <li>
                <a href="/members"
                  class="<?= $uri === '/members' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">All
                  Members</a>
              </li>
              <li>
                <a href="/members/create"
                  class="<?= $uri === '/members/create' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">New
                  Member</a>
              </li>
            </ul>
          </li>
          <li>
            <button type="button"
              class="<?= $uri === '/accounts/update' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
              aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" id="dropdown-btn-account">
              <svg
                class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 24">
                <path fill="currentColor"
                  d="M14.82 1H9.18l-.647 3.237a8.5 8.5 0 0 0-1.52.88l-3.13-1.059l-2.819 4.884l2.481 2.18a8.6 8.6 0 0 0 0 1.756l-2.481 2.18l2.82 4.884l3.129-1.058c.472.342.98.638 1.52.879L9.18 23h5.64l.647-3.237a8.5 8.5 0 0 0 1.52-.88l3.13 1.059l2.82-4.884l-2.482-2.18a8.6 8.6 0 0 0 0-1.756l2.481-2.18l-2.82-4.884l-3.128 1.058a8.5 8.5 0 0 0-1.52-.879zM12 16a4 4 0 1 1 0-8a4 4 0 0 1 0 8" />
              </svg>
              <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Account Settings</span>
              <!-- TODO update username, update password, update email, update first name, update last name, update phone number -->
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 4 4 4-4" />
              </svg>
            </button>
            <ul id="dropdown-account" class="hidden py-2 space-y-2">
              <li>
                <a href="/accounts/update"
                  class="<?= $uri === '/accounts/update' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Update
                  Account</a>
              </li>
            </ul>
          </li>

          <hr class="w-54 h-1 mx-auto my-4 bg-gray-100 border-0 rounded-sm md:my-10 dark:bg-gray-700">

          <li>
            <button type="button"
              class="<?= $uri === '/qr/scan' || $uri === '/qr/show' ? 'bg-gray-100 dark:bg-gray-700' : '' ?> flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
              aria-controls="dropdown-example" data-collapse-toggle="dropdown-example" id="dropdown-btn-qr">
              <svg
                class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 24">
                <path fill="currentColor"
                  d="M2 1h8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1m1 2v6h6V3z" />
                <path fill="currentColor" fill-rule="evenodd" d="M5 5h2v2H5z" />
                <path fill="currentColor"
                  d="M14 1h8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-8a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1m1 2v6h6V3z" />
                <path fill="currentColor" fill-rule="evenodd" d="M17 5h2v2h-2z" />
                <path fill="currentColor"
                  d="M2 13h8a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1m1 2v6h6v-6z" />
                <path fill="currentColor" fill-rule="evenodd" d="M5 17h2v2H5z" />
                <path fill="currentColor"
                  d="M23 19h-4v4h-5a1 1 0 0 1-1-1v-8v5h2v2h2v-6h-2v-2h-1h3v2h2v2h2v-4h1a1 1 0 0 1 1 1zm0 2v1a1 1 0 0 1-1 1h-1v-2z" />
              </svg>
              <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">QR Code</span>
              <!-- TODO update username, update password, update email, update first name, update last name, update phone number -->
              <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 4 4 4-4" />
              </svg>
            </button>
            <ul id="dropdown-qr" class="hidden py-2 space-y-2">
              <li>
                <a href="/qr/scan"
                  class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Scan
                  QR</a>
              </li>
              <li>
                <a href="/qr/show"
                  class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Show
                  QR</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>

      <div>
        <hr class="w-54 h-1 mx-auto my-2 bg-gray-100 border-0 rounded-sm md:my-2 dark:bg-gray-700">
        <ul class="font-medium">
          <li>
            <button id="logout-btn"
              class="w-full flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
              <svg
                class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path fill="currentColor"
                  d="M11.25 19a.75.75 0 0 1 .75-.75h6a.25.25 0 0 0 .25-.25V6a.25.25 0 0 0-.25-.25h-6a.75.75 0 0 1 0-1.5h6c.966 0 1.75.784 1.75 1.75v12A1.75 1.75 0 0 1 18 19.75h-6a.75.75 0 0 1-.75-.75" />
                <path fill="currentColor"
                  d="M15.612 13.115a1 1 0 0 1-1 1H9.756q-.035.533-.086 1.066l-.03.305a.718.718 0 0 1-1.025.578a16.8 16.8 0 0 1-4.885-3.539l-.03-.031a.72.72 0 0 1 0-.998l.03-.031a16.8 16.8 0 0 1 4.885-3.539a.718.718 0 0 1 1.025.578l.03.305q.051.532.086 1.066h4.856a1 1 0 0 1 1 1z" />
              </svg>
              <span class="ms-3">Logout</span>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </aside>
</nav>

<main>
  <!-- Main modal -->
  <div id="logout-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed z-50 flex justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
      <!-- Modal content -->
      <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
        <button type="button" id="close-logout-modal"
          class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-toggle="deleteModal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>

        <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor"
          xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path fill="currentColor"
            d="M11.25 19a.75.75 0 0 1 .75-.75h6a.25.25 0 0 0 .25-.25V6a.25.25 0 0 0-.25-.25h-6a.75.75 0 0 1 0-1.5h6c.966 0 1.75.784 1.75 1.75v12A1.75 1.75 0 0 1 18 19.75h-6a.75.75 0 0 1-.75-.75" />
          <path fill="currentColor"
            d="M15.612 13.115a1 1 0 0 1-1 1H9.756q-.035.533-.086 1.066l-.03.305a.718.718 0 0 1-1.025.578a16.8 16.8 0 0 1-4.885-3.539l-.03-.031a.72.72 0 0 1 0-.998l.03-.031a16.8 16.8 0 0 1 4.885-3.539a.718.718 0 0 1 1.025.578l.03.305q.051.532.086 1.066h4.856a1 1 0 0 1 1 1z" />
        </svg>
        <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to logout?</p>
        <div class="flex justify-center items-center space-x-4">
          <button data-modal-toggle="deleteModal" type="button" id="close-logout-modal2"
            class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
            No, cancel
          </button>
          <a href="/logout"
            class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
            Yes, I'm sure
          </a>
        </div>
      </div>
    </div>
  </div>

  <div id="error-modal" class="fixed hidden top-0 left-0 right-0 bg-red shadow-sm dark:bg-red-500 sm:ml-64">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex">
      <svg id="close-error-modal" aria-hidden="true" class="w-5 h-5 cursor-pointer absolute top-0 left-0"
        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
          clip-rule="evenodd"></path>
      </svg>
      <span id="error-message" class="text-sm text-gray-800 sm:text-center dark:text-gray-800">
      </span>
    </div>
  </div>