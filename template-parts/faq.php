<section class="faq container">
    <h2 class="faq__title">Alcune domande e risposte che siamo soliti rispondere</h2>
    <ul class="faq__list">
        <?php /* Custom Loop */

        $custom_loop = new WP_Query(array(
            'post_type'     => 'faq',
            'posts_per_page' => 999,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        )); ?>

        <?php if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>
                <li class="faq__list__panel">
                    <div class="faq__list__panel__title">
                        <p><?php echo esc_html(get_field('domanda_faq')); ?></p>
                        <img class="faq__list__panel__title__meno" src="<?php echo get_template_directory_uri() . '/assets/img/acf/icona_meno_b.svg'?>" alt="">
                        <img class="faq__list__panel__title__plus" src="<?php echo get_template_directory_uri() . '/assets/img/acf/icona_plus_b.svg'?>" alt="">
                    </div>
                    <div class="faq__list__panel__text">
                        <p><?php echo wp_kses_post(get_field('risposta_faq')); ?></p>
                    </div>
                </li>
                <?php wp_reset_postdata(); ?>
        <?php endwhile;
        endif; ?>
    </ul>
</section>