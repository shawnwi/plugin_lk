<?php


add_action( 'woocommerce_single_product_summary', 'woocommerce_total_product_price', 31 );
function woocommerce_total_product_price() {
    global $woocommerce, $product;
    // let's setup our divs
    echo sprintf('<div id="product_total_price" style="margin-bottom:20px;">%s %s</div>',__('Product Total:','woocommerce'),'<span class="price">'.$product->get_price().'</span>');
	$args = array( 'post_type' => 'product', 'posts_per_page' => '' );
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
  		while ( $the_query->have_posts() ) : $the_query->the_post();

		if(is_single(get_the_ID())){
		

		//get all the ACF
		$min_quantity = get_field('min_quantity');
		$limit_set = get_field('limit_set');
		if(get_field('limit_set')){
		$set_package = get_field('set_package');
		}else{
			$set_package = '0';
		}
		//echo "this ID is: " . get_the_ID();
		//echo "<br />min quantity is: " . $min_quantity;
		//echo "<br />limit set is: " . $limit_set;
		//echo "<br />set pakcage is: " . $set_package;


	?>
        <script>
            $(document).ready(function(){
				$('.custom_ppl').val(<?=$min_quantity?>);
				$('.custom_ppl_min').val(<?=$min_quantity?>);
				$('.custom_day').val(<?=$set_package?>);
                var price = <?php echo $product->get_price(); ?>,
                    currency = '<?php echo get_woocommerce_currency_symbol(); ?>';
					custom_ppl = '<?=$min_quantity?>';
					custom_ppl_min = '<?=$min_quantity?>';

					if(custom_ppl==1){ price = 15;}
					if(custom_ppl==2){ price = 13;}
					if(custom_ppl==3){ price = 11;}
					if(custom_ppl>3){ price = 10;}
					
				
				//console.log(price*custom_ppl);	
				$('.custom_ppl_title').html(price*custom_ppl);

                /*$('[name=quantity]').change(function(){
					console.log('quantity changed');
                    if (!(this.value < 1)) {

                        var product_total = parseFloat(price * this.value);
                        $('#product_total_price .price').html( currency + product_total.toFixed(2));

                    }
                });*/

				$('[name=custom_day],[name=custom_ppl],[name=custom_del],[name=custom_rice_white],[name=custom_rice_brown]').on('input',function(e){
					console.log('all changed');
					var total_price_day = $('[name=custom_day]').val();
					var total_price_delivery = $('[name=custom_del] option:selected').val() * total_price_day;
					var total_price_pax = $('[name=custom_ppl]').val();
					var total_price_rice_white = $('[name=custom_rice_white]').val() * 1.5 * total_price_day;
					var total_price_rice_brown = $('[name=custom_rice_brown]').val() * 3 * total_price_day;

					if(total_price_pax==1){ price = 15;}
					if(total_price_pax==2){ price = 13;}
					if(total_price_pax==3){ price = 11;}
					if(total_price_pax>3){ price = 10;}
					if (total_price_pax !== "" && total_price_pax.match(/^\d+$/)) {
						if(total_price_pax<custom_ppl_min){
							alert("min of pax is " + custom_ppl_min );
							$('[name=custom_ppl]').val(custom_ppl_min);
							return;
						}
					}
					var new_total_price = price*total_price_pax;
					$('.custom_ppl_title').html(price*total_price_pax);
					console.log("new price is how much: " + price);
					console.log("the total of RM15 default price and how many people" + price*total_price_pax)
					console.log("how many day: " + total_price_day);
					console.log("price of delivery: " + total_price_delivery);
					console.log("people pax: " + total_price_pax);

					var product_total = parseFloat((price * total_price_day * total_price_pax) + total_price_delivery + total_price_rice_white + total_price_rice_brown );
					$('#product_total_price .price').html( currency + product_total);
					console.log("product total: " + product_total);
					

				});
				
				
            });
        </script>


	<script>


//start calendar
$(document).ready(function(){
	//var disabledDays = ["2022-7-28"];
	//var tips = ['some description1'];
	$('#mdp').multiDatesPicker({
	
	
	altField: '#mdp-value',
	//dateFormat: "dd-mm-yy",
	dateFormat: "d M yy",
	minDate: 0,
	//maxDate: "+12M",
	//addDisabledDates: ['25-09-12' , '26-09-12' , '27-09-12'],
	beforeShowDay: $.datepicker.noWeekends,
	/*beforeShowDay: function (date) {
        var m = String(date.getMonth() + 1).padStart(2, '0');
            d = String(date.getDate()).padStart(2, '0');
            y = date.getFullYear();
			daysInMonth = new Date(y, m, 0).getDate();
			classname_new = "class_" + y + "" + m + "" + d;
			day = date.getDay();
			for (var i = 0; i < daysInMonth; i++) {
            	//if ($.inArray(y + '-' + (m + 1) + '-' + d, disabledDays) != -1) {
            	//    return [true, 'highlight ' + classname_new ,''];
            	//}
				//if(date.getDay()==0 || date.getDay()==6){
				//	classname_new =" ui-datepicker-unselectable ui-state-disabled ";
				//}
				return [day > 0 && day < 6, classname_new ,''];
        	}
        //return [true];
    },*/
	
	<?php if($limit_set==1){?>
	mode: 'daysRange',
	autoselectRange: [0,<?=$set_package?>],
	<?php }?>
	//maxPicks: 5,
	onSelect: function(dateText) {
        console.log("Selected date: " + dateText + "; input's current value: " + this.value);
		var count = $(this).val().split(',').length;
		$("#toptitle").text(count + ' selected' + ', the date list :' + this.value);
		$('.custom_day').val(count);
		
    }
	});




	


	$(".answer").hide();
$(".coupon_question").click(function() {
    if($(this).is(":checked")) {
        $(".answer").show(500);
    } else {
        
		$('custom_rice_white').val('');
		$('custom_rice_brown').val('');
		$(".answer").hide(500);
    }
});





	

}); //end document ready
</script>
    <?php
		}//end if this post = is what post

	endwhile;wp_reset_postdata();
	endif;
}














































