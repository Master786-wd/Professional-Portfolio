/////Preloader Function/////
        $(document).ready(function (e) {
          setTimeout(function () { $('#pre').hide(); }, 1500);
      });
/////Date Function/////
const dateInput = document.getElementById('date');
dateInput.value = formatDate();
console.log(formatDate());

function padTo2Digits(num) {
return num.toString().padStart(2, '0');
}

function formatDate(date = new Date()) {
return [
date.getFullYear(),
padTo2Digits(date.getMonth() + 1),
padTo2Digits(date.getDate()),
].join('-');
}
/////Time Function/////
let date = new Date;
document.getElementById("theTime").value = date.toLocaleString("sv-SE", {
hour: "2-digit",
minute: "2-digit"
});
/////Radio button value Function/////
var radio = document.querySelectorAll(".myRadio");
var demo = document.getElementById("demo");

function checkBox(e){
demo.value = e.target.value;
}

radio.forEach(check => {
check.addEventListener("click", checkBox);
});
/////Swiper Slider Function/////
const swiper1 = new Swiper('.swiper1', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,
  autoplay:true,
  dynamicBullets: false,

  // Navigation arrows
  navigation: {
    nextEl: '.two',
    prevEl: '.one',
  },
});

/////Accordion-faq Function/////
$(document).ready(function(){
	$('.collapse').on('shown.bs.collapse', function(){
		$(this).parent().find(".fa").removeClass("fa-plus").addClass("fa-minus");
	}).on('hidden.bs.collapse', function(){
		$(this).parent().find(".fa").removeClass("fa-minus").addClass("fa-plus");
	});       
});
/////Swiper Blog Slider Function/////
var swiper2 = new Swiper(".slide-content", {
  slidesPerView: 3,
  spaceBetween: 25,
  centerSlide: 'true',
  loop: false,
  autoplay: false,
  fade: 'true',
  grabCursor: 'true',
  dots:'false',
  navigation: {
    nextEl: ".swiper-navBtn1",
    prevEl: ".swiper-navBtn2",
  },
  
  breakpoints:{
      0: {
          slidesPerView: 1,
      },
      520: {
          slidesPerView: 2,
      },
      950: {
          slidesPerView: 3,
      },
  },
  });
 /////scroll-top-button-script///// 
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
