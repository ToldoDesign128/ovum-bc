<!-- Hero Categoria Aree di Intervento -->
<section class="hero-cat container">
    <div class="hero-cat__content">
        <h1 class="hero-cat__content__title"><?php echo esc_html( get_field('titolo_categoria_aree', 'option') ); ?></h1>
        <div class="hero-cat__content__text">
            <div class="wysiwyg"><?php the_field('testo_1_aree', 'option'); ?></div>
            <div class="wysiwyg"><?php the_field('testo_2_aree', 'option'); ?></div>
        </div>
    </div>
</section>