// Add a custom field before single add to cart
add_action( 'woocommerce_before_add_to_cart_button', 'custom_product_price_field', 5 );
function custom_product_price_field(){
	global $product;
	$args = array( 'post_type' => 'product', 'posts_per_page' => '' );
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) :
  		while ( $the_query->have_posts() ) : $the_query->the_post();

		$delivery_coverage_area = get_field('delivery_coverage_area');
		$limit_set = get_field('limit_set');
		if(get_field('limit_set')){
		$set_package = get_field('set_package');
		}else{
			$set_package = '0';
		}

		if(is_single(get_the_ID())){

		
    echo '<div class="custom-text text sw_option">
    <div class="custom_day_css"><p>Days :</p>';
	?>
    <input type="text" name="custom_day" value="" placeholder="e.g. 10" title="Custom Text" class="custom_day text_custom text <?php if(get_field('limit_set')){?>disabledcss<?php } ?>" <?php if(get_field('limit_set')){?>disabled<?php } ?> ></div>
	<?php
	echo '
	<div><p>Pax per person ('.get_woocommerce_currency_symbol().'):</p>
    <input type="text" name="custom_ppl" value="" placeholder="e.g. 5" title="Custom Text" class="custom_ppl text_custom text">
	<input type="hidden" name="custom_ppl_min" value="0" placeholder="e.g. 5" title="Custom Text" class="custom_ppl_min text_custom text">
	<h3>RM<span class=custom_ppl_title>15</span></h3></div>
	
	<div>
	<p>Delivery options:</p>
	<select name="custom_del" id="cars">
	<option value="">Select delivery coverage area</option>';

	foreach( $delivery_coverage_area as $dca )
	{
		echo'<option class="level-0" value='.$dca['value'].'>' . $dca['label'] . ' (RM' . $dca['value'] . ' per day)</option>';
	}

	echo '
  	</select></div>


	<div class="custom_rice_css">
	Need rice? <input class="coupon_question" type="checkbox" name="coupon_question" value="1" />
	<div class="answer">
	<div>
	<span>White Rice:</span> <input type="text" name="custom_rice_white" value="" placeholder="e.g. 1" title="Custom Text" class="custom_rice_white text_custom text">
	</div>

	<div>
	<span>Brown Rice:</span> <input type="text" name="custom_rice_brown" value="" placeholder="e.g. 2" title="Custom Text" class="custom_rice_brown text_custom text">
	</div>
	
	</div>
	</div>

	
	';

	
	
    echo '</div>';

	}//end for this current post ID
	endwhile;wp_reset_postdata();
	endif;	
}

