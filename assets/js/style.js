$(document).ready(function () {
     // Peloader
    setTimeout(function () {
        $('body').addClass('loaded');
    }, 1000);
    
    //PARTICLES
    particlesJS("particles-web", 
        {
          "particles": {
            "number": {
              "value": 150,
              "density": {
                "enable": true,
                "value_area": 800
              }
            },
            "color": {
              "value": "#006899"
            },
            "shape": {
              "type": "circle",
              "stroke": {
                "width": 0,
                "color": "#006899"
              },
              "polygon": {
                "nb_sides": 5
              },
              "image": {
                "src": "img/github.svg",
                "width": 100,
                "height": 100
              }
            },
            "opacity": {
              "value": 0.5,
              "random": false,
              "anim": {
                "enable": false,
                "speed": 1,
                "opacity_min": 0.1,
                "sync": false
              }
            },
            "size": {
              "value": 3,
              "random": true,
              "anim": {
                "enable": false,
                "speed": 40,
                "size_min": 0.1,
                "sync": false
              }
            },
            "line_linked": {
              "enable": true,
              "distance": 150,
              "color": "#006899",
              "opacity": 0.4,
              "width": 1
            },
            "move": {
              "enable": true,
              "speed": 4,
              "direction": "none",
              "random": false,
              "straight": false,
              "out_mode": "bounce",
              "bounce": false,
              "attract": {
                "enable": false,
                "rotateX": 600,
                "rotateY": 1200
              }
            }
          },
          "interactivity": {
            "detect_on": "canvas",
            "events": {
              "onhover": {
                "enable": true,
                "mode": "grab"
              },
              "onclick": {
                "enable": false,
                "mode": "push"
              },
              "resize": true
            },
            "modes": {
              "grab": {
                "distance": 200,
                "line_linked": {
                  "opacity": 1
                }
              },
              "bubble": {
                "distance": 400,
                "size": 40,
                "duration": 2,
                "opacity": 8,
                "speed": 3
              },
              "repulse": {
                "distance": 200,
                "duration": 0.4
              },
              "push": {
                "particles_nb": 4
              },
              "remove": {
                "particles_nb": 2
              }
            }
          },
          "retina_detect": true
        });
   
      // owl carousel
      $('.carousel-main').owlCarousel({
        items: 3,
        loop: true,
        autoplay: true,
        autoplayTimeout: 8500,
        margin: 10,
        nav: true,
        dots: true,
        smartSpeed: 450,
        navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
      });
      $('#return-to-top').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
    });
    //WOW animation   
    new WOW().init();

});
$(window).scroll(function () {
  if ($(this).scrollTop() >= 50) {
      $('#return-to-top').fadeIn(200);
  } else {
      $('#return-to-top').fadeOut(200);
  }
});