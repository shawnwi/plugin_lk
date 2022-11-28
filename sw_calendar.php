<?php
/**
 * @snippet       Add input field to products - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.9
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
// -----------------------------------------
// 1. Show custom input field above Add to Cart
 
add_action( 'woocommerce_before_add_to_cart_button', 'bbloomer_product_add_on', 9 );
 
function bbloomer_product_add_on() {
    $value = isset( $_POST['custom_text_add_on'] ) ? sanitize_text_field( $_POST['custom_text_add_on'] ) : '';
	
    //echo '<h1>YAHOO!!!!!</h1>';
    echo '<div><label>Delivery Date <abbr class="required" title="required">*</abbr></label><p><input type="hidden" id="mdp-value" name="custom_text_add_on" value="' . $value . '"><div id="mdp"></div></p></div><div id=toptitle>0 selected</div>';


	//echo '<label>Delivery Date</label><div class="mbsc-row"><div class="mbsc-col-sm-12 mbsc-col-md-4"><div class="mbsc-form-group"><div class="mbsc-form-group-title">Counter</div><input type="hidden" id="demo-counter" name="custom_text_add_on_2"></input></div></div></div>';
}
 
// -----------------------------------------
// 2. Throw error if custom input field empty
 
add_filter( 'woocommerce_add_to_cart_validation', 'bbloomer_product_add_on_validation', 10, 3 );
 
function bbloomer_product_add_on_validation( $passed, $product_id, $qty ){
	
	if( isset( $_POST['custom_text_add_on'] ) && sanitize_text_field( $_POST['custom_text_add_on'] ) != '' ) {
		$custom_length = explode(",",$_POST['custom_text_add_on']);
		$result = count($custom_length);
		$balance = 10-$result;
		//if($result!=10){
			//wc_add_notice("Delivery date incomplete, please select another " . $balance . " days.", 'error' );	
			//wc_add_notice("Delivery date incomplete", 'error' );	
			//$passed = false;
		//}
	}
	   
   if( isset( $_POST['custom_text_add_on'] ) && sanitize_text_field( $_POST['custom_text_add_on'] ) == '' ) {
      wc_add_notice( 'Delivery date is a required field', 'error' );
      $passed = false;
   }
   return $passed;
}
 
// -----------------------------------------
// 3. Save custom input field value into cart item data
 
add_filter( 'woocommerce_add_cart_item_data', 'bbloomer_product_add_on_cart_item_data', 10, 2 );
 
function bbloomer_product_add_on_cart_item_data( $cart_item, $product_id ){
    if( isset( $_POST['custom_text_add_on'] ) ) {
        $cart_item['custom_text_add_on'] = sanitize_text_field( $_POST['custom_text_add_on'] );
    }
    return $cart_item;
}
 
// -----------------------------------------
// 4. Display custom input field value @ Cart
 
add_filter( 'woocommerce_get_item_data', 'bbloomer_product_add_on_display_cart', 10, 2 );
 
function bbloomer_product_add_on_display_cart( $data, $cart_item ) {
    if ( isset( $cart_item['custom_text_add_on'] ) ){
        $data[] = array(
            'name' => 'Delivery send on  below date:-',
            'value' => sanitize_text_field( $cart_item['custom_text_add_on'] )
        );
    }
    return $data;
}

 
// -----------------------------------------
// 5. Save custom input field value into order item meta
 
add_action( 'woocommerce_add_order_item_meta', 'bbloomer_product_add_on_order_item_meta', 10, 2 );
 
function bbloomer_product_add_on_order_item_meta( $item_id, $values ) {
    if ( ! empty( $values['custom_text_add_on'] ) ) {
        wc_add_order_item_meta( $item_id, 'Delivery Date:', $values['custom_text_add_on'], true );
    }
}
 
// -----------------------------------------
// 6. Display custom input field value into order table
 
add_filter( 'woocommerce_order_item_product', 'bbloomer_product_add_on_display_order', 10, 2 );
 
function bbloomer_product_add_on_display_order( $cart_item, $order_item ){
    if( isset( $order_item['custom_text_add_on'] ) ){
        $cart_item['custom_text_add_on'] = $order_item['custom_text_add_on'];
    }
    return $cart_item;
}
 
// -----------------------------------------
// 7. Display custom input field value into order emails
 
add_filter( 'woocommerce_email_order_meta_fields', 'bbloomer_product_add_on_display_emails' );
 
function bbloomer_product_add_on_display_emails( $fields ) { 
    $fields['custom_text_add_on'] = 'Delivery Date';
    return $fields; 
}
?>