<?php


function cloudworx_custom_header_setup() {
	add_theme_support( 'custom-header', array(
		'default-image'          => get_template_directory_uri() . '/images/header.jpg',
		'default-text-color'     => 'fff',
		'width'                  => 1800,
		'height'                 => 848,
		'flex-height'            => true,
		'video'					 => true,
		'video-active-callback'  => '',
	) );
}
add_action( 'after_setup_theme', 'cloudworx_custom_header_setup' );

function cloudworx_video_settings( $settings ) {
	$settings['l10n']['play'] 	= '<i class="fa fa-play"></i>';
	$settings['l10n']['pause'] 	= '<i class="fa fa-pause"></i>';
	$settings['minWidth'] 		= '100';
	$settings['minHeight'] 		= '100';	
	
	return $settings;
}
add_filter( 'header_video_settings', 'cloudworx_video_settings' );