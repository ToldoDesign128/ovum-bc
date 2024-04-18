<!-- Hero Categoria Eventi-->
<section class="hero-cat container">
    <div class="hero-cat__content">
        <h1 class="hero-cat__content__title"><?php echo esc_html( get_field('titolo_categoria_eventi', 'option') ); ?></h1>
        <div class="hero-cat__content__text">
            <p><?php echo wp_kses_post ( get_field('testo_1_eventi', 'option') ); ?></p>
            <p><?php echo wp_kses_post ( get_field('testo_2_eventi', 'option') ); ?></p>
        </div>
    </div>
</section>