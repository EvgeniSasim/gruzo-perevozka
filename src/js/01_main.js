function accordion() {
  const items = document.querySelectorAll(".accordion__item-trigger");
  items.forEach((item) => {
    item.addEventListener("click", () => {
      const parent = item.parentNode;
      if (parent.classList.contains("accordion__item-active")) {
        parent.classList.remove("accordion__item-active");
      } else {
        document
          .querySelectorAll(".accordion__item")
          .forEach((child) => child.classList.remove("accordion__item-active"));
        parent.classList.add("accordion__item-active");
      }
    });
  });
}
accordion();
//// подсветка меню
function activMenu() {
  document
    .querySelectorAll(".left-sitebar__widget__items__item .btn")
    .forEach(function (el) {
      if (window.location.pathname == el.getAttribute("href")) {
        el.parentNode.classList.add("active");
        el.outerHTML = `<div class="btn"> </div>`;
      }
    });
}
activMenu();
// подмена лого
function replaceLogo() {
  const winWidth = window.innerWidth;
  if (winWidth < 890) {
    const imgLogo = headerLogo.getAttribute("src");
    if (!imgLogo.includes("logo_min")) {
      const replaceLogo = /logo/g;
      return headerLogo.setAttribute(
        "src",
        imgLogo.replace(replaceLogo, "logo_min")
      );
    }
  }
}
replaceLogo();
// // прокрутка страницы
// function scrollToElement(theElement) {
//   if (typeof theElement === "string") {
//     theElement = document.getElementById(theElement);
//     var selectedPosX = 0;
//     var selectedPosY = 0;
//   }
//   while (theElement != null) {
//     selectedPosX += theElement.offsetLeft;
//     selectedPosY += theElement.offsetTop;
//     theElement = theElement.offsetParent;
//   }
//   window.scrollTo(selectedPosX, selectedPosY);
// }
