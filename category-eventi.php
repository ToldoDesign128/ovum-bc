<?php get_header(); ?>
<?php /* Custom Loop */

$custom_loop = new WP_Query(array(
    'post_type'         => 'post',
    'category_name'     => 'eventi',
    'posts_per_page'    => 999,
    'orderby'           => 'menu_order',
    'order'             => 'ASC'
)); ?>

<?php if ($custom_loop->have_posts()) : while ($custom_loop->have_posts()) : $custom_loop->the_post(); ?>

        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumbnail', array('class' => '', 'alt' => get_the_title())); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </a>

        <?php wp_reset_postdata(); ?>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>