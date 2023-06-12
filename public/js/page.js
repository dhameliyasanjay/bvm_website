document.addEventListener("DOMContentLoaded", () => {
  function counter(id, start, end, duration) {
    let obj = document.getElementById(id),
      current = start || 0,
      range = end - start,
      increment = 1;
    step = Math.abs(Math.floor(duration / range)),
      timer = setInterval(() => {
        current += increment;
        if (current <= end) {
          obj.textContent = current;
        }
        if (current == end) {
          clearInterval(timer);
        }
      }, step);
  }
  counter("count1", 0, 4, 3000);
  counter("count2", 0, 100, 2500);
  counter("count3", 0, 248, 3000);
  counter("count4", 0, 850, 4000);
});


$('.dropdown').on('show.bs.dropdown', function (e) {
  $(this).find('.dropdown-menu').first().stop(true, true).slideDown(300);
});

$('.dropdown').on('hide.bs.dropdown', function (e) {
  $(this).find('.dropdown-menu').first().stop(true, true).slideUp(300);
});



$(document).ready(function () {
  $(window).scroll(function () {
    $val = $(window).scrollTop();
    if ($val > 10) {

      $('.main-section .nav .menu').css({
        position: 'fixed',
        top: 0,
        left: 0
      })
    } else {
      $('.main-section .nav .menu').css({
        position: 'relative'
      })
    }
  })
})



$(function () {
  var navbar = $('.custom-navber');
  $(window).scroll(function () {
    if ($(window).scrollTop() <= 0) {
      navbar.removeClass('navbar-scroll');
    }
    else {
      navbar.addClass('navbar-scroll');
    }
  })
});



// const loaderEl = document.getElementsByClassName('loading-area')[0];
// document.addEventListener('readystatechange', (event) => {
//   // const readyState = "interactive";
//   const readyState = "complete";

//   if (document.readyState == readyState) {
//     // when document ready add lass to fadeout loader
//     loaderEl.classList.add('loading-area--invisible');

//     // when loader is invisible remove it from the DOM
//     setTimeout(() => {
//       loaderEl.parentNode.removeChild(loaderEl);
//     }, 1500)
//   }
// });

window.onload = function() {
  setTimeout(function(){
    var loader =document.getElementsByClassName("holder")[0];
    loader.style.display = "none";
  },1500)
}



$(document).ready(function () {
  $('ul.navbar-nav > li')
    .click(function (e) {
      $('ul.navbar-nav > li')
        .removeClass('active');
      $(this).addClass('active');
    });
});



Array.prototype.forEach.call(
  document.querySelectorAll(".hiring-choose-btn"),
  function (button) {
      const hiddenInput = button.parentElement.querySelector(
          ".hiring-choose-input"
      );
      const label = button.parentElement.querySelector(".choose-text");
      const defaultLabelText = "No File Chosen";

      // Set default text for label
      label.textContent = defaultLabelText;
      label.title = defaultLabelText;

      button.addEventListener("click", function () {
          hiddenInput.click();
      });

      hiddenInput.addEventListener("change", function () {
          const filenameList = Array.prototype.map.call(hiddenInput.files, function (
              file
          ) {
              return file.name;
          });

          label.textContent = filenameList.join(", ") || defaultLabelText;
          label.title = label.textContent;
      });
  }
);