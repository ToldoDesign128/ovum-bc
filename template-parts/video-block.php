<!-- Videorecensione -->
<section class="container videorecensione">
    <div class="videorecensione__slider swiperVideo">
        <ul class="swiper-wrapper">
            <?php
            $custom_loop = new WP_Query(array(
                'post_type'     => 'video',
                'posts_per_page' => 5,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            )); ?>

            <?php if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>

                    <li class="swiper-slide">
                        <?php

                        // Load value.
                        $iframe = get_field('video');

                        // Use preg_match to find iframe src.
                        preg_match('/src="(.+?)"/', $iframe, $matches);
                        $src = $matches[1];

                        // Add extra parameters to src and replace HTML.
                        $params = array(
                            'controls'  => 0,
                            'hd'        => 1,
                            'autohide'  => 1
                        );
                        $new_src = add_query_arg($params, $src);
                        $iframe = str_replace($src, $new_src, $iframe);

                        // Add extra attributes to iframe HTML.
                        $attributes = 'frameborder="0"';
                        $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                        // Display customized HTML.
                        echo $iframe;
                        ?>
                        <p class="nome-video"><?php echo esc_html( get_field('nome_e_cognome_video') ); ?></p>
                        <p><?php echo esc_html( get_field('patologia_video') ); ?></p>
                    </li>

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
    </div>
</section>