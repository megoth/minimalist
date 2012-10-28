<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<form class="form-search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div class="input-append">
            <input type="text" class="search-query span2" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
            <button type="submit" class="btn">
                <i class="icon-search"></i>
            </button>
        </div>
	</form>
