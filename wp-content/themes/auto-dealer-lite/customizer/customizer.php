<?php

function auto_dealer_lite_remove_customize_register() {
    global $wp_customize;
    $wp_customize->remove_section( 'automobile_hub_documentation' );
    $wp_customize->remove_section( 'automobile_hub_color_option' );
}
add_action( 'customize_register', 'auto_dealer_lite_remove_customize_register', 11 );

function auto_dealer_lite_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'auto_dealer_lite_featured_car_section' , array(
    	'title'      => __( 'Featured Car Settings', 'auto-dealer-lite' ),
		'panel' => 'automobile_hub_panel_id'
	) );

	$wp_customize->add_setting('auto_dealer_lite_featured_car_section_short_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('auto_dealer_lite_featured_car_section_short_title',array(
		'label'	=> __('Short Title','auto-dealer-lite'),
		'section'	=> 'auto_dealer_lite_featured_car_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('auto_dealer_lite_featured_car_section_tittle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('auto_dealer_lite_featured_car_section_tittle',array(
		'label'	=> __('Section Title','auto-dealer-lite'),
		'section'	=> 'auto_dealer_lite_featured_car_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('auto_dealer_lite_featured_car_button_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('auto_dealer_lite_featured_car_button_text',array(
		'label'	=> __('Section Button Text','auto-dealer-lite'),
		'section'	=> 'auto_dealer_lite_featured_car_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('auto_dealer_lite_featured_car_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('auto_dealer_lite_featured_car_button_link',array(
		'label'	=> __('Section Button Link','auto-dealer-lite'),
		'section'	=> 'auto_dealer_lite_featured_car_section',
		'type'		=> 'url'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$offer_cat[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$offer_cat[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('auto_dealer_lite_featured_car_section_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'automobile_hub_sanitize_choices',
	));
	$wp_customize->add_control('auto_dealer_lite_featured_car_section_category',array(
		'type'    => 'select',
		'choices' => $offer_cat,
		'label' => __('Select Category','auto-dealer-lite'),
		'section' => 'auto_dealer_lite_featured_car_section',
	));

}
add_action( 'customize_register', 'auto_dealer_lite_customize_register' );