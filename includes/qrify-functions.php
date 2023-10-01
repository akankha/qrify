<?php
//Hook into the Wordpress content
function add_qr_code( $content ) {
	if ( is_single() || is_page() ) {
		$current_url     = get_permalink();
		$plugin_dir_path = plugin_dir_path( __FILE__ );
		$plugin_dir_url  = plugin_dir_url( __FILE__ );


// Define the path to the qrcodes folder in the root directory of your plugin
		$qrcodes_path = $plugin_dir_path . '../qrcodes/';

// Construct the complete URL to the QR code image
		$qr_code_url = $plugin_dir_url . '../qrcodes/' . sanitize_title( get_the_title() ) . '.png';

		$enable_qr_code_generation = get_option( 'enable_qr_code_generation', 1 );

		if ( $enable_qr_code_generation ) {
			// Get the QR code size option from the settings
			$qr_code_size = get_option( 'qr_code_size', 500 );

			// Generate the QR code with the specified size and save it
			QRcode::png( $current_url, $qrcodes_path . sanitize_title( get_the_title() ) . '.png', QR_ECLEVEL_L, $qr_code_size );

			// Add the QR code image to the content with the specified size
			$qr_code_image = '<img src="' . esc_url( $qr_code_url ) . '" alt="QR Code" width="' . $qr_code_size . '" height="' . $qr_code_size . '" />';
			$content       .= $qr_code_image;
		}

	}

	return $content;
}

add_filter( 'the_content', 'add_qr_code' );