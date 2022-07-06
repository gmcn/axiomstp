( function($) {

  $("#minicart").click(function(){
    $(".woocommerce-mini-cart__wrap").removeClass("hidden");
  });

  $(".closemini").click(function(){
    $(".woocommerce-mini-cart__wrap").addClass("hidden");
  });


  $('body').on('mouseenter mouseleave', '.dropdown', function (e) {
      var dropdown = $(e.target).closest('.dropdown');
      var menu = $('.dropdown-menu', dropdown);
      dropdown.addClass('show');
      menu.addClass('show');
      setTimeout(function () {
          dropdown[dropdown.is(':hover') ? 'addClass' : 'removeClass']('show');
          menu[dropdown.is(':hover') ? 'addClass' : 'removeClass']('show');
      }, 300);
  });

  $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.dropdown').matchHeight();
  }
  window.onload = startMatchHeight;

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

} ) (jQuery);

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#00af43",
      "text": "#000"
    },
    "button": {
      "background": "#000"
    }
  },
  "theme": "edgeless",
  "position": "bottom",
  "static": true,
  "content": {
    "message": "This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.",
    "dismiss": "Close This",
    "link": "Find out more",
    "href": "data-policy"
  }
});

(function() {
    $(window).on('load', function() {
        var select = $('.__js_filter-select');
        var filterItem = $('.filter__item');
        var filterItemAll = $('.filter__item[data-filter="*"]');
        var filterActiveClass = 'filter__item--active';
        var grid = $('.__js_gallery-filter').isotope({
            // itemSelector: '.works__item',
            layoutMode: 'packery',
            packery: {
                gutter: 0
            },
        });
        var grid2 = $('.__js_news-list-filter').isotope({
            itemSelector: '.__js_news-list-item',
            layoutMode: 'packery',
            packery: {
                gutter: 0
            },
        });

        var grid3 = $('.__js_projects-list-filter').isotope({
            itemSelector: '.__js_projects-list-item',
            layoutMode: 'packery',
            packery: {
                gutter: 0
            },
        });




        setTimeout(function() {
            $('.masonry').isotope({
                itemSelector: '.masonry-item',
                layoutMode: 'packery'
            });
        }, 100);


        select.on('change', function() {
            var value = select.val();
            var filterValue = value !== '*' ? '.__js_' + value : value;
            if (value !== '*') {
                var filterValue = '.__js_' + value;
                filterItem.removeClass(filterActiveClass);
            } else {
                filterItemAll.addClass(filterActiveClass);
                var filterValue = value;
            }
            grid.isotope({
                filter: filterValue
            });
        });

        filterItem.on('click', function() {
            var filterValue = $(this).attr('data-filter');
            $(this).addClass(filterActiveClass).siblings().removeClass(filterActiveClass);
            grid.isotope({
                filter: filterValue
            });
            grid2.isotope({
                filter: filterValue
            });
            if ($('.__js_news-list-filter') && $('.__js_news-list-filter').length > 0) {
                var destination = $('.__js_news-list-filter').offset().top - 200;
                $('html').animate({
                    scrollTop: destination
                }, 1100);
            }
        });

    });
})();

var heroSwiper = new Swiper(".heroSwiper", {
  loop: false,
  watchOverflow: true,
  // pagination: {
  //   el: ".swiper-pagination",
  // },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var _js__gallery = new Swiper("._js__gallery", {
        slidesPerView: 1,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

var latestproducts = new Swiper("._js_latestproducts", {
  slidesPerView: 2,
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: true,

  breakpoints: {
    1024: {
      slidesPerView: 3,
    },
  },

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

var _js_quote = new Swiper("._js_quote", {
  slidesPerView: 1,
  scrollbar: {
    el: ".swiper-scrollbar",
    draggable: true,
  },
});

var _js_related = new Swiper("._js_related", {
    slidesPerView: 1,
    spaceBetween: 15,
    centeredSlides: true,
    loop: true,

    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1444: {
        slidesPerView: 4,
      },
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });



var mySwiper = new Swiper('.swiper-container', {
   // Optional parameters
   direction: 'vertical',
   loop: true,

   // If we need pagination
   pagination: {
     el: '.swiper-pagination',
   },

   // Navigation arrows
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },

   // And if we need scrollbar
   scrollbar: {
     el: '.swiper-scrollbar',
   },
 })

 function openNav() {
   document.getElementById("mySidenav").style.width = "100%";
 }

 function closeNav() {
   document.getElementById("mySidenav").style.width = "0";
 }
