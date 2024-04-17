// Animation

// Accordion
jQuery(document).ready(function() {
    jQuery('.faq__list__panel__title').click(function() {
        jQuery('.faq__list__panel__text').removeClass('panel-active');
        jQuery(this).next('.faq__list__panel__text').addClass('panel-active');
        jQuery('.faq__list__panel__title').removeClass('title-active');
        jQuery(this).addClass('title-active');
    });
});

