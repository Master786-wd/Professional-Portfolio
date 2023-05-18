/*Preloader Function*/
$(document).ready(function (e) {
  setTimeout(function () { $('#loading').hide(); }, 100);
});
/*Dark-Mode-script*/ 
let toggle = document.getElementById('mode');

toggle.addEventListener('click', ()=>{
     document.body.classList.toggle('dark');
     
})
/*Sticky-Header-script*/ 
window.onscroll = function () { myFunction() };

var header = document.getElementById("main-header");
var sticky = header.scrollTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
/*Off-Canvas-Menu-Script*/ 
function openNav() {
    var x = window.matchMedia("(max-width: 820px)")
    if (x.matches){
      document.getElementById("mySidenav").style.width = "100vw";
    }
    else{
      document.getElementById("mySidenav").style.width = "32rem";
    }
  }
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
/*Scroll-Spy-Script*/ 
  $(window).bind('scroll', function() {
    var currentTop = $(window).scrollTop();
    var elems = $('.scrollspy');
    elems.each(function(index){
      var elemTop 	= $(this).offset().top;
      var elemBottom 	= elemTop + $(this).height();
      if(currentTop >= elemTop && currentTop <= elemBottom){
        var id 		= $(this).attr('id');
        var navElem = $('a[href="#' + id+ '"]');
    navElem.addClass('nactive').siblings().removeClass( 'nactive' );
      }
    })
  }); 
/*Section-Animation-script*/ 
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
/*Cursor-Animation-script*/  
  let innerCursor = document.querySelector('.inner-cursor');
  document.addEventListener('mousemove', moveCursor);
  
  function moveCursor(e){
      let x = e.clientX;
      let y = e.clientY;
  
      innerCursor.style.left = `${x}px`;
      innerCursor.style.top = `${y}px`;
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
  
/*Portfolio-Project-Script*/ 
function show1(){
document.getElementById('pro-1').style.maxHeight = "45rem";
document.getElementById('pro-1').style.border = "1px solid #808080";
var elements = document.getElementsByClassName('fig-overlay');
for(var i=0; i<elements.length; i++) { 
    elements[i].style.pointerEvents = 'none';
  }
}
function show2(){
    document.getElementById('pro-2').style.maxHeight = "45rem";
    document.getElementById('pro-2').style.border = "1px solid #808080";
    var elements = document.getElementsByClassName('fig-overlay');
for(var i=0; i<elements.length; i++) { 
    elements[i].style.pointerEvents = 'none';
  }
}
function show3(){
    document.getElementById('pro-3').style.maxHeight = "45rem";
    document.getElementById('pro-3').style.border = "1px solid #808080";
    var elements = document.getElementsByClassName('fig-overlay');
for(var i=0; i<elements.length; i++) { 
    elements[i].style.pointerEvents = 'none';
  }
}
function show4(){
    document.getElementById('pro-4').style.maxHeight = "45rem";
    document.getElementById('pro-4').style.border = "1px solid #808080";
    var elements = document.getElementsByClassName('fig-overlay');
for(var i=0; i<elements.length; i++) { 
    elements[i].style.pointerEvents = 'none';
  }
}
function show5(){
    document.getElementById('pro-5').style.maxHeight = "45rem";
    document.getElementById('pro-5').style.border = "1px solid #808080";
    var elements = document.getElementsByClassName('fig-overlay');
for(var i=0; i<elements.length; i++) { 
    elements[i].style.pointerEvents = 'none';
  }
}
function show6(){
    document.getElementById('pro-6').style.maxHeight = "45rem";
    document.getElementById('pro-6').style.border = "1px solid #808080";
    var elements = document.getElementsByClassName('fig-overlay');
for(var i=0; i<elements.length; i++) { 
    elements[i].style.pointerEvents = 'none';
  }
}
function hide(){
    var elem = document.getElementsByClassName('project-single');
    for(var i=0; i<elem.length; i++) { 
        elem[i].style.maxHeight = '0rem';
        elem[i].style.border = 'none';
      }
    var elements = document.getElementsByClassName('fig-overlay');
for(var i=0; i<elements.length; i++) { 
    elements[i].style.pointerEvents = 'auto';
  }
}







let swip = document.getElementsByClassName('elementor-swiper-button-prev');

let per = document.getElementsByClassName('elementor-swiper-button-next');

if('swip.classList.contains("swiper-button-disabled")'){
    document.getElementsByClassName('fa-arrow-left').style.opacity = "0.5";
}

else{
  document.getElementsByClassName('fa-arrow-left').style.opacity = "1";
}

if('per.classList.contains("swiper-button-disabled")'){
  document.getElementsByClassName('fa-long-arrow-right').style.opacity = "0.5";
}

else{
document.getElementsByClassName('fa-long-arrow-right').style.opacity = "1";
}

jQuery(document).ready(function($){
  if ($(".elementor-swiper-button-prev").hasClass("swiper-button-disabled")) {
$(".fa-arrow-left").attr('style', 'opacity: 0.5 !important');
}
});