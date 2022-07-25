/* jQuery
$(".hamburger").click(function () {
    console.log("clicked");
    $(this).toggleClass("open");
    $(".navbar-items").toggleClass("hidden");
});
*/

const hamburger = document.querySelector(".hamburger");
const navbarItems = document.querySelectorAll(".navbar-items");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("open");
    navbarItems[0].classList.toggle("hidden");
});
