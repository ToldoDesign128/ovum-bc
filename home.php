<?php get_header(); 
$page_id = get_queried_object_id();?>

<main>
    <?php get_template_part("template-parts/hero/hero-blog"); ?>

    <?php get_template_part("template-parts/sticky-post-block"); ?>

    <?php get_template_part("template-parts/loop/loop-post"); ?>

    <?php get_template_part("template-parts/cta"); ?>
</main>

<?php get_footer(); ?>