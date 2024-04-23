<?php
/* Template Name: BC Servizi */
get_header();
?>
<main>
    <!-- Hero -->
    <?php get_template_part("template-parts/hero/hero-servizi"); ?>

    <!-- Sezione chiropratica -->
    <section class="tradizionale container">
        <h2 class="tradizionale__title"><?php echo esc_html(get_field('titolo_tradizionale_servizi')); ?></h2>
        <div class="tradizionale__content">
            <h3 class="tradizionale__content__title"><?php echo esc_html(get_field('sottotitolo_tradizionale_servizi')); ?></h3>
            <div class="tradizionale__content__box">
                <div class="tradizionale__content__box__text margin-0 wysiwyg"><?php the_field('testo_tradizionale_servizi'); ?></div>
                <?php
                if (have_rows('elenco_avanzata_servizi')) : ?>
                    <ul class="tradizionale__content__box__list">

                        <?php
                        while (have_rows('elenco_avanzata_servizi')) : the_row();

                            // Load sub field value.
                            $testo_ul_1 = get_sub_field('testo_elenco'); ?>

                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/acf/icona_check.svg'; ?>" alt="">
                                <?php echo esc_html($testo_ul_1); ?>
                            </li>

                        <?php
                        endwhile; ?>
                    </ul>
                <?php
                endif; ?>
                <div class="tradizionale__content__box__text wysiwyg"><?php the_field('testo_2_tradizionale_servizi'); ?></div>
            </div>
            <?php
            $image_trad = get_field('immagine_tradizionale_servizi');
            if (!empty($image_trad)) : ?>
                <div class="tradizionale__content__image">
                    <img src="<?php echo esc_url($image_trad['url']); ?>" alt="<?php echo esc_attr($image_trad['alt']); ?>" />
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Sezione avanzata -->
    <section class="avanzata container">
        <h2 class="avanzata__title"><?php echo esc_html(get_field('titolo_avanzata_servizi')); ?></h2>
        <div class="avanzata__content">
            <h3 class="avanzata__content__title"><?php echo esc_html(get_field('sottotitolo_avanzata_servizi')); ?></h3>
            <div class="avanzata__content__box">
                <div class="avanzata__content__box__text margin-0 wysiwyg"><?php the_field('testo_avanzata_servizi'); ?></div>
                <?php
                if (have_rows('elenco_avanzata_servizi')) : ?>
                    <ul class="avanzata__content__box__list">

                        <?php
                        while (have_rows('elenco_avanzata_servizi')) : the_row();

                            // Load sub field value.
                            $testo_ul_2 = get_sub_field('testo_elenco'); ?>

                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/acf/icona_check.svg'; ?>" alt="">
                                <?php echo esc_html($testo_ul_2); ?>
                            </li>

                        <?php
                        endwhile; ?>
                    </ul>
                <?php
                endif; ?>
                <div class="avanzata__content__box__text wysiwyg"><?php the_field('testo_2_avanzata_servizi'); ?></div>
            </div>
            <?php
            $image_avanzata = get_field('immagine_avanzata_servizi');
            if (!empty($image_avanzata)) : ?>
                <div class="avanzata__content__image">
                    <img  src="<?php echo esc_url($image_avanzata['url']); ?>" alt="<?php echo esc_attr($image_avanzata['alt']); ?>" />
                </div>
            <?php endif; ?>
            <h3 class="avanzata__content__title margin-75"><?php echo esc_html(get_field('sottotitolo_avanzata_servizi_2')); ?></h3>
            <div class="avanzata__content__box margin-75">
                <div class="avanzata__content__box__text margin-0 wysiwyg"><?php the_field('testo_avanzata_servizi_3'); ?></div>
                <?php
                if (have_rows('elenco_avanzata_servizi_2')) : ?>
                    <ul class="avanzata__content__box__list">

                        <?php
                        while (have_rows('elenco_avanzata_servizi_2')) : the_row();

                            // Load sub field value.
                            $testo_ul_3 = get_sub_field('testo_elenco'); ?>

                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/acf/icona_check.svg'; ?>" alt="">
                                <?php echo esc_html($testo_ul_3); ?>
                            </li>

                        <?php
                        endwhile; ?>
                    </ul>
                <?php
                endif; ?>
            </div>
            <h3 class="avanzata__content__title margin-75"><?php echo esc_html(get_field('sottotitolo_avanzata_servizi_3')); ?></h3>
            <div class="avanzata__content__box margin-75">
                <div class="avanzata__content__box__text wysiwyg"><?php the_field('testo_3_avanzata_servizi'); ?></div>
            </div>
        </div>
    </section>

    <!-- Prima e dopo -->
    <div class="container">
        <h3 class="titolo-ped-home"><?php echo esc_html(get_field('titolo_ped_servizi')); ?></h3>
    </div>
    <?php get_template_part("template-parts/prima-e-dopo"); ?>

    <!-- Post Block -->
    <div class="container">
        <h3 class="titolo-ped-home"><?php echo esc_html(get_field('titolo_blog_servizi')); ?></h3>
        <h2 class="subtitolo-post-home"><?php echo esc_html(get_field('sottotitolo_blog_servizi')); ?></h2>
    </div>
    <?php get_template_part("template-parts/post-block"); ?>

    <!-- Video Block -->
    <div class="container">
        <h3 class="titolo-ped-home"><?php echo esc_html(get_field('titolo_video_servizi')); ?></h3>
    </div>
    <?php get_template_part("template-parts/video-block"); ?>

    <!-- CTA -->
    <?php get_template_part("template-parts/cta"); ?>


</main>
<?php get_footer(); ?>