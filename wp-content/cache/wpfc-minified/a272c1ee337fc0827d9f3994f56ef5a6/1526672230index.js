// source --> https://www.aniastore.com.br/wp-content/plugins/woocommerce-product-addon/js/script.js?ver=3.0 
/*
 * NOTE: all actions are prefixed by plugin shortnam_action_name
 */
var selected_slide = 0;
var total_sections = 0;
var uploaderInstances = {};


jQuery(function($){

	//tweaking file uploader button css
	$("#uploadifive-nm_contact_file").css({'margin':'#fff'});
	
	//setting all input widht to 95% within P tags
	$(".nm-productmeta-box").find('input:text, input[type="email"], textarea, select').css({'width': '100%', 'padding': 0});
	
	/*
	 * handling date input
	 */
	$("input[data-type='date']").each(function(i, item){
		
		//console.log(item);
		$(item).datepicker({ 	changeMonth: true,
			changeYear: true,
			dateFormat: $(item).attr('data-format')
			});
	});
	
	
	
	
	$('input[name="quantity"]').on('blur', function(){
		
		//console.log($(this).val());
		set_price_for_matrix();
	});
	
		
});


function set_price_for_matrix(){
		
		var price_matrix = jQuery("#_pricematrix").val();
		var selected_qty = jQuery('input[name="quantity"]').val();
		
		//console.log(price_matrix);
		if(price_matrix != '' && price_matrix != undefined){
			
			var pricematrix = jQuery.parseJSON(price_matrix);
			//console.log(pricematrix);
			jQuery.each(pricematrix, function(i, matrix){
				
				
				var mtx = matrix.option.split('-');
				var price = matrix.price;
				
				var range1 = parseInt(mtx[0]);	
				var range2 = parseInt(mtx[1]);
				
				if(selected_qty >= range1 && selected_qty <= range2){
					
					//console.log('price set '+price);
					
				}
			});
			
		}
	
}

function set_visibility(p_box, _bound, _total_rules, _visiblity){
	
	var box_id				= jQuery(p_box).attr('id');
	if(boxes[box_id] !== undefined){
		
		// console.log(box_id+': total rules = '+_total_rules+' rules matched = '+Object.keys(boxes[box_id]).length);
		switch(_visiblity){
		
		case 'Show':
			if((_bound === 'Any' &&  (Object.keys(boxes[box_id]).length > 0)) || _total_rules === Object.keys(boxes[box_id]).length){
				jQuery(p_box).show(200, function(){
					var inner_input = jQuery(p_box).find('input');
					var hidden_name = '_'+inner_input.attr('id')+'_';
					jQuery('input:hidden[name="'+hidden_name+'"]').remove();
					inner_input.after('<input type="hidden" name="'+hidden_name+'" value="showing" />');
					
					// ios fix for fileuploader instace, Najeeb did on May 9, 2016
					if( jQuery(this).attr('class') === 'fileupload-box' ){
						
						//uploader instance
						if ( uploaderInstances[jQuery(p_box).attr('data-dataname')] !== undefined ){
							uploaderInstances[jQuery(p_box).attr('data-dataname')].refresh();
						}
						
					}
				});
				
			}else{
				jQuery(p_box).hide(200, function(){
					var inner_input = jQuery(p_box).find('input');
					var hidden_name = '_'+inner_input.attr('id')+'_';
					jQuery('input:hidden[name="'+hidden_name+'"]').remove();
					inner_input.after('<input type="hidden" name="'+hidden_name+'" value="hidden" />');
				});
			}
			break;					
		
		case 'Hide':
			if((_bound === 'Any' &&  (Object.keys(boxes[box_id]).length > 0)) || _total_rules === Object.keys(boxes[box_id]).length){
				jQuery(p_box).hide(200, function(){
					jQuery(p_box).find('select, input:radio, input:text, textarea').val('');
					var inner_input = jQuery(p_box).find('input');
					var hidden_name = '_'+inner_input.attr('id')+'_';
					jQuery('input:hidden[name="'+hidden_name+'"]').remove();
					inner_input.after('<input type="hidden" name="'+hidden_name+'" value="hidden" />');
				});
				// console.log('hiddedn rule '+box_id);
				
			}else{
				jQuery(p_box).show(200, function(){
					var inner_input = jQuery(p_box).find('input');
					var hidden_name = '_'+inner_input.attr('id')+'_';
					jQuery('input:hidden[name="'+hidden_name+'"]').remove();
					inner_input.after('<input type="hidden" name="'+hidden_name+'" value="showing" />');
					
					// ios fix for fileuploader instace, Najeeb did on May 9, 2016
					if( jQuery(this).attr('class') === 'fileupload-box' ){
						
						//uploader instance
						if ( uploaderInstances[jQuery(p_box).attr('data-dataname')] !== undefined ){
							uploaderInstances[jQuery(p_box).attr('data-dataname')].refresh();
						}
						
					}
				});
				
			}
			break;
	}
	}
}


