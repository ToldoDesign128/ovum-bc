<?php
/* Template Name: BC Testimonianze */
get_header();
?>
<main>
    <?php get_template_part("template-parts/hero/hero-testimonianze"); ?>

    <?php get_template_part("template-parts/quote"); ?>

    <?php get_template_part("template-parts/loop/loop-videorecensioni"); ?>
    
    <?php get_template_part("template-parts/cta"); ?>
</main>
<?php get_footer(); ?>