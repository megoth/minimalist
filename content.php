<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if ( is_single() || is_page() ) : ?>
        <h1 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h1>
        <?php else : ?>
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>
        <?php endif; ?>
        <h4 class="meta">
            <span class="entry-published-date"><?php the_date('Y-m-d', 'Published ', '; '); ?></span>
            Categorized in
            <span class="entry-category"><?php the_category(', '); ?></span>
        </h4>
    </header><!-- .entry-header -->
    <?php if ( is_search() ) : // Only display Excerpts for Search ?>
    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>
    <div class="block-content entry-content">
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
        <?php if ( is_single() ): ?>
        <p class="entry-tags meta">
            <?php the_tags('Tagged with ', ', '); ?>
        </p>
        <?php endif; ?>
    </div><!-- .entry-content -->
    <?php endif; ?>
    <?php if (is_single() ) : ?>
    <div class="entry-comments">
        <?php disqus_embed('icanhasweb'); ?>
    </div>
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->