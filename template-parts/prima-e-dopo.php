<!-- Prima e Dopo -->
<section class="container ped">
    <div class="ped__content">
        <p class="ped__content__title">I benefici della chiropratica.</p>
        <p class="ped__content__text">Ogni colonna ha la propria storia. In base alle sue condizioni e ai cambiamenti che subisce, può dare origine a disturbi di varia entità, come dolori e immobilità.</p>
        <p class="ped__content__text">La sua manipolazione, da parte di mani esperte, aiuta il sistema nervoso a recuperare la propria efficienza energetica, favorendo la riattivazione dei processi di autoguarigione, di cui il nostro organismo è naturalmente dotato.</p>
        <p class="ped__content__text">Queste sono le storie che il nostro centro chiropratico vuole raccontare.</p>
        <!-- Stiky Post CTA -->
        <a href="<?php the_permalink(); ?>" class="button-gray mt-3">
            <span class="text">Prenota una visita
                <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                    <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                        <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                        <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                    </g>
                </svg>
            </span>
            <span class="text-1">Prenota una visita
                <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                    <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                        <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                        <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                    </g>
                </svg>
            </span>
            <span class="text-2">Prenota una visita
                <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                    <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(-10.076 -9.9)">
                        <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                        <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                    </g>
                </svg>
            </span>
            <span class="shape"></span>
        </a>
    </div>
    <div class="ped__slider swiperPrima">
        <ul class="swiper-wrapper">
            <?php
            $custom_loop = new WP_Query(array(
                'post_type'     => 'ped',
                'posts_per_page' => 5,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            )); ?>

            <?php if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>

                    <li class="swiper-slide">
                        <?php
                        $prima = get_field('foto_prima_ped');
                        if (!empty($prima)) : ?>
                            <img src="<?php echo esc_url($prima['url']); ?>" alt="<?php echo esc_attr($prima['alt']); ?>" />
                        <?php endif; ?>
                    </li>

                    <?php wp_reset_postdata(); ?>
            <?php endwhile;
            endif; ?>
        </ul>
        <div class="navigation-wrap">
            <!-- Navigation buttons -->
            <div class="swiper-button-prev"></div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>