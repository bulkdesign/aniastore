<?php
/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
?>

<?php if ( $price_html = $product->get_price_html() ) : ?>

    <span style="text-decoration: line-through;">de R$
      <?php
      $preco = $product->price;
      $preco_desconto = $preco * 0.10;
      $preco_final = $preco + $preco_desconto;
      echo number_format($preco_final, 2, ',', '.');
      ?>
    </span>
	<p style="font-size:16px;text-decoration:none;font-weight: bold;color: #333333;"> por <?php echo $product->get_price_html(); ?></p>

<?php endif; ?>
