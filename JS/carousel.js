// carousel images
$(document).ready(function(){
  $('.slider').slick({
    dots: true,
    arrows: false,
    centerMode: true,
    slidesToShow: 1,
    variableWidth: true,
    variableHeight: true,
    centerPadding: '20px',
    autoplay: true,
    autoplaySpeed: 2000
  });
});

// recalibrate the screen scroll to subsections in order to account for fixed header (70px long)
$("nav").find("a").click(function(e) {
    e.preventDefault();
    var scroll = 70;
    var sub = $(this).attr("href");
    $("html,body").animate({
        scrollTop: ($(sub).offset().top - scroll) + "px"
    });
});

// if page is reloaded, scroll back to the top of the page
var rload = window.performance.navigation;
if (rload.type == 1) {
    $("html,body").animate({ scrollTop: 0 });
}

$("textarea").focusin(function(){
    $(this).text("");
});

$("textarea").click(function(){
    $(this).css('color','black');
});


//var email = document.getElementById("email");
//email.addEventListener("focusin", focusfxn);

//function focusfxn() {
  //  document.getElementById("email").innerHTML= "";
//}