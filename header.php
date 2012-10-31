<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'minimalist' ), max( $paged, $page ) );

        ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all and (min-width: 30em)" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.medium.css" />
    <link rel="stylesheet" type="text/css" media="all and (min-width: 50em)" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.large.css" />
    <link rel="alternate" type="application/rss+xml" title="Posts feed (RSS 2.0)" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="Posts feed (RDF/RSS 1.0)" href="<?php bloginfo('rdf_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="Posts feed (Atom)" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php
        /* We add some JavaScript to pages with the comment form
         * to support sites with threaded comments (when in use).
         */
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );

        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
    ?>
</head>

<body <?php body_class(); ?>>
<div id="MasterContainer" class="block-container hfeed">
    <div class="container-inner grid-row">
        <div class="grid-item">
            <header class="grid-row" id="MasterHeader" role="banner">
                <hgroup class="grid-item">
                    <?php if( is_single() ) : ?>
                    <h2>
                        <a href="http://icanhasweb.net/" title="<?php echo get_bloginfo( 'name', 'display' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    </h2>
                    <h4 id="site-description"><?php bloginfo( 'description' ); ?></h4>
                    <?php else : ?>
                    <h1>
                        <a href="http://icanhasweb.net/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <!--<?php bloginfo( 'name' ); ?>-->
                            <span class="first">I CAN</span>
                            <span class="second">HAS WEB</span>
                        </a>
                    </h1>
                    <h3 id="site-description"><?php bloginfo( 'description' ); ?></h3>
                    <?php endif; ?>
                </hgroup>

                <nav class="grid-item" id="MasterNavigation" role="navigation">
                    <?php
                    wp_nav_menu( array(
                        'items_wrap' => '<ul id="%1$s" class="nav %2$s">%3$s</ul>',
                        'link_after' => '<div class="triangle"></div>',
                        'theme_location' => 'main_navigation'
                    ) );
                    ?>
                </nav><!-- #MasterNavigation -->
            </header><!-- #MasterHeader -->
            <div id="MasterAside">
                <aside id="MasterSearch" class="widget">
                    <?php get_search_form(); ?>
                </aside>
                <nav id="MasterAsideNavigation" class="widget">
                    <?php
                    wp_nav_menu( array(
                        'items_wrap' => '<ul id="%1$s" class="nav nav-pills nav-stacked %2$s">%3$s</ul>',
                        'theme_location' => 'aside_navigation'
                    ) );
                    ?>
                </nav>
            </div>
        </div>
        <div class="grid-item" id="MasterContent">
