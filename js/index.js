// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}


function response_header() {
  if ($(window).width() < 450) {
    $('.header_text').hide()
    $('.header_img').show()
  } 

  else {
    $('.header_text').show()
    $('.header_img').hide()
  }
}

$(window).resize(response_header)
response_header()
