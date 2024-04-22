<!-- Hero Categoria Eventi-->
<section class="hero-cat container">
    <div class="hero-cat__content">
        <h1 class="hero-cat__content__title"><?php echo esc_html( get_field('titolo_categoria_eventi', 'option') ); ?></h1>
        <div class="hero-cat__content__text">
            <div class="wysiwyg"><?php the_field('testo_1_eventi', 'option'); ?></div>
            <div class="wysiwyg"><?php the_field('testo_2_eventi', 'option'); ?></div>
        </div>
    </div>
</section>