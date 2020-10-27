<?php

namespace FTM\FreethinkPlugin\Admin;


/**
 * Class Settings
 *
 * Functions for Settings
 *
 */
class Dashboard {


	public function hooks() {
		add_filter( 'wp_dashboard_setup', [ $this, 'wporg_remove_all_dashboard_metaboxes' ] );
	}


	public function wporg_remove_all_dashboard_metaboxes() {
		// Remove Welcome panel
		remove_action( 'welcome_panel', 'wp_welcome_panel' );
		// Remove the rest of the dashboard widgets
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'health_check_status', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	}


}
