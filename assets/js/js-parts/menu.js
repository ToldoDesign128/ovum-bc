// Menu
jQuery("#hamburgerButton").click(function () {
  jQuery("#hamburgerButton").toggleClass("is-active");
  jQuery(".navigation__button__cta > a").toggleClass("hide-cta");
  jQuery("#menu").toggleClass("open");
});

jQuery(document).ready(function() {
  jQuery(window).scroll(function() {
      var scrollPosition = jQuery(this).scrollTop();
      var windowHeight = jQuery(window).height();
      var homeCta = jQuery('#homeCta');

      if (scrollPosition > windowHeight) {
          homeCta.removeClass('button-white').addClass('button-green');
      } else {
          homeCta.removeClass('button-green').addClass('button-white');
      }
  });
});
