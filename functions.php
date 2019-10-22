<?php

	// Add menu support
	if ( function_exists( 'register_nav_menu' ) ) 
		register_nav_menu('main-menu', 'Menu Principal' );
	add_theme_support( 'post-thumbnails' );

	// Add Custom Logo
	$args = array(
        'default-image' => get_template_directory_uri() . '/images/logo.png',
        'uploads' => true
    );
    add_theme_support( 'custom-logo', $args );
    function get_custom_logo_url(){
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        return (esc_url( $logo[0] ) != null) ?  : get_template_directory_uri() . '/images/logo.png';
    }



    $defaults = array(
		'default-image'          => get_template_directory_uri() . '/images/highlight-default.png',
		'width'                  => 1920,
		'height'                 => 1080,
		'flex-height'            => false,
		'flex-width'             => false,
		'uploads'                => true
	);
	add_theme_support( 'custom-header', $defaults );


	
	function get_opengraph(){

	}


	function get_reviews(){
		
		$cURLConnection = curl_init();

		curl_setopt($cURLConnection, CURLOPT_URL, 'https://maps.googleapis.com/maps/api/place/details/json?key=AIzaSyDR87QeCumghgKIzTmuawR2DjlGE51XReg&fields=reviews&place_id=ChIJtWIewAUZtgARM2TNWI5EAug');
		curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

		$reviewsList = curl_exec($cURLConnection);
		curl_close($cURLConnection);

		$jsonArrayResponse = json_decode($reviewsList);

		return $jsonArrayResponse;
	}