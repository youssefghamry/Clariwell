<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
$file='';

define('CLARIWELL_EXTENSIONS_PLUGIN_URL',plugin_dir_url($file) . 'clariwell-vc-elements/');


class Clariwell_Core {
	
	private static $_instance;
	

	public static function getInstance() {
		if ( ! ( self::$_instance instanceof self ) ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}
	
	
	public function __construct() {
		$theme = wp_get_theme()->get( 'Name' );
		if(substr_count($theme, 'Clariwell') > 0) {
			add_action( 'after_setup_theme', array( $this, 'load_clariwell_core_text_domain' ) );
			
			add_action('after_setup_theme', array($this, 'addVcCustomElements'));
			add_action('init', array($this, 'init'), 10);			
			
			
		} else {
			add_action('admin_notices', array($this, '_admin_notice__error'));
		}
	}
	
	
	
	public function init() {
		
		
		if ( class_exists( 'Vc_Manager' ) && class_exists( 'WPBakeryShortCode' ) ) {
			
			$this->vc_rella_templates();
		}
		
	}
	
	public function vc_rella_templates() {

		$clariwell_templates = new Clariwell_Vc_Templates_Panel_Editor();
		return $clariwell_templates->init();

	}
	
	
	public function load_clariwell_core_text_domain() {
		load_plugin_textdomain( 'clariwell', false, CLARIWELL_EXTENSIONS_PLUGIN_URL . '/languages' );
	}
	/*
	 * Add custom VC elements
	 */
	public function addVcCustomElements() {
		if ( class_exists( 'Vc_Manager' ) && class_exists( 'WPBakeryShortCode' ) ) {						
			add_action('admin_enqueue_scripts', 'clariwell_vc_styles');
			add_action( 'admin_print_scripts-post.php', 'enqueue', 99 );
			add_action( 'admin_print_scripts-post-new.php', 'enqueue', 99 );
			function clariwell_vc_styles() {
				// Template Import Css
				



wp_enqueue_style('clariwell_vc', get_template_directory_uri() .'/functions/vc_uiblocks/vc-custom.css', array(), time(), 'all');
			}
			function enqueue() {
				wp_enqueue_script('clariwell_vc_script', get_template_directory_uri() .'/functions/vc_uiblocks/vc-script.js', array('jquery'), '1.0.0', true  );
			}
			
		}
	}
}
$Clariwell_Core = new Clariwell_Core();