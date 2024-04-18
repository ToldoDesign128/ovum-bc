<!-- Hero Categoria Chiropratica -->
<section class="hero-cat container">
    <div class="hero-cat__content">
        <h1 class="hero-cat__content__title"><?php echo esc_html( get_field('titolo_categoria_chiropratica', 'option') ); ?></h1>
        <div class="hero-cat__content__text">
            <p><?php echo wp_kses_post ( get_field('testo_1_chiropratica', 'option') ); ?></p>
            <p><?php echo wp_kses_post ( get_field('testo_2_chiropratica', 'option') ); ?></p>
        </div>
    </div>
</section>