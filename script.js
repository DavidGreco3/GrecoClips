"use strict";

// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("pageNav");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;
console.log(sticky);

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.scrollY >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

window.onscroll = function() {
    myFunction();
    checkScroll();
};

function checkScroll() {
    var scrollInElements = document.querySelectorAll('.scroll-in');
    var windowHeight = window.innerHeight;

    scrollInElements.forEach(function(element) {
        var positionFromTop = element.getBoundingClientRect().top;

        if (positionFromTop - windowHeight <= 0) {
            element.classList.add('show');
        }
    });
}

var mobileNavButton = document.querySelector('.mobile-nav-button');
var mobileNav = document.querySelector('.mobileNav');

if (window.matchMedia("(max-width: 599px)").matches) {
  mobileNav.style.display = 'none';
} 

mobileNavButton.addEventListener('click', function() {
    mobileNav.style.display = mobileNav.style.display === 'none' ? 'block' : 'none';
});