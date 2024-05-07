<?php
/* Template Name: BC About */
get_header();
?>
<main>

    <?php get_template_part("template-parts/hero/hero-about"); ?>

    <!-- Sezione Mission -->
    <section class="mission container">
        <div class="mission__content">
            <div class="mission__content__box">
                <h3><?php echo esc_html(get_field('titolo_mission_about')); ?></h3>
                <p class="mission__content__box__sub"><?php echo esc_html(get_field('sotto_titolo_mission_about')); ?></p>
                <div class="mission__content__box__cards">
                    <?php
                    if (have_rows('cards_mission_about')) :
                        while (have_rows('cards_mission_about')) : the_row();

                            $titolo_card = get_sub_field('titolo_card');?>
                            <div class="mission__content__box__cards__item">
                                <p class="mission__content__box__cards__item__title"><?php echo esc_html($titolo_card); ?></p>
                                <div class="mission__content__box__cards__item__text wysiwyg"><?php the_sub_field('testo_card');?></div>
                            </div>
                    <?php
                        endwhile;
                    endif; ?>

                </div>
            </div>
            <?php
            $image_mission = get_field('immagine_mission_about');
            if (!empty($image_mission)) : ?>
            <div class="mission__content__image">
                <img src="<?php echo esc_url($image_mission['url']); ?>" alt="<?php echo esc_attr($image_mission['alt']); ?>" />
            </div>
            <?php endif; ?>
        </div>
        <div class="mission__content2">
            <h2><?php echo esc_html(get_field('titolo_sezione_mission_about')); ?></h2>
            <div class="mission__content2__box">
                <div class="wysiwyg"><?php the_field('blocco_testo_1_mission_about'); ?></div>
                <div class="wysiwyg"><?php the_field('blocco_testo_2_mission_about'); ?></div>
            </div>
        </div>
    </section>

    <!-- Sezione Chiropratica -->
    <section class="scaricabili container">
        <div class="scaricabili__content">
            <h3><?php echo esc_html(get_field('titolo_chiropratica_about')); ?></h3>
            <h2><?php echo esc_html(get_field('sottotitolo_chiropratica_about')); ?></h2>
            <div class="scaricabili__content__text">
                <?php the_field('testo_chiropratica_about'); ?>
            </div>
            <div class="scaricabili__content__file">
                <?php
                $file_cv = get_field('curriculum_chiropratica_about');
                if ($file_cv) : ?>
                    <a href="<?php echo $file_cv['url']; ?>" target="_blank" class="button-green">
                        <span>
                            <span><?php echo $file_cv['title']; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17.2" height="16.904" viewBox="0 0 17.2 16.904" class="ml-1">
                                    <g id="Raggruppa_2086" data-name="Raggruppa 2086" transform="translate(-323.4 -3893.696)">
                                        <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(337.657 3899.952) rotate(135)">
                                            <path id="Tracciato_26" data-name="Tracciato 26" d="M0,8,8,0" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                                            <path id="Tracciato_27" data-name="Tracciato 27" d="M0,0H8V8" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                                        </g>
                                        <path id="Tracciato_397" data-name="Tracciato 397" d="M20.5,22.5v4.222a1.966,1.966,0,0,1-1.778,2.111H6.278A1.966,1.966,0,0,1,4.5,26.722V22.5" transform="translate(319.5 3881.167)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" />
                                    </g>
                                </svg>
                            </span>
                            <span><?php echo $file_cv['title']; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17.2" height="16.904" viewBox="0 0 17.2 16.904" class="ml-1">
                                    <g id="Raggruppa_2086" data-name="Raggruppa 2086" transform="translate(-323.4 -3893.696)">
                                        <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(337.657 3899.952) rotate(135)">
                                            <path id="Tracciato_26" data-name="Tracciato 26" d="M0,8,8,0" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                                            <path id="Tracciato_27" data-name="Tracciato 27" d="M0,0H8V8" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                                        </g>
                                        <path id="Tracciato_397" data-name="Tracciato 397" d="M20.5,22.5v4.222a1.966,1.966,0,0,1-1.778,2.111H6.278A1.966,1.966,0,0,1,4.5,26.722V22.5" transform="translate(319.5 3881.167)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" />
                                    </g>
                                </svg>
                            </span>
                        </span>
                    </a>
                <?php endif;
                $certificati = get_field('certificati_chiropratica_about');
                if ($certificati) : ?>
                    <a href="<?php echo $certificati['url']; ?>" target="_blank" class="button-gray">
                        <span>
                            <span><?php echo $certificati['title']; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17.2" height="16.904" viewBox="0 0 17.2 16.904" class="ml-1">
                                    <g id="Raggruppa_2085" data-name="Raggruppa 2085" transform="translate(-323.4 -3893.696)">
                                        <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(337.657 3899.952) rotate(135)">
                                            <path id="Tracciato_26" data-name="Tracciato 26" d="M0,8,8,0" transform="translate(0 0)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                                            <path id="Tracciato_27" data-name="Tracciato 27" d="M0,0H8V8" transform="translate(0 0)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                                        </g>
                                        <path id="Tracciato_397" data-name="Tracciato 397" d="M20.5,22.5v4.222a1.966,1.966,0,0,1-1.778,2.111H6.278A1.966,1.966,0,0,1,4.5,26.722V22.5" transform="translate(319.5 3881.167)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" />
                                    </g>
                                </svg>
    
                            </span>
                            <span><?php echo $certificati['title']; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17.2" height="16.904" viewBox="0 0 17.2 16.904" class="ml-1">
                                    <g id="Raggruppa_2086" data-name="Raggruppa 2086" transform="translate(-323.4 -3893.696)">
                                        <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(337.657 3899.952) rotate(135)">
                                            <path id="Tracciato_26" data-name="Tracciato 26" d="M0,8,8,0" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                                            <path id="Tracciato_27" data-name="Tracciato 27" d="M0,0H8V8" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                                        </g>
                                        <path id="Tracciato_397" data-name="Tracciato 397" d="M20.5,22.5v4.222a1.966,1.966,0,0,1-1.778,2.111H6.278A1.966,1.966,0,0,1,4.5,26.722V22.5" transform="translate(319.5 3881.167)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2" />
                                    </g>
                                </svg>
                            </span>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <?php
        $image_mission = get_field('immagine_chiropratica_about');
        if (!empty($image_mission)) : ?>
            <img class="scaricabili__image" src="<?php echo esc_url($image_mission['url']); ?>" alt="<?php echo esc_attr($image_mission['alt']); ?>" />
        <?php endif; ?>
    </section>

    <!-- Video Block -->
    <div class="container">
        <h3 class="titolo-ped-home"><?php echo esc_html(get_field('titolo_video_about')); ?></h3>
    </div>
    <?php get_template_part("template-parts/video-block"); ?>

    <!-- Prima e dopo -->
    <div class="container">
        <h3 class="titolo-ped-home"><?php echo esc_html(get_field('titolo_ped_about')); ?></h3>
    </div>
    <?php get_template_part("template-parts/prima-e-dopo"); ?>

    <!-- CTA -->
    <?php get_template_part("template-parts/cta"); ?>

</main>
<?php get_footer(); ?>