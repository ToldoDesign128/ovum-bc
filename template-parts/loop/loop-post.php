<!-- Loop Blog -->
<section class="container loop-blog">
    <ul class="loop-blog__grid">
        <?php
        $custom_loop = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 999,
            'orderby'        => 'menu_order',
            'order'          => 'ASC'
        )); ?>

        <?php if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>
                <li class="loop-blog__grid__item">
                    <article class="post-content">
                        <div class="post-content__image">
                            <?php
                            $post_sellector = get_field('selettore_immagine');
                            $post_image = get_field('immagine_copertina');

                            if ($post_sellector == 'Immagine') { ?>
                                <img src="<?php echo esc_url($post_image['url']); ?>" />
                            <?php
                            } else {
                            ?>
                                <!-- Video -->
                                <?php
                                // Load value.
                                $iframe = get_field('video_copertina');

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
                            <?php
                            };
                            ?>
                            <!-- Post category -->
                            <p class="post-content__image__cat"><?php $cat = get_the_category();
                                                                echo $cat[0]->cat_name; ?></p>
                            <!-- Stiky Post CTA -->
                            <a href="<?php the_permalink(); ?>" class="post-content__image__button button-gray mt-3">
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
                        <p class="post-content__title"><?php the_title(); ?></p>
                        <p class="post-content__extract"><?php echo esc_html(get_field('estratto')); ?></p>
                        <p class="post-content__date"><?php echo get_the_date('d F Y'); ?></p>
                    </article>
                </li>
                <?php wp_reset_postdata(); ?>
        <?php endwhile;
        endif; ?>
    </ul>
</section>