<?php
/**
 * Plugin Name: Exportador de Estoque
 * Plugin URI: http://www.bulkdesign.com.br
 * Description: Exportador de Estoque para planilhas CSV
 * Version: 1.0.0
 * Author: Endo Creative
 * Author URI: http://www.bulkdesign.com.br
 * License: GPL2
 */
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;
// create top level admin menu
add_action('admin_menu', 'endo_stock_report_admin_menu');
function endo_stock_report_admin_menu() {
  
  add_menu_page('Exportador de Estoque', 'Exportador de Estoque', 10, 'exportador_estoque', 'pagina_exportador_estoque');
}
function pagina_exportador_estoque() {
	?>
	<div class="wrap">

        <h2>Exportar Produtos para CSV</h2>
        <p>clique para exportar a lista de estoque do site.</p>

      	<form method="post" id="export-form" action="">
            <?php submit_button('Exportar Estoque', 'primary', 'download_csv' ); ?>
        </form>

    </div>
    <?php 
}
add_action('admin_init', 'endo_stock_report_admin_init');
function endo_stock_report_admin_init() {
	global $plugin_page;
	if ( isset($_POST['download_csv']) && $plugin_page == 'exportador_estoque' ) {
	   
	   	generate_stock_report_csv();
	    
	    die();
	}
}
function generate_stock_report_csv() {
	// output headers so that the file is downloaded rather than displayed
	header('Content-Type: text/csv; charset=utf-8');
	// set file name with current date
	header('Content-Disposition: attachment; filename=estoque-exportado-' . date('d-m-Y') . '.csv');
	// create a file pointer connected to the output stream
	$output = fopen('php://output', 'w');
	// set the column headers for the csv
	$headings = array( 'Produto', 'Quantia no Estoque' );
	// output the column headings
	fputcsv($output, $headings );
	// get all simple products where stock is managed
	$args = array(
	'post_type'			=> 'product',
	'post_status' 		=> 'publish',
    'posts_per_page' 	=> -1,
    'orderby'			=> 'title',
    'order'				=> 'ASC',
	'meta_query' 		=> array(
        array(
            'key' 	=> '_manage_stock',
            'value' => 'yes'
        )
    ),
		'tax_query' => array(
			array(
				'taxonomy' 	=> 'product_type',
				'field' 	=> 'slug',
				'terms' 	=> array('simple'),
				'operator' 	=> 'IN'
			)
		)
	);
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();

        global $product;
		
		$row = array( $product->get_title(), $product->stock );
		fputcsv($output, $row);
		
	endwhile; 
	// get all product variations where stock is managed
	$args = array(
		'post_type'			=> 'product_variation',
		'post_status' 		=> 'publish',
        'posts_per_page' 	=> -1,
        'orderby'			=> 'title',
        'order'				=> 'ASC',
		'meta_query' => array(
			array(
				'key' 		=> '_stock',
				'value' 	=> array('', false, null),
				'compare' 	=> 'NOT IN'
			)
		)
	);
	
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
	
        $product = new WC_Product_Variation( $loop->post->ID );
		
		$row = array( $product->get_title() . ", " . get_the_title( $product->variation_id ), $product->stock );
        fputcsv($output, $row);
	endwhile;
}