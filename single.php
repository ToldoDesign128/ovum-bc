<?php get_header(); ?>
<main class="articolo container">
    <section class="articolo__hero">
        <h2 class="articolo__hero__cat"><?php $cat = get_the_category();
                                        echo $cat[0]->cat_name; ?></h2>
        <h1 id="titolo-articolo" class="articolo__hero__title"><?php the_title(); ?></h1>
        <h5 class="articolo__hero__estratto"><?php echo esc_html(get_field('estratto')); ?></h5>
        <p class="articolo__hero__data"><?php echo get_the_date('d F Y'); ?></p>
        <?php
        $post_tags = get_the_tags();
        if ($post_tags) {
            foreach ($post_tags as $tag) {
                echo '<p class="articolo__hero__tag">' . $tag->name . '</p>';
            }
        }
        ?>
        <div class="articolo__hero__thumb">
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
        </div>

    </section>
    <section class="articolo__content">
        <?php
        if (have_rows('contenuto_articolo')) :
            // Loop through rows.
            while (have_rows('contenuto_articolo')) : the_row();

                if (get_row_layout() == 'titolo_h2') :
                    $h2 = get_sub_field('titolo_h2'); ?>

                    <!-- Blocco H2 -->

                    <h2 id="<?php echo esc_html($h2); ?>" class="articolo__content__h2"><?php echo esc_html($h2); ?></h2>

                    <!-- Blocco H3 -->

                <?php
                elseif (get_row_layout() == 'titolo_h3') :
                    $h3 = get_sub_field('titolo_h3'); ?>

                    <h3 id="<?php echo esc_html($h3); ?>" class="articolo__content__h3"><?php echo esc_html($h3); ?></h3>

                    <!-- Blocco H4 -->

                <?php
                elseif (get_row_layout() == 'titolo_h4') :
                    $h4 = get_sub_field('titolo_h4'); ?>

                    <h4 id="<?php echo esc_html($h4); ?>" class="articolo__content__h4"><?php echo esc_html($h4); ?></h4>

                    <!-- Blocco Paragrafo -->

                <?php
                elseif (get_row_layout() == 'paragrafo') :
                    $p = get_sub_field('paragrafo'); ?>

                    <p class="articolo__content__p"><?php echo wp_kses_post($p) ?></p>

                    <!-- Blocco Rich Text -->

                <?php
                elseif (get_row_layout() == 'rich_text') : ?>

                    <div class="articolo__content__wysiwyg">
                        <?php the_sub_field('rich_text'); ?>
                    </div>

                    <!-- Blocco Elenco Puntato -->

                <?php
                elseif (get_row_layout() == 'elenco_puntato') :
                    $titolo_ul = get_sub_field('titolo_elenco_puntato'); ?>
                    <p class="articolo__content__title__ul"><?php echo esc_html($titolo_ul) ?></p>
                    <?php
                    if (have_rows('voci_elenco')) : ?>
                        <ul class="articolo__content__ul">
                            <?php
                            while (have_rows('voci_elenco')) : the_row();

                                // Load sub field value.
                                $testo_ul = get_sub_field('testo_punto_elenco'); ?>

                                <li class="articolo__content__ul__item">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/acf/icona_check.svg'; ?>" alt="">
                                    <?php echo esc_html($testo_ul); ?>
                                </li>


                            <?php
                            endwhile; ?>
                        </ul>
                    <?php
                    endif; ?>

                    <!-- Blocco Elenco Numerato -->

                <?php
                elseif (get_row_layout() == 'elenco_numerato') :
                    $titolo_ol = get_sub_field('titolo_elenco_numerato'); ?>
                    <p class="articolo__content__title__ol"><?php echo esc_html($titolo_ol) ?></p>
                    <?php
                    if (have_rows('voci_elenco_numerato')) : ?>
                        <ol class="articolo__content__ol">
                            <?php
                            while (have_rows('voci_elenco_numerato')) : the_row();

                                // Load sub field value.
                                $testo_ol = get_sub_field('testo_punto_elenco'); ?>

                                <li class="articolo__content__ol__item"><?php echo esc_html($testo_ol); ?></li>


                            <?php
                            endwhile; ?>
                        </ol>
                    <?php
                    endif; ?>

                    <!-- Blocco Video -->

                <?php
                elseif (get_row_layout() == 'video') :
                    $iframe = get_sub_field('video');

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

                    <!-- Blocco Immagine -->

                <?php
                elseif (get_row_layout() == 'immagine_singola') :
                    $immagine_singola = get_sub_field('immagine_singola'); ?>

                    <img class="articolo__content__image" src="<?php echo esc_url($immagine_singola['url']); ?>" alt="<?php echo esc_attr($immagine_singola['alt']); ?>" />

                    <!-- Blocco Immagine Doppia -->

                <?php
                elseif (get_row_layout() == 'immagine_doppia') :
                    $immagine_1 = get_sub_field('immagine_1');
                    $immagine_2 = get_sub_field('immagine_2'); ?>

                    <div class="articolo__content__image-box">
                        <div class="articolo__content__image-box__image">
                            <img src="<?php echo esc_url($immagine_1['url']); ?>" alt="<?php echo esc_attr($immagine_1['alt']); ?>" />
                        </div>
                        <div class="articolo__content__image-box__image">
                            <img class="articolo__content__image-box__image" src="<?php echo esc_url($immagine_2['url']); ?>" alt="<?php echo esc_attr($immagine_2['alt']); ?>" />
                        </div>
                    </div>

                    <!-- Blocco Galleria -->

                    <?php
                elseif (get_row_layout() == 'galleria') :

                    $gallery_items = get_sub_field('galleria_immagini');
                    $size = 'full';
                    if ($gallery_items) : ?>
                        <div class="articolo__content__gallery swipePostGallery">
                            <ul class="swiper-wrapper">
                                <?php foreach ($gallery_items as $image_id) : ?>
                                    <li class="articolo__content__gallery__items swiper-slide">
                                        <?php echo wp_get_attachment_image($image_id, $size); ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <div class="navigation-wrap">
                                <!-- Navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <!-- Pagination -->
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    <?php endif; ?>

        <?php
                endif;
            endwhile;
        endif;
        ?>

        <div class="articolo__control__buttons container">
            <span class="articolo__control__buttons__previous"><?php previous_post_link('%link') ?></span>
            <span class="articolo__control__buttons__next"><?php next_post_link('%link') ?></span>
        </div>
    </section>
    <aside class="articolo__sideboard">
        <ol>
            <li id="linkTitolo" class="current-title-index">
                <a href="#titolo-articolo"><?php the_title(); ?></a>
            </li>
            <?php
            if (have_rows('contenuto_articolo')) :
                // Loop through rows.
                while (have_rows('contenuto_articolo')) : the_row();

                    if (get_row_layout() == 'titolo_h2') :
                        $h2 = get_sub_field('titolo_h2'); ?>

                        <!-- Blocco H2 -->
                        <li class="toc-anchor">
                            <a href="#<?php echo esc_html($h2); ?>"><?php echo esc_html($h2); ?></a>
                        </li>
            <?php
                    endif;
                endwhile;
            endif;
            ?>
        </ol>
        <div class="articolo__sideboard__cta">
            <h2 class="articolo__sideboard__cta__title"><?php echo esc_html(get_field('titolo_cta_footer', 'option')); ?></h2>
            <?php
            $cta_link = get_field('bottone_cta_footer', 'option');
            if ($cta_link) :
                $cta_link_url = $cta_link['url'];
                $cta_link_title = $cta_link['title'];
                $cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
            ?>
                <a href="<?php echo esc_url($cta_link_url); ?>" class="articolo__sideboard__cta__button button-white" target="<?php echo esc_attr($cta_link_target); ?>">
                    <span>
                        <span><?php echo esc_html($cta_link_title); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                                <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                                    <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                                    <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                                </g>
                            </svg>
                        </span>
                        <span><?php echo esc_html($cta_link_title); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                                <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(-10.076 -9.9)">
                                    <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                                    <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                                </g>
                            </svg>
                        </span>
                    </span>
                </a>
            <?php endif; ?>
            <img class="articolo__sideboard__cta__image" src="<?php echo get_template_directory_uri() . '/assets/img/cta/cta_mobile_hover.png'; ?>" alt="">
        </div>
    </aside>
</main>

<?php get_footer(); ?>