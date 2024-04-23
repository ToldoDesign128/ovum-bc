// Animation

// Accordion
jQuery(document).ready(function() {
    jQuery('.faq__list__panel__title').click(function() {
        var isActive = jQuery(this).hasClass('title-active');
        
        jQuery('.faq__list__panel__text').removeClass('panel-active');
        jQuery('.faq__list__panel__title').removeClass('title-active');
        
        if (!isActive) {
            jQuery(this).next('.faq__list__panel__text').addClass('panel-active');
            jQuery(this).addClass('title-active');
        }
    });
});

// Back to Top Button
var btn = jQuery('#ScrollTopBtn');

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});


// Mobile Button CTA
var scroll_offset = 300;

jQuery(window).scroll(function () {
    var selettore = jQuery(window);
    if (jQuery('#infoBtn').length) {
        if (selettore.scrollTop() > scroll_offset) {
            jQuery('#infoBtn').addClass('btn-revealed');
        } else {
            jQuery('#infoBtn').removeClass('btn-revealed');
        }
    }
});