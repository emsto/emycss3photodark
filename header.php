<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php if (is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="main">
            <header>
                <div id="logo">
                    <div id="logo_text">
                        <h1><a href="<?php echo get_home_url() ?>"><?php echo substr(get_bloginfo('name'), 0, strpos(get_bloginfo('name'), ' ')) ?>
                                <span class="logo_colour"><?php echo substr(get_bloginfo('name'), strpos(get_bloginfo('name'), ' ')) ?></span></a></h1>
                        <h2><?php bloginfo('description'); ?></h2>
                    </div>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'emy_top_menu',
                    'container' => 'nav',
                    'menu_class' => 'sf-menu',
                    'menu_id' => 'nav',
                    'fallback_cb' => false,
                ));
                ?>
            </header>
            <div id="site_content">
                <ul id="images">
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" width="600" height="300" alt="photo_one" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" width="600" height="300" alt="photo_two" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" width="600" height="300" alt="photo_three" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/4.jpg" width="600" height="300" alt="photo_four" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/5.jpg" width="600" height="300" alt="photo_five" /></li>
                    <li><img src="<?php echo get_template_directory_uri(); ?>/images/6.jpg" width="600" height="300" alt="photo_photo_dark" /></li>
                </ul>
                <?php get_sidebar() ?>
                <div class="content">
