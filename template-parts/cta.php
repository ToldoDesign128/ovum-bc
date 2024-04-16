<section class="container cta">
    <div class="cta__content">
        <h2 class="cta__content__title"><?php echo esc_html(get_field('titolo_cta_footer', 'option')); ?></h2>
        <p class="cta__content__text"><?php echo wp_kses_post(get_field('testo_cta_footer', 'option')); ?></p>
        <?php
        $cta_link = get_field('bottone_cta_footer', 'option');
        if ($cta_link) :
            $cta_link_url = $cta_link['url'];
            $cta_link_title = $cta_link['title'];
            $cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
        ?>
            <a href="<?php echo esc_url($cta_link_url); ?>" class="cta__content__button button-white" target="<?php echo esc_attr($cta_link_target); ?>">
                <span class="text"><?php echo esc_html($cta_link_title); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                        <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                            <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                            <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                        </g>
                    </svg>
                </span>
                <span class="text-1"><?php echo esc_html($cta_link_title); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                        <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                            <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                            <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                        </g>
                    </svg>
                </span>
                <span class="text-2"><?php echo esc_html($cta_link_title); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                        <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(-10.076 -9.9)">
                            <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                            <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                        </g>
                    </svg>
                </span>
                <span class="shape"></span>
            </a>
        <?php endif; ?>
        <img class="cta__content__bg" src="<?php echo get_template_directory_uri() . '/assets/img/cta/cta_bg.jpg';?>" alt="">
        <img class="cta__content__hover" src="<?php echo get_template_directory_uri() . '/assets/img/cta/cta_hover.png';?>" alt="">
        <img class="cta__content__mobile" src="<?php echo get_template_directory_uri() . '/assets/img/cta/cta_mobile_hover.png';?>" alt="">
    </div>
</section>