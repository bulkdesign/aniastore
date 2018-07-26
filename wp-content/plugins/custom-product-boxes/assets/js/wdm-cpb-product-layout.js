jQuery( document ).ready( function () {
	// alert("Hi"+wdm_cpb_layout.selectedLayout);
	if (wdm_cpb_layout.selectedLayout == "horizontal") {
		jQuery('.wdm-bundle-bundle-box').addClass('wdm-bundle-bundle-box-horizontal');
		jQuery('.wdm_product_bundle_container_form').addClass('wdm_product_bundle_horizontal');
	}
});
