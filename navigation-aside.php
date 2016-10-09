
<nav class="navigation-aside">
    <?php
    wp_nav_menu( array(
        'items_wrap' => '<ul id="%1$s" class="nav nav-pills nav-stacked %2$s">%3$s</ul>',
        'theme_location' => 'aside_navigation'
    ) );
    ?>
</nav>