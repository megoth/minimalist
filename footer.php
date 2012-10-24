<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	</div><!-- #MasterContent -->
    <div class="push"></div>
</div><!-- #MasterContainer -->

<footer id="MasterFooter">
    <nav class="block-container navigation">
        <?php
            wp_nav_menu( array(
                'container_class' => 'tabbable tabs-below',
                'items_wrap' => '<ul id="%1$s" class="nav nav-tabs %2$s">%3$s</ul>',
                'theme_location' => 'footer_navigation'
                ) );
        ?>
    </nav>
</footer><!-- #MasterFooter -->

<?php wp_footer(); ?>

</body>
</html>