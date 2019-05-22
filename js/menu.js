var sidenavOpened = false;
var sideNavBar = document.getElementById("side-nav");
var mainMenu = document.getElementById("main-menu");

function clickMenu() {
  if (!sidenavOpened) {
    sideNavBar.style.width = "40%";
    mainMenu.style.display = "flex";
    sidenavOpened = true;
  } else {
    sideNavBar.style.width = "0";
    mainMenu.style.display = null;
    sidenavOpened = false;
  }
}
