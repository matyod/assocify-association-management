function toggleDropdown(buttonId, menuId) {
  const dropdownButton = document.getElementById(buttonId);
  const dropdownMenu = document.getElementById(menuId);

  dropdownButton.addEventListener("click", function () {
    dropdownMenu.classList.toggle("hidden");
  });
}


toggleDropdown("notification-dropdown-btn", "notification-dropdown");
toggleDropdown("user-menu-btn", "user-menu-dropdown");
toggleDropdown("dropdown-btn-events", "dropdown-events");
toggleDropdown("dropdown-btn-locations", "dropdown-locations");
toggleDropdown("dropdown-btn-committees", "dropdown-committees");
toggleDropdown("dropdown-btn-members", "dropdown-members");
toggleDropdown("dropdown-btn-account", "dropdown-account");
toggleDropdown("dropdown-btn-qr", "dropdown-qr");
toggleDropdown("logout-btn", "logout-modal");
toggleDropdown("close-logout-modal", "logout-modal");
toggleDropdown("close-logout-modal2", "logout-modal");
toggleDropdown("close-error-modal", "error-modal");