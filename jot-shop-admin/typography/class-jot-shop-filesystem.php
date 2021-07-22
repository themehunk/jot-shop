<?php
/**
 * Class jot_shop_filesystem.
 */
class jot_shop_filesystem {

	/**
	 * Store instance of jot_shop_filesystem
	 *
	 * @since 2.1.0
	 * @var jot_shop_filesystem
	 */
	protected static $_instance = null;

	/**
	 * Get instance of jot_shop_filesystem
	 *
	 * @since 2.1.0
	 * @return jot_shop_filesystem
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Get WP_Filesystem instance.
	 *
	 * @since 2.1.0
	 * @return WP_Filesystem
	 */
	public function get_filesystem() {
		global $wp_filesystem;

		if ( ! $wp_filesystem ) {
			require_once ABSPATH . '/wp-admin/includes/file.php';

			$context = apply_filters( 'request_filesystem_credentials_context', false );

			add_filter( 'request_filesystem_credentials', array( $this, 'request_filesystem_credentials' ) );

			$creds = request_filesystem_credentials( site_url(), '', false, $context, null );

			WP_Filesystem( $creds, $context );
			remove_filter( 'request_filesystem_credentials', array( $this, 'request_filesystem_credentials' ) );
		}

		// Set the permission constants if not already set.
		if ( ! defined( 'FS_CHMOD_DIR' ) ) {
			define( 'FS_CHMOD_DIR', 0755 );
		}

		if ( ! defined( 'FS_CHMOD_FILE' ) ) {
			define( 'FS_CHMOD_FILE', 0644 );
		}

		return $wp_filesystem;
	}

	/**
	 * Sets credentials to true.
	 *
	 * @since 2.1.3
	 */
	function request_filesystem_credentials() {
		return true;
	}

	/**
	 * Checks to see if the site has SSL enabled or not.
	 *
	 * @since 2.1.0
	 * @return bool
	 */
	public function is_ssl() {
		if ( is_ssl() ) {
			return true;
		} elseif ( 0 === stripos( get_option( 'siteurl' ), 'https://' ) ) {
			return true;
		} elseif ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && 'https' == $_SERVER['HTTP_X_FORWARDED_PROTO'] ) {
			return true;
		}

		return false;
	}

	/**
	 * Create uploads directory if it does not exist.
	 *
	 * @since 2.1.0
	 * @param String $dir directory path to be created.
	 * @return boolean True of the directory is created. False if directory is not created.
	 */
	public function maybe_create_uploads_dir( $dir ) {
		// Create the upload dir if it doesn't exist.
		if ( ! file_exists( $dir ) ) {
			// Create the directory.
			$status = jot_shop_filesystem()->get_filesystem()->mkdir( $dir );

			// IF a directory cannot be created, return with false status.
			if ( false === $status ) {
				jot_shop_filesystem()->update_filesystem_access_status( $status );
				return false;
			}

			// Add an index file for security.
			jot_shop_filesystem()->get_filesystem()->put_contents( $dir . 'index.php', '' );
		}

		return true;
	}

	/**
	 * Update Filesystem status.
	 *
	 * @since 2.1.0
	 * @param boolean $status status for filesystem access.
	 * @return void
	 */
	public function update_filesystem_access_status( $status ) {
		jot_shop_update_option( 'file-write-access', $status );
	}

	/**
	 * Check if filesystem has write access.
	 *
	 * @since 2.1.0
	 * @return boolean True if filesystem has access, false if does not have access.
	 */
	public function can_access_filesystem() {
		return (bool) jot_shop_get_option( 'file-write-access', true );
	}

	/**
	 * Reset filesystem access status.
	 *
	 * @since 2.1.0
	 * @return void
	 */
	public function reset_filesystem_access_status() {
		jot_shop_delete_option( 'file-write-access' );
	}

	/**
	 * Returns an array of paths for the upload directory
	 * of the current site.
	 *
	 * @since 2.1.0
	 * @param String $assets_dir directory name to be created in the WordPress uploads directory.
	 * @return array
	 */
	public function get_uploads_dir( $assets_dir ) {
		$wp_info = wp_upload_dir( null, false );

		// SSL workaround.
		if ( $this->is_ssl() ) {
			$wp_info['baseurl'] = str_ireplace( 'http://', 'https://', $wp_info['baseurl'] );
		}

		// Build the paths.
		$dir_info = array(
			'path' => $wp_info['basedir'] . '/' . $assets_dir . '/',
			'url'  => $wp_info['baseurl'] . '/' . $assets_dir . '/',
		);

		return apply_filters( 'jot_shop_get_assets_uploads_dir', $dir_info );
	}

	/**
	 * Delete file from the filesystem.
	 *
	 * @since 2.1.0
	 * @param String  $file Path to the file or directory.
	 * @param boolean $recursive If set to true, changes file group recursively.
	 * @param boolean $type Type of resource. 'f' for file, 'd' for directory.
	 * @return void
	 */
	public function delete( $file, $recursive = false, $type = false ) {
		jot_shop_filesystem()->get_filesystem()->delete( $file, $recursive, $type );
	}

	/**
	 * Adds contents to the file.
	 *
	 * @param  string $file_path  Gets the assets path info.
	 * @param  string $style_data   Gets the CSS data.
	 * @since  2.1.0
	 * @return bool $put_content returns false if file write is not successful.
	 */
	public function put_contents( $file_path, $style_data ) {
		return jot_shop_filesystem()->get_filesystem()->put_contents( $file_path, $style_data );
	}

	/**
	 * Get contents of the file.
	 *
	 * @param  string $file_path  Gets the assets path info.
	 * @since  2.1.0
	 * @return bool $get_contents Gets te file contents.
	 */
	public function get_contents( $file_path ) {
		return jot_shop_filesystem()->get_filesystem()->get_contents( $file_path );
	}
}

