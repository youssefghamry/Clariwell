<?php 
/**
 * The main template file.
 *
 * @package Insignia Agency
 * @author insignia Technolabs
 * @link http://insigniatechnolabs.com/
 */

    /**
    *
    * Load Theme Options
    *
    **/

    if ( !isset( $ins_opt ) && file_exists( get_template_directory() . '/insigniathemeoptions/insigniacustomoptions/insignia-config.php' ) ) {
    	require_once( get_template_directory() . '/insigniathemeoptions/insigniacustomoptions/insignia-config.php' );
    }
    
    if( class_exists('ReduxFrameworkPlugin')){
		Redux::init( 'ins_opt' );
    }

	/***
	*Insignia Theme Support
	*
	* @since       1.0
	***/
	
	add_action( 'after_setup_theme', 'insignia_theme_support' );
	function insignia_theme_support() {

		load_theme_textdomain( 'clariwell', get_template_directory() . '/lang' );
		add_editor_style( array( '/assets/css/editor.css' ) );
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'quote' ) );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'woocommerce' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		// WooCommerce
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );
		
		global $wp_version;

		if ( version_compare( $wp_version, '3.4', '>=' ) ) {
			add_theme_support( "custom-header");
			add_theme_support( "custom-background");
		}
	}
		
	/**
	* For Contant Width
	*
	* @since       1.0
	**/
	if ( ! isset( $content_width ) ) {
		global $content_width;
		$content_width = 1170;
	}

    /**
    *
    * Load css & Script
    *
    **/ 

	add_action( 'admin_enqueue_scripts', 'insignia_load_custom_wp_admin_style' );
	function insignia_load_custom_wp_admin_style() {
		wp_register_style( 'clariwell-admin-style', get_template_directory_uri() . '/assets/css/admin-style.css', false, '1.0.0' );
		wp_enqueue_style( 'clariwell-admin-style' );
		wp_enqueue_style( 'clariwell-insignia-icons' );
	    wp_enqueue_style( 'iconsmind' );
		wp_localize_script( 'ajax-load-post-script', 'ajax_posts', array(
        	'ajax_url' => esc_url(admin_url('admin-ajax.php')),
        	'noposts' => esc_html__('No older posts found', 'clariwell'),
    	));
	}

	/***
	*Comment's Replay Script 
	*
	*@since       1.0
	***/
		
	function insignia_enqueue_comments_reply() {
		wp_enqueue_script( 'comment-reply' );
	}
	add_action( 'comment_form_before', 'insignia_enqueue_comments_reply' );


	function insignia_get_meta($value,$post) {
		$field = get_post_meta( $post, $value, 1);
		if ( ! empty( $field ) ) {
			return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
		} else {
			return false;
		}
	}
	
	function insignia_basic_enqueue_scripts() {	
		/** CSS **/
		wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.6');
		wp_enqueue_style('clariwell-element', get_template_directory_uri() . '/assets/css/element.css'); 
		wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css','4.5.0');
		wp_enqueue_style( 'clariwell-insignia-icons' );
		wp_enqueue_style( 'iconsmind' );
		wp_enqueue_style('clariwell-style', get_template_directory_uri() . '/style.css');
		wp_enqueue_style('clariwell-navigation', get_template_directory_uri() . '/assets/css/navigation.css');
		wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');

		if ( insignia_option( 'theme_skin' ) == 'dark'  ) {			
			wp_enqueue_style('clariwell-dark', get_template_directory_uri() . '/assets/css/dark.css');
		}
		
		wp_enqueue_style('clariwell-clariwell-css', get_template_directory_uri() . '/assets/css/clariwell-css.css');

		/** JS **/
		wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), true,true);
		wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), false,false);

		$api_key = '';
				
		if (insignia_option('ins-opt-google-api') ) {
			$api_key = esc_attr( insignia_option('ins-opt-google-api') );
			wp_register_script( 'google-map-sensor', '//maps.google.com/maps/api/js?key=' . $api_key , array( 'jquery' ) );
			wp_register_script( 'google-map-label', get_template_directory_uri() . '/js/plugins/map/markerwithlabel.js', array( 'google-map-sensor' ) );
			}
	}
              
	function insignia_add_footer_styles() {

		wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
		wp_enqueue_style('swipebox', get_template_directory_uri() . '/assets/css/swipebox.min.css');   
		wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), false,false);
		wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope.pkgd.js', array('jquery'));
		wp_enqueue_script('masonry-horizontal', get_template_directory_uri() . '/assets/js/masonry-horizontal.js', array('jquery'), false,true);
		wp_enqueue_script( 'imagesloaded' );
		wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquery'), false,false);
		wp_enqueue_script('clariwell-clariwell-js', get_template_directory_uri() . '/assets/js/clariwell-js.js', array('jquery'), false,true);
		wp_enqueue_script('retina', get_template_directory_uri() . '/assets/js/retina.js', array('jquery'), false,true); 
		wp_enqueue_script('PageScroll2id', get_template_directory_uri() . '/assets/js/jquery.malihu.PageScroll2id.js', array('jquery'), false,true);
		wp_enqueue_script('swipebox', get_template_directory_uri() . '/assets/js/jquery.swipebox.js', array('jquery'), false, false); 
		wp_enqueue_script( 'superfish', get_template_directory_uri() . '/assets/js/superfish.min.js', array( 'jquery' ), null,true);
		wp_enqueue_script( 'clariwell-insignia-navigation', get_template_directory_uri() . '/assets/js/insignia-navigation.js', array( 'jquery', 'superfish' ), true);
	}

	function insignia_custom_enqueue_scripts(){
		if ( class_exists('ReduxFrameworkPlugin') ) {
			ob_start();
			get_template_part( '/assets/css/default-dynamic-css' );
			$output = ob_get_contents();
			ob_end_clean();
			wp_add_inline_style( 'clariwell-style', $output); 
		} 
    }
	
	add_action('wp_enqueue_scripts', 'insignia_basic_enqueue_scripts');
	add_action( 'get_footer', 'insignia_add_footer_styles' );
	add_action('wp_enqueue_scripts', 'insignia_custom_enqueue_scripts');

    /**
    *
    * Insignia Theme plugin Activator
    *
    **/
	require_once( get_template_directory() .'/functions/plugins/insignia_plugin.php' );


    /* ------------------------------------------------------------------------ */
    /* Pagination
    /* ------------------------------------------------------------------------ */
    function insignia_pagination($pages = '') {
	
		global $paged;	
		if ( get_query_var( 'paged' ) ) {
			$paged = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$paged = get_query_var( 'page' );
		} else {
			$paged = 1;
		}
		if($pages == ''){
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			if(!$pages)
			{
				$pages = 1;
			}
		 }   
 
        if(1 != $pages){
			/**	Add current page to the array */
			if ( $paged >= 1 )
				$links[] = $paged;
		
			/**	Add the pages around the current page to the array */
			if ( $paged >= 3 ) {
				$links[] = $paged - 1;
				$links[] = $paged - 2;
			}
		
			if ( ( $paged + 2 ) <= $pages ) {
				$links[] = $paged + 2;
				$links[] = $paged + 1;
			}

			echo '<div id="pagination" class="clearfix"><ul>' . "\n";

			/**	Previous Post Link */
			if ( get_previous_posts_link() )
				printf( '<li class="pagination-prev">%s</li>' . "\n", get_previous_posts_link('<i class="fa fa-chevron-left"></i>') );
		
			/**	Link to first page, plus ellipses if necessary */
			if ( ! in_array( 1, $links ) ) {
				$class = 1 == $paged ? ' class="current"' : '';
				printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
				if ( ! in_array( 2, $links ) )
					echo '<li><span>...</span></li>';
				}
		
			/**	Link to current page, plus 2 pages in either direction if necessary */
			sort( $links );
			foreach ( (array) $links as $link ) {
				$class = $paged == $link ? ' class="current"' : '';
				printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
			}
		
			/**	Link to last page, plus ellipses if necessary */
			if ( ! in_array( $pages, $links ) ) {
				if ( ! in_array( $pages - 1, $links ) )
					echo '<li><span>...</span></li>' . "\n";
					$class = $paged == $pages ? ' class="current"' : '';
					printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $pages ) ), $pages );
				}
		
			/**	Next Post Link */
			if ( get_next_posts_link() )
				printf( '<li class="pagination-next">%s</li>' . "\n", get_next_posts_link('<i class="fa fa-chevron-right"></i>') );
			echo '</ul></div>' . "\n";
        } 
    }

	function insignia_get_post_page_url() {
		if( 'page' == get_option( 'show_on_front' ) ) {
			return get_permalink( get_option('page_for_posts' ) );
		} else {
			return home_url();
		} 
	}

	/**
	 * register_sidebars - Register sidebars.
	 *
	 * @since       1.0
	 */
	 
	function insignia_widgets_init() {

		register_sidebar( array(
			'name' => esc_html__( 'Default Sidebar', 'clariwell' ),
			'id' => 'default_sidebar',
			'description' => esc_html__( 'Default Theme sidebar', 'clariwell' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) );

		register_sidebar( array(
			'name' => esc_html__( 'Page Sidebar', 'clariwell' ),
			'id' => 'page_sidebar',
			'description' => esc_html__( 'The page sidebar appears on each page', 'clariwell' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) );

		register_sidebar( array(
			'name' =>esc_html__( 'Shop sidebar', 'clariwell'),
			'id' => 'shop_sidebar',
			'description' => esc_html__( 'Appears on the woocommerce pages.', 'clariwell' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) );
		
    	register_sidebar( array(
			'name' =>esc_html__( 'Portfolio sidebar', 'clariwell'),
			'id' => 'portfolio_sidebar',
			'description' => esc_html__( 'Appears on the Portfolio pages.', 'clariwell' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) );
    	register_sidebar( array(
   			'name' =>esc_html__( 'Side Menu', 'clariwell'),
			'id' => 'sidebar-5',
			'description' => esc_html__( 'Appears in the header menu', 'clariwell' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) );
    	register_sidebar( array(
			'name' =>esc_html__( 'Footer column 1', 'clariwell'),
			'id' => 'sidebar-footer-col1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) );
    	register_sidebar( array(
			'name' =>esc_html__( 'Footer column 2', 'clariwell'),
			'id' => 'sidebar-footer-col2',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) );
    	register_sidebar( array(
			'name' =>esc_html__( 'Footer column 3', 'clariwell'),
			'id' => 'sidebar-footer-col3',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) );
    	register_sidebar( array(
			'name' =>esc_html__( 'Footer column 4', 'clariwell'),
			'id' => 'sidebar-footer-col4',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h5 class="widget-title">',
			'after_title' => '</h5>',
		) );
	}

	add_action( 'widgets_init', 'insignia_widgets_init' );

    function insignia_my_search_form( $form ) {
        $form = '<form role="search" method="get" id="searchform" class="searchform" action="' .  esc_url(home_url( '/' ))  . '" >
        <div>
        <input type="text" placeholder="'. esc_attr__( 'Search', 'clariwell' ) .'" value="' . get_search_query() . '" name="s" id="s" class="ins_search_input" />
        <button type="submit" class="ins_submit_btn" id="searchsubmit" value="'. esc_attr__( 'Search','clariwell' ) .'" ><i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
        </form>';
    
        return $form;
    }

    add_filter( 'get_search_form', 'insignia_my_search_form', 100 );

	// ensure is_plugin_active() exists (not on frontend)
	if( !function_exists('is_plugin_active') ) {
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	}
 
	require_once( get_template_directory() .'/functions/general-functions.php' );
	require_once( get_template_directory() .'/functions/header-functions.php' );
	require_once( get_template_directory() .'/functions/woocommerce_configuration.php' );
	require_once( get_template_directory() .'/functions/ins-comments.php' );
	require_once( get_template_directory() .'/demo-importer.php' );
	require_once( get_template_directory() .'/functions/breadcrumbs.php' );
	
    if ( class_exists( 'Vc_Manager' ) && function_exists('clariwell_meta_includes') ) {
	require_once( get_template_directory() .'/functions/vc_uiblocks/insignia_core.php' );
	require_once( get_template_directory() .'/functions/vc_uiblocks/theme-vc-templates-panel-editor.php' );
	require_once( get_template_directory() .'/functions/vc_uiblocks/clariwell-templates.php' );
	}

    // 
    // Custom Menus
    //
    
    class insignia_Custom_Menu_Class extends Walker_Nav_Menu {
    
    	function start_lvl(&$output, $depth = 0, $args = array()) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<ul class=\"sub-menu\">\n";
    	}
    	
    	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
    	
    		global $wp_query;
    		
    		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
    		$class_names = $value = '';
    		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
    		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
    		$mega_menu_class = '';
    		if( $depth == 0 && get_post_meta( $item->ID, '_menu_item_insignia_mega_menu', true ) == 'checked' && strpos( $class_names, 'mega_menu' ) === false ) {
    			$mega_menu_class = 'mega-menu ';
    		}
    
    		$class_names = ' class="' . $mega_menu_class . esc_attr( $class_names ) . '"'; 
    		$output .= $indent . '<li ' . $value . $class_names .'>';
    		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
    		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
    		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
    		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';
    		$item_output = $args->before;
    		$item_output .= '<a'. $attributes .'><span>';
    		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
    		
    		if( $item->description && insignia_header_style() == 'classic-subtitles' ) {
    			$item_output .= '<span class="sub">' . $item->description . '</span>';
    		}
    		
    		$item_output .= '</span></a>';
    		$item_output .= $args->after;
    		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    	}
    }

	function insignia_reduxdemo() {
		wp_register_style('clariwell-insignia-icons', get_template_directory_uri() . '/assets/css/insignia-icons.css');
		wp_register_style('iconsmind', get_template_directory_uri() . '/assets/css/iconsmind.min.css');
	}
	add_action('init', 'insignia_reduxdemo');

	/**
	 * init_nav - Register nav menus.
	 *
	 * @since       1.0
	 */
	add_action( 'init', 'init_nav' );
	function init_nav() {
		register_nav_menu( 'primary', esc_html__( 'Primary Navigation', 'clariwell' ) );
		if( class_exists('ReduxFrameworkPlugin')){
			register_nav_menu( 'topbar', esc_html__( 'Top Bar Navigation', 'clariwell' ) );
			register_nav_menu( 'footer', esc_html__( 'Footer Navigation', 'clariwell' ) );
		}
	}

	/**
	 * After VC Init
	 *
	 * @since       1.0
	 */

	add_action( 'vc_after_init', 'insignia_vc_after_init_actions' );

	function insignia_vc_after_init_actions() {
	 
	  if( function_exists('vc_set_default_editor_post_types') ){
		  $list = array(
			  'page',
			  'post',
			  'portfolio',
		  );
		  vc_set_default_editor_post_types( $list );
	  }
	}

	/**
	 * limit words in post content
	 *
	 * @since       1.0
	 */
	
	function insignia_custom_excerpt_length( $length ) {
			return 30;
	}
	add_filter( 'excerpt_length', 'insignia_custom_excerpt_length', 999 );
		
	 /**
	 * Removes the demo link and the notice of integrated demo from the redux-framework plugin
	 *
	 * @since       1.0
	 */	
		
	function insignia_remove_demo_mode_link() {
		if ( class_exists('ReduxFrameworkPlugin') ) {
			remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::get_instance(), 'plugin_metalinks'), null, 2 );
		}
		if ( class_exists('ReduxFrameworkPlugin') ) {
			remove_action('admin_notices', array( ReduxFrameworkPlugin::get_instance(), 'admin_notices' ) );    
		}
	}
	add_action('init', 'insignia_remove_demo_mode_link'); 