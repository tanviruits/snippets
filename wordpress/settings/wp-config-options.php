<?php 


// enable debugging in wordpress
define( 'WP_DEBUG', true );

// define home url site url
define( 'WP_SITEURL', 'http://example.com/wordpress' ); 
define( 'WP_HOME', 'http://example.com/wordpress' );

// disable automatic updater
define( 'AUTOMATIC_UPDATER_DISABLED', true );

//Enables all core updates, includingminor and major: 
define( 'WP_AUTO_UPDATE_CORE', true ); 
//Disables all core updates: 
define( 'WP_AUTO_UPDATE_CORE', false ); 
// Enables core updates for minor releases (default): 
define( 'WP_AUTO_UPDATE_CORE', 'minor' );

// Move wp-content directory

define( 'WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . 
'/blog/wp-content' ); 
define( 'WP_CONTENT_URL', 'http://example.com/blog/wp-content'); 

// move plugins directory
define( 'WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/blog/wp-content/plugins' );
define( 'WP_PLUGIN_URL', 'http://example/blog/wp-content/plugins');

//  Move the uploads directory
define( 'UPLOADS', 'blog/wp-content/my-filez' );

// set options for wp post revisions
define( 'WP_POST_REVISIONS', false );
define( 'WP_POST_REVISIONS', 5 );

// set autosave interval, default 60 seconds
define( 'AUTOSAVE_INTERVAL', 300 );

// save queries in a global array 

define( 'SAVEQUERIES',true );

// display saved global query array to a page template

if ( current_user_can( 'manage_options' ) ) {
global $wpdb; 
print_r( $wpdb->queries ); 
}

// enable logging directly from wp-config file
/*
	Steps:
	1. Create a php_error.log file
	2. Upload this file to root directory
	3. Turn on the log_errors php option and point to the logging file by the following code
	Here the error_log value is relative to the website root not wordpress
*/
@ini_set( 'log_errors','On' ); 
@ini_set( 'display_errors','Off' );
@ini_set( 'error_log','/public_html/wordpress/php_error.log' );

// increase memory limit
define( 'WP_MEMORY_LIMIT', '64M' );
// define wordpress default language with .mo and .po files
define ( 'WPLANG','en-GB' );

// customize where the language .mo files will reside
define( 'LANGDIR', '/wp-content/bury/my/languages' );

// custom user and user meta table if two wordpress installation wants to share the same set of users also redefines the default user table
define( 'CUSTOM_USER_TABLE', 'joined_users' );
define( 'CUSTOM_USER_META_TABLE', 'joined_usermeta' );

// set cookie options especially in multisites
define( 'COOKIE_DOMAIN', '.domain.com' ); 
define( 'COOKIEPATH', '/' ); 
define( 'SITECOOKIEPATH', '/' );

// set ftp information in wp-config file if needed
define( 'FTP_USER', 'username' );
define( 'FTP_PASS', 'password' );
define( 'FTP_HOST', 'ftp.example.com:21' );

// additional ftp / ssh options for various configurations
// sets the filesystem method: "direct", "ssh", "ftpext", or "ftpsockets"
define( 'FS_METHOD', 'ftpext' );
//absolute path to root installation directory
define( 'FTP_BASE', '/public_html/wordpress/' );
// absolute path to wp-content directory 
define( 'FTP_CONTENT_DIR', '/public_html/wordpress/wp-content/' ); 
// absolute path to wp-plugins directory 
define( 'FTP_PLUGIN_DIR ', '/ public_html /wordpress/wp-content/plugins/' );
//absolute path to your SSH public key 
define( 'FTP_PUBKEY', '/home/username/.ssh/id_rsa.pub' );
// absolute path to your SSH private key 
define( 'FTP_PRIVKEY', '/home/username/.ssh/id_rsa' ); 
//secure FTP SSL-connection if supported by the hosting company 
define( 'FTP_SSL', false ); 

// override default file permissions in wordpress
define( 'FS_CHMOD_FILE', 0644 );
define( 'FS_CHMOD_DIR', 0755 );

// enable wp cache for making some cache plugins work
define( 'WP_CACHE', true );

// php - view all constants set on our current installation
print_r( @get_defined_constants() );

// forcing SSL on login
define( 'FORCE_SSL_LOGIN', true );

// force admin pages to use SSL
define( 'FORCE_SSL_ADMIN', true );

// control trash bin empty
define( 'EMPTY_TRASH_DAYS', 7 );

// disable trash
define( 'EMPTY_TRASH_DAYS', 0 );

// disable cron
define( 'DISABLE_WP_CRON', true );

// allow multisite
define( 'WP_ALLOW_MULTISITE', true );



 ?>
