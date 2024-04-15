<!-- Post block -->
<section class="container postblock">
    <div class="postblock__slider swiperPostBlock">
        <ul class="swiper-wrapper">
            <?php
            $custom_loop = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 10,
                'orderby'        => 'menu_order',
                'order'          => 'ASC'
            )); ?>

            <?php if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>
                    <li class="swiper-slide">
                        <article class="post-content">
                            <div class="post-content__image">
                                <?php the_post_thumbnail('large', array('class' => 'img-res', 'alt' => get_the_title())); ?>
                                <!-- Post category -->
                                <p class="post-content__image__cat"><?php $cat = get_the_category();
                                                                echo $cat[0]->cat_name; ?></p>
                                <!-- Stiky Post CTA -->
                                <a href="<?php the_permalink(); ?>" class="post-content__image__button button-gray mt-3">
                                    <span class="text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024">
                                            <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                                                <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                                                <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="text-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024">
                                            <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(0.424 0.6)">
                                                <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="round" stroke-width="1.2" />
                                                <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" transform="translate(-10.5 -10.5)" fill="none" stroke="#000" stroke-linejoin="bevel" stroke-width="1.2" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="text-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024">
                                            <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(-10.076 -9.9)">
                                                <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                                                <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="shape"></span>
                                </a>
                            </div>
                            <p class="post-content__title"><?php the_title(); ?></p>
                            <p class="post-content__extract"><?php echo esc_html(get_field('estratto')); ?></p>
                            <p class="post-content__date"><?php echo get_the_date('d F Y'); ?></p>
                        </article>
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