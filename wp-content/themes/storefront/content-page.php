<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="col s12 left paddingtop30 paddingbottom30">
		<?php if(function_exists('bcn_display'))
		{
		    bcn_display();
		}?>
	</div>

	<?php
	/**
	 * Functions hooked in to storefront_page add_action
	 *
	 * @hooked storefront_page_header          - 10
	 * @hooked storefront_page_content         - 20
	 */
	do_action( 'storefront_page' );
	?>
</div><!-- #post-## -->
