
function _(id) {
  return document.getElementById(id);
}

function toggleUserDropdown() {
  var targetDropdown = _("user-dropdown-ul");
  var dropdownIcon = _("dropdown-icon");
  if (targetDropdown.style.display === "block") {
    targetDropdown.style.display = "none";
    dropdownIcon.className = "fa fa-caret-down";
  } else {
    targetDropdown.style.display = "block";
    dropdownIcon.className = "fa fa-caret-up";
  }
}
