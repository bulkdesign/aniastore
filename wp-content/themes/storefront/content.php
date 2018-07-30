<?php
/**
 * Template used to display post content.
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="col s12 left paddingtop30 paddingbottom30">
		<?php if(function_exists('bcn_display'))
		{
		    bcn_display();
		}?>
	</div>

	<?php
	/**
	 * Functions hooked in to storefront_loop_post action.
	 *
	 * @hooked storefront_post_header          - 10
	 * @hooked storefront_post_meta            - 20
	 * @hooked storefront_post_content         - 30
	 */
	do_action( 'storefront_loop_post' );
	?>

</article><!-- #post-## -->
