<!-- CTA Mobile -->
<div id="infoBtn" class="mobile-cta">
    <a href="<?php echo home_url() . '/contatti';?>" class="mobile-cta__button">
        Prenota una visita
        <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024">
            <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(-10.076 -9.9)">
                <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
            </g>
        </svg>
    </a>
</div>

<footer>
    <div class="container footer">
        <div class="footer__col__1">
            <div class="footer__col__1__title">
                <!-- img footer -->
                <?php
                $image_footer = get_field('immagine_footer', 'option');
                if (!empty($image_footer)) : ?>
                    <img src="<?php echo esc_url($image_footer['url']); ?>" alt="<?php echo esc_attr($image_footer['alt']); ?>" />
                <?php endif; ?>
                <!-- Footer title -->
                <?php
                $title_footer = get_field('titolo_footer', 'option');
                if (!empty($title_footer)) : ?>
                    <h6><?php echo esc_html($title_footer); ?></h6>
                <?php endif; ?>
            </div>
            <div class="footer__col__1__cta">
                <!-- Footer CTA -->
                <a href="#" class="button-white">
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
            <!-- Footer testo telefono -->
            <?php
            $testo_telefono = get_field('testo_footer_telefono', 'option');
            if (!empty($testo_telefono)) : ?>
                <p class="footer__col__1__text"><?php echo esc_html($testo_telefono); ?></p>
            <?php endif; ?>
            <!-- Telefono -->
            <?php
            $numero_telefono = get_field('numero_di_telefono_footer', 'option');
            if (!empty($numero_telefono)) :
                $numero_telefono_url = $numero_telefono['url'];
                $numero_telefono_title = $numero_telefono['title'];
                $numero_telefono_target = $numero_telefono['target'] ? $numero_telefono['target'] : '_self';;
            ?>
                <div class="footer__col__1__telefono">
                    <a class="footer__col__1__telefono__link" href="<?php echo esc_url($numero_telefono_url); ?>" target="<?php echo esc_attr($numero_telefono_target); ?>">
                        <!-- Telefono icon -->
                        <?php echo esc_html($numero_telefono_title); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div class="footer__col__2">
            <div class="footer__col__2__subcol">
                <!-- Contatti title -->
                <?php
                $testo_contatti = get_field('titolo_contatti_footer', 'option');
                if (!empty($testo_contatti)) : ?>
                    <p class="footer__col__2__subcol__title font-medium"><?php echo esc_html($testo_contatti); ?></p>
                <?php endif; ?>
                <!-- Telefono title -->
                <?php
                $titolo_telefono = get_field('titolo_telefono_footer', 'option');
                if (!empty($titolo_telefono)) : ?>
                    <p class="footer__col__2__subcol__telefono-title"><?php echo esc_html($titolo_telefono); ?></p>
                <?php endif; ?>
                <!-- Telefono  -->
                <?php
                $numero_telefono = get_field('numero_di_telefono_footer', 'option');
                if (!empty($numero_telefono)) :
                    $numero_telefono_url = $numero_telefono['url'];
                    $numero_telefono_title = $numero_telefono['title'];
                    $numero_telefono_target = $numero_telefono['target'] ? $numero_telefono['target'] : '_self';;
                ?>
                    <div class="footer__col__2__subcol__telefono">
                        <a class="footer__col__2__subcol__telefono__link" href="<?php echo esc_url($numero_telefono_url); ?>" target="<?php echo esc_attr($numero_telefono_target); ?>">
                            <!-- Telefono icon -->
                            <?php echo esc_html($numero_telefono_title); ?>
                        </a>
                    </div>
                <?php endif; ?>
                <!-- Email title -->
                <?php
                $titolo_email = get_field('titolo_email_footer', 'option');
                if (!empty($titolo_email)) : ?>
                    <p class="footer__col__2__subcol__email-title"><?php echo esc_html($titolo_email); ?></p>
                <?php endif; ?>
                <!-- Email -->
                <?php
                $email = get_field('email_footer', 'option');
                if (!empty($email)) :
                    $email_url = $email['url'];
                    $email_title = $email['title'];
                    $email_target = $email['target'] ? $email['target'] : '_self';;
                ?>
                    <div class="footer__col__2__subcol__email">
                        <a class="footer__col__2__subcol__email__link" href="<?php echo esc_url($email_url); ?>" target="<?php echo esc_attr($email_target); ?>">
                            <!-- Telefono icon -->
                            <?php echo esc_html($email_title); ?>
                        </a>
                    </div>
                <?php endif; ?>
                <!-- Indirizzo title -->
                <?php
                $titolo_indirizzo = get_field('titolo_indirizzo_footer', 'option');
                if (!empty($titolo_indirizzo)) : ?>
                    <p class="footer__col__2__subcol__indirizzo-title"><?php echo esc_html($titolo_indirizzo); ?></p>
                <?php endif; ?>
                <!-- Indirizzo -->
                <?php
                $indirizzo = get_field('indirizzo_footer', 'option');
                if (!empty($indirizzo)) :
                    $indirizzo_url = $indirizzo['url'];
                    $indirizzo_title = $indirizzo['title'];
                    $indirizzo_target = $indirizzo['target'] ? $indirizzo['target'] : '_self';;
                ?>
                    <div class="footer__col__2__subcol__indirizzo">
                        <a class="footer__col__2__subcol__indirizzo__link" href="<?php echo esc_url($indirizzo_url); ?>" target="<?php echo esc_attr($indirizzo_target); ?>">
                            <!-- Telefono icon -->
                            <?php echo esc_html($indirizzo_title); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="footer__col__2__subcol">
                <!-- Social title -->
                <?php
                $titolo_social = get_field('titolo_social_footer', 'option');
                if (!empty($titolo_social)) : ?>
                    <p class="font-medium"><?php echo esc_html($titolo_social); ?></p>
                <?php endif; ?>
                <div class="footer__col__2__subcol__social">
                    <!-- Facebook -->
                    <?php
                    $facebook = get_field('facebook', 'option');
                    if (!empty($facebook)) :
                        $facebook_url = $facebook['url'];
                        $facebook_title = $facebook['title'];
                        $facebook_target = $facebook['target'] ? $facebook['target'] : '_self';;
                    ?>
                        <div class="footer__col__2__subcol__social__item">
                            <a class="" href="<?php echo esc_url($facebook_url); ?>" target="<?php echo esc_attr($facebook_target); ?>">
                                <?php echo esc_html($facebook_title); ?>
                                <!-- Freccia icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                                    <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(-10.076 -9.9)">
                                        <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                                        <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                    <!-- Youtube -->
                    <?php
                    $youtube = get_field('youtube', 'option');
                    if (!empty($youtube)) :
                        $youtube_url = $youtube['url'];
                        $youtube_title = $youtube['title'];
                        $youtube_target = $youtube['target'] ? $youtube['target'] : '_self';;
                    ?>
                        <div class="footer__col__2__subcol__social__item">
                            <a class="" href="<?php echo esc_url($youtube_url); ?>" target="<?php echo esc_attr($youtube_target); ?>">
                                <?php echo esc_html($youtube_title); ?>
                                <!-- Freccia icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024" class="ml-1">
                                    <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(-10.076 -9.9)">
                                        <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                                        <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                                    </g>
                                </svg>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="footer__col__2__subcol">
                <!-- Footer Menu -->
                <nav>
                    <?php
                    wp_nav_menu(array(
                        'theme_location'    => 'footer',
                        'container'         =>  false,
                        'menu_class'        => 'footer-menu',
                        'orderby'           => 'menu_order',
                        'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                    ));
                    ?>
                </nav>
            </div>
        </div>
        <div class="footer__privacy">
            <div class="footer__privacy__copyright">
                <!-- Footer Copyright -->
                <?php
                $testo_copyright = get_field('copyright_footer', 'option');
                if (!empty($testo_copyright)) : ?>
                    <p><?php echo esc_html($testo_copyright); ?></p>
                <?php endif; ?>
            </div>
            <div class="footer__privacy__return">
                <button id="ScrollTopBtn">
                    Back to top

                    <svg xmlns="http://www.w3.org/2000/svg" width="11.024" height="11.024" viewBox="0 0 11.024 11.024">
                        <g id="Icon_feather-arrow-up-right" data-name="Icon feather-arrow-up-right" transform="translate(-10.076 -9.9)">
                            <path id="Tracciato_26" data-name="Tracciato 26" d="M10.5,20.5l10-10" fill="none" stroke="#fff" stroke-linejoin="round" stroke-width="1.2" />
                            <path id="Tracciato_27" data-name="Tracciato 27" d="M10.5,10.5h10v10" fill="none" stroke="#fff" stroke-linejoin="bevel" stroke-width="1.2" />
                        </g>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="footer-credits">
        <div class="container footer-credits-box">
            <div class="credits">
                <p class="">
                    Powered by
                    <a href="https://ovumdesign.it/" target="_blank" class="">ExVoid</a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="white" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53z" />
                    </svg>
                    <a href="https://www.exvoid.it/" target="_blank" class="">Ovum</a>
                </p>

            </div>
            <div class="privacy">
                <!-- Privacy policy -->
                <?php
                $privacy = get_field('privacy_policy_footer', 'option');
                if (!empty($privacy)) :
                    $privacy_url = $privacy['url'];
                    $privacy_title = $privacy['title'];
                    $privacy_target = $privacy['target'] ? $privacy['target'] : '_self';;
                ?>
                    <div class="">
                        <a class="" href="<?php echo esc_url($privacy_url); ?>" target="<?php echo esc_attr($privacy_target); ?>">
                            <?php echo esc_html($privacy_title); ?>
                        </a>
                    </div>
                <?php endif; ?>
                <!-- Cookie policy -->
                <?php
                $cookie = get_field('cookie_policy_footer', 'option');
                if (!empty($cookie)) :
                    $cookie_url = $cookie['url'];
                    $cookie_title = $cookie['title'];
                    $cookie_target = $cookie['target'] ? $cookie['target'] : '_self';;
                ?>
                    <div class="ml-1">
                        <a class="punto" href="<?php echo esc_url($cookie_url); ?>" target="<?php echo esc_attr($cookie_target); ?>">
                            <?php echo esc_html($cookie_title); ?>
                        </a>
                    </div>
                <?php endif; ?>
                <!-- Cookie Banner -->
                <button class="cmplz-manage-consent">Consenso cookie</button>

                <!-- Google policy -->
                <?php
                $privacy_google = get_field('privacy_recaptcha_footer_copia', 'option');
                if (!empty($privacy_google)) :
                    $privacy_google_url = $privacy_google['url'];
                    $privacy_google_title = $privacy_google['title'];
                    $privacy_google_target = $privacy_google['target'] ? $privacy_google['target'] : '_self';;
                ?>
                    <div class="ml-2">
                        <a class="punto" href="<?php echo esc_url($privacy_google_url); ?>" target="<?php echo esc_attr($privacy_google_target); ?>">
                            <?php echo esc_html($privacy_google_title); ?>
                        </a>
                    </div>
                <?php endif; ?>
                <!-- Google policy -->
                <?php
                $termini_google = get_field('termini_recaptcha_footer_copia', 'option');
                if (!empty($termini_google)) :
                    $termini_google_url = $termini_google['url'];
                    $termini_google_title = $termini_google['title'];
                    $termini_google_target = $termini_google['target'] ? $termini_google['target'] : '_self';;
                ?>
                    <div class="ml-1">
                        <a class="punto" href="<?php echo esc_url($termini_google_url); ?>" target="<?php echo esc_attr($termini_google_target); ?>">
                            <?php echo esc_html($termini_google_title); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>