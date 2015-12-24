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
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        $.get("http://ip-api.com/json", function(response) {
            var domain = window.location.host;
            var countryCode = response.countryCode;
            if (countryCode === "GB" || countryCode === "GBR"){
              $('.UK-site').show();
              $('#shopLink').attr("href","http://shop.patchd.co.uk/");
            } else if (countryCode === "AU" || countryCode === "AUS"){
              $('.AU-site').show();
              $('#shopLink').attr("href","http://shop.getpatchd.com.au/");
            } else {
              $('.US-site').show();
              $('#shopLink').attr("href","http://shop.patchd.com/");
            }
        }, "jsonp");
        $("#nav-nationality a").on('click',function(){
          var className = $(this).attr('class');
         if (className === "nation-AU"){
            $('.AU-site').show();
            $('.UK-site').hide();
            $('.US-site').hide();
            $('#shopLink').attr("href","http://shop.patchd.co.uk/");
          } else if (className === "nation-UK"){
            $('.AU-site').hide();
            $('.UK-site').show();
            $('.US-site').hide();
            $('#shopLink').attr("href","http://shop.getpatchd.com.au/");
          } else {
            $('.AU-site').hide();
            $('.UK-site').hide();
            $('.US-site').show();
            $('#shopLink').attr("href","http://shop.patchd.com/");
          }
        });
        $('#nationModal').on('hidden.bs.modal', function () {
           nation = $(this).attr('data-nation');
           setCookie(nation);
        });
        function setCookie(nation){
          newCookie = "nationCookie="+nation;
          document.cookie = newCookie;
        }
        $('.jarallax').jarallax({
            speed: 0.2
        });
        $( window ).scroll(function() {
          if ($(".dropdown-toggle").attr('aria-expanded') === 'true'){
            $(".dropdown-toggle").dropdown('toggle');
          }
        });
        $('#modalButton').click(function(){
          $('#nav-icon2').toggleClass('open');
          if ($('#nav-icon2').hasClass('open')){
            $('.navbar-fixed-top').css('z-index', 1042);
          }else{
            $('.navbar-fixed-top').css('z-index', 1041);
          }
        });          
        if ($('#nationModal').hasClass('in')){
            $('.navbar-fixed-top').css('z-index', 1041);
        }else{
            $('.navbar-fixed-top').css('z-index', 1042);
        }

        $('.accordion .glyphicon').click(function(){
          $(this).toggleClass('open');
        });
        $('.flexslider').flexslider();
        var oldSSB = $.fn.modal.Constructor.prototype.setScrollbar;
        $.fn.modal.Constructor.prototype.setScrollbar = function () 
        {
            oldSSB.apply(this);
            if(this.bodyIsOverflowing && this.scrollbarWidth) 
            {
                $('.navbar-fixed-top, .navbar-fixed-bottom').css('padding-right', this.scrollbarWidth);
            }       
        };

        var oldRSB = $.fn.modal.Constructor.prototype.resetScrollbar;
        $.fn.modal.Constructor.prototype.resetScrollbar = function () 
        {
            oldRSB.apply(this);
            $('.navbar-fixed-top, .navbar-fixed-bottom').css('padding-right', '');
        };
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
