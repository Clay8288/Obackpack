const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
}

// nav element color changes when current page is active


 const currentLocation = location.href;

    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length
        for (let i=0; i<menuLength; i++){
            if(menuItem[i].href === currentLocation){
                menuItem[i].className = "active"
                }
            } 

// SLIDER

var slides = document.querySelectorAll('.slide');
var btns = document.querySelectorAll('.btn');
let currentSlide = 1;

// Javascript for image slider manual navigation

if(slides.length) {
  var manualNav = function(manual){
    slides.forEach((slide) => {
      slide.classList.remove('active');
    });
  
    btns.forEach((btn) => {
      btn.classList.remove('active');
    });
  
    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
  }
  btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
      manualNav(i);
      currentSlide = i;
    });
  });
  
  // Javascript for image slider autoplay navigation
  
  var repeat = function (activeClass) {
    let active = document.getElementsByClassName('active');
    let i = 1;
  
    var repeater = () => {
      setTimeout(function () {
        [...active].forEach((activeSlide) => {
          activeSlide.classList.remove('active');
        });
  
        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;
  
  
        if (slides.length == i) {
          i = 0;
        }
        if (i >= slides.length) {
          return;
        }
        repeater();
      }, 10000);
    }
    repeater();
  }
  repeat();
}


// CAROUSEL BLOG
const blogCarousels = document.querySelectorAll('.blog-carousel');

for(carousel of blogCarousels) {
  const items = carousel.getElementsByClassName('item');
  const nbSlide = items.length;

  const next = carousel.querySelector('.suivant');
  const previous = carousel.querySelector('.precedent');
  let count = 0;

  if(previous && next) {
    function nextSlide() {
      items[count].classList.remove('active2');
      if (count < nbSlide - 1) {
        count++;
      } else {
        count = 0;
      }
      items[count].classList.add('active2')
    }
    
    function prevSlide() {
      items[count].classList.remove('active2');
      if (count > 0) {
        count--;
      } else {
        count = nbSlide - 1;
      }
      items[count].classList.add('active2');
    }
    next.addEventListener('click', nextSlide);
    previous.addEventListener('click', prevSlide);
  }
}


// forms

let inputField = document.querySelector("input");

if(inputField) {
  $('input').on('focusin', function() {
    $(this).parent().find('label').addClass('active');
  });
  
  $('input').on('focusout', function() {
    if (!this.value) {
      $(this).parent().find('label').removeClass('active');
    }
  });
}


// MAP //
if(typeof mapboxgl !== 'undefined') {
  mapboxgl.accessToken = 'pk.eyJ1IjoiY2xheTg4IiwiYSI6ImNrcmx1NHpjeDBnc28ycG1kcHMyZWszanQifQ.8O52rFQB2HcZNpcgXq_cGg';

  navigator.geolocation.getCurrentPosition(successLocation, errorLocation, { enableHighAccuracy: true })


  //When the location is fetched successfully.
  function successLocation(position) {
    //Mapbox receives longitude and latitude from Geolocation API
    setupMap([position.coords.longitude, position.coords.latitude])
  }

  //When there is an error in fetching the location the location with these coordinates is mocked.
  function errorLocation() {
    setupMap([12.9716,77.5946])
  }

  //This function initializes the map with the center coordinates passed.
  function setupMap(center) {
      //This is mapboxgl object from the mapboxgl scripts we added in index.html
      var map = new mapboxgl.Map({
          container: 'map',
          style: 'mapbox://styles/mapbox/streets-v11',
          //This is used to go to the coordinate on initialization
          center: center,
          zoom: 10
        });
        
      const nav = new mapboxgl.NavigationControl();
      map.addControl(nav);
      
      map.addControl(
        new MapboxDirections({
        accessToken: mapboxgl.accessToken
        }),
        'top-left'
        );
  }

}

let citation = document.getElementById('QuoteOFDay');
citation = type="theme";
citation = theme="aventure";

// return to top

const btnv = document.querySelector('.btn7');
console.log(btnv);
btnv.addEventListener('click', () => {

    window.scrollTo({
        top: 0,
        left: 0,
        behavior: "smooth"
    })

})

// newsletter