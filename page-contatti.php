<?php
/* Template Name: BC Contatti */
get_header();
?>
<main>
    <section class="hero-contatti container">
        <div class="hero-contatti__text">
            <h1 class="hero-contatti__text__title"><?php echo esc_html(get_field('titolo_contatti')); ?></h1>

            <div class="hero-contatti__text__box">

                <?php
                // Check rows exists.
                if (have_rows('link_contatti')) :

                    // Loop through rows.
                    while (have_rows('link_contatti')) : the_row();

                        // Load sub field value.
                        $etichetta_contatti = get_sub_field('etichetta_link');
                        $link_contatti = get_sub_field('link');

                        $link_contatti_url = $link_contatti['url'];
                        $link_contatti_title = $link_contatti['title'];
                        $link_contatti_target = $link_contatti['target'] ? $link_contatti['target'] : '_self'; ?>

                        <div class="hero-contatti__text__box__container">
                            <p class="hero-contatti__text__box__container__text"><?php echo esc_html($etichetta_contatti); ?></p>
                            <a class="hero-contatti__text__box__container__link" href="<?php echo esc_url($link_contatti_url); ?>" target="<?php echo esc_attr($link_contatti_target); ?>"><?php echo esc_html($link_contatti_title); ?></a>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>

            <h2 class="hero-contatti__text__subtitle"><?php echo esc_html(get_field('sottotitolo_contatti')); ?></h2>

            <?php
            // Check rows exists.
            if (have_rows('orari_contatti')) :

                // Loop through rows.
                while (have_rows('orari_contatti')) : the_row();

                    // Load sub field value.
                    $giorni_orari = get_sub_field('giorni_e_orari'); ?>
                    <p class="hero-contatti__text__text"><?php echo esc_html($giorni_orari); ?></p>
            <?php
                endwhile;
            endif;
            ?>

        </div>
        <div class="hero-contatti__form">
            <h3 class="hero-contatti__form__title"><?php echo esc_html(get_field('titolo_form_contatti')); ?></h3>
            <div class="hero-contatti__form__text"><?php the_field('testo_form_contatti'); ?></div>

            <div class="hero-contatti__form__gravity">
               <?php
                gravity_form(1, false, false, false, '',  true, 12); 
                ?>
            </div>
        </div>
    </section>
    <section class="map-contatti container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5535.611771837205!2d11.125205099999999!3d46.0749116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478271336721a989%3A0x6fa2fa9b9167488b!2sBenessere%20Chiropratico%20del%20Dr.%20Keith%20Giese!5e0!3m2!1sit!2sit!4v1713512648222!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <?php get_template_part("template-parts/faq"); ?>
    <?php get_template_part("template-parts/cta"); ?>
</main>
<?php get_footer(); ?>