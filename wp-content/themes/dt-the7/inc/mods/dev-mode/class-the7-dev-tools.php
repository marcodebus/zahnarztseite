<?php

// File Security Check.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class The7_Dev_Tools {

	public static function init() {
		add_action( 'load-toplevel_page_the7-dev', array( __CLASS__, 'save_mode' ) );
	}

	public static function save_mode() {
		if ( ! check_ajax_referer( 'the7-dev-tools', false, false ) || ! current_user_can( 'switch_themes' ) ) {
			return;
		}

		$message = '';

		if ( isset( $_POST['regenerate_shortcodes_css'] ) ) {
			include_once PRESSCORE_MODS_DIR . '/theme-update/the7-update-utility-functions.php';
			the7_mass_regenerate_short_codes_inline_css();
			$message = '<p>Shortcodes css was regenerated.</p>';
		}

		if ( isset( $_POST['download_speed_test'] ) ) {
			$start         = time();
			$response      = wp_safe_remote_get( 'https://repo.the7.io/download-test/10MB.zip', array(
				'timeout'    => 300,
				'decompress' => false,
			) );
			$download_time = time() - $start;
			if ( is_wp_error( $response ) ) {
				$message = '<p>There was an error while downloading:</p>';
				$message .= '<pre>';
				ob_start();
				var_dump( $response );
				$message .= ob_get_clean() . '</pre>';
			} else {
				$message = '<p>10MB of test data was downloaded for ' . $download_time . ' seconds.</p>';
			}
		}

		set_transient( 'the7-dev-tools-message', $message, 60 );
	}

}
