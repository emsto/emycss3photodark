<?php
get_header();
if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php
    endwhile;
else:
    ?>
    <h1><?php _e('Nothing found', EMY_TEXT_DOMAIN); ?></h1>
    <p><?php _e('Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', EMY_TEXT_DOMAIN); ?></p>
<?php
endif;
get_footer();
?>
