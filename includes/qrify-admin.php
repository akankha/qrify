<?php
// Hook into the admin menu to add a settings page
function qr_code_settings_menu() {
	add_options_page( 'QR Code Settings', 'QR Code Settings', 'manage_options', 'qr-code-settings', 'qr_code_settings_page' );
}

// Create the settings page content
function qr_code_settings_page() {
	?>
    <div class="wrap">
        <h2>QR Code Settings</h2>
        <form method="post" action="options.php">
			<?php settings_fields( 'qr_code_settings_group' ); ?>
			<?php do_settings_sections( 'qr-code-settings' ); ?>
            <table class="form-table">
                <tr>
                    <th scope="row">QR Code Size</th>
                    <td>
                        <input type="number" name="qr_code_size"
                               value="<?php echo esc_attr( get_option( 'qr_code_size', 200 ) ); ?>"/>
                        <p class="description">Enter the size of the QR code in pixels.</p>
                    </td>
                </tr>

            </table>
			<?php submit_button(); ?>
        </form>
    </div>
	<?php
}

// Register the settings
function qr_code_register_settings() {
	register_setting( 'qr_code_settings_group', 'qr_code_size', 'intval' );
	// Inside the qr_code_register_settings() function

}

add_action( 'admin_menu', 'qr_code_settings_menu' );
add_action( 'admin_init', 'qr_code_register_settings' );