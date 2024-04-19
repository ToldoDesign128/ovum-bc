<!-- Hero Blog -->
<section class="hero-blog container">
    <div class="hero-blog__content">
        <h1 class="hero-blog__content__title"><?php echo esc_html(get_field('titolo_blog', 'option')); ?></h1>
    </div>
    <div class="hero-blog__category swiperCat">
        <div class="swiper-wrapper">
            <?php
            $args = array(
                'orderby' => 'name',
                'order' => 'ASC',
                'hide_empty' => 0
            );

            $categories = get_categories($args);

            foreach ($categories as $category) {
                if ($category->name != 'Uncategorized') {
            ?>
                    <div class="hero-blog__category__item swiper-slide">

                        <?php if ($category->name == 'Aree di intervento') { ?>
                            <img class="hero-blog__category__item__image" src="<?php echo get_template_directory_uri() . '/assets/img/category/categoria_aree.jpg'; ?>" alt="">
                        <?php } elseif ($category->name == 'Chiropratica') { ?>
                            <img class="hero-blog__category__item__image" src="<?php echo get_template_directory_uri() . '/assets/img/category/categoria_chiropratica.jpg'; ?>" alt="">
                        <?php } else { ?>
                            <img class="hero-blog__category__item__image" src="<?php echo get_template_directory_uri() . '/assets/img/category/categoria_eventi.jpg'; ?>" alt="">
                        <?php } ?>

                        <h2 class="hero-blog__category__item__title"><?php echo esc_html($category->name); ?></h2>
                        <!-- Post Button -->
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="hero-blog__category__item__button button-gray">
                            <span class="text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024">
                                    <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                                        <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                                        <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                                    </g>
                                </svg>
                            </span>
                            <span class="text-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024">
                                    <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                                        <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                                        <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                                    </g>
                                </svg>
                            </span>
                            <span class="text-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024">
                                    <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(-10.076 -9.9)">
                                        <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                                        <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                                    </g>
                                </svg>
                            </span>
                            <span class="shape"></span>
                        </a>
                    </div>
            <?php
                };
            };
            ?>
        </div>

    </div>
</section>