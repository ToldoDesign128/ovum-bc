<!-- Loop Videorecensioni -->
<section class="container loop-video">
    <h3 class="loop-video__title" id="videorecensioni"><?php echo esc_html(get_field('titolo_videorecensioni')); ?></h3>
    <ul class="loop-video__grid">
        <?php
        $custom_loop = new WP_Query(array(
            'post_type'     => 'video',
            'posts_per_page' => 999,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        )); ?>

        <?php if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>

                <li class="loop-video__grid__item">
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
                    $attributes = 'frameborder="0" id="youtube-video"';
                    $iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);

                    // Display customized HTML.
                    echo $iframe;
                    ?>
                    <p class="nome-video"><?php echo esc_html(get_field('nome_e_cognome_video')); ?></p>
                    <p><?php echo esc_html(get_field('patologia_video')); ?></p>
                </li>

                <?php wp_reset_postdata(); ?>
        <?php endwhile;
        endif; ?>
    </ul>
</section>