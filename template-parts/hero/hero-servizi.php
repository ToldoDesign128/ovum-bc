<!-- Hero Servizi -->
<section class="hero-about container">
    <div class="hero-about__content">
        <h1 class="hero-about__content__title"><?php echo esc_html( get_field('titolo_hero_servizi') ); ?></h1>
        <h2 class="hero-about__content__subtitle"><?php echo esc_html( get_field('sottotitolo_hero_servizi') ); ?></h2>
        <div class="hero-about__content__text">
            <p><?php echo wp_kses_post ( get_field('testo_1_hero_servizi') ); ?></p>
            <p><?php echo wp_kses_post ( get_field('testo_2_hero_servizi') ); ?></p>
        </div>
    </div>
</section>
<div class="about-cover">
    <?php 
    $image_about_cover = get_field('immagine_copertina_servizi');
    if( !empty( $image_about_cover ) ): ?>
        <img class="about-cover__image" src="<?php echo esc_url($image_about_cover['url']); ?>" alt="<?php echo esc_attr($image_about_cover['alt']); ?>" />
    <?php endif; ?>
</div>