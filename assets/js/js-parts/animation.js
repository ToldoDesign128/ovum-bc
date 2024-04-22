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