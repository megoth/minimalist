
<nav class="navigation-main" role="navigation">
    <?php
    wp_nav_menu( array(
        'items_wrap' => '<ul id="%1$s" class="nav %2$s">%3$s</ul>',
        'link_after' => '<div class="triangle"></div>',
        'theme_location' => 'main_navigation'
    ) );
    ?>
</nav>