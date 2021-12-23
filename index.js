
function Toggle() {
    let NavBack = document.getElementById("nav__background");
    let NavItems = document.getElementById("nav__nav");
    if (NavItems.style.opacity == 1) {
      NavBack.style.transform = "scale(0)";
      NavItems.style.opacity = 0;
      NavItems.style.width = "0";
    } else {
      NavBack.style.transform = "scale(100)";
      NavItems.style.opacity = 1;
      NavItems.style.width = "100%";
    }
  }