function is_valid_email(email) {
	var pattern = new RegExp(
			/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
	return pattern.test(email);
};

function get_option(key) {

	/*
	 * TODO: change plugin shortname
	 */
	var keyprefix = 'nm_personalizedproduct';

	key = keyprefix + key;

	var req_option = '';

	jQuery.each(nm_personalizedproduct_vars.settings, function(k, option) {

		// console.log(k);

		if (k == key)
			req_option = option;
	});

	// console.log(req_option);
	return req_option;
}

function slide_section(move){
	
	//hiding all section first
	jQuery(".nm-productmeta-box section").hide(100);
	//setting td titles to grey back
	jQuery("#section_titles tr td").css({'color':'#ccc', 'background-color': ''});
	
	if(move === 'next'){
	
		selected_slide++;
	
		jQuery(".nm-productmeta-box section").each(function(index, section){
			
			if(index === selected_slide){
				jQuery(section).slideDown(300);
				jQuery("#section_titles tr td:nth-child("+(index+1)+")").css({'color':'#000', 'background-color': '#ccc'});
			}
		});
		
	}else{
		
		selected_slide--;
		
		jQuery(".nm-productmeta-box section").each(function(index, section){
			
			if(index === selected_slide){
				jQuery(section).slideDown(300);				
				jQuery("#section_titles tr td:nth-child("+(index+1)+")").css({'color':'#000', 'background-color': '#ccc'});
			}
		});
	}
	
	set_arrows();
}

function set_arrows(){
	
	jQuery(".productmeta-save-button").hide();
	
	if(selected_slide <= 0){		//just started
		
		jQuery("#slide_back").hide();
		jQuery("#slide_next").show();
		
	}else if(selected_slide > 0 && selected_slide < (total_sections-1)){		//somewhere between
		
		jQuery("#slide_back").show();
		jQuery("#slide_next").show();
	}else if(selected_slide >= (total_sections-1)){		// it is last section
		
		jQuery(".productmeta-save-button").show();
		
		jQuery("#slide_back").show();
		jQuery("#slide_next").hide();
	}
}

function update_rule_childs(element_name, element_values){
	
	jQuery(".nm-productmeta-box > p, .nm-productmeta-box div.fileupload-box").each(function(i, p_box){

		var parsed_conditions 	= jQuery.parseJSON (jQuery(p_box).attr('data-rules'));
		var box_id				= jQuery(p_box).attr('id');
		
		if(parsed_conditions !== null){
		
			var _visiblity		= parsed_conditions.visibility;
			var _bound			= parsed_conditions.bound;
			var _total_rules 	= Object.keys(parsed_conditions.rules).length;
			
			 var matched_rules = {};
			 var last_meched_element = '';
			jQuery.each(parsed_conditions.rules, function(i, rule){
				
				var _element 		= rule.elements;
				var _elementvalues	= rule.element_values;
				var _operator 		= rule.operators;
				
				//console.log('_element ='+_element+' element_name ='+element_name);
				var matched_rules = {};	
				
				if(element_values === 'child')
					_elementvalues = element_values;
				
				if(_element === element_name && _elementvalues === element_values){
					//console.log('Hiding _element ='+_element+' under box ='+jQuery(p_box).find('select').attr('name'));
					//console.log('hiddedn rule '+element_name+' value ' + element_values + 'under box = ' + jQuery(p_box).attr('id'));
					jQuery(p_box).hide(300, function(){
						update_rule_childs(jQuery(this).find('select, input:radio').attr('name'), 'child');
					});
					
				}
			});
		}
});
	
}
	
function remove_existing_rules(box_rules, element){
	
	if(box_rules){
        jQuery.each(box_rules, function(j, matched){
            if(matched !== undefined){
                jQuery.each(matched, function(k,v){
                	if(k === element){
                  		delete box_rules[j];
                  		update_rule_childs(k, v);
                	}
                });
            }
        });
    }
}

function stripslashes (str) {
	  // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
	  // +   improved by: Ates Goral (http://magnetiq.com)
	  // +      fixed by: Mick@el
	  // +   improved by: marrtins
	  // +   bugfixed by: Onno Marsman
	  // +   improved by: rezna
	  // +   input by: Rick Waldron
	  // +   reimplemented by: Brett Zamir (http://brett-zamir.me)
	  // +   input by: Brant Messenger (http://www.brantmessenger.com/)
	  // +   bugfixed by: Brett Zamir (http://brett-zamir.me)
	  // *     example 1: stripslashes('Kevin\'s code');
	  // *     returns 1: "Kevin's code"
	  // *     example 2: stripslashes('Kevin\\\'s code');
	  // *     returns 2: "Kevin\'s code"
	  return (str + '').replace(/\\(.?)/g, function (s, n1) {
	    switch (n1) {
	    case '\\':
	      return '\\';
	    case '0':
	      return '\u0000';
	    case '':
	      return '';
	    default:
	      return n1;
	    }
	  });
	};
// source --> https://www.aniastore.com.br/wp-content/plugins/woocommerce-product-addon/js/nm-conditional.js?ver=3.0 
var boxes		= new Array();	//checking bound connection


jQuery(function($){
   
   //conditional elements handling
	$(".nm-productmeta-box").find('select, input[type="checkbox"], input[type="radio"]').on('change', function(e){
		
		var element_name 	= $(this).attr("name");
		var element_value	= '';
		//console.log(element_name);
		
		if($(this).attr('data-type') === 'radio'){
			element_value	= $(this).filter(':checked').val();
		}else if($(this).attr('data-type') === 'image'){
			element_value	= $.parseJSON($(this).val());
			element_value 	= element_value.title;
		}else{
			element_value	= $(this).val();
		}
		
		//console.log( 'changed_element_val '+element_value );
		
		$(".nm-productmeta-box div, .nm-productmeta-box div.fileupload-box").each(function(i, p_box){

			var parsed_conditions 	= $.parseJSON ($(p_box).attr('data-rules'));
			var box_id				= $(p_box).attr('id');
			var element_box = new Array();
			// console.log( parsed_conditions );
			
			if(parsed_conditions !== null){
			
				
				var _visiblity		= parsed_conditions.visibility;
				var _bound			= parsed_conditions.bound;
				var _total_rules 	= Object.keys(parsed_conditions.rules).length;
				
				 var matched_rules = {};
				 var last_meched_element = '';
				$.each(parsed_conditions.rules, function(i, rule){
					
					var _element 		= rule.elements;
					var _elementvalues	= rule.element_values;
					var _operator 		= rule.operators;
					
					//console.log('_element ='+_element+' element_name ='+element_name);
					var matched_rules = {};	
					
					if(_element === element_name && last_meched_element !== _element){
						
						var temp_matched_rules = {};
						
						switch(_operator){
						
							case 'is':
								
								if(_elementvalues === element_value){
									
									last_meched_element = element_name;
									
									if(boxes[box_id]){
					                    jQuery.each(boxes[box_id], function(j, matched){
					                        if(matched !== undefined){
					                            jQuery.each(matched, function(k,v){
					                            	if(k !== _element){
					                            		temp_matched_rules[k]=v;
						                                element_box.push(temp_matched_rules);
					                            	}
					                            });
					                        }
					                    });
					                }
									
									matched_rules[_element]=element_value;
					                element_box.push(matched_rules);
					                boxes[box_id] = element_box;
								}else{
									
									remove_existing_rules(boxes[box_id], _element);
									//reset value if set before
									jQuery('#'+box_id).find(':input').not(':checkbox, :radio').val('');
									jQuery('#'+box_id).find(':input','select').removeAttr('checked').removeAttr('selected');
									jQuery('#'+box_id).find('select, input[type="checkbox"], input[type="radio"]').change();
									
									
								}		
								break;
								
								
							case 'not':
								
								if(_elementvalues !== element_value){
									
									if(boxes[box_id]){
					                    jQuery.each(boxes[box_id], function(j, matched){
					                        if(matched !== undefined){
					                            jQuery.each(matched, function(k,v){
					                            	if(k !== _element){
					                            		temp_matched_rules[k]=v;
						                                element_box.push(temp_matched_rules);
					                            	}
					                            });
					                        }
					                    });
					                }
									
									matched_rules[_element]=element_value;
					                element_box.push(matched_rules);
					                boxes[box_id] = element_box;
								}else{
									
									remove_existing_rules(boxes[box_id], _element);
									jQuery('#'+box_id).find(':input').not(':checkbox, :radio').val('');
									 jQuery('#'+box_id).find(':input','select').removeAttr('checked').removeAttr('selected');
									 jQuery('#'+box_id).find('select, input[type="checkbox"], input[type="radio"]').change();
									
								}		
								break;
								
								
								case 'greater than':
									
									if(parseFloat(_elementvalues) < parseFloat(element_value) ){
										
										if(boxes[box_id]){
						                    jQuery.each(boxes[box_id], function(j, matched){
						                        if(matched !== undefined){
						                            jQuery.each(matched, function(k,v){
						                            	if(k !== _element){
						                            		temp_matched_rules[k]=v;
							                                element_box.push(temp_matched_rules);
						                            	}
						                            });
						                        }
						                    });
						                }
										
										matched_rules[_element]=element_value;
						                element_box.push(matched_rules);
						                boxes[box_id] = element_box;
									}else{
										
										remove_existing_rules(boxes[box_id], _element);
										jQuery('#'+box_id).find(':input').not(':checkbox, :radio').val('');
									 	jQuery('#'+box_id).find(':input','select').removeAttr('checked').removeAttr('selected');
									 	jQuery('#'+box_id).find('select, input[type="checkbox"], input[type="radio"]').change();
										
									}		
									break;
									
								
								case 'less than':
									
									if(parseFloat(_elementvalues) > parseFloat(element_value) ){
										
										if(boxes[box_id]){
						                    jQuery.each(boxes[box_id], function(j, matched){
						                        if(matched !== undefined){
						                            jQuery.each(matched, function(k,v){
						                            	if(k !== _element){
						                            		temp_matched_rules[k]=v;
							                                element_box.push(temp_matched_rules);
						                            	}
						                            });
						                        }
						                    });
						                }
										
										matched_rules[_element]=element_value;
						                element_box.push(matched_rules);
						                boxes[box_id] = element_box;
									}else{
										
										remove_existing_rules(boxes[box_id], _element);
										jQuery('#'+box_id).find(':input').not(':checkbox, :radio').val('');
										jQuery('#'+box_id).find(':input','select').removeAttr('checked').removeAttr('selected');
									 	jQuery('#'+box_id).find('select, input[type="checkbox"], input[type="radio"]').change();
										
									}		
									break;
									}
						
						set_visibility(p_box, _bound, _total_rules, _visiblity);
					}
					
				});
				
			}
			
			
		});
		
	}); 
});
// source --> https://www.aniastore.com.br/wp-content/plugins/woocommerce-product-addon/js/nm-dynamicprices.js?ver=3.0 

var oAJAXRequest = false;
var options_price_added = [];	//this contains all option which is added for price
jQuery(function($){
   
   $.blockUI.defaults.overlayCSS.cursor = "default";
   
   /* ============= setting prices dynamically on product page ============= */
	$(".nm-productmeta-box").find('select,input:checkbox,input:radio').on('change', function(){
		
		//console.log($("option:selected", this)
		var selected_option_price = $("option:selected", this).attr('data-price');
		var checked_option_price = $(this).attr('data-price');
		var does_option_has_price = true;
		
		if( $(this).prop("checked")){
			
			if(checked_option_price == undefined || checked_option_price == '' || checked_option_price == 0){
				//console.log('turn it' + checked_option_price);
				does_option_has_price = false;
				if($.inArray( $(this).attr('name'), options_price_added ) < 0 ){
					return;
				}else{
					options_price_added.splice($.inArray( $(this).attr('name')), 1);
				}
			}
		}else if( selected_option_price == undefined || selected_option_price == '' || selected_option_price == 0){
			//console.log('selected price '+selected_option_price);
			does_option_has_price = false;
			if($.inArray( $(this).attr('name'), options_price_added ) < 0 ){
				return;
			}else{
				options_price_added.splice($.inArray( $(this).attr('name')), 1);
			}
		}
		
		if( does_option_has_price )
			options_price_added.push($(this).attr('name'));
			
		var option_prices = [];
		
		setTimeout(function(){
  			
  			if( oAJAXRequest != false )
			return;

			$(".nm-productmeta-box").find('select').each(function(i, item){
				
				option_price = $("option:selected", this).attr('data-price');
				
				fixedfee = $(this).attr('data-onetime');
				fixedfee_taxable = $(this).attr('data-onetime-taxable');
				
				//console.log($(this).attr('id')+' '+$(this).closest('div').css('display'));
				if(option_price != undefined && option_price != '' && $(this).closest('div').css('display') != 'none'){
					option_prices.push({option: $(this).val(), price: option_price, isfixed: fixedfee, fixedfeetaxable:fixedfee_taxable});
				}				
				
				
			});
			
			$(".nm-productmeta-box").find('input:checkbox').each(function(i, item){
				option_price = $(this).attr('data-price');
				option_label = ($(this).attr('data-title') == undefined) ? $(this).val() : $(this).attr('data-title');	// for image type
				
				if($(this).is(':checked') && option_price != undefined && option_price != '' && $(this).closest('div').css('display') != 'none'){
					option_prices.push({option: option_label, price: option_price});
				}
								
			});
			
			$(".nm-productmeta-box").find('input:radio').each(function(i, item){
				option_price = $(this).attr('data-price');
				option_label = ($(this).attr('data-title') == undefined) ? $(this).val() : $(this).attr('data-title');	// for image type
				fixedfee = $(this).attr('data-onetime');
				fixedfee_taxable = $(this).attr('data-onetime-taxable');
				
				if($(this).is(':checked') && option_price != undefined && option_price != '' && $(this).closest('div').css('display') != 'none'){
					option_prices.push({option: option_label, price: option_price, isfixed: fixedfee, fixedfeetaxable: fixedfee_taxable});
				}
								
			});
			
			var base_amount = $('#_product_price').val();
			var price_html = '';
			//console.log(fixedfees);
			if ($('form.cart').closest('div').find('.price').length > 0){
				price_html = $('form.cart').closest('div').find('.price')[0];
			}
			
			
			
			//disabling add to cart button for a while
			$('form.cart').block({
	                    message: null,
	                    overlayCSS: {
	                    background: "#fff",
	                    opacity: .6
				                    }
		         });
		         
			//var product_base_price = $('#_product_price').val();
			var price_matrix = $("#_pricematrix").val();
			var productmeta_id = $("#_productmeta_id").val();
			var product_id = $("#_product_id").val();
			var variation_id = $('form.cart').find('input[name=variation_id]').val();
			
			
			//console.log(option_prices);
			
			var post_data = {action: 'nm_personalizedproduct_get_option_price', 
							optionprices:option_prices,
							baseprice:base_amount,
							pricematrix: price_matrix,
							productmeta_id: productmeta_id,
							variation_id: variation_id,
							product_id: product_id,
							qty: jQuery('input[name="quantity"]').val()
							};
			
			oAJAXRequest = $.post(nm_personalizedproduct_vars.ajaxurl, post_data, function(resp){
				//console.log(resp);
				
				$(".amount-options").remove();
				if(resp.option_total > 0){
					var html = '<div class="amount-options">';
					html += resp.prices_html;
					html += '</div>';
				}			
				
				$('input[name="woo_option_price"]').val(resp.option_total);
				$('input[name="woo_onetime_fee"]').val(JSON.stringify( resp.onetime_meta ));
				
				//console.log(resp.display_price_hide);
				if (resp.display_price_hide !== 'yes'){
					$(price_html).append(html);	
				}
				
				
				//enabling add to cart button
				$('form.cart').unblock();
				oAJAXRequest = false;
				
			}, 'json');
			
		}, 200);
		
		//console.log(oAJAXRequest);
		
	});
	
});