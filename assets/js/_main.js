/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

//In order to test mobile settings in desktop environment, set to true...
window.MOBILE_TEST = true;console.log(MOBILE_TEST);

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
      // JavaScript to be fired on all pages
      /*
      var options = {
        autoPlay: true,
        cycle: true,
        animateStartingFrameIn: false,
        autoPlayDelay: 4000
      };
      var sequence = $("#sequence").sequence(options).data("sequence");
      */

      $.stellar({
        horizontalOffset: 0,
        verticalOffset: 0,
        responsive: true,
        scrollProperty: 'scroll',
        positionProperty: 'position'
      });

      // Bootstrap Affix
      $('.navbar-custom.white').affix({
        offset: {
          top: 150
        }
      });

      $('.navbar-custom.dark').affix({
        offset: {
          top: 150
        }
      });

      $('.secondary-navbar').affix({
        offset: {
          top: 150
        }
      });

      $('.hbspt-form').affix({
        offset: {
          top: 180
        }
      });

      $('.outer-well-sidebar').affix({
        offset: {
          top: 320
        }
      });

      $('.outer-well-sidebar').affix({
        offset: {
          top: 320
        }
      });

      $('.carousel').carousel({
        interval: 7000,
        wrap: true,
        pause: false
      });

      /* Taken out because of effect it has on bootstrap carousel
      // Smooth Scroll
      $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') || location.hostname === this.hostname) {

              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                 if (target.length) {
                   $('html,body').animate({
                       scrollTop: target.offset().top
                  }, 1000);
                  return false;
              }
          }
      });
      */

      $(function () {
        if (/Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) || MOBILE_TEST) {//Disable skollr fx for mobile devices
          skrollr.init().destroy();
          $('.partner-logo img').css('display', 'none');
        } else { skrollr.init({forceHeight: false}); }
      });

      $(function() {
        var BV = new $.BigVideo({
          useFlashForFirefox:false,
          container: $('#big-video'),
          doLoop:true,
          controls:false,
          shrinkable:true
        });
        BV.init();
        if (Modernizr.touch) {
            BV.show('/wp-content/uploads/shutterstock_134985170-1024x724.jpg');
        } else {
            BV.show([
              //{ type: 'video/mp4',  src: 'http://player.vimeo.com/external/103746253.sd.mp4?s=721c1d204d35c2d31647207fa0c46ddf' }
              { type: 'video/mp4',  src: 'http://player.vimeo.com/external/103746253.hd.mp4?s=343b3258c44c10fcd5ffcd16d02fe01e' },
              { type: 'video/mkv',  src: '/wp-content/uploads/shutterstock_v3535412.mkv' },
              { type: 'video/webm', src: '/wp-content/uploads/shutterstock_v3535412.webm' }
          ]);
            BV.getPlayer().on('durationchange',function(){
                $('#big-video-wrap').fadeIn();
            });
        }
      });


    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
    }
  },
  // About us page, note the change from about-us to about_us.
  advantage: {
    init: function() {

    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
