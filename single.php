<?php get_header(); ?>
<div class="block-container block-container-sticky block-single-container">
    <?php get_template_part( 'page-title' ); ?>
    <div class="container-inner">
        <div class="block-posts grid-item" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>
            <?php endwhile; ?>
        </div>
        <div class="block-single-aside grid-item">
            <?php get_template_part( 'page-navigation' ); ?>
            <?php get_template_part( 'page-aside' ); ?>
        </div>
    </div>
    <div class="push"></div>
</div>
<?php get_footer(); ?>