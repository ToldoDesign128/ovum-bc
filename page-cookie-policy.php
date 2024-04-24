<?php
/* Template Name: Cookie Policy */
get_header();
$page_id = get_queried_object_id(); ?>
<main class="cookie">
    <h1 class="cookie__title">Cookie Policy</h1>
    <section class="cookie__content wysiwyg">
        <?php the_field('cookie_content'); ?>
    </section>
</main>
<?php get_footer(); ?>