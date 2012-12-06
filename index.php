<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>

<div class="block-container block-container-sticky" id="IndexContainer">
    <div class="container-inner" id="IndexHeader">
        <div class="grid-item title">
            <?php get_template_part( 'page-title' ); ?>
        </div>
        <div class="grid-item navigation">
            <?php get_template_part( 'page-navigation' ); ?>
        </div>
    </div>
    <div class="container-inner" id="IndexMain">
        <div class="block-posts grid-item" id="IndexContent" role="main">
            <?php if ( have_posts() ) : ?>
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', get_post_format() ); ?>

                <?php endwhile; ?>

                <?php if ( $wp_query->max_num_pages > 1 ) : ?>
                <nav class="navigation-posts">
                    <ul class="nav nav-pills">
                        <li class="nav-previous">
                            <?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts' ) ); ?>
                        </li>
                        <li class="nav-next">
                            <?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>' ) ); ?>
                        </li>
                    </ul>
                </nav><!-- #nav-above -->
                <?php endif; ?>

            <?php else : ?>

                <article id="post-0" class="post no-results not-found">
                    <header class="entry-header">
                        <h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
                        <?php get_search_form(); ?>
                    </div><!-- .entry-content -->
                </article><!-- #post-0 -->

            <?php endif; ?>
        </div><!-- #IndexContent -->
        <div class="grid-item" id="IndexAside">
            <aside class="grid-item">
                <?php get_search_form(); ?>
            </aside>
            <aside class="grid-item">
                <?php get_template_part( 'navigation-aside' ); ?>
            </aside>
        </div>
    </div><!-- .container-inner -->
    <div class="push"></div>
</div><!-- #IndexContainer -->

<?php get_footer(); ?>