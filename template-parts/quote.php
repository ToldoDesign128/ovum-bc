<!-- Quote block -->
<section class="container quote swiperQuote">
    <ul class="swiper-wrapper quote__wrapper">
        <?php
        $custom_loop = new WP_Query(array(
            'post_type' => 'recensioni',
            'posts_per_page' => 999,
            'orderby'        => 'menu_order',
            'order'          => 'ASC'
        )); ?>

        <?php if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>

                <div class="quote__wrapper__content swiper-slide">
                    <img class="quote__wrapper__content__icon" src="<?php echo get_template_directory_uri() . '/assets/img/acf/quote.svg'?>" alt="">
                    <div class="quote__wrapper__content__text">
                        <p class="quote__wrapper__content__text__testimonianza"><?php echo wp_kses_post(get_field('testo_testimonianza')); ?></p>
                        <p class="quote__wrapper__content__text__nome"><?php echo esc_html(get_field('nome_e_anni_testimonianza')); ?></p>
                        <p class="quote__wrapper__content__text__pat"><?php echo esc_html(get_field('patologia_testimonianza')); ?></p>
                    </div>
                </div>

                <?php wp_reset_postdata(); ?>
        <?php endwhile;
        endif; ?>
    </ul>
    <div class="navigation-wrap">
        <!-- Navigation buttons -->
        <div class="swiper-button-prev"></div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>