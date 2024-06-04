// Toggle mobile menu
document
.getElementById("menu-toggle")
.addEventListener("click", function () {
  var menu = document.getElementById("navbar-default");
  menu.classList.toggle("hidden");
});