
<hgroup>
    <?php if( is_single() || is_page() ) : ?>
    <h2>
        <a href="<?php bloginfo('url'); ?>" title="<?php echo get_bloginfo( 'name', 'display' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </h2>
    <h3 class="site-description"><?php bloginfo( 'description' ); ?></h3>
    <?php else : ?>
    <h1>
        <a href="<?php bloginfo('url'); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
        </a>
    </h1>
    <h3 class="site-description"><?php bloginfo( 'description' ); ?></h3>
    <?php endif; ?>
</hgroup>