// Animation

// Accordion
jQuery(document).ready(function () {
    jQuery('.faq__list__panel__title').click(function () {
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

btn.on('click', function (e) {
    e.preventDefault();
    jQuery('html, body').animate({ scrollTop: 0 }, '300');
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

// Single Table of content
jQuery(window).scroll(function () {
    var selettoreSingle = jQuery(window);
    if (jQuery('#linkTitolo').length) {
        if (selettoreSingle.scrollTop() > scroll_offset) {
            jQuery('#linkTitolo').removeClass('current-title-index');
        } else {
            jQuery('#linkTitolo').addClass('current-title-index');
        }
    }
});


// Table of content
jQuery(document).ready(function($) {
    $(window).on('scroll', function() {
        $('.articolo__content h2').each(function() {
            if (isElementInViewport($(this))) {
                var id = $(this).attr('id');
                $('.toc-anchor').removeClass('current-title-index');
                $('.toc-anchor:contains("' + id + '")').addClass('current-title-index');
            } else {
                var id = $(this).attr('id');
                $('.toc-anchor:contains("' + id + '")').removeClass('current-title-index');
            }
        });
    });

    function isElementInViewport(el) {
        var rect = el[0].getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
});