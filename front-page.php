<?php get_header(); ?>
<main>
    <?php get_template_part("template-parts/hero/hero-home"); ?>

    <?php get_template_part("template-parts/sticky-post-block"); ?>

    <!-- About me -->
    <section class="about-home container">
        <div class="about-home__content">
            <h3><?php echo esc_html(get_field('titolo_about_home')); ?></h3>
            <h2><?php echo esc_html(get_field('titolo_sezione_about_home')); ?></h2>
            <div class="about-home__content__text">
                <p><?php echo wp_kses_post(get_field('testo_1_about_home')); ?></p>
                <p><?php echo wp_kses_post(get_field('testo_2_about_home')); ?></p>
            </div>
            <div class="about-home__content__cards">
                <?php
                if (have_rows('card_about_home')) :
                    while (have_rows('card_about_home')) : the_row();

                        $titolo_card = get_sub_field('titolo_card');
                        $testo_card = get_sub_field('testo_card'); ?>
                        <div class="about-home__content__cards__item">
                            <p class="about-home__content__cards__item__title"><?php echo esc_html($titolo_card); ?></p>
                            <p class="about-home__content__cards__item__text"><?php echo wp_kses_post($testo_card); ?></p>
                        </div>
                <?php
                    endwhile;
                endif; ?>
            </div>
        </div>
        <div class="about-home__image">
            <span class="about-home__image__bg"></span>
            <?php
            $image_about_block = get_field('immagine_about_home');
            if (!empty($image_about_block)) : ?>
                <img src="<?php echo esc_url($image_about_block['url']); ?>" alt="<?php echo esc_attr($image_about_block['alt']); ?>" />
            <?php endif; ?>
            <div class="about-home__image__box">
                <p><?php echo esc_html(get_field('nome_foto_about_home')); ?></p>

                <?php
                $pulsante_foto = get_field('pulsante_foto_about_home');
                if ($pulsante_foto) :
                    $pulsante_foto_url = $pulsante_foto['url'];
                    $pulsante_foto_title = $pulsante_foto['title'];
                    $pulsante_foto_target = $pulsante_foto['target'] ? $pulsante_foto['target'] : '_self';
                ?>

                    <a href="<?php echo esc_url($pulsante_foto_url); ?>" target="<?php echo esc_attr($pulsante_foto_target); ?>" class="button-white">
                        <span class="text"><?php echo esc_html($pulsante_foto_title); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                                <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                                    <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                                    <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                                </g>
                            </svg>
                        </span>
                        <span class="text-1"><?php echo esc_html($pulsante_foto_title); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                                <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                                    <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                                    <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                                </g>
                            </svg>
                        </span>
                        <span class="text-2"><?php echo esc_html($pulsante_foto_title); ?>
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
            </div>
        </div>
    </section>

    <!-- Servizi -->
    <section class="servizi-home container">
        <div class="servizi-home__image">
            <h3 class="servizi-home__image__title"><?php echo esc_html(get_field('titoletto_servizi_home')); ?></h3>
            <div class="servizi-home__image__box">
                <?php
                $image_about_block = get_field('immagine_sezione_servizi_home');
                if (!empty($image_about_block)) : ?>
                    <img src="<?php echo esc_url($image_about_block['url']); ?>" alt="<?php echo esc_attr($image_about_block['alt']); ?>" />
                <?php endif; ?>
                <?php
                $pulsante_foto = get_field('pulsante_immagine_servizi_home');
                if ($pulsante_foto) :
                    $pulsante_foto_url = $pulsante_foto['url'];
                    $pulsante_foto_title = $pulsante_foto['title'];
                    $pulsante_foto_target = $pulsante_foto['target'] ? $pulsante_foto['target'] : '_self';
                ?>
                    <a href="<?php echo esc_url($pulsante_foto_url); ?>" target="<?php echo esc_attr($pulsante_foto_target); ?>" class="button-white">
                        <span class="text"><?php echo esc_html($pulsante_foto_title); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                                <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                                    <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                                    <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                                </g>
                            </svg>
                        </span>
                        <span class="text-1"><?php echo esc_html($pulsante_foto_title); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                                <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                                    <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                                    <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                                </g>
                            </svg>
                        </span>
                        <span class="text-2"><?php echo esc_html($pulsante_foto_title); ?>
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
            </div>
        </div>
        <div class="servizi-home__content">
            <div class="servizi-home__content__service1">

                <div class="servizi-home__content__service1__title">
                    <h2><?php echo esc_html(get_field('titolo_1_servizi_home')); ?></h2>
                </div>
                <div class="servizi-home__content__service1__box">
                    <h2 class="servizi-home__content__service1__box__subtitle"><?php echo esc_html(get_field('sottotitolo_1_servizi_home')); ?></h2>
                    <p class="servizi-home__content__service1__box__text"><?php echo wp_kses_post(get_field('testo_1_servizi_home')); ?></p>
                    <?php
                    if (have_rows('elenco_1_servizi_home')) :
                        while (have_rows('elenco_1_servizi_home')) : the_row();

                            $voce_elenco_1 = get_sub_field('voce_elenco_1'); ?>
                            <div class="servizi-home__content__service1__box__repeater">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/acf/icona_check.svg'; ?>" alt="">
                                <p><?php echo esc_html($voce_elenco_1); ?></p>
                            </div>

                    <?php
                        endwhile;
                    endif; ?>
                </div>
            </div>
            <div class="servizi-home__content__service2">
                <div class="servizi-home__content__service2__title">
                    <h2><?php echo esc_html(get_field('titolo_2_servizi_home')); ?></h2>
                </div>
                <div class="servizi-home__content__service2__box">
                    <h2 class="servizi-home__content__service2__box__subtitle"><?php echo esc_html(get_field('sottotitolo_2_servizi_home')); ?></h2>
                    <p class="servizi-home__content__service2__box__text"><?php echo wp_kses_post(get_field('testo_2_servizi_home')); ?></p>
                    <?php
                    if (have_rows('elenco_2_servizi_home')) :
                        while (have_rows('elenco_2_servizi_home')) : the_row();

                            $voce_elenco_2 = get_sub_field('voce_elenco_2'); ?>
                            <div class="servizi-home__content__service2__box__repeater">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/acf/icona_check.svg'; ?>" alt="">
                                <p><?php echo esc_html($voce_elenco_2); ?></p>
                            </div>

                    <?php
                        endwhile;
                    endif; ?>
                </div>

            </div>
        </div>
    </section>

    <?php get_template_part("template-parts/prima-e-dopo"); ?>

    <?php get_template_part("template-parts/post-block"); ?>

    <?php get_template_part("template-parts/video-block"); ?>

    <?php get_template_part("template-parts/cta"); ?>
</main>
<?php get_footer(); ?>