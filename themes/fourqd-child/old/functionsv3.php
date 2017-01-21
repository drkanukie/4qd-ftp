<?php

// Child theme functions added by Erica Richardson 21/03/16


// Customised the woocommerce checkout by adding custom questions.

// Display a message at the top of the checkout page
 
function f_chkout_display_notice() {
echo '<p>All prices are in UK Pounds Sterling, and inclusive of VAT. For ordering and delivery information please <a href="http://www.4qd.co.uk/ordering-and-delivery/" target="_blank">click here</a> .</p>';
}
add_action( 'woocommerce_before_cart_table', 'f_chkout_display_notice' );

/**
function f_holiday_notice() {
echo '<p style="color:white;background-color:red;">4QD are closed for our summer holiday, we will process your order when we return on Tuesday 30th August 2016</p>';
}
add_action( 'woocommerce_before_cart_table', 'f_holiday_notice' );
add_action( 'woocommerce_before_checkout_form', 'f_holiday_notice' );
add_action( 'woocommerce_after_checkout_form', 'f_holiday_notice' );
**/

//Display a message at the top of the account login page
function f_aclogin_display_notice() {
echo '<p>You may register for an account when you check out with your order. Your password will be automatically generated and emailed to you</p>';
}
add_action( 'woocommerce_before_customer_login_form', 'f_aclogin_display_notice' );

/** 
The woocommerce strength requirement is too strong, so have used this snippet to remove. 
**/
function wc_ninja_remove_password_strength() {
	if ( wp_script_is( 'wc-password-strength-meter', 'enqueued' ) ) {
		wp_dequeue_script( 'wc-password-strength-meter' );
	}
}
add_action( 'wp_print_scripts', 'wc_ninja_remove_password_strength', 100 );

/**
* Add questions to the checkout page
**/
add_action( 'woocommerce_after_order_notes', 'f_chkout_questions' );
function f_chkout_questions( $checkout ) {
 echo '<div id="my_custom_checkout_field"><h3>' . __( 'Customer Questions' ) . '</h3>';
 
woocommerce_form_field( 'application_area', array(
'type'  => 'select',
'class' => array( 'form-row-wide' ),
'label' => __( 'What is your application area?' ),
'required'   => false,
'clear' => false,
'options' => array('n/a' => '','boat' => 'Electric Boat','vehicle' => 'Electric Vehicle','golf buggy' => 'Golf Buggy','industrial' => 'Industrial','locos' => 'Model Locomotives' ,'special effects' => 'Special Effects','other' => 'Other'),
 ), $checkout->get_value( 'application_area' ));
 
 woocommerce_form_field( 'customer_source', array(
'type'  => 'select',
'class' => array( 'form-row-wide' ),
'label' => __( 'Where did you hear about us?' ),
'required'   => false,
'clear' => false,
'options' => array('n/a' => '','advert' => 'Advertisement','internet' => 'Internet', 'recommendation' => 'Recommendation','returning' => 'Returning Customer','show' => 'Trade Show','other' => 'Other' ),
 ), $checkout->get_value( 'customer_source' ));
 
/**
 woocommerce_form_field( 'additional_notes', array(
'type'  => 'text',
'class' => array( 'form-row-wide' ),
'label' => __( 'Additional Comments?' ),
'required'   => false,
'clear' => false,
 ), $checkout->get_value( 'additional_notes' ));
 **/
  
echo '</div>';

}

/**
* Update the order metadata with custom field values
**/
add_action( 'woocommerce_checkout_update_order_meta', 'f_checkout_field_update_order_meta' );
 
function f_checkout_field_update_order_meta( $order_id ) {
 
//check if $_POST has our custom fields
if ( $_POST['application_area'] ) {
//It does: update post meta for this order
update_post_meta( $order_id, 'Application Area', esc_attr( $_POST['application_area'] ) );
}
if ( $_POST['customer_source'] ) {
//It does: update post meta for this order
update_post_meta( $order_id, 'Customer Source', esc_attr( $_POST['customer_source'] ) );
}
/**
if ( $_POST['additional_notes'] ) {
//It does: update post meta for this order
update_post_meta( $order_id, 'Additional Notes', esc_attr( $_POST['additional_notes'] ) );
}
**/


}

/* Snippet to make the touch dropdown menu plugin work on all ipads */
add_filter( 'black_studio_touch_dropdown_menu_force_ios5', 'my_force_ios5' );
function my_force_ios5( $force ) {
    return true;
}

/* Remove emoji css added by Wordpress by default - not using emoji on 4qd */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
