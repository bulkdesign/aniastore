
<?php include('market.php'); ?>
<div class="wrap woocommerce">
	<div class="icon32" id="icon-woocommerce-importer"><br></div>
    <h2 class="nav-tab-wrapper woo-nav-tab-wrapper">
        <a href="<?php echo admin_url('admin.php?page=wf_woocommerce_csv_im_ex') ?>" class="nav-tab <?php echo ($tab == 'import') ? 'nav-tab-active' : ''; ?>"><?php _e('Product Import / Export', 'wf_csv_import_export'); ?></a>
		    </h2>

	<?php
		switch ($tab) {
			case "export" :
				$this->admin_export_page();
			break;
			default :
				$this->admin_import_page();
			break;
		}
	?>
</div>