/**
 * Get instance of WP_Filesystem.
 *
 * @since 2.1.0
 *
 * @return WP_Filesystem
 */
function jot_shop_filesystem() {
	return jot_shop_filesystem::instance();
}



/**
 * Topstore Theme Options
 *
 * @package     Topstore
 * @author      Topstore
 * @copyright   Copyright (c) 2020, Topstore
 * @since       Topstore 1.0.0
 */
/**
 * Theme Options
 */
if ( ! class_exists( 'Jot_Shop_Theme_Options' ) ) {
	/**
	 * Theme Options
	 */
	  class Jot_Shop_Theme_Options {
		/**
		 * Class instance.
		 *
		 * @access private
		 * @var $instance Class instance.
		 */
		private static $instance;
		/**
		 * Post id.
		 *
		 * @var $instance Post id.
		 */
		public static $post_id = null;
		/**
		 * A static option variable.
		 *
		 * @since 1.0.0
		 * @access private
		 * @var mixed $db_options
		 */
		private static $db_options;
		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {

			// Refresh options variables after customizer save.
			add_action( 'after_setup_theme', array( $this, 'refresh' ) );

		}

		/**
		 * Set default theme option values
		 *
		 * @since 1.0.0
		 * @return default values of the theme.
		 */
		public static function defaults(){
			return apply_filters(
				'jot_shop_theme_defaults', array(	
			    'jot_shop_body_fontfamily'  => 'inherit',
			    'jot_shop_body_fontweight'  => 'inherit',
			    'jot_shop_title_fontfamily'  => 'inherit',
			    'jot_shop_title_fontweight'  => 'inherit',
			    'jot_shop_h1_fontfamily'  => 'inherit',
			    'jot_shop_h1_fontweight'  => 'inherit',
			    'jot_shop_h2_fontfamily'  => 'inherit',
			    'jot_shop_h2_fontweight'  => 'inherit',
			    'jot_shop_h3_fontfamily'  => 'inherit',
			    'jot_shop_h3_fontweight'  => 'inherit',
			    'jot_shop_h4_fontfamily'  => 'inherit',
			    'jot_shop_h4_fontweight'  => 'inherit',
			    'jot_shop_h5_fontfamily'  => 'inherit',
			    'jot_shop_h5_fontweight'  => 'inherit',
			    'jot_shop_h6_fontfamily'  => 'inherit',
			    'jot_shop_h6_fontweight'  => 'inherit',
				)
			);
		}
		/**
		 * Get theme options from static array()
		 *
		 * @return array Return array of theme options.
		 */
		public static function get_options(){
			return self::$db_options;
		}
		/**
		 * Update theme static option array.
		 */
		public static function refresh() {
			self::$db_options = wp_parse_args(
				get_option( JOT_SHOP_THEME_SETTINGS ),
				self::defaults()
			);
		}
	}
}
/**
 * Kicking this off by calling 'get_instance()' method
 */
Jot_Shop_Theme_Options::get_instance();