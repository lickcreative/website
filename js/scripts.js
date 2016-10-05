function checkNav() {
    document.body.classList.contains("hamburgler-active") ? closeNav() : openNav()
}

function closeNav() {
    document.body.classList.remove("hamburgler-active")
}

function openNav() {
    document.body.classList.add("hamburgler-active")
}

function changeScroll(e) {
    window.pageYOffset > heightDifference && navbar.classList.remove("js-inverted"), window.pageYOffset < heightDifference && navbar.classList.add("js-inverted")
}

document.getElementById("hamburgler").addEventListener("click", checkNav), window.addEventListener("keyup", function(e) {
    27 == e.keyCode && closeNav()
}, !1), document.querySelector(".navbar__list").addEventListener("click", checkNav);
var navbar             = document.getElementById("js-navbar"),
    cover              = document.querySelector(".cover"),
    navbarHeight       = getComputedStyle(navbar).height.split('px')[0],
    coverHeight        = getComputedStyle(cover).height.split('px')[0],
    heightDifference   = (coverHeight - (navbarHeight / 2));
navbar.classList.add("js-inverted"), window.addEventListener("scroll", changeScroll, !1);
var defaultDuration = 800,
    edgeOffset = 100;
zenscroll.setup(defaultDuration, edgeOffset);
