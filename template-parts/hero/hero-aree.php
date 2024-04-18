<!-- Hero Categoria Aree di Intervento -->
<section class="hero-cat container">
    <div class="hero-cat__content">
        <h1 class="hero-cat__content__title"><?php echo esc_html( get_field('titolo_categoria_aree', 'option') ); ?></h1>
        <div class="hero-cat__content__text">
            <p><?php echo wp_kses_post ( get_field('testo_1_aree', 'option') ); ?></p>
            <p><?php echo wp_kses_post ( get_field('testo_2_aree', 'option') ); ?></p>
        </div>
    </div>
</section>