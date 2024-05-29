/*sticky-header-script*/ 
window.onscroll = function () { myFunction() };

var header = document.getElementById("myHeader");
var sticky = header.scrollTop;

function myFunction() {
  if (window.scrollY > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
/*off-canvas-menu-script*/ 
function openNav() {
    document.getElementById("mySidenav").style.width = "100vw";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
 /*scroll-top-button-script*/ 
 mybutton = document.getElementById("scroll-btn");

 window.onscroll = function () { scrollFunction() };

 function scrollFunction() {
   if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
     mybutton.style.display = "block";
   } else {
     mybutton.style.display = "none";
   }
 }

 function topFunction() {
   document.body.scrollTop = 0;
   document.documentElement.scrollTop = 0;
 }

