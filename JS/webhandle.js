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

// focus events for form submission
$("textarea").focusin(function(){
  $(this).text("");
});

$("textarea").click(function(){
  $(this).css('color','black');
});

function formvalidate() {

  var first = document.getElementById("firstname").value;
  var last = document.getElementById("lastname").value;
  var email = document.getElementById("email").value;
  var msg = document.getElementById("msg").value;
  var letters = /^[a-zA-Z]+$/;  
  var submission = true;
  var statement = ""; 

  if (!first.match(letters) || first=="") {
    statement = statement.concat("You did not enter a valid First Name.\n");
    submission = false;
  }

  if (!last.match(letters) || last=="") {
    statement = statement.concat("You did not enter a valid Last Name.\n");
    submission = false;
  }

  if (!email.match(/\w+@\w+\.\w+/) || email=="" || email=="johnsmith@gmail.com") {
    statement = statement.concat("You did not enter a valid Email.\n");
    submission = false;
  }

  if (msg=="" || msg=="Enter message less than 1000 characters") {
    statement = statement.concat("You did not enter a message.\n");
    submission = false;
  }

  if (!submission) {
    alert(statement);
    return false;
  }
  else {
    return true; 
  }
}