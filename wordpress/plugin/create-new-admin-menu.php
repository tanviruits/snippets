<?php
   /*
   Plugin Name: LHG Reports
   Plugin URI: http://lhgraphics.com
   Description: This plugin manages report from twilio, analytics and wp tao in one place
   Version: 1.0.0
   Author: Lighthouse Graphics
   Author URI: http://lhgraphics.com
   License: GPL2
   */



   add_action( 'admin_menu', 'creat_new_admin_menu' );

	function create_new_admin_menu() {
		add_menu_page( 'LHG Reports', 'LHG Reports', 'manage_options', 'lhg-reports.php', 'set_report_contents', 'dashicons-chart-line', 6  );
	}

	function set_report_contents(){
?>
	<div class="wrap">
		<h2>Welcome To My Plugin</h2>
	</div>
<?php
	}
?>
