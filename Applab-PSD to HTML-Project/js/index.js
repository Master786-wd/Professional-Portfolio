/////Preloader Function/////
$(document).ready(function (e) {
    setTimeout(function () { $('#loading').hide(); }, 100);
});
/////Swiper Slider Function/////
var swiper = new Swiper(".slide-content", {
    loop: false,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    dots:'false',
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    });
/////Accordion Function/////   
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
/////Header Function/////   
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("myHeader").style.top = "0";
    } else {
        document.getElementById("myHeader").style.top = "-100px";
    }
    prevScrollpos = currentScrollPos;
}
/////Entry Animation Function///// 
function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);
/////Custom Cursor Animation Function///// 
let innerCursor = document.querySelector('.inner-cursor');
// let outerCursor = document.querySelector('.outer-cursor');
document.addEventListener('mousemove', moveCursor);

function moveCursor(e){
    let x = e.clientX;
    let y = e.clientY;

    innerCursor.style.left = `${x}px`;
    innerCursor.style.top = `${y}px`;
    // outerCursor.style.left = `${x}px`;
    // outerCursor.style.top = `${y}px`;
}

let anchors = Array.from(document.querySelectorAll('a')); 

anchors.forEach(anchor =>{
    anchor.addEventListener('mouseover', ()=>{
        innerCursor.classList.add('grow');
    });
    anchor.addEventListener('mouseleave', ()=>{
        innerCursor.classList.remove('grow');
    });
}); 
