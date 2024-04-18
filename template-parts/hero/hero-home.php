<!-- Hero Home -->
<section class="hero-home">
    <div class="hero-home__content">
        <div class="hero-home__content__text container">
            <h1><?php echo esc_html(get_field('titolo_home')); ?></h1>
            <h2><?php echo esc_html(get_field('sotto_titolo_home')); ?></h2>
            <p><?php echo wp_kses_post(get_field('testo_hero_home')); ?></p>
            <?php
            $link_testimonianze = get_field('link_testimonianze_home');
            if ($link_testimonianze) :
                $link_testimonianze_url = $link_testimonianze['url'];
                $link_testimonianze_title = $link_testimonianze['title'];
                $link_testimonianze_target = $link_testimonianze['target'] ? $link_testimonianze['target'] : '_self';
            ?>
                <a class="button" href="<?php echo esc_url($link_testimonianze_url); ?>" target="<?php echo esc_attr($link_testimonianze_target); ?>"><?php echo esc_html($link_testimonianze_title); ?></a>
            <?php endif; ?>
        </div>

        <?php
        $image_hero_bg = get_field('immagine_hero_home');
        if (!empty($image_hero_bg)) : ?>
            <img class="hero-home__content__bg" src="<?php echo esc_url($image_hero_bg['url']); ?>" alt="<?php echo esc_attr($image_hero_bg['alt']); ?>" />
        <?php endif; ?>

        <div class="hero-home__content__gradient"></div>
    </div>
</section>