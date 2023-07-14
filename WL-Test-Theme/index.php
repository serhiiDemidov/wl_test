<?php
/**
 * The main template file
 */

get_header(); ?>


<?php if ( have_posts() ) : ?>

   <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php
get_footer();
