/*!
* Start Bootstrap - Grayscale v7.0.5 (https://startbootstrap.com/theme/grayscale)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-grayscale/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
            document.getElementById("logo").src = ('assets/Logo2.png');
        } else {
            navbarCollapsible.classList.add('navbar-shrink');
            document.getElementById("logo").src = ('assets/Logo2.png');
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

/*Carousel*/

$(document).ready(function() {
    var yourinterval=10000;//anything in ms
  setInterval(function(){$('#rightbtn').click(); }, yourinterval);
    var sliding = false,
       curSlide = 1,
        numOfSlides = $(".slider--el").length;
  
    $(document).on("click", ".slider--control", function() {
      if (sliding) return;
      sliding = true;
      $(".slider--el").show();
      $(".slider--el").css("top");
      $(".slider--el.active").addClass("removed");
      ($(this).hasClass("right")) ? curSlide++ : curSlide--;
      if (curSlide < 1) curSlide = numOfSlides;
      if (curSlide > numOfSlides) curSlide = 1;
      $(".slider--el-" + curSlide).addClass("next");
  
      setTimeout(function() {
        $(".slider--el.removed").hide();
        $(".slider--el").removeClass("active next removed");
        $(".slider--el-" + curSlide).addClass("active");
        sliding = false;
      }, 1800);
    });
  
  });
  
  /*Filtro cursos*/

  var buttonUp = () => {
    const input = document.querySelector(".searchbox-input");
    const cards = document.getElementsByClassName("card");
    let filter = input.value
    for (let i = 0; i < cards.length; i++) {
        let title = cards[i].querySelector(".card-body");
        if (title.innerText.indexOf(filter) > -1) {
            cards[i].classList.remove("d-none")
        } else {
            cards[i].classList.add("d-none")
        }
    }
}

function initMap() {
    const salta = { lat:-24.8039906, lng:-65.4260532};
    const map = new google.maps.Map(document.getElementById("googlemap"), {
      zoom: 15,
      center: salta,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: salta,
      map: map,
    });
  }
  
  window.initMap = initMap;