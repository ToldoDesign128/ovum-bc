<!-- Hero Home -->
<section class="hero-home">
    <div class="hero-home__content">
        <div class="container">
            <div class="hero-home__content__text">
                <h1 class="hero-home__content__text__title"><?php echo esc_html(get_field('titolo_home')); ?></h1>
                <h2 class="hero-home__content__text__subtitle"><?php echo esc_html(get_field('sotto_titolo_home')); ?></h2>
                <p class="hero-home__content__text__text"><?php echo wp_kses_post(get_field('testo_hero_home')); ?></p>
                <span class="hero-home__content__text__line"></span>
                <?php
                $link_testimonianze = get_field('link_testimonianze_home');
                if ($link_testimonianze) :
                    $link_testimonianze_url = $link_testimonianze['url'];
                    $link_testimonianze_title = $link_testimonianze['title'];
                    $link_testimonianze_target = $link_testimonianze['target'] ? $link_testimonianze['target'] : '_self';
                ?>
                    <a class="hero-home__content__text__button" href="<?php echo esc_url($link_testimonianze_url); ?>" target="<?php echo esc_attr($link_testimonianze_target); ?>">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="87.939" height="13.001" viewBox="0 0 87.939 13.001">
                                <g id="Raggruppa_54" data-name="Raggruppa 54" transform="translate(-503.843 -990.827)">
                                    <path id="Icon_awesome-star-half-alt" data-name="Icon awesome-star-half-alt" d="M12.912,4.355,9.2,3.814,7.535.452a.815.815,0,0,0-1.46,0L4.413,3.813.7,4.354A.812.812,0,0,0,.246,5.74L2.935,8.355,2.3,12.049A.814.814,0,0,0,3.1,13a.8.8,0,0,0,.378-.1L6.8,11.161l3.325,1.744a.812.812,0,0,0,1.18-.855l-.636-3.694,2.689-2.615a.812.812,0,0,0-.45-1.386ZM9.821,7.483l-.46.447.109.632.5,2.881L7.372,10.082l-.568-.3V1.73L8.1,4.353l.284.575.635.092,2.9.422-2.1,2.041Z" transform="translate(578.173 990.828)" fill="#fff" />
                                    <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M7.5.451,5.846,3.813l-3.709.541A.813.813,0,0,0,1.688,5.74L4.371,8.354l-.635,3.694a.812.812,0,0,0,1.178.856L8.233,11.16,11.551,12.9a.813.813,0,0,0,1.178-.856l-.635-3.694L14.777,5.74a.813.813,0,0,0-.449-1.386l-3.709-.541L8.961.451A.813.813,0,0,0,7.5.451Z" transform="translate(558.149 990.828)" fill="#fff" />
                                    <path id="Icon_awesome-star-2" data-name="Icon awesome-star" d="M7.5.451,5.846,3.813l-3.709.541A.813.813,0,0,0,1.688,5.74L4.371,8.354l-.635,3.694a.812.812,0,0,0,1.178.856L8.233,11.16,11.551,12.9a.813.813,0,0,0,1.178-.856l-.635-3.694L14.777,5.74a.813.813,0,0,0-.449-1.386l-3.709-.541L8.961.451A.813.813,0,0,0,7.5.451Z" transform="translate(539.567 990.828)" fill="#fff" />
                                    <path id="Icon_awesome-star-3" data-name="Icon awesome-star" d="M7.5.451,5.846,3.813l-3.709.541A.813.813,0,0,0,1.688,5.74L4.371,8.354l-.635,3.694a.812.812,0,0,0,1.178.856L8.233,11.16,11.551,12.9a.813.813,0,0,0,1.178-.856l-.635-3.694L14.777,5.74a.813.813,0,0,0-.449-1.386l-3.709-.541L8.961.451A.813.813,0,0,0,7.5.451Z" transform="translate(520.984 990.828)" fill="#fff" />
                                    <path id="Icon_awesome-star-4" data-name="Icon awesome-star" d="M7.5.451,5.846,3.813l-3.709.541A.813.813,0,0,0,1.688,5.74L4.371,8.354l-.635,3.694a.812.812,0,0,0,1.178.856L8.233,11.16,11.551,12.9a.813.813,0,0,0,1.178-.856l-.635-3.694L14.777,5.74a.813.813,0,0,0-.449-1.386l-3.709-.541L8.961.451A.813.813,0,0,0,7.5.451Z" transform="translate(502.402 990.828)" fill="#fff" />
                                </g>
                            </svg>
                            <span class="ml-1">
                                4,6
                            </span>
                        </div>
                        <div>
                            <?php echo esc_html($link_testimonianze_title); ?>
                            <svg class="ml-2 svg-arrow" xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024">
                                <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(-10.076 -9.9)">
                                    <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                                    <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                                </g>
                            </svg>
                        </div>
                    </a>
                <?php endif;

                $link_mobile_testimonianze = get_field('link_testimonianze_mobile_home');
                if ($link_mobile_testimonianze) :
                    $link_mobile_testimonianze_url = $link_mobile_testimonianze['url'];
                    $link_mobile_testimonianze_title = $link_mobile_testimonianze['title'];
                    $link_mobile_testimonianze_target = $link_mobile_testimonianze['target'] ? $link_mobile_testimonianze['target'] : '_self';
                ?>
                    <a class="hero-home__content__text__mobile__button" href="<?php echo esc_url($link_mobile_testimonianze_url); ?>" target="<?php echo esc_attr($link_mobile_testimonianze_target); ?>">

                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="87.939" height="13.001" viewBox="0 0 87.939 13.001">
                                <g id="Raggruppa_54" data-name="Raggruppa 54" transform="translate(-503.843 -990.827)">
                                    <path id="Icon_awesome-star-half-alt" data-name="Icon awesome-star-half-alt" d="M12.912,4.355,9.2,3.814,7.535.452a.815.815,0,0,0-1.46,0L4.413,3.813.7,4.354A.812.812,0,0,0,.246,5.74L2.935,8.355,2.3,12.049A.814.814,0,0,0,3.1,13a.8.8,0,0,0,.378-.1L6.8,11.161l3.325,1.744a.812.812,0,0,0,1.18-.855l-.636-3.694,2.689-2.615a.812.812,0,0,0-.45-1.386ZM9.821,7.483l-.46.447.109.632.5,2.881L7.372,10.082l-.568-.3V1.73L8.1,4.353l.284.575.635.092,2.9.422-2.1,2.041Z" transform="translate(578.173 990.828)" fill="#fff" />
                                    <path id="Icon_awesome-star" data-name="Icon awesome-star" d="M7.5.451,5.846,3.813l-3.709.541A.813.813,0,0,0,1.688,5.74L4.371,8.354l-.635,3.694a.812.812,0,0,0,1.178.856L8.233,11.16,11.551,12.9a.813.813,0,0,0,1.178-.856l-.635-3.694L14.777,5.74a.813.813,0,0,0-.449-1.386l-3.709-.541L8.961.451A.813.813,0,0,0,7.5.451Z" transform="translate(558.149 990.828)" fill="#fff" />
                                    <path id="Icon_awesome-star-2" data-name="Icon awesome-star" d="M7.5.451,5.846,3.813l-3.709.541A.813.813,0,0,0,1.688,5.74L4.371,8.354l-.635,3.694a.812.812,0,0,0,1.178.856L8.233,11.16,11.551,12.9a.813.813,0,0,0,1.178-.856l-.635-3.694L14.777,5.74a.813.813,0,0,0-.449-1.386l-3.709-.541L8.961.451A.813.813,0,0,0,7.5.451Z" transform="translate(539.567 990.828)" fill="#fff" />
                                    <path id="Icon_awesome-star-3" data-name="Icon awesome-star" d="M7.5.451,5.846,3.813l-3.709.541A.813.813,0,0,0,1.688,5.74L4.371,8.354l-.635,3.694a.812.812,0,0,0,1.178.856L8.233,11.16,11.551,12.9a.813.813,0,0,0,1.178-.856l-.635-3.694L14.777,5.74a.813.813,0,0,0-.449-1.386l-3.709-.541L8.961.451A.813.813,0,0,0,7.5.451Z" transform="translate(520.984 990.828)" fill="#fff" />
                                    <path id="Icon_awesome-star-4" data-name="Icon awesome-star" d="M7.5.451,5.846,3.813l-3.709.541A.813.813,0,0,0,1.688,5.74L4.371,8.354l-.635,3.694a.812.812,0,0,0,1.178.856L8.233,11.16,11.551,12.9a.813.813,0,0,0,1.178-.856l-.635-3.694L14.777,5.74a.813.813,0,0,0-.449-1.386l-3.709-.541L8.961.451A.813.813,0,0,0,7.5.451Z" transform="translate(502.402 990.828)" fill="#fff" />
                                </g>
                            </svg>
                            <span class="ml-1">
                                4,6
                            </span>
                        </div>
                        <div>
                            <?php echo esc_html($link_mobile_testimonianze_title); ?>
                            <svg class="ml-1" xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024">
                                <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(-10.076 -9.9)">
                                    <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                                    <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                                </g>
                            </svg>
                        </div>
                    </a>
                <?php endif; ?>
            </div>
        </div>

        <?php
        $image_hero_bg = get_field('immagine_hero_home');
        if (!empty($image_hero_bg)) : ?>
            <img class="hero-home__content__bg" src="<?php echo esc_url($image_hero_bg['url']); ?>" alt="<?php echo esc_attr($image_hero_bg['alt']); ?>" />
        <?php endif; ?>

        <div class="hero-home__content__gradient"></div>
    </div>
</section>