// Get custom field value, calculate new item price, save it as custom cart item data
add_filter('woocommerce_add_cart_item_data', 'add_custom_field_data', 20, 2 );
function add_custom_field_data( $cart_item_data, $product_id ){
    if (! isset($_POST['custom_day'])) return $cart_item_data;
	if (! isset($_POST['custom_ppl'])) return $cart_item_data;
	if (! isset($_POST['custom_del'])) return $cart_item_data;

	if (! isset($_POST['custom_rice_white'])) return $cart_item_data;
	if (! isset($_POST['custom_rice_brown'])) return $cart_item_data;
		

    $custom_day = (float) sanitize_text_field( $_POST['custom_day'] );
	$custom_ppl = (float) sanitize_text_field( $_POST['custom_ppl'] );
	$custom_del= (float) sanitize_text_field( $_POST['custom_del'] );

	$custom_white= (float) sanitize_text_field( $_POST['custom_rice_white'] );
	$custom_brown= (float) sanitize_text_field( $_POST['custom_rice_brown'] );
    
	if( empty($custom_day) ) return $cart_item_data;
	if( empty($custom_ppl) ) return $cart_item_data;
	//if( empty($custom_del) ) return $cart_item_data;
	//if( empty($custom_white) ) return $cart_item_data;
	//if( empty($custom_brown) ) return $cart_item_data;

    $product    = wc_get_product($product_id); // The WC_Product Object
    $base_price = (float) $product->get_regular_price(); // Product reg price

	if($custom_ppl==2){$base_price=13;}
	if($custom_ppl==3){$base_price=11;}
	if($custom_ppl>3){$base_price=10;}


    // New price calculation

	$custom_del_new = $custom_del*$custom_day;
	$custom_white_new = $custom_white*$custom_day*1.5;
	$custom_brown_new = $custom_brown*$custom_day*3;

    $new_price = ($base_price * $custom_day * $custom_ppl) + $custom_del_new + $custom_white_new + $custom_brown_new;

    // Set the custom amount in cart object
    $cart_item_data['custom_data']['base_price'] = (float) $base_price ;
	$cart_item_data['custom_data']['ppl'] = (float) $custom_ppl ;
	$cart_item_data['custom_data']['days'] = (float) $custom_day ;
	$cart_item_data['custom_data']['delivery'] = (float) $custom_del ;
	$cart_item_data['custom_data']['extra_charge'] = (float) $custom_day ;

	$cart_item_data['custom_data']['rice_white'] = (float) $custom_white ;
	$cart_item_data['custom_data']['rice_brown'] = (float) $custom_brown ;


    $cart_item_data['custom_data']['new_price'] = (float) $new_price;
    $cart_item_data['custom_data']['unique_key'] = md5( microtime() . rand() ); // Make each item unique

    return $cart_item_data;
}

// -----------------------------------------
// 4. Display custom input field value @ Cart
 
add_filter( 'woocommerce_get_item_data', 'shawn_product_add_on_display_cart', 10, 2 );
 
function shawn_product_add_on_display_cart( $data, $cart_item_data ) {
    if ( isset( $cart_item_data['custom_data']['days'] ) ){
        $data[] = array(
            'name' => 'Date of Delivery',
            'value' => sanitize_text_field( $cart_item_data['custom_data']['days'] )
        );
    }
	if ( isset( $cart_item_data['custom_data']['ppl'] ) ){
        $data[] = array(
            'name' => 'People',
            'value' => sanitize_text_field( $cart_item_data['custom_data']['ppl'] )
        );
    }
	if ( isset( $cart_item_data['custom_data']['delivery'] ) ){
        $data[] = array(
            'name' => 'Delivery area (RM)',
            'value' => sanitize_text_field( $cart_item_data['custom_data']['delivery'] )
        );
    }
	if ( isset( $cart_item_data['custom_data']['rice_white'] ) ){
        $data[] = array(
            'name' => 'White Rice: ',
            'value' => sanitize_text_field( $cart_item_data['custom_data']['rice_white'] )
        );
    }
	if ( isset( $cart_item_data['custom_data']['rice_brown'] ) ){
        $data[] = array(
            'name' => 'Brown Rice: ',
            'value' => sanitize_text_field( $cart_item_data['custom_data']['rice_brown'] )
        );
    }
	if ( isset( $cart_item_data['custom_data']['base_price'] ) ){
        $data[] = array(
            'name' => 'Base Price: ',
            'value' => sanitize_text_field( $cart_item_data['custom_data']['base_price'] )
        );
    }
    return $data;
}

// Set the new calculated cart item price
add_action( 'woocommerce_before_calculate_totals', 'extra_price_add_custom_day', 20, 1 );
function extra_price_add_custom_day( $cart ) {
    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
        return;

    if ( did_action( 'woocommerce_before_calculate_totals' ) >= 2 )
        return;

    foreach ( $cart->get_cart() as $cart_item ) {
        if( isset($cart_item['custom_data']['new_price']) )
            $cart_item['data']->set_price( (float) $cart_item['custom_data']['new_price'] );
    }
}

// Display cart item custom price details
add_filter('woocommerce_cart_item_price', 'display_cart_items_custom_total_details', 20, 3 );
function display_cart_items_custom_total_details( $product_price, $cart_item, $cart_item_key ){
    if( isset($cart_item['custom_data']['extra_charge']) ) {
        $product = $cart_item['data'];
        $product_price  = wc_price( wc_get_price_to_display( $product, array( 'price' => $product->get_regular_price() ) ) );
        //$product_price .= '<br>' . wc_price( $cart_item['custom_data']['extra_charge'] ).'&nbsp;';
        //$product_price .= __("Days", "woocommerce" );
    }
    return $product_price;
}



// Display all the ID
//add_filter('wp_footer', 'cal_display_id', 20, 3 );
function cal_display_id( ){
	$page_ids=get_posts(array(
		'fields'          => 'ids', // Only get post IDs
		'posts_per_page'  => -1
	));
	
	foreach($page_ids as $page)
	{
		//echo '<br />'.$page;
		$postmetas = get_post_meta($page);
		//echo "<pre>";
		foreach($postmetas as $meta_key=>$meta_value) {
			//echo $meta_key . ' : ' . $meta_value[0] . '<br/>';
			if($meta_key=='day'){$day_is = $meta_value[0];}
			if($meta_key=='month'){$month_is = $meta_value[0];}
			if($meta_key=='_thumbnail_id'){$img_is = $meta_value[0];}

			
			

			

			
			

		}
		//echo $day_is . "-" . $month_is . "-" . $img_is . "<br />";
		$month_is_actual = explode(":",$month_is);
		$day_is_actual = explode(":",$day_is);
		$thumb = wp_get_attachment_image_src( $img_is, 'post');  //images URL
		?>
	<script>
	$(document).ready(function(){
			var matches = document.querySelectorAll(".ui-datepicker-calendar tbody tr td");
			console.log("check calendars");
			matches.forEach(p => console.log(p));
			//console.log(matches.length);

		for (index = 0; index < matches.length; ++index) {
			console.log(matches[index].innerText);
			console.log(matches[index].dataset.month);
			//console.log(matches[index].offsetParent.dataset.year);

			
			
			//console.log(matches[index].offsetParent.dataset.month==<?php echo $month_is_actual[0]?> && matches[index].innerHTML==<?php echo $day_is_actual[0]?>);
			if(matches[index].dataset.month==<?php echo $month_is_actual[0]?> && matches[index].innerText==<?php echo $day_is_actual[0]?>){
				//console.log(matches[index].style.backgroundColor);
				matches[index].style.backgroundImage = "url('<?php echo $thumb[0]?>')";
			}
		}

		});
	</script>
	<?php
		
		
		//echo "</pre>";
	}



	
}

?>
