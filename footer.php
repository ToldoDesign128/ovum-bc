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
                    <span class="text">Prenota una visita</span>
                    <span class="text-1">Prenota una visita</span>
                    <span class="text-2">Prenota una visita</span>
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
                    <p class="footer__col__2__subcol__title"><?php echo esc_html($testo_contatti); ?></p>
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
                    <p><?php echo esc_html($titolo_social); ?></p>
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
                                <!-- Telefono icon -->
                                <?php echo esc_html($facebook_title); ?>
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
                                <!-- Telefono icon -->
                                <?php echo esc_html($youtube_title); ?>
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
                <button>
                    Back to top
                </button>
            </div>
        </div>
    </div>
    <div class="container footer-credits">
        <div class="credits">
            <p class="">
                Powered by
                <a href="https://ovumdesign.it/" target="_blank" class="">ExVoid</a>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="white" d="m12 21.35l-1.45-1.32C5.4 15.36 2 12.27 2 8.5C2 5.41 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.08C13.09 3.81 14.76 3 16.5 3C19.58 3 22 5.41 22 8.5c0 3.77-3.4 6.86-8.55 11.53z" />
                    </svg>
                </span>
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
            <span class="privacy__punto"></span>
            <!-- Cookie policy -->
            <?php
            $cookie = get_field('cookie_policy_footer', 'option');
            if (!empty($cookie)) :
                $cookie_url = $cookie['url'];
                $cookie_title = $cookie['title'];
                $cookie_target = $cookie['target'] ? $cookie['target'] : '_self';;
            ?>
                <div class="">
                    <a class="" href="<?php echo esc_url($cookie_url); ?>" target="<?php echo esc_attr($cookie_target); ?>">
                        <?php echo esc_html($cookie_title); ?>
                    </a>
                </div>
            <?php endif; ?>
            <!-- Cookie Banner -->
            <button class="cmplz-manage-consent">Consenso cookie</button>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>