<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "ins_opt";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'ins_opt/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists(  get_template_directory() . '/InsigniaThemeOptions/InsigniaCustomOptions/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( get_template_directory() . '/InsigniaThemeOptions/InsigniaCustomOptions/info-html.html');
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'clariwell' ),
        'page_title'           => __( 'Theme Options', 'clariwell' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => false,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,

        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'clariwell' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'clariwell' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'clariwell' ),
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p></p>', 'clariwell' ), $v );
    } else {
        $args['intro_text'] = __( '<p></p>', 'clariwell' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p></p>', 'clariwell' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */
    $img_uri = get_template_directory_uri() . '/insigniathemeoptions/insigniacustomoptions/';
    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'clariwell' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'clariwell' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'clariwell' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'clariwell' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'clariwell' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*
        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for
    */

    // -> START Color Selection
    Redux::setSection( $opt_name, array(
        'title'      => __( 'General', 'clariwell' ),
        'id'         => 'color-Color',
        'subsection' => false, 
        'fields'     => array(
			array(
				'id'       => 'default-page-layout',
				'type'     => 'select',
				'title'    => __( 'Default Page Layout', 'clariwell' ),
				'options'  => array(
					'full_width'  => 'Full Width',
					'left_sidebar'  => 'Sidebar-left',
					'right_sidebar'  => 'Sidebar-right',
				),
				'default' => 'full_width' 
				),

			array(
				'id'             => 'page_content_padding-top',
				'type'           => 'spacing',
				'mode'           => 'padding',
				'units'          => 'px',
				//'display_units' 	=> false,
				'units_extended' => 'false',
				'left' => false,
				'right' => false,
				'bottom' => false,
				'output'      => array( '#main-content-wrapper'),
				'title'          => esc_html__( 'Page Top Padding', 'clariwell' ),
				'subtitle'       => esc_html__( 'Set a top (between Title Area and Content) padding. In pixels.', 'clariwell' ),
				'default'            => array(
					'padding-top'     => '50', 
					'units'          => 'px', 
				)
			),

			array(
				'id'             => 'page_content_padding-bottom',
				'type'           => 'spacing',
				'mode'           => 'padding',
				'units'          => 'px',
				//'display_units' 	=> false,
				'units_extended' => 'false',
				'left' => false,
				'right' => false,
				'top' => false,
				'output'      => array( '#main-content-wrapper'),
				'title'          => esc_html__( 'Page Bottom Padding', 'clariwell' ),
				'subtitle'       => esc_html__( 'Set a bottom (between Content and Footer) padding. In pixels.', 'clariwell' ),
				'default'            => array(
					'padding-bottom'     => '50', 
					'units'          => 'px', 
				)
			),

			array(
				'id'       => 'ins-opt-back-to-top',
				'type'     => 'switch', 
				'on'     => 'Enable', 
				'off'     => 'Disable', 
				'title'    => __( 'Back to top button', 'clariwell' ),
				'default'  => 'true',
			),
			
			array(
				'id'       => 'page_loader',
				'type'     => 'switch',
				'on'     => 'Enable', 
				'off'     => 'Disable',
				'title'    => esc_html__( 'Page Loader', 'clariwell' ),
				'subtitle' => esc_html__( 'Enable a page loading effect. You may adjust page laoder styling in Styling menu.', 'clariwell' ),
				'default'  => true,
			),
            
        ),
    ) );

/*********
***LOGO***
**********/

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Logo', 'clariwell' ),
        'id'     => 'logo',
        'desc'   => esc_html__( 'Website Logo Settings.', 'clariwell' ),
        'icon'   => 'el el-eye-open',
        'fields' => array(
            
            array(
                'id' => 'ins-logo-style',
                'type' => 'select',
                'title' => esc_html__('Logo style', 'clariwell'),
                'options'  => array(
                    '1' => 'Image logo',
                    '2' => 'Text logo'
                ),
                'default' => '2'
            ),
            array(
                'id'       => 'site_logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Logo Image - Normal', 'clariwell' ),
                'subtitle' => esc_html__( "Choose a default logo image to display", 'clariwell' ),
                'default'  => array( 'url' => get_template_directory_uri() . '/assets/img/logo-dark.png' ),
                'required' => array('ins-logo-style','equals','1'),
            ),
            array(
                'id'       => 'site_logo_white',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Logo Image - Light', 'clariwell' ),
                'subtitle' => esc_html__( 'Choose a logo image to display for "Dark" header skin.', 'clariwell' ),
                'default'  => array( 'url' => get_template_directory_uri() . '/assets/img/logo-light.png' ),
                'required' => array('ins-logo-style','equals','1'),
            ),
            array(
                'id'       => 'logo_mobile',
                'type'     => 'media',
                'url'      => false,
                'title'    => esc_html__( 'Logo Image for Mobile', 'clariwell' ),
                'subtitle' => esc_html__( "Optional: logo to be displayed on mobile devices.", 'clariwell' ),
                'default'  => '',
                'required' => array('ins-logo-style','equals','1'),
            ),
            
            array(
                'id' => 'ins-text-logo',
                'type' => 'text',
                'title' => esc_html__('Text logo', 'clariwell'),
                'required' => array('ins-logo-style','equals','2'),
                'default' => 'clariwell'
            ),
            array(
                'id' => 'ins-text-logo-typo',
                'type' => 'typography',
                'title' => esc_html__('Text logo font settings', 'clariwell'),
                'required' => array('ins-logo-style','equals', '2'),
                'output'   => ('#logo .ins-text-logo, #aside-logo .ins-text-logo'),
                'google' => true,
                'font-family' => true,
                'font-style' => true,
                'font-size' => true,
                'letter-spacing' => true,
				'text-transform' => true,
                'line-height' => false,
                'color' => false,
                'text-align' => false,
                'all_styles' => false,
                'units' => 'px',
                'default'     => array(
				'font-family' => 'Saira',
						'font-weight'  => '600',
						'letter-spacing' => '2px',
		                'text-transform' => 'uppercase',
		                'font-size' => '25px',
				),
            ),
            array(
                'id' => 'ins-normal-logo-color',
                'type' => 'color',
                'transparent' => false,
                'output' => array( 'color' => '#logo .ins-text-logo, #aside-logo .ins-text-logo' ),
                'title' => esc_html__('Choose a default logo text color', 'clariwell'),
                'required' => array('ins-logo-style','equals','2'),
                'default' => '#074575',
                'validate' => 'color'
            ),
            array(
                'id' => 'ins-light-logo-color',
                'type' => 'color',
                'transparent' => false,
                'output' => array( 'color' => '.header-dark #logo .ins-text-logo, .aside-nav.header-dark #aside-logo .ins-text-logo' ),
                'title' => esc_html__('logo text color - Light', 'clariwell'),
                'subtitle' => esc_html__('Choose a logo text color for "Dark" header skin.', 'clariwell'),
                'required' => array('ins-logo-style','equals','2'),
                'default' => '#e8e8e8',
                'validate' => 'color'
            ),
            
            array(
                'id'       => 'insignia-favicon',
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Favicon', 'clariwell' ),
                'subtitle' => esc_html__( "Choose a favicon image to be displayed", 'clariwell' ),
                'default'  => array( 'url' => get_template_directory_uri().'/assets/img/favicon.png' ),
            ),

            array(
                'id'       => 'logo_height',
                'type'     => 'text',
                'title'    => esc_html__( 'Logo Height', 'clariwell' ),
                'subtitle' => esc_html__( 'Height of the logo image in pixel (example: 30).', 'clariwell' ),
                'default'  => '',
                'class' => 'textfield-tiny pixel-field',
                'required' => array('ins-logo-style','equals','1'),
                'default' => '35',
            ),
        )
    ) );


/************
***Styling***
*************/

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Styling', 'clariwell' ),
        'id'     => 'styling',
        'icon'      => 'el-icon-brush',
        'fields' => array(
            
            array(
                'id'        => 'styling-main',
                'type'      => 'info',
                'desc'      => __('General', 'clariwell'),
            ),
            
            array(
                'id'       => 'ins-opt-pc', 
                'type'     => 'color',
                'output'    => array(
                   'background-color' => '.pc-bg,.business-info-wrapper, .woocommerce  .archive-add-to-cart .ins-add-to-cart-button, .team-member-popup-main .insignia-team-image-box:before, a.ins-image-box-img-link:before, .ins-icon-box-btn-wrap:hover:after, .ins-image-box-btn-main:hover, .inv-video-lightbox-play-icon:hover, .video-link.mp-video:hover i, ::selection, span.wpcf7-not-valid-tip, .category-wrap ul.post-categories li a, .ins-custom-menu-wrapper ul li.current-menu-item a:before, .ins-custom-menu-wrapper ul li a:before, .vc_tta-style-insignia_tab_layout1 ul li.vc_tta-tab.vc_active:after, .vc_tta-style-insignia_tab_layout1 li.vc_tta-tab.vc_active, .pricing-box-button, .ins_solid_button.btn_primary_color, .pricing-style-1.insignia-pricing-box-wrapper:hover .insignia-pricing-box-inner:before, .pricing-style-1.insignia-pricing-box-wrapper.pricing-box-featured .insignia-pricing-box-inner:before, .ins-modal-wrapper .close, .ins-team-popup-wrapper .close, .ins-feature-box-inner:hover .ins-feature-box-button, .nav-tools .woo-cart-count, .tagcloud a:hover, .vc_tta-style-insignia_tab_layout2 ul li.vc_tta-tab.vc_active a:before, nav#pagination ul li .current, .ins-table-wrapper.ins-table-style-3 tr th, .woocommerce a.button.alt:hover, .woocommerce #review_form #respond .form-submit input:hover, .inv-product-hover:hover span.onsale, .sub-menu.minicart .button:hover, .sub-menu.minicart .button, .vc_tta-style-insignia_accordion_layout3 .vc_tta-panel.vc_active h4.vc_tta-panel-title,.woocommerce button.button.alt, .woocommerce button.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce ul.products li.product .added_to_cart:hover, .woocommerce ul.products li.product .added_to_cart, .woocommerce a.button:hover,.woocommerce a.button, #pagination .current a, .post-tags a:hover, .woocommerce a.button.alt, .woocommerce-MyAccount-content .address a, .pricing-border-button.pricing-bg-button, .pricing-pics-box.pricing-pics-bg-box,input[type="submit"], p.return-to-shop a.button.wc-backward,section#footer .widget h5.widget-title:after , .woocommerce-Message.woocommerce-Message--info.woocommerce-info a, input.woocommerce-Button.button, li.woocommerce-MyAccount-navigation-link.is-active, p.form-row input.button.login-btn, a.button.checkout.wc-forward:hover, p.form-row.form-row-last .button, .woocomerce-form .form-row input.button, button.checkout.wc-forward:hover, a.button.view_cart_btn.wc-forward, .woocommerce span.onsale, .about-call-to-action, .about-progress-bar .vc_bar, .apt-clients-details-box h2:after, .about-two-working-box h1:after, .apt-features-text-box h5:after, .service-btn>a:hover, .service-3-btn>a:hover, input.contactus-1-btn, input.contactus-2-btn, ul.c-2-social>li>a:hover, .ins-services-right .ins-services-text:after, .ins-choose-us-section .ins-choose-us-heading:after, .woocommerce button.button, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle, .woocommerce #review_form #respond .form-submit input,.woocommerce div.product form.cart .button , .insignia-button, input.button.size-lg,a.checkout-button.button.icon_right.size-lg.alt.wc-forward, input#place_order, .form-row input.woocommerce-Button.button,.hc-button, .inv-portfolio-filter-button-inner.inv-portfolio-filter-button_solid_bg.active-filter-button, #wrapper .color-scheme-white .inv-portfolio-filter-button-inner.inv-portfolio-filter-button_solid_bg.active-filter-button,  .insignia-testimonial-carousel .slick-arrow:hover', 
                   'color'            => '.insignia-testimonial-style-1 .insignia-testimonial-text:before, .vc_tta-style-insignia_tab_layout3 ul li.vc_tta-tab.vc_active, .slick-dots li.slick-active button:before, .ins-float-right-icon-inner i, .ins-float-icon-inner i, .number-box-num,.insignia-testimonial-bg-inner:before, .ins-list-style .ins-icon-list-icon, .ins-icon-box-icon i, .video-lightbox .video-link i, .team-member-popup-main .insignia-team-box-title h4:hover, p a,.ins-custom-menu-wrapper ul li a:hover,.ins-custom-menu-wrapper ul li.current-menu-item a, .inv-post-grid-one-content-wrap .post-categories>a:hover, .ins_outline_button.btn_primary_color, .vc_tta-style-insignia_tab_layout2 li.vc_tta-tab.vc_active a span, .woocommerce div.product .out-of-stock, .pc,.woocommerce a.remove, span.price del+ins, .pc-hover:hover, .inv-portfolio-filter-button-inner.inv-portfolio-filter-button_bordered.active-filter-button, #wrapper .color-scheme-white .inv-portfolio-filter-button-inner.inv-portfolio-filter-button_bordered.active-filter-button, button.inv-portfolio-filter-button-inner.inv-portfolio-filter-button_simple.active-filter-button, #wrapper .color-scheme-white button.inv-portfolio-filter-button-inner.inv-portfolio-filter-button_simple.active-filter-button, .blog-full-thumb-cat-holder .white-color a:hover, form.woocommerce-EditAccountForm.edit-account legend,#customer_login a.lost_password.woo-lost_password2,.lost_password a,.woocommerce-info a.showlogin,.woocommerce-info a.showcoupon,a.button.view_cart_btn.wc-forward:hover,.woocommerce a.remove, .ins_cart_content p.total, .ins_cart_content p.buttons a, span.sp-social-icon-bottom:hover, .ins-faq-num, .nav-tabs>li.active>a , .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover, .woocommerce .widget_shopping_cart .total strong,.woocommerce.widget_shopping_cart .total strong,  ul.product-categories li a:hover, .woocommerce .star-rating span:before,.blog-top-box ul li a:hover,.reply.comment-reply-link.ins_comment_rpl a,.comment-form-message a,.comment-reply-title a, .post-nav-grid-wrapper .post-nav-grid-icon, .tags-single-post-icon-wrapper .tags-single-post-icon, .blog-widget-area aside ul li a:hover, .sidebar-shop-page aside ul li .product-title:hover, .sidebar-shop-page aside ul li a:hover, .after-blog-post .logged-in-as a',
                   'border-color'            => '.pc-border,blockquote, .sidebar-wrapper > .widget .widget-title, .wpb_content_element > .widget .widgettitle, #main-menu ul.sub-menu, .sub-menu.minicart, .blockquote, .inv-video-lightbox-play-icon:hover, .video-link.mp-video:hover i, span.wpcf7-not-valid-tip, .sub-menu.minicart .button:hover, .ins_solid_button.btn_primary_color, .ins_outline_button.btn_primary_color, .ins-feature-box-inner:hover .ins-feature-box-button, .insignia-testimonial-carousel .slick-arrow:hover, input[type="text"]:focus, input[type="password"]:focus, input[type="color"]:focus, input[type="date"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="email"]:focus, input[type="number"]:focus, input[type="range"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="time"]:focus, input[type="url"]:focus, input[type="month"]:focus, input[type="week"]:focus, textarea:focus, .form-control:focus, #commentform #comment:focus',
                 ),
                'title'    => __( 'Primary color', 'clariwell' ),
                'subtitle' => __( 'Pick a Primary color for the theme.', 'clariwell' ),
                'default'  => '#07a7e3',
            ),
            array(
                'id'       => 'ins-opt-sc',
                'type'     => 'color',
                'output'    => array(
                   'background-color' => '.sc-bg,.ins-button:hover, .sc-bg-hover:hover, .woocommerce  .archive-add-to-cart .ins-add-to-cart-button:hover, .ins_solid_button.btn_secondary_color, .entry-content .tparrows.gyges:hover, .woocomerce-form .form-row input.button:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, input#place_order:hover,.form-row input.woocommerce-Button.button:hover, .hc-button:hover, nav.header-six.header-six-sticky-menu.fixed-menu,.header-six-sticky-menu.fixed-menu .header-six-right, .inv-portfolio-filter-button-inner.inv-portfolio-filter-button_solid_bg',
                   'color' => '.sc,nav.woocommerce-MyAccount-navigation ul li a, .ins_outline_button.btn_secondary_color, #calendar_wrap th, #wp-calendar #prev a:hover::after, #wp-calendar #next a:hover::after, .navigation li a, .navigation li a:hover, .navigation li.active a, .navigation li.disabled, ul.product_list_widget .product-title, ul.product-categories li a, inv-portfolio-filter-button-inner.inv-portfolio-filter-button_simple, .button-read-more-holder .button-read-more:hover, .inv-blog-grid-6-button a:hover, .fl-contact-social-box ul li .fl-social-icon:hover, .lawyer-right-icon-box:hover .lawyer-right-icon, .blog-widget-area ul li a, .events-list-main-nav li.tribe-events-nav-next a:before, .events-list-main-nav li.tribe-events-nav-next a:after, .roofing-servings-wrapper span.roofing-servings',
                   'border-color' => '.sc-border,.ins-button:hover, .navigation li a:hover,  .ins_solid_button.btn_secondary_color, .ins_outline_button.btn_secondary_color, .navigation li.active a,.comments-title,.comment-reply-title.header-six-sticky-menu.fixed-menu .header-six-right:before, .da-counter-inner:hover, .event-button-holder .event-button-bg, .event-button-holder .event-button-bg-small',
                   'border-bottom-color'  => '.button-read-more-holder .button-read-more:hover'
                 ),
                'title'    => __( 'Secondary color', 'clariwell' ),
                'subtitle' => __( 'Pick a Secondary color for the theme.', 'clariwell' ),
                'default'  => '#074575',
            ),

        	array(
        	    'id'       => 'theme_skin',
        	    'type'     => 'button_set',
        	    'title'    => esc_html__( 'Theme Skin', 'clariwell' ),
        	    'subtitle' => esc_html__( 'Choose a general theme skin. You can later overwrite default options.', 'clariwell' ),
        	    'options'  => array(
        	        "light" => esc_html__( "Light", 'clariwell' ),
        	        "dark" => esc_html__( "Dark", 'clariwell' )
        	    ),
        	    'default'  => 'light'
        	),

			array(
				'id'       => 'ins-opt-body-background',
				'type'     => 'background',
				'output' => array('body, #wrapper'),
				'title'    => __( 'Body Background', 'clariwell' ),
				'subtitle' => __( 'Pick Body background color.', 'clariwell' ),
				'default'  => array(
							  'background-color' => '#fff',
				)
			),
                
            array(
                'id'        => 'styling-links',
                'type'      => 'info',
                'desc'      => __('Links', 'clariwell'),
            ),

           array(
            	'id'       => 'color_link',
            	'type'     => 'link_color',
            	'title'    => __('Link Color', 'clariwell'),
            	'output'   => ('a'),
            	'visited'  => false,
            	'active'   => false,
            	'default'  => array(
            		'regular'  => '#074575',
            		'hover'    => '#07a7e3',
            	)
            ),
            
            array(
                'id'        => 'styling-widget',
                'type'      => 'info',
                'desc'      => __('Sidebar Widget Styling', 'clariwell'),
            ),

			array(
				'id'       => 'widget-title-typography',
				'type'     => 'typography',
				'title'    => __( 'Widget title typography', 'clariwell' ),
				'subtitle' => __( 'Specify the Widget title properties.', 'clariwell' ),
				'google'   => true,
				"text-align" => false,
				"line-height" => true,
				"font-style" => true,
				"color" => true,
				"letter-spacing" => true,
				"text-transform" => true,
				'output'      => array('.sidebar-wrapper > .widget .widget-title, .wpb_content_element > .widget .widgettitle'),
				'units'       =>'px',
				'default'  => array(
					'color'       => '#074575',
					'font-size'   => '18px',
					'font-weight'  => '600',
					'line-height' => '25px',
					'letter-spacing' => '1px'
				),
			),

           array(
            	'id'       => 'widget_color_link',
            	'type'     => 'link_color',
            	'title'    => __('Sidebar Widget Link Color', 'clariwell'),
            	'output'   => ('.sidebar-wrapper a'),
            	'visited'  => false,
            	'active'   => false,
            	'default'  => array(
            		'regular'  => '#074575',
            		'hover'    => '#07a7e3',
            	)
            ),
        )
    )); 
    
        Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Page Loader', 'clariwell' ),
        'desc' 		 => esc_html__( 'Styling of the Page Loader.', 'clariwell' ),
        'id'         => 'styling_ploader',
        'subsection' => true,
        'fields'     => array(
        	array(
        	    'id'       => 'loader_color1',
        	    'type'     => 'color',
        	    'title'    => esc_html__( 'Page Loader Spinner Color 1', 'clariwell' ),
        	    'subtitle' => esc_html__( 'Color of the spinner moving element.', 'clariwell' ),
        	    'default'  => '#07a7e3',
        	    'transparent' => false,
        	    'output' => array( 'border-top-color' => '.page-loader-wrapper .page-loader' )
        	),
        	array(
        	    'id'       => 'loader_color2',
        	    'type'     => 'color',
        	    'title'    => esc_html__( 'Page Loader Spinner Color 2', 'clariwell' ),
        	    'subtitle' => esc_html__( 'Color of the spinner ring.', 'clariwell' ),
        	    'default'  => '',
        	    'transparent' => false,
        	    'output' => array( 'border-left-color' => '.page-loader-wrapper .page-loader', 'border-right-color' => '.page-loader-wrapper .page-loader', 'border-bottom-color' => '.page-loader-wrapper .page-loader' )
        	),
            array(
                'id'       => 'loader_bg',
                'type'     => 'color',
                'title'    => esc_html__( 'Page Loader Background', 'clariwell' ),
                'subtitle' => esc_html__( 'Background color of the page loader.', 'clariwell' ),
                'default'  => '',
                'transparent' => false,
                'output' => array( 'background-color' => '.page-loader-wrapper' )
            ),
            array(
                'id'       => 'loader_size',
                'type'     => 'dimensions',
                'title'    => esc_html__( 'Page Loader Size', 'clariwell' ),
                'subtitle' => esc_html__( 'Enter diameter of the page loader spinner. Make sure to enter same values height and width. Default: 50px.', 'clariwell' ),
                'default'  => '',
                'units'    => 'px',         
                'output' => array( '.page-loader-wrapper .page-loader'  )
            ),
        ),
    ));

/**
*
*Typography
*
**/
    // -> START Typography
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Typography', 'clariwell' ),
        'id'     => 'typography',
        'icon'   => 'el el-font',
        'fields' => array(
			array(
				'id'       => 'ins-opt-typography-body',
				'type'     => 'typography',
				'title'    => __( 'text', 'clariwell' ),
				'subtitle' => __( 'Specify the body font properties.', 'clariwell' ),
				'google'   => true,
				'font-backup' => true,
				'output'      => array('p', 'font-family'=>'body'),
				'units'       =>'px',
				'letter-spacing' => true, 
				'default'  => array(
					'color'       => '#6d8190',
					'font-size'   => '15px',
					'font-family' => 'Ubuntu',
					'font-weight'  => '400',
					'letter-spacing' => '',
					'google'      => true,
					'line-height' => '25px'
				),
			),
            array(
				'id'          => 'ins-opt-typography-title',
				'type'        => 'typography',
				'title'       => __( 'Title Font-Family', 'clariwell' ),
				'subtitle' => __( 'Specify the title font family', 'clariwell' ),
				'font-backup' => true,
				'all_styles'  => true,
				'output'      => array( '.title-font, .tag-cloud-link, .socials-sharing.socials .socials-item'),
				'units'       => 'px',
				'text-transform' => false,
				'letter-spacing' => false,
				'font-style' => false,
				'font-size' => false,
				'line-height' => false,
				'text-transform' => false, 
				'text-align' => false, 
				'color' => false, 
				'color' => false, 
				'subsets' => false,
				'font-weight' => false,
				'font-backup' => false, 
				'default'     => array(
					'font-family' => 'Saira'
				),
            ),
            array(
				'id'          => 'ins-opt-typography-h1',
				'type'        => 'typography',
				'title'       => __( 'h1', 'clariwell' ),
				'subtitle' => __( 'Specify the h1 tag title font properties.', 'clariwell' ),
				'font-backup' => true,
				'all_styles'  => true,
				'output'      => array( 'h1', '.inv-title-h1'),
				'units'       => 'px',
				'text-transform' => true,
				'letter-spacing' => true, 
				'default'     => array(
					'color'       => '#074575',
					'font-weight'  => '600',
					'font-family' => 'Saira',
					'google'      => true,
					'font-size'   => '40px',
					'letter-spacing' => '1px',
					'line-height' => '54px'	
				),
            ),
			array(
				'id'          => 'ins-opt-typography-h2',
				'type'        => 'typography',
				'title'       => __( 'h2', 'clariwell' ),
				'subtitle' => __( 'Specify the h2 tag title font properties.', 'clariwell' ),
				'font-backup' => true,
				'all_styles'  => true,
				'text-transform' => true,
				'output'      => array( 'h2', '.inv-title-h2' ),
				'units'       => 'px',
				'letter-spacing' => true, 
				'default'     => array(
					'color'       => '#074575',
					'font-weight'  => '600',
					'font-family' => 'Saira',
					'google'      => true,
					'font-size'   => '35px',
					'letter-spacing' => '1px',
					'line-height' => '48px'
				),
			),
		array(
				'id'          => 'ins-opt-typography-h3',
				'type'        => 'typography',
				'title'       => __( 'h3', 'clariwell' ),
				'subtitle' => __( 'Specify the h3 tag title font properties.', 'clariwell' ),
				'font-backup' => true,
				'all_styles'  => true,
				'text-transform' => true,
				'output'      => array( 'h3', '.inv-title-h3' ),
				'units'       => 'px',
				'letter-spacing' => true, 
				'default'     => array(
					'color'       => '#074575',
					'font-weight'  => '600',
					'font-family' => 'Saira',
					'google'      => true,
					'font-size'   => '30px',
					'letter-spacing' => '0.5px',
					'line-height' => '40px'
				),
			),
			array(
				'id'          => 'ins-opt-typography-h4',
				'type'        => 'typography',
				'title'       => __( 'h4', 'clariwell' ),
				'subtitle' => __( 'Specify the h4 tag font properties.', 'clariwell' ),
				'font-backup' => true,
				'all_styles'  => true,
				'text-transform' => true,
				'output'      => array( 'h4', '.inv-title-h4' ),
				'units'       => 'px',
				'letter-spacing' => true, 

				'default'     => array(
					'color'       => '#074575',
					'font-weight'  => '600',
					'font-family' => 'Saira',
					'google'      => true,
					'font-size'   => '25px',
					'letter-spacing' => '1px',
					'line-height' => '37px'
				),
			),
			array(
				'id'          => 'ins-opt-typography-h5',
				'type'        => 'typography',
				'title'       => __( 'h5', 'clariwell' ),
				'subtitle' => __( 'Specify the h5 tag font properties.', 'clariwell' ),
				'font-backup' => true,
				'text-transform' => true,
				'all_styles'  => true,
				'output'      => array( 'h5', '.inv-title-h5' ),
				'units'       => 'px',
				'letter-spacing' => true, 
				'default'     => array(
					'color'       => '#074575',
					'font-weight'  => '600',
					'font-family' => 'Saira',
					'google'      => true,
					'font-size'   => '20px',
					'letter-spacing' => '1px',
					'line-height' => '30px'
				),
			),
			array(
				'id'          => 'ins-opt-typography-h6',
				'type'        => 'typography',
				'title'       => __( 'h6', 'clariwell' ),
				'subtitle' => __( 'Specify the h6 Tag font properties.', 'clariwell' ),
				'font-backup' => true,
				'text-transform' => true,
				'all_styles'  => true,
				'output'      => array( 'h6', '.inv-title-h6' ),
				'units'       => 'px',
				'letter-spacing' => true, 
				'default'     => array(
					'color'       => '#074575',
					'font-weight'  => '600',
					'font-family' => 'Saira',
					'google'      => true,
					'font-size'   => '18px',
					'letter-spacing' => '0.5px',
					'line-height' => '30px'
				),
			),
        )
    ) );

/**
*
*Navigation
*
**/
    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Header', 'clariwell' ),
        'id'         => 'header',
        'icon'   => 'el el-lines',
    ));

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Header General', 'clariwell' ),
        'id'     => 'header_general',
        'subsection' => true,
        'desc'   => esc_html__( 'Header Settings.', 'clariwell' ),
        'fields' => array(

            array(
                'id'       => 'header_position',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Header Position', 'clariwell' ),
                'subtitle' => esc_html__( 'Choose position of your site header.', 'clariwell' ),
                'options'  => array(
                    'top' => array(
                        'title' => esc_html__( 'Top Header', 'clariwell' ),
                        'img' => $img_uri . 'img/top-right.png'
                    ),
                    'left' => array(
                        'title' => esc_html__( 'Left', 'clariwell' ),
                        'img' => $img_uri . 'img/left.png'
                    ),
                    'right' => array(
                        'title' => esc_html__( 'Right', 'clariwell' ),
                        'img' => $img_uri . 'img/right.png'
                    ),
                ),
                'default'  => 'top'
            ),
            // LEFT/RIGHT HEADER RELATED
           
        	array(
        	    'id'       => 'sideh_icons',
        	    'type'     => 'switch',
        	    'title'    => esc_html__( 'Social Icons', 'clariwell' ),
        	    'subtitle' => esc_html__( 'Enable Social Icons under the navigation section.', 'clariwell' ),
        	    'default'  => true,
        	    'required' => array(
        	    	'header_position',
        	    	'equals',
        	    	array( "left", "right" )
        	    ),
        	),
            
            	array(
            	    'id'       => 'sideh_icons_color',
            	    'type'     => 'color',
            	    'title'    => esc_html__( 'Social Icons Color', 'clariwell' ),
            	    'default'  => '',
            	    'transparent' => false,
        	        'required' => array(
        	    	'sideh_icons',
        	    	'equals',
        	    	array( true)
        	    ),
            	    'output' => array( 'color' => '.aside-nav.header-dark .insignia-main-social-icons ul li a, .aside-nav.header-light .insignia-main-social-icons ul li a' )
            	),

        	array(
        	    'id'       => 'sideh_copyright',
        	    'type'     => 'textarea',
	            'title'    => esc_html__( 'Copyright text', 'clariwell' ),
	            'subtitle' => esc_html__( 'The text content that is being displayed under the navigation section. Supports HTML.', 'clariwell' ),
	            'default'  => '© 2018 clariwell. All rights reserved',
        	    'required' => array(
        	    	'header_position',
        	    	'equals',
        	    	array( "left", "right" )
        	    ),
        	),

			array(
				'id'       => 'sideh_copyright_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Copyright text Color', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'required' => array(
					'header_position',
					'equals',
					array( "left", "right" )
			   ),
				'output' => array( 'color' => '.aside-copyright-text .aside-copyright-inner' )
			),

            // TOP HEADER RELATED
            array(
                'id'       => 'header_style',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Header Style', 'clariwell' ),
                'subtitle' => esc_html__( 'Choose a style of your Site Header.', 'clariwell' ),
                'options'  => array(
                    'classic' => array(
                        'title' => esc_html__( 'Classic', 'clariwell' ),
                        'img' => $img_uri . 'img/top-right.png'
                    ),
                    'top-logo-center' => array(
                        'title' => esc_html__( 'Top Center Logo', 'clariwell' ),
                        'img' => $img_uri . 'img/top-logo-top.png'
                    ),
                    'top-logo' => array(
                        'title' => esc_html__( 'Top Logo', 'clariwell' ),
                        'img' => $img_uri . 'img/top-logo.png'
                    ),
                    'split-menu' => array(
                        'title' => esc_html__( 'Split Menu', 'clariwell' ),
                        'img' => $img_uri . 'img/top-center.png'
                    ),
                    'overlay-fullscreen' => array(
                       'title' => esc_html__( 'Overlay Nav', 'clariwell' ),
                        'img' => $img_uri . 'img/overlay-fullscreen.png'
                    ),
                ),
                'required' => array(
                	'header_position',
                	'equals',
                	array( "", "top" )
                ),
                'default'  => 'classic'
            ),
            
            array(
                'id'       => 'header_overlay_social',
                'type'     => 'switch',
                'title'    => esc_html__( 'Fullscreen Menu Social Icons', 'clariwell' ),
                'subtitle' => esc_html__( 'Enable social icons in fullscreen Menu under the navigation section.', 'clariwell' ),
                'default'  => true,
                'required' => array(
                	array(
                		'header_position',
                		'equals',
                		array( "", "top" )
                	),
                	array(
                		'header_style',
                		'equals',
                		array( "overlay-fullscreen" )
                	)
                ),
            ),

            array(
                'id'       => 'header_top_social',
                'type'     => 'switch',
                'title'    => esc_html__( 'Header Social Icons', 'clariwell' ),
                'subtitle' => esc_html__( 'Enable social icons in your Header.', 'clariwell' ),
                'default'  => true,
                'required' => array(
                	array(
                		'header_position',
                		'equals',
                		array( "", "top" )
                	),
                	array(
                		'header_style',
                		'equals',
                		array( "top-logo" )
                	)
                ),
            ),
            
			array(
			    'id'       => 'header_top_text',
			    'type'     => 'textarea',
			    'title'    => esc_html__( 'Header Extra Content', 'clariwell' ),
			    'subtitle' => esc_html__( 'Add some additional text content to your header.', 'clariwell' ),
			    'default'  => 'E-Mail: <a href="mailto:hello@site.com">hello@site.com</a> Phone: 591 341 4344',
			    'required' => array(
			        array(
			        	'header_position',
			        	'equals',
			        	array( "", "top" )
			        ),
			        array(
			        	'header_style',
			        	'equals',
			        	array( "top-logo" )
			        )
			    ),
			),

			array(
				'id'       => 'header_split_nav',
				'type'     => 'select',
				'title'    => esc_html__( 'Secondary Nav Menu', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose a secondary menu for the split style header. You can create new menus in Appearance / Menus.', 'clariwell' ),
				'data' => 'menus',
				'default'  => 'same',
				'required' => array(
					array(
						'header_position',
						'equals',
						array( "", "top" )
					),
					array(
						'header_style',
						'equals',
						array( "split-menu" )
					)
				),
			),

            array(
                'id'       => 'header_skin',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Header Skin', 'clariwell' ),
                'subtitle' => esc_html__( 'Choose a skin for your Header.', 'clariwell' ),
                'options'  => array(
                    "light" => esc_html__( "Light", 'clariwell' ),
                    "dark" 	=> esc_html__( "Dark - white font color", 'clariwell' ),
                ),
                'default'  => 'light',
                'required' => array(
                	'header_position',
                	'equals',
                	array( "", "top" )
                ),
            ),

            array(
                'id'       => 'header_scroll_skin',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Header Scroll Skin', 'clariwell' ),
                'subtitle' => esc_html__( 'Choose a skin for your Header after scroll.', 'clariwell' ),
                'options'  => array(
                	"same" => "Same as initial skin",
                	"light" => "Light",
                	"dark" 	=> "Dark",
                ),
                'default'  => 'same',
                'required' => array(
                	'header_position',
                	'equals',
                	array( "", "top" )
                ),
            ),

			array(
				'id'       => 'header_color',
				'type'     => 'color_rgba',
				'output' => array('background-color' => '#main-navigation'),
				'title'    => __( 'Header background color', 'clariwell' ),
				'subtitle' => __( 'Background color of your site header.', 'clariwell' ),
				'default'   => array(
						 'color'     => '#fff',
						  'alpha'     => 1
					),
				'required' => array(
					'header_position',
					'equals',
					array( "", "top" )
				),
			),

			array(
				'id'       => 'nav_light_color',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Nav Items Color', 'clariwell' ),
				'subtitle' => esc_html__( 'Color of the navigation items.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'visited' => false,
				'active' => false,
				'output' => '.header-light #main-menu > ul > li > a,.header-light .main-menu > ul > li > a'
			),

            array(
                'id'       => 'header_search',
                'type'     => 'switch',
                'title'    => esc_html__( 'Header Search', 'clariwell' ),
                'subtitle' => esc_html__( 'Enable/Disable the Search field in Header.', 'clariwell' ),
                'default'  => true,
                'required' => array(
                	'header_position',
                	'equals',
                	array( "", "top" )
                ),
            ),

            array(
			   'id' => 'header-styling-start',
			   'type' => 'section',
			   'title' => esc_html__( 'Advanced Header Styling', 'clariwell' ),
			   'indent' => true,
			   'required' => array(
					'header_position',
					'equals',
					array( "", "top" )
			   ),
            ),

			array(
				'id'       => 'header_container',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Header Container', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose your header\'s container width. Fullwidth = stretched to browser window size.', 'clariwell' ),
				'options'  => array(
					'boxed' => esc_html__( 'Boxed', 'clariwell' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'clariwell' )
				),
				'default' => 'boxed',
				'required' => array(
					'header_position',
					'equals',
					array( "", "top" )
				),
				),

            array(
				'id' => 'header_height',
				'type' => 'slider',
				'title' => __('Header Initial Height', 'clariwell'),
				'subtitle' => __( 'Height of the header in initial state, in pixels.', 'clariwell' ),
				'required' => array(
					array(
					'header_position',
					'equals',
					array( "", "top" )
					),
					array(
					'header_style',
					'equals',
					array( "", "classic", "split-menu","overlay-fullscreen" )
					),
				),
				"default" => 80,
				"min" => 0,
				"step" => 1,
				"max" => 200,
				'display_value' => 'text'
            ),

            array(
				'id' => 'header_scroll_height',
				'type' => 'slider',
				'title' => __('Header Scroll Height', 'clariwell'),
				'subtitle' => __( 'Height of the header after scroll, in pixels.', 'clariwell' ),
				'required' => array(
					array(
					'header_position',
					'equals',
					array( "", "top" )
					),
					array(
					'header_style',
					'equals',
					array( "", "classic", "split-menu","overlay-fullscreen" )
					),
					array(
					'header_sticky',
					'equals',
					array( "sticky")
					)
				),
				"default" => 80,
				"min" => 0,
				"step" => 1,
				"max" => 200,
				'display_value' => 'text'
			),

            array(
				'id'       => 'nav_typo',
				'type'     => 'typography',
				'title'    => __( 'Menu titles Typography', 'clariwell' ),
				'subtitle' => __( 'Specify the Menu titles font properties.', 'clariwell' ),
				'output'      => array("#main-menu > ul > li > a,.main-menu > ul > li > a"),
				'units'       =>'px',
				'color' => false,
				'text-align' => false,
				'letter-spacing' => true, 
				'text-transform' => true,
				'default'  => array(
					'font-size'   => '14px',
					'font-family' => 'Saira',
					'font-weight'  => '500',
					'line-height' => '25px',
					'letter-spacing' => '1px',
					'text-transform' => 'none'
				),
			),

			array(
				'id'       => 'nav_light_color',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Light Skin Nav Items Color', 'clariwell' ),
				'subtitle' => esc_html__( 'Color of the navigation items in the light header skin.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'visited' => false,
				'active' => false,
				'output' => '.header-light #main-menu > ul > li > a,.header-light .main-menu > ul > li > a, .header-light .nav-tools .tools-btn-icon',
					'default'  => array(
            		'regular'  => '#074575',
            		'hover'    => '#07a7e3',
            	)
			),
			array(
				'id'       => 'nav_light_active',
				'type'     => 'color',
				'title'    => esc_html__( 'Light Skin Active Item', 'clariwell' ),
				'subtitle' => esc_html__( 'Color of active navigation item in the light header skin.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'output' => '.header-light #main-menu > ul > li.current-page-ancestor > a, .header-light #main-menu > ul > li.current-page-parent > a, .header-light #main-menu > ul > li.current-menu-ancestor > a, .header-light #main-menu > ul > li.current_page_ancestor > a, .header-light #main-menu > ul > li.current_page_item > a, .header-light #main-navigation #main-menu>ul>li.current>a, .header-light #main-navigation .main-menu>ul>li.current>a, .header-light #main-navigation .main-menu>ul>li>.mPS2id-highlight'
			),
			array(
				'id'       => 'nav_light_active_bg',
				'type'     => 'color',
				'title'    => esc_html__( 'Light Skin Active Item BG', 'clariwell' ),
				'subtitle' => esc_html__( 'Background color of active navigation item in the light header skin.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'output' => array( 'background-color' => '.header-light .main-menu > ul > li.current-page-ancestor > a, .header-light .main-menu > ul > li.current-page-parent > a, .header-light .main-menu > ul > li.current-menu-ancestor > a, .header-light .main-menu > ul > li.current_page_ancestor > a, .header-light .main-menu > ul > li.current_page_item > a' )
			),
			array(
				'id'       => 'nav_dark_color',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Dark Skin Nav Items Color', 'clariwell' ),
				'subtitle' => esc_html__( 'Color of the navigation items in the dark header skin.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'visited' => false,
				'active' => false,
				'output' => '.header-dark #main-menu > ul > li > a,.header-dark .main-menu > ul > li > a, .header-dark .nav-tools .tools-btn-icon'
			),
			array(
				'id'       => 'nav_dark_active',
				'type'     => 'color',
				'title'    => esc_html__( 'Dark Skin Active Item', 'clariwell' ),
				'subtitle' => esc_html__( 'Color of active navigation item in the dark header skin.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'output' => '.header-dark #main-menu > ul > li.current-page-ancestor > a, .header-dark #main-menu > ul > li.current-page-parent > a, .header-dark #main-menu > ul > li.current-menu-ancestor > a, .header-dark #main-menu > ul > li.current_page_ancestor > a, .header-dark #main-menu > ul > li.current_page_item > a,#wrapper.header-transparent .header-dark #main-navigation #main-menu>ul>li.current>a,#wrapper.header-transparent .header-dark #sticky-nav #main-menu>ul>li.current>a,.header-dark #main-navigation #main-menu>ul>li.current>a, .header-dark #main-navigation .main-menu>ul>li.current>a, .header-dark #main-navigation .main-menu>ul>li>.mPS2id-highlight'
			),
			array(
				'id'       => 'nav_dark_active_bg',
				'type'     => 'color_rgba',
				'title'    => esc_html__( 'Dark Skin Active Item BG', 'clariwell' ),
				'subtitle' => esc_html__( 'Background color of active navigation item in the dark header skin.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'output' => array( 'background-color' => '.header-dark #main-menu > ul > li.current-page-ancestor > a, .header-dark #main-menu > ul > li.current-page-parent > a, .header-dark #main-menu > ul > li.current-menu-ancestor > a, .header-dark #main-menu > ul > li.current_page_ancestor > a, .header-dark #main-menu > ul > li.current_page_item > a' )
			),

			array(
				'id'       => 'nav_spacing',
				'type'     => 'spacing',
				'title'    => esc_html__( 'Navigation Elements Spacing', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify the left and right padding for navigation elements.', 'clariwell' ),
				'default'  => '',
				'top' => false,
				'bottom' => false,
				'display-units' => false,
				'units' => array( 'px' ),
				'output' => array( '#main-menu > ul > li > a,.main-menu > ul > li > a' )
			),
		
			array(
				'id'       => 'header_logo_menu_separator_border',
				'type'     => 'border',
				'title'    => esc_html__( 'Logo and Menu separator Border', 'clariwell' ),
				'subtitle' => esc_html__( 'Logo and Menu separator Border styling', 'clariwell' ),
				'default'  => '',
				'left' => false,
				'right' => false,
				'bottom' => false,
				'top' => true,
				'all' => false,
				'output' => array( '.bottom-nav-wrapper' ),
				'class' => 'third-level',
				'required' => array(
					array(
						'header_position',
						'equals',
						array( "", "top" )
					),
				)
			),
		
			array(
				'id'       => 'header_separator',
				'type'     => 'button_set',
				'title'    => __('Header Separator', 'clariwell'),
				'subtitle'     => __('Choose a default header Separator i.e. Shadow below header', 'clariwell'),
				'options'  => array(
						'shadow' => esc_html__( 'Shadow', 'clariwell' ),
						'border' => esc_html__( 'Border', 'clariwell' ),
						'none' => esc_html__( 'None', 'clariwell' ),
					),
				'default' => 'shadow'
			),

			array(
				'id'       => 'header_separator_border',
				'type'     => 'border',
				'title'    => esc_html__( 'Header Separator Border', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify the bottom border of Header Separator.', 'clariwell' ),
				'default'  => '',
				'left' => false,
				'right' => false,
				'top' => false,
				'all' => false,
				'output' => array( '#header.header-separator-border, .header-separator-border .main-nav.sticky-nav, #wrapper.header-sticky-now #header.header-separator-border.header-scroll-light' ),
				'required' => array(
        	    	array(
        	    		'header_separator',
        	    		'equals',
        	    		array( "", "border" )
        	    	),
			)
			),

        	array(
        	    'id'       => 'header_separator_border',
        	    'type'     => 'border',
        	    'title'    => esc_html__( 'Header Border', 'clariwell' ),
        	    'subtitle' => esc_html__( 'Header Border Styling.', 'clariwell' ),
        	    'default'  => '',
        	    'left' => false,
        	    'right' => false,
        	    'bottom' => true,
        	    'top' => false,
        	    'all' => false,
        	    'output' => array( '#header.header-separator-border' , '.header-separator-border .main-nav.sticky-nav', '#wrapper.header-sticky-now #header.header-separator-border.header-scroll-light' ),
        	    'class' => 'third-level',
        	    'required' => array(
        	    	array(
        	    		'header_position',
        	    		'equals',
        	    		array( "", "top" )
        	    	),
        	    	array(
        	    		'header_separator',
        	    		'equals',
        	    		array( "border" )
        	    	),
        	    )
        	),


			array(
				'id'       => 'header_sidearea',
				'type'     => 'switch', 
				'title'    => __( 'Enable Side Area', 'clariwell' ),
				'default'  => 'false',
				'subtitle' => esc_html__( 'This option enables a side area to be opened from main menu navigation', 'clariwell' ),
			),

			array(
				'id'       => 'header_sticky',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Sticky Header', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose the header behaviour on scroll.', 'clariwell' ),
				'options'  => array(
				'sticky' => esc_html__( 'Sticky', 'clariwell' ),
				'not-sticky' => esc_html__( 'Not Sticky', 'clariwell' )
				),
				'default' => 'sticky',
				'required' => array(
					'header_position',
					'equals',
					array( "", "top" )
				),
			),

			array(
				'id'       => 'sticky-header-bg',
				'type'     => 'color_rgba',
				'output' => array('background-color' => '.header-scroll-full #main-navigation, .header-scroll-full #header .main-nav, #sticky-nav'),
				'title'    => esc_html__( 'Sticky menu background color', 'clariwell' ),
				'subtitle' => esc_html__( 'Pick a Sticky Menu background color.', 'clariwell' ),
				'required' => array('header_sticky','!=','not-sticky'),
				'default'   => array(
				'color'     => '#fff',
				'alpha'     => 1
				),
			),

			array(
				'id'       => 'sticky-header-color',
				'type'     => 'color',
				'output' => array('color' => '.header-scroll-full #main-menu > ul > li > a, .header-scroll-full .main-menu > ul > li > a, .header-scroll-full .nav-tools .tools-btn-icon'),
				'title'    => esc_html__( 'Sticky Menu titles color', 'clariwell' ),
				'subtitle' => esc_html__( 'Pick a Sticky Menu titles color.', 'clariwell' ),
				'required' => array('header_sticky','!=','not-sticky'),
				'transparent' => false,
				'default'  => '',
			),

			array(
				'id'     => 'header-styling-end',
				'type'   => 'section',
				'indent' => false,
			),

			array(
				'id' => 'sideh-styling-start',
				'type' => 'section',
				'title' => esc_html__( 'Side Header Styling', 'clariwell' ),
				'subtitle' => esc_html__( 'Take a full control over your side header looks.', 'clariwell' ),
				'indent' => true,
				'required' => array(
				'header_position',
				'equals',
				array( "left", "right" )
				),
			),

			array(
				'id'       => 'sideh_skin',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Side Header Skin', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose a skin for your Header. You can overwrite each aspect in options below.', 'clariwell' ),
				'options'  => array(
				"light" => esc_html__( "Light", 'clariwell' ),
				"dark" 	=> esc_html__( "Dark", 'clariwell' ),
				),
				'default'  => 'light',
			),

			array(
				'id'       => 'sideh_bg_color',
				'type'     => 'background',
				'title'    => esc_html__( 'Side Header Background', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify background settings of your Side Header.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'background-attachment' => false,
				'preview_height' => '100px',
				'output' => array( 'background-color' => '#wrapper #aside-nav' )
			),
			array(
				'id'       => 'sideh_typo',
				'type'     => 'typography',
				'select2' => array(
				'minimumResultsForSearch' => 20,
				'allowClear' => false
				),
				'title'    => esc_html__( 'Navigation Items', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify the Side Header navigation items typography.', 'clariwell' ),
				'google'   => false,
				"text-align" => false,
				"font-style" => true,
				"color" => false,
				"font-family" => true,
				"letter-spacing" => true,
				"text-transform" => true,
				"output" => array( ".aside-nav #main-aside-menu > ul > li > a" ),
			),
			array(
				'id'       => 'sideh_nav_active',
				'type'     => 'color',
				'title'    => esc_html__( 'Navigation Active Item', 'clariwell' ),
				'subtitle' => esc_html__( 'Color of the active navigation item.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'output' => array( 'color' => '#aside-nav #main-aside-menu > ul > li.current-page-parent > a,#aside-nav #main-aside-menu > ul > li.current-page-ancestor > a,#aside-nav #main-aside-menu > ul > li.current-menu-ancestor > a,#aside-nav #main-aside-menu > ul > li.current_page_ancestor > a,#aside-nav #main-aside-menu > ul > li.current_page_item > a,#aside-nav #main-aside-menu > ul > li.current_page_ancestor > a,#aside-nav #main-aside-menu > ul > li.current_page_parent > a,.aside-nav #main-aside-menu > ul > li > a.is-open,.aside-nav #main-aside-menu ul > li.current_page_item > a' )
			),
			array(
				'id'       => 'sideh_nav_links',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Navigation Links Color', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify colors of Side Header navigation links in initial and hover state.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'active' => false,
				'class' => 'third-level',
				'output' => '.aside-nav #main-aside-menu ul > li > a'
			),

			array(
				'id'       => 'sideh_nav_spacing',
				'type'     => 'spacing',
				'title'    => esc_html__( 'Navigation Elements Spacing', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify the side, top and bottom padding for navigation elements.', 'clariwell' ),
				'default'  => '',
				'display-units' => false,
				'units' => array( 'px' ),
				'output' => array( '#main-aside-menu > ul > li a' )
			),
			array(
				'id'       => 'sideh_separator_c',
				'type'     => 'color',
				'title'    => esc_html__( 'Item Separator Color', 'clariwell' ),
				'subtitle' => esc_html__( 'Color of the separator between menu items.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'output' => array( 'border-color' => '.aside-nav #main-aside-menu > ul > li > a, .aside-copyright-inner' )
			),
			array(
				'id'       => 'sideh_dropdown_typo',
				'type'     => 'typography',
				'select2' => array(
				'minimumResultsForSearch' => 20,
				'allowClear' => false
				),
				'title'    => esc_html__( 'Dropdown Menu Typography', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify the Side Header dropdown menu navigation elements typography.', 'clariwell' ),
				'google'   => false,
				"text-align" => false,
				"font-style" => true,
				"color" => false,
				"font-family" => true,
				"letter-spacing" => true,
				"text-transform" => true,
				"output" => array( ".aside-nav #main-aside-menu .sub-menu > li > a" ),
			),
			array(
				'id'       => 'sideh_dropdown_links',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Dropdown Menu Links Color', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify colors of dropdown menu links in initial and hover state.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'active' => false,
				'class' => 'third-level',
				'output' => '#aside-nav nav ul.sub-menu > li > a'
			),
			array(
				'id'     => 'sideh-styling-end',
				'type'   => 'section',
				'indent' => false,
			),
			) 
		));


/*top bar*/
    // Top Bar
        
	Redux::setSection( $opt_name, array(
		'title'  => esc_html__( 'Top Bar', 'clariwell' ),
		'id'     => 'topbar',
		'subsection' => true,
		'desc'   => esc_html__( 'Top Bar Settings.', 'clariwell' ),
		'fields' => array(
			array(
				'id'       => 'topbar',
				'type'     => 'switch',
				'title'    => esc_html__( 'Top Bar', 'clariwell' ),
				'subtitle' => esc_html__( 'Enable/Disable the Top Bar section. Please note that Top Bar is available only for specific Header Styles.', 'clariwell' ),
				'default'  => false,
			),
			array(
				'id'       => 'topbar_left',
				'type'     => 'select',
				'select2' => array(
					'minimumResultsForSearch' => 20,
					'allowClear' => false
				),
				'title'    => esc_html__( 'Left side content type', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose a content type for the left side of the Top Bar section.', 'clariwell' ),
				'options'  => array(
					"social" => esc_html__( "Social Icons", 'clariwell' ),
					"menu" => esc_html__( "Menu", 'clariwell' ),
					"text" => esc_html__( "Text", 'clariwell' ),
					"textsocial" => esc_html__( "Text + Social Icons", 'clariwell' )
				),
				'default'  => 'text'
			),
			array(
				'id'       => 'topbar_text_left',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Left Top Bar Text', 'clariwell' ),
				'subtitle' => esc_html__( 'The text content that is being selectable as one of the "content types" for the Top Bar. Supports HTML.', 'clariwell' ),
				'default'  => 'E-Mail: admin@clariwell.com Phone: +91 632 521 7124',
				'required' => array(
				array(
					'topbar_left',
					'equals',
					array( "text", "textsocial" )
				),
				) 
			),
			array(
				'id'       => 'topbar_right',
				'type'     => 'select',
				'select2' => array(
					'minimumResultsForSearch' => 20,
					'allowClear' => false
				),
				'title'    => esc_html__( 'Right side content type', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose a content type for the right side of the Top Bar section.', 'clariwell' ),
				'options'  => array(
					"social" => esc_html__( "Social Icons", 'clariwell' ),
					"menu" => esc_html__( "Menu", 'clariwell' ),
					"text" => esc_html__( "Text", 'clariwell' ),
					"textsocial" => esc_html__( "Text + Social Icons", 'clariwell' )
				),
				'default'  => 'social'
			),
			array(
				'id'       => 'topbar_text_right',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Right Top Bar Text', 'clariwell' ),
				'subtitle' => esc_html__( 'The text content that is being selectable as one of the "content types" for the Top Bar. Supports HTML.', 'clariwell' ),
				'default'  => 'E-Mail: hello@waxom.com Phone: 591 341 344',
				'required' => array(
					array(
					'topbar_right',
					'equals',
					array( "text", "textsocial" )
					),
				) 
			),

			array(
				'id' => 'topbar-styling-start',
				'type' => 'section',
				'title' => esc_html__( 'Top Bar Styling', 'clariwell' ),
				'indent' => true,
				'required' => array(
					array(
					'header_position',
					'equals',
					array( "", "top" )
					),
				)                           
			),
			array(
				'id'       => 'topbar_skin',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Top Bar Skin', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose the Top Bar skin. You can later overwrite default styling.', 'clariwell' ),
				'options'  => array(
					"default" => esc_html__( "Default", 'clariwell' ),
					"light" => esc_html__( "Light", 'clariwell' ),
					"dark" => esc_html__( "Dark", 'clariwell' )
				),
				'default'  => 'default'
			),
			array(
				'id'       => 'topbar_bg',
				'type'     => 'color',
				'title'    => esc_html__( 'Top Bar Background Color', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify the background color of the Top Bar.', 'clariwell' ),
				'default'  => '',
				'transparent' => true,
				'output' => array( 'background-color' => '#topbar' )
			),
			array(
				'id'       => 'topbar_border',
				'type'     => 'color',
				'title'    => esc_html__( 'Top Bar Bottom Border', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify the color of the Top Bar bottom border.', 'clariwell' ),
				'default'  => '',
				'output' => array( 'border-color' => '#topbar' )
			),
			array(
				'id'       => 'topbar_typo',
				'type'     => 'typography',
				'select2' => array(
					'minimumResultsForSearch' => 20,
					'allowClear' => false
				),
				'title'    => esc_html__( 'Top Bar Text', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify font options of the Top Bar texts.', 'clariwell' ),
				'google'   => false,
				"text-align" => false,
				"line-height" => false,
				"font-style" => true,
				"color" => true,
				"font-family" => false,
				"letter-spacing" => true,
				"text-transform" => true,
				"output" => array( "#topbar,#topbar p, #topbar .topbar-menu > div > ul > li" )
			),
			array(
				'id'       => 'topbar_links',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Top Bar Links', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify colors of the Top Bar links.', 'clariwell' ),
				'active' => false,
				'visited' => false,
				"output" => array( '.topbar a' )
			),
			array(
				'id'       => 'topbar_separator',
				'type'     => 'color',
				'title'    => esc_html__( 'Top Bar Elements Separator', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify the color of the separator between Top Bar elements.', 'clariwell' ),
				'default'  => '',
				'output' => array( 'border-color' => '#topbar .topbar-social a,#topbar .topbar-menu > div > ul > li,#topbar .topbar-menu > div > ul > li:last-child,#topbar .topbar-social a:last-child' )
			),

			array(
				'id'     => 'topbar-styling-end',
				'type'   => 'section',
				'indent' => false,
			),
                
        	)
        ) );

/*Drop Down Menu*/
Redux::setSection( $opt_name, array(
		'title'  => esc_html__( 'Dropdown Menu', 'clariwell' ),
		'id'     => 'dropdown-menus',
		'subsection' => true,
		'desc'   => esc_html__( 'Dropdown menu styling and settings.', 'clariwell' ),
		'fields' => array(
			array(
				'id'       => 'dropdown_skin',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Dropdown Menu Skin', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose a skin for the dropdown menu. You may overwrite particular or all design aspects below.', 'clariwell' ),
				'options'  => array(
					"dark" 	=> esc_html__( "Dark", 'clariwell' ),
					"white" => esc_html__( "White", 'clariwell' ),
				),
				'default'  => 'white'
			),

			array(
				'id'       => 'ins-opt-submenu-bg',
				'type'     => 'color_rgba',
				'output' => array(
				'background-color' => '#header .main-nav .sub-menu'),
				'title'    => esc_html__( 'Dropdown Menu background color', 'clariwell' ),
				'subtitle' => esc_html__( 'Pick a Menu dropdown background color.', 'clariwell' ),
				'default'   => array(
					'color'     => '#fff',
					'alpha'     => 1
				),
			),

			array(
				'id'       => 'ins-opt-typography-submenu',
				'type'     => 'typography',
				'title'    => esc_html__( 'Dropdown Menu Typography', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify the dropdown menu elements typography.', 'clariwell' ),
				'google'   => true,
				'output'      => array('.main-menu ul.sub-menu li a, #main-menu ul.sub-menu li a, .sub-menu-full-width ul.menu-depth-2.sub-sub-menu li a'),
				'units'       =>'px',
				'letter-spacing' => true, 
				'text-transform' => true,
				'color'       => false,
				'text-align'       => false,
				'default'  => array(
					'font-size'   => '13px',
					'font-family' => 'Saira',
					'font-weight'  => '500',
					'text-align'  => 'left',
					'google'      => true,
					
					'line-height' => '20px',
					'letter-spacing' => '1px',
					'text-transform' => 'none'
				),
			),
			array(
				'id'       => 'dropdown_links',
				'type'     => 'link_color',
				'title'    => esc_html__( 'Dropdown Menu Links color', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify colors of dropdown menu links.', 'clariwell' ),
				'active' => false,
				'visited' => false,
				"output" => array( '#header #main-menu .sub-menu a' ),
					'default'  => array(
            		'regular'  => '#282828',
            		'hover'    => '#828282',
            	)
			),
                 
			array(
				'id'       => 'dropdown_links_bg',
				'type'     => 'color',
				'title'    => esc_html__( 'Dropdown Menu Link Hover BG', 'clariwell' ),
				'subtitle' => esc_html__( 'Background color of the dropdown menu item on hover.', 'clariwell' ),
				'default'  => '',
				'transparent' => false,
				'output' => array( 'background-color' => '#header #main-menu .sub-menu a:hover' )
			),

		)
) );

		Redux::setSection( $opt_name, array(
		'title'  => esc_html__( 'Header Button', 'clariwell' ),
		'id'     => 'header-button',
		'subsection' => true,
		'fields' => array(
			array(
				'id' => 'ins-header-button',
				'type' => 'switch',
				'title' => esc_html__('Show button in header', 'clariwell'),
				'default' => false
			),
			array(
				'id' => 'ins-header-button-text',
				'type' => 'text',
				'title' => esc_html__('Button text', 'clariwell'),
				'required' => array('ins-header-button','equals', true),
				'default' => 'Get a quote'
			),
			array(
				'id' => 'ins-header-button-typo',
				'type' => 'typography',
				'title' => esc_html__('Button font settings', 'clariwell'),
				'output'   => ('.header-menu-button .menu-item.ins_header_button'),
				'google' => true,
				'font-family' => true,
				'font-style' => true,
				'font-size' => true,
				'letter-spacing' => true,
				'line-height' => false,
				'color' => false,
				'text-transform' => true,
				'text-align' => false,
				'all_styles' => false,
				'units' => 'px',
				'required' => array('ins-header-button','equals', true),
			),
			array(
				'id' => 'ins-header-button-style',
				'type' => 'select',
				'title' => esc_html__('Button style', 'clariwell'),
				'required' => array('ins-header-button','equals', true),
				'options'  => array(
					'solid-button' => 'Solid',
					'outline-button' => 'Outline',
				),
				'default' => 'outline-button'
			),
			array(
				'id' => 'ins-header-button-color',
				'type' => 'select',
				'title' => esc_html__('Button color scheme', 'clariwell'),
				'required' => array('ins-header-button','equals', true),
				'options'  => array(
					'primary-color' => 'Primary color',
					'secondary-color' => 'Secondary color',
				),
				'default' => 'primary-color'
			),
			array(
				'id' => 'ins-header-button-hover-style',
				'type' => 'select',
				'title' => esc_html__('Button hover state', 'clariwell'),
				'required' => array('ins-header-button','equals', true),
				'options'  => array(
					'hover_solid_primary' => 'Solid - Primary color',
					'hover_solid_secondary' => 'Solid - Secondary color',
					'hover_outline_primary' => 'Outline - Primary color',
					'hover_outline_secondary' => 'Outline - Secondary color',
				),
				'default' => 'hover_solid_primary'
			),
			array(
				'id' => 'ins-header-button-action',
				'type' => 'select',
				'title' => esc_html__('Button action', 'clariwell'),
				'required' => array('ins-header-button','equals', true),
				'options'  => array(
					'1' => 'Open modal window with contact form',
					'2' => 'Scroll to section',
					'3' => 'Open a new page'
				),
				'default' => '3'
			),
			array(
				'id' => 'ins-modal-title',
				'type' => 'text',
				'title' => esc_html__('Modal title', 'clariwell'),
				'required' => array('ins-header-button-action','equals','1'),
				'default' => 'Lets get in touch'
			),
			array(
				'id' => 'ins-modal-subtitle',
				'type' => 'editor',
				'title' => esc_html__('Modal subtitle', 'clariwell'),
				'required' => array('ins-header-button-action','equals','1'),
				'default' => '',
					'args'   => array(
				  'teeny'  => true,
				  'textarea_rows'    => 10,
				  'media_buttons'	   => false,
					  ),
			),
			 array(
                'id'       => 'ins-model-contact-info',
                'type'     => 'switch',
                'on'     => 'Enable', 
                'off'     => 'Disable',
                'title'    => esc_html__( 'Contact info', 'clariwell' ),
                'subtitle' => esc_html__( 'Display conatct info on the left side of Model', 'clariwell' ),
                'default'  => true,
                'required' => array('ins-header-button-action','equals','1'),
            ),
			array(
				'id' => 'ins-modal-bg-image',
				'type' => 'media',
				'readonly' => false,
				'url' => true,
				'title' => esc_html__('Modal background image', 'clariwell'),
				'subtitle' => esc_html__('Upload modal background image.', 'clariwell'),
				'required' => array('ins-header-button-action','equals','1'),
				'default' => '',
			),
			array(
				'id' => 'ins-modal-form-select',
				'type' => 'select',
				'title' => esc_html__('Contact form plugin', 'clariwell'),
				'required' => array('ins-header-button-action','equals','1'),
				'options'  => array(
					'1' => 'Contact Form 7',
					'2' => 'Ninja Forms',
					'3' => 'Gravity Forms',
					'4' => 'WP Forms',
				),
				'default' => '1'
			),
			array(
				'id' => 'ins-modal-contactf7-formid',
				'type' => 'select',
				'data' => 'posts',
				'args' => array( 'post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1, ),
				'title' => esc_html__('Contact Form 7 Title', 'clariwell'),
				'required' => array('ins-modal-form-select','equals','1'),
				'default' => ''
			),
			array(
				'id' => 'ins-modal-ninja-formid',
				'type' => 'text',
				'title' => esc_html__('Ninja Form ID', 'clariwell'),
				'required' => array('ins-modal-form-select','equals','2'),
				'default' => ''
			),
			array(
				'id' => 'ins-modal-gravity-formid',
				'type' => 'text',
				'title' => esc_html__('Gravity Form ID', 'clariwell'),
				'required' => array('ins-modal-form-select','equals','3'),
				'default' => ''
			),
			array(
				'id' => 'ins-modal-wp-formid',
				'type' => 'text',
				'title' => esc_html__('WP Form ID', 'clariwell'),
				'required' => array('ins-modal-form-select','equals','4'),
				'default' => ''
			),
			array(
				'id' => 'ins-scroll-id',
				'type' => 'text',
				'title' => esc_html__('Scroll to section ID', 'clariwell'),
				'required' => array('ins-header-button-action','equals','2'),
				'default' => '#about-us'
			),
			array(
				'id' => 'ins-button-new-page',
				'type' => 'text',
				'title' => esc_html__('Button link', 'clariwell'),
				'required' => array('ins-header-button-action','equals','3'),
				'default' => '#'
			),
			array(
				'id' => 'ins-button-target',
				'type' => 'select',
				'title' => esc_html__('Link target', 'clariwell'),
				'required' => array('ins-header-button-action','equals','3'),
				'options'  => array(
					'new-page' => 'Open in a new page',
					'same-page' => 'Open in same page'
				),
				'default' => 'new-page'
			),
		)
	) );

		Redux::setSection( $opt_name, array(
		'title'  => esc_html__( 'Mobile Header', 'clariwell' ),
		'id'     => 'mobile-menu',
		'subsection' => true,
		'desc'   => esc_html__( 'Mobile header settings.', 'clariwell' ),
		'fields' => array(
			array(
				'id'       => 'mobileh_sticky',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Mobile Header Sticky', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose Mobile header behaviour on scroll.', 'clariwell' ),
				'options'  => array(
					"yes" => esc_html__( "Yes", 'clariwell' ),
					"no" => esc_html__( "No", 'clariwell' ),
				),
					'default'  => 'no'
			),

			array(
				'id'       => 'mobile_dropdown',
				'type'     => 'select',
				'title'    => esc_html__( 'Dropdown menu action', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose if mobile dropdown menu should be accessible only with the arrow or by clicking the parent item (default).', 'clariwell' ),
				'options'  => array(
				"parent" => esc_html__( "Open with parent menu", 'clariwell' ),
				"arrow" => esc_html__( "Open with arrow", 'clariwell' ),
				),
					'default'  => 'arrow'
			),
		)
	) );

    /* Social Media /--------------------------------------------------------- */
    Redux::setSection( $opt_name, array(
        'title'     => __('Social Media', 'clariwell'),
        'icon'      => 'el-icon-twitter',
        'fields'    => array(

			array(
				'id'        => 'social-media',
				'type'      => 'info',
				'desc'      => esc_html__('Social Media Icons (Remember to include the "http://" in all URLs)', 'clariwell')
			),

			array(
				'id'       => 'social_dribbble',
				'type'     => 'text',
				'title'    => esc_html__('Dribbble', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Dribbble Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_facebook',
				'type'     => 'text',
				'title'    => esc_html__('Facebook', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Facebook Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_foursquare',
				'type'     => 'text',
				'title'    => esc_html__('Foursquare', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Foursquare Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_flickr',
				'type'     => 'text',
				'title'    => esc_html__('Flickr', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Flickr Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_github',
				'type'     => 'text',
				'title'    => esc_html__('Github', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Github Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_googleplus',
				'type'     => 'text',
				'title'    => esc_html__('Google+', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Google+ Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_instagram',
				'type'     => 'text',
				'title'    => esc_html__('Instagram', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Instagram Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_linkedin',
				'type'     => 'text',
				'title'    => esc_html__('LinkedIn', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your LinkedIn Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_pinterest',
				'type'     => 'text',
				'title'    => esc_html__('Pinterest', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Pinterest Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_renren',
				'type'     => 'text',
				'title'    => esc_html__('Renren', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Renren Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_rss',
				'type'     => 'text',
				'title'    => esc_html__('RSS', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your RSS Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_skype',
				'type'     => 'text',
				'title'    => esc_html__('Skype', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Skype Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_soundcloud',
				'type'     => 'text',
				'title'    => esc_html__('Soundcloud', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Soundcloud Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_stackoverflow',
				'type'     => 'text',
				'title'    => esc_html__('Stack Overflow', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Stack Overflow Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_twitter',
				'type'     => 'text',
				'title'    => esc_html__('Twitter', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Twitter Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_tumblr',
				'type'     => 'text',
				'title'    => esc_html__('Tumblr', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Tumblr Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_vimeo',
				'type'     => 'text',
				'title'    => esc_html__('Vimeo', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Vimeo Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_vk',
				'type'     => 'text',
				'title'    => esc_html__('VK', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your VK Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_weibo',
				'type'     => 'text',
				'title'    => esc_html__('Weibo', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Weibo Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_xing',
				'type'     => 'text',
				'title'    => esc_html__('Xing', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your Xing Account', 'clariwell'),
				'default'  => '',
			),

			array(
				'id'       => 'social_youtube',
				'type'     => 'text',
				'title'    => esc_html__('YouTube', 'clariwell'),
				'subtitle' => esc_html__('Enter URL to your YouTube Account', 'clariwell'),
				'default'  => '',
			),

        ),
    ) );

/**
*
* Banner options 
*
**/

	Redux::setSection( $opt_name, array(
	'title'      => esc_html__( 'Page Title Options', 'clariwell' ),
	'id'         => 'homepage-header',
	'icon'       => 'el el-picture',
	'fields'     => array(
			array(
				'id'       => 'header_title',
				'type'     => 'switch',
				'title'    => esc_html__( 'Page Title', 'clariwell' ),
				'subtitle' => esc_html__( 'Enable/Disable the Page Title area globally.', 'clariwell' ),
				'default'  => true,
			),
			array(
				'id'       => 'ins_page_title_align',
				'type'     => 'button_set',
				'title'    => esc_html__('Text Alignment', 'clariwell'),  
				'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
				),
				'default' => 'center',
				'subtitle' => esc_html__( 'Default page title text alignment.', 'clariwell' ),
			),

			array(
				'id'       => 'ins_blog_title_align',
				'type'     => 'button_set',
				'title'    => esc_html__('Text Alignment for Blog Posts', 'clariwell'),  
				'options'  => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right'
				),
				'default' => 'left',
				'subtitle' => esc_html__( 'Default page title alignment for single blog posts.', 'clariwell' ),
			),

			array(
				'id'       => 'pagetitle_bg_image',
				'type'     => 'media',
				'url'      => true,
				'title'    => esc_html__( 'Background image', 'clariwell' ),
				'subtitle' => esc_html__( 'Select image pattern for page header background', 'clariwell' ),
				'compiler' => 'true'
			),

			array(
				'id'       => 'pagetitle_bg_options',
				'type'     => 'background',
				'url'      => false,
				'title'    => esc_html__( 'Background Image Settings', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify parameters of the background image.', 'clariwell' ),
				'compiler' => 'true',
				'transparent' => false,
				'background-image' => false,
				'background-color' => false,
				'preview' => false,
				'output' => '.ins-page-title-wrapper .ins-page-title-bg'
			),

            array(
                'id'       => 'pagetitle_bg_color',
                'type'     => 'color',
                'output'   =>array('background-color' => '#ins-page-title'),
                'title'    => esc_html__( 'Background color', 'clariwell' ),
                'subtitle' => esc_html__( 'Select color for header background', 'clariwell' ),
                'default'  => '#f8f8f8',
            ),
			array(
				'id'       => 'pagetitle_bg_image_overlay',
				'type'     => 'select',
				'select2' => array(
					'minimumResultsForSearch' => 20,
					'allowClear' => false
				),
				'title'    => esc_html__( 'Background Image Overlay', 'clariwell' ),
				'subtitle' => esc_html__( 'Use it to make your background image darker or lighter without modifying the image itself.', 'clariwell' ),
				'options'  => array(
					"none" => "None",
					"dark30" => "Dark 30%",
					"dark50" => "Dark 50%",
					"dark70" => "Dark 70%",
					"dark80" => "Dark 80%",
					"dark90" => "Dark 90%",
					"light30" => "Light 30%",
					"light50" => "Light 50%",
					"light70" => "Light 70%",
					"light80" => "Light 80%",
					"light90" => "Light 90%"
				),
				'default'  => 'none',
				'required' => array( 'pagetitle_bg_image', 'not', '' )
			),
			array(
				'id'       => 'breadcrumbs',
				'type'     => 'select',
				'title'    => esc_html__( 'Enable breadcrumbs', 'clariwell' ),
				'options'  => array(
					'yes'  => 'Enable',
					'no'  => 'Disable'
				),
				'default'  => 'yes',
			),
			array(
				'id'       => 'breadcrumbs_blog',
				'type'     => 'select',
				'title'    => esc_html__( 'Enable breadcrumbs for Blog posts', 'clariwell' ),
				'options'  => array(
					'yes'  => 'Enable',
					'no'  => 'Disable'
				),
				'default'  => 'no',
			),
			array(
				'id'       => 'pagetitle_height',
				'type'     => 'text',
				'title'    => esc_html__( 'Page Title Height', 'clariwell' ),
				'subtitle' => esc_html__( 'Enter height of page header. Enter Number without unit for example "300".', 'clariwell' ),
				'default'  => '250'
			),
			array(
				'id'       => 'ins-opt-header-typography',
				'type'     => 'typography',
				'title'    => esc_html__( 'Page title typography', 'clariwell' ),
				'subtitle' => esc_html__( 'Typography settings of the main heading in Page Titles with a background.', 'clariwell' ),
				'google'   => true,
				'font-backup' => true,
				'output'      => array('.ins-page-title-txt>h1'),
				'letter-spacing' => true, 
				'text-transform' => true,
				'text-align' => false,
				'color' => false,
				'units'       =>'px',
				'default'  => array(
					'color'       => '#074575',
					'font-size'   => '35px',
					'font-family' => 'Saira',
					'font-weight'  => '600',
					'google'      => true,
					'line-height' => '45px',
					'letter-spacing' => '1px'
				),
			),
			array(
				'id'       => 'pagetitle_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Font color of the main heading in Page Titles with a background.', 'clariwell' ),
				'subtitle' => esc_html__( 'Select color for header background', 'clariwell' ),
				'output'      => array('color' => '.ins-page-title-txt>h1, .ins-breadcrumbs a, .ins-breadcrumbs, .ins-breadcrumbs i, .ins-breadcrumbs .current, .ins-page-title-inner .ins-page-title-txt .post-meta-wrap .post-author .author-wrap, .ins-page-title-inner .ins-page-title-txt .post-meta-wrap .date-wrap, .ins-pagetitle-scroll-link, .ins-pagetitle-scroll-link:hover'),
				'default'  => '#074575',
			),
			array(
				'id'       => 'page-subtitle-typography',
				'type'     => 'typography',
				'title'    => esc_html__( 'Page Subtitle Typography', 'clariwell' ),
				'subtitle' => esc_html__('Typography settings of the sub heading in Page Titles with a background.', 'clariwell' ),
				'google'   => true,
				'font-backup' => true,
				'output'      => array('.ins-page-subtitle'),
				'letter-spacing' => true, 
				'text-transform' => true,
				'text-align' => false,
				'units'       =>'px',
				'default'  => array(
					'color'       => '#074575',
					'font-size'   => '16px',
					'font-family' => 'Saira',
					'font-weight'  => '400',
					'google'      => true,
					'line-height' => '30px',
					'letter-spacing' => '1px'
				),
			),
			
			 array(
                'id'       => 'ins-opt-scroll-button',
                'type'     => 'switch', 
                'on'     => 'Enable', 
                'off'     => 'Disable', 
                'title'    => __( 'Scroll to Content Button', 'clariwell' ),
                'default'  => true,
            ),
   ) 
   ));

/**
*
*Blog layout options
*
**/

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Blog Options', 'clariwell' ),
        'id'         => 'blog',
        'icon'       => 'el el-list-alt', 
        'fields'     => array(
            array(
                'id'       => 'blog_page_layout',
                'type'     => 'image_select',
                'title'    => esc_html__( 'Blog Page Layout', 'clariwell' ),
                'subtitle' => esc_html__( 'Choose a page layout for your blog index page (page set as Posts Page).', 'clariwell' ),
                'options'  => array(
                    'no_sidebar' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    'sidebar_left' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    'sidebar_right' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                ),
                'default'  => 'sidebar_right'
            ),


)
));
    // Blog -> Single Post
    
Redux::setSection( $opt_name, array(
		'title'  => esc_html__( 'Single Posts', 'clariwell' ),
		'id'     => 'subsection_blog_single',
		'subsection' => true,
		'desc'   => esc_html__( 'Single blog post options.', 'clariwell' ),
		'fields' => array(

			array(
				'id'       => 'blog_single_media',
				'type'     => 'switch',
				'title'    => esc_html__( 'Post Media', 'clariwell' ),
				'subtitle' => esc_html__( 'Display post media on single post page according to post format i.e. video player for "video" format etc.', 'clariwell' ),
				'default' => true
			),

			array(
				'id'       => 'blog_single_category',
				'type'     => 'switch',
				'title'    => esc_html__( 'Blog category Section', 'clariwell' ),
				'subtitle' => esc_html__( 'Display the blog category section on top of the post title.', 'clariwell' ),
				'default' => true
			),

			array(
				'id'       => 'blog_single_meta',
				'type'     => 'switch',
				'title'    => esc_html__( 'Blog Meta Section', 'clariwell' ),
				'subtitle' => esc_html__( 'Display the blog post meta section under the post title.', 'clariwell' ),
				'default' => true
			),

			array(
				'id'       => 'blog_trackback',
				'type'     => 'switch',
				'title'    => esc_html__( 'Post Trackbacks', 'clariwell' ),
				'subtitle' => esc_html__( 'Display the post trackback URL address with CSS.', 'clariwell' ),
				'default'  => false,
			),

			array(
				'id'       => 'blog_post_tags',
				'type'     => 'switch',
				'title'    => esc_html__( 'Post Tags', 'clariwell' ),
				'subtitle' => esc_html__( 'Display post tags under the post content.', 'clariwell' ),
				'default'  => true,
			),

			array(
				'id'       => 'blog_post_author',
				'type'     => 'switch',
				'title'    => esc_html__( 'Post Author', 'clariwell' ),
				'subtitle' => esc_html__( 'Display Author Info on Blog Posts. You can add an Author text in your User Settings.', 'clariwell' ),
				'default'  => true,
			),

			array(
				'id'       => 'blog_post_social_sharing',
				'type'     => 'switch',
				'title'    => esc_html__( 'Social Sharing Buttons', 'clariwell' ),
				'subtitle' => esc_html__( 'Display the post social sharing Buttons under the post content.', 'clariwell' ),
				'default'  => true,
			),

			array(
				'id'       => 'blog_post_nav',
				'type'     => 'switch',
				'title'    => esc_html__( 'Blog Post Navigation', 'clariwell' ),
				'subtitle' => esc_html__( 'Display the navigation to next/prev posts on a single blog post.', 'clariwell' ),
				'default'  => true,
			),

			array(
				'id'       => 'blog_post_layout',
				'type'     => 'image_select',
				'title'    => esc_html__( 'Single Blog Post layout', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose a default page layout for your single blog posts.', 'clariwell' ),
				'options'  => array(
					'full_width' => array(
						'alt' => '1 Column',
						'img' => ReduxFramework::$_url . 'assets/img/1col.png'
					),
					'left_sidebar' => array(
						'alt' => '2 Column Left',
						'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
					),
					'right_sidebar' => array(
						'alt' => '2 Column Right',
						'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
					),
				),
				'default'  => 'left_sidebar'
			),
			
		 ),
		   
	));
/**
*
*end Blog Layout
*
**/ 

/**
*
*Woo-commerce options 
*
**/

    Redux::setSection( $opt_name, array(
        'title'      => __( 'WooCommerce', 'clariwell' ),
        'id'         => 'woo-options',
        'icon'       => 'el el-shopping-cart',
        'fields'     => array(
			array(
				'id'       => 'header_woocommerce',
				'type'     => 'switch',
				'title'    => esc_html__( 'Shopping Cart Icon', 'clariwell' ),
				'subtitle' => esc_html__( 'Enable/Disable the WooCommerce icon in the Header section.', 'clariwell' ),
				'default'  => true
			),

            array(
                'id'       => 'shop_cols',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Shop Page Columns', 'clariwell' ),
                'subtitle' => esc_html__( 'Select number of columns for your shop products page.', 'clariwell' ),
                'options'  => array(
                    "4" => "4",
                    "3" => "3",
                    "2" => "2",
                ),
                'default'  => '4',
            ),
   ) 
   ));


/**
*
*Portfolio options 
*
**/

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Portfolio', 'clariwell' ),
        'id'         => 'portfolio',
        'icon'   => 'el el-briefcase',
    ));

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Portfolio General', 'clariwell' ),
        'id'     => 'portfolio_general',
        'desc'   => esc_html__( 'Portfolio archive page Settings.', 'clariwell' ),
        'subsection' => true,
        'fields' => array(

            	// Posts Order
            	
			array(
				'id'       => 'portfolio_layout',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Portfolio Layout', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose portfolio layout', 'clariwell' ),
				'options'  => array(
				"portfolio-grid-inner-holder" => esc_html__( "Grid", 'clariwell' ),
				"portfolio-masonry-inner-holder" => esc_html__( "Masonry", 'clariwell' ),
				),
				'default' => 'disable',
			),

			array(
				'id'       => 'portfolio_orderby',
				'type'     => 'select',
				'title'    => esc_html__( 'Order posts by', 'clariwell' ),
				'subtitle' => esc_html__( 'Sort/order your posts by a certain value.', 'clariwell' ),
				'options'  => array(
				"date" => esc_html__( "Date", 'clariwell' ),
				"none" => esc_html__( "None - no order", 'clariwell' ),
				"ID" => esc_html__( "Post ID", 'clariwell' ),
				"author" => esc_html__( "Author", 'clariwell' ),
				"title" => esc_html__( "Title", 'clariwell' ), 
				"name" => esc_html__( "Name (slug)", 'clariwell' ),
				"menu_order" => esc_html__( "Menu Order", 'clariwell' )
				),
				'default' => 'date',
			),

			array(
				'id'       => 'portfolio_order',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Order posts by', 'clariwell' ),
				'subtitle' => esc_html__( 'Posts order.', 'clariwell' ),
				'options'  => array(
				"desc" => esc_html__( "Descending (DESC)", 'clariwell' ),
				"asc" => esc_html__( "Ascending (ASC)", 'clariwell' )
				),
				'default' => 'desc',
			),

			array(
				'id'       => 'portfolio_item_caption_align',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Caption Alignment', 'clariwell' ),
				'subtitle' => esc_html__( 'Set alignment of the caption\'s content.', 'clariwell' ),
				'options'  => array(
				"text-left" => esc_html__( "Left", 'clariwell' ),
				"text-center" => esc_html__( "Center", 'clariwell' ),
				),
				'default' => 'text-left',
			),
			array(
				'id'       => 'portfolio_item_caption_content',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Caption Content', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose caption content.', 'clariwell' ),
				'options'  => array(
				"title_categories" => esc_html__( "Title + Categories", 'clariwell' ),
				"title" => esc_html__( "Title", 'clariwell' ),
				),
				'default' => 'title_categories',
			),

			array(
				'id'       => 'portfolio_item_hover_style',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Grid Item Hover Style', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose a hover style for your portfolio grid items.', 'clariwell' ),
				'options'  => array(
				"zoom_link" => esc_html__( "Zoom Icon + Link Icon", 'clariwell' ),
				"none" => esc_html__( "None", 'clariwell' ), 
				),
				'default' => 'zoom_link',
			),
			array(
				'id'       => 'portfolio_item_excerpt',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Excerpt Content', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose excerpt content', 'clariwell' ),
				'options'  => array(
				"enable" => esc_html__( "Enable", 'clariwell' ),
				"disable" => esc_html__( "Disable", 'clariwell' ),
				),
				'default' => 'enable',
			),

            	// Filters

			array(
				'id'       => 'portfolio_filter',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Category Filters', 'clariwell' ),
				'subtitle' => esc_html__( 'Enable or disable category filters.', 'clariwell' ),
				'options'  => array(
				"yes" 	=> esc_html__( "Yes", 'clariwell' ),
				"no" 	=> esc_html__( "No", 'clariwell' ),
				),
				'default' => 'no',
			),

			array(
				'id'       => 'portfolio_filter_align',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Category Filters Alignment', 'clariwell' ),
				'subtitle' => esc_html__( 'Set alignment of category filters.', 'clariwell' ),
				'options'  => array(
					"text-center" 	=> esc_html__( "Center", 'clariwell' ),
					"text-left" 	=> esc_html__( "Left", 'clariwell' ) ,
					"text-right" 	=> esc_html__( "Right", 'clariwell' )
				),
				'default' => 'center',
				'required' => array(
					'portfolio_filter',
					'equals', 
					array( "yes" )
				)
			),

			array(
				'id'       => 'portfolio_pagination',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Pagination', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose pagination for your grid.', 'clariwell' ),
				'options'  => array(
					"enable" 	=> esc_html__( "Enable", 'clariwell' ),
					"disable" 	=> esc_html__( "Disable", 'clariwell' )
				),
				'default' => 'enable',
				'required' => array(
					'portfolio_filter',
					'equals', 
					array( "no" )
				)
			),
 
         )
    ));

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Single Posts', 'clariwell' ),
        'id'     => 'portfolio_single',
        'desc'   => esc_html__( 'Single portfolio post page settings.', 'clariwell' ),
        'subsection' => true,
        'fields' => array(
            
			array(
				'id'       => 'portfolio_layout',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Default Portfolio Post Layout', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose layout for your portfolio post.', 'clariwell' ),
				'options'  => array(
					"side" 	=> esc_html__( "Side", 'clariwell' ),
					"fullwidth" => esc_html__( "Fullwidth", 'clariwell' ),
				),
				'default' => 'fullwidth'
			),
			array(
				'id'       => 'g_portfolio_details_display',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show Project Details', 'clariwell' ),
				'subtitle' => esc_html__( 'Display or hide the project details.', 'clariwell' ),
				'default' => true
			),
			array(
				'id'       => 'g_portfolio_project_heading',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show About Project Heading', 'clariwell' ),
				'subtitle' => esc_html__( 'Display or hide the "About Project" heading above the Post Content.', 'clariwell' ),
				'default' => true
			),
			array(
				'id'       => 'g_portfolio_media_display',
				'type'     => 'switch',
				'title'    => esc_html__( 'Show Media', 'clariwell' ),
				'subtitle' => esc_html__( 'Display or hide the portfolio post media, defined below (or Featured Image if no media defined).', 'clariwell' ),
				'default' => true
			),
			array(
				'id'       => 'g_portfolio_gallery_type',
				'type'     => 'button_set',
				'title'    => esc_html__( 'Default Gallery Type', 'clariwell' ),
				'subtitle' => esc_html__( 'Choose a default type for portfolio post gallery.', 'clariwell' ),
				'options'  => array(
					"list" 		=> esc_html__( "Image List", 'clariwell' ),
					"slider" 	=> esc_html__( "Image Slider", 'clariwell' ),
				),
				'default' => 'list'
			),

			array(
				'id'       => 'g_portfolio_details_heading',
				'type'     => 'switch',
				'title'    => esc_html__( 'Project Details Heading', 'clariwell' ),
				'subtitle' => esc_html__( 'Display or hide the "Project Details" heading above the Post Details area.', 'clariwell' ),
				'default' => true
			),
			array(
				'id'       => 'g_portfolio_display_categories',
				'type'     => 'switch',
				'title'    => esc_html__( 'Display Project Categories', 'clariwell' ),
				'subtitle' => esc_html__( 'Display project categories.', 'clariwell' ),
				'default' => true
			),

			array(
				'id'       => 'g_portfolio_sharing',
				'type'     => 'switch',
				'title'    => esc_html__( 'Social Sharing Buttons', 'clariwell' ),
				'subtitle' => esc_html__( 'Display Social sharing buttons.', 'clariwell' ),
				'default' => true
			),

			array(
				'id'       => 'g_portfolio_navigation',
				'type'     => 'switch',
				'title'    => esc_html__( 'Post Navigation', 'clariwell' ),
				'subtitle' => esc_html__( 'Display post navigation.', 'clariwell' ),
				'default' => true
			),
            
    	)
    ) );


/**
*
*footer-copyright
*
**/

    // -> START Editors

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Footer', 'clariwell' ),
        'id'         => 'footer-editor',
        //'subsection' => true,
        'icon'             => 'el el-circle-arrow-down',
        'fields'     => array(
            
            array(
                'id' => 'ins-footer-fixed',
                'type' => 'switch',
                'title' => esc_html__('Set footer fixed to bottom', 'clariwell'),
                'subtitle' => esc_html__('Enable to activate this feature.', 'clariwell')
            ),

			array(
				'id'       => 'footer-variant',
				'type'     => 'select',
				'title'    => esc_html__( 'Footer variants', 'clariwell' ),
				'options'  => array(
				'1'        => 'Standard footer with widgets inside',
				'2'        => 'Standard footer with Visual Composer modules inside',
				'3'        => 'Disable Footer',
				),
				'default' => '1'
			),

			array(
				'id'       => 'ins-opt-footer-page',
				'type'     => 'select',
				'multi'    => false,
				'required' => array('footer-variant','equals','2'),
				'data'     => 'posts',
				'args'     => array( 'post_type' =>  array( 'page' ), 'numberposts' => -1 ),
				'title'    => esc_html__( 'Footer Section Page', 'clariwell'),
				'subtitle' => esc_html__( 'Selected page will be displayed as footer', 'clariwell'),
			),

			array(
				'id'       => 'ins-opt-widget-title-typography',
				'type'     => 'typography',
				'title'    => esc_html__( 'Footer Widget title typography', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify the Widget title properties.', 'clariwell' ),
				'required' => array('footer-variant','equals','1'),
				"text-align" => false,
				"line-height" => true,
				"font-style" => true,
				"color" => true,
				"font-family" => true,
				"letter-spacing" => true,
				"text-transform" => true,
				'output'      => array('#footer .widget-title'),
				'units'       =>'px',
				'default'  => array(
					'color'       => '#fff',
					'font-size'   => '20px',
					'line-height' => '30px',
					'letter-spacing' => '1px'
				),
			),

			array(
				'id'       => 'footer-widget-text-color',
				'type'     => 'color',
				'required' => array('footer-variant','equals','1'),
				'title'    => esc_html__( 'Footer Widget text Color', 'clariwell' ),
				'output' => array('#footer .textwidget, #footer .widget, #footer  .textwidget p, #footer .social-widget-inner a, #footer .widget_list_tweet_text, #footer .widget_list_tweet_date, #footer .widget li, #footer .widget ul, #footer .widget p, #footer strong, #footer .calendar_wrap tbody tr td, #footer .calendar_wrap thead tr th'), 
				'default'  => '#fff',
			), 

			array(
				'id'       => 'footer-widget-link-color',
				'type'     => 'link_color',
				'required' => array('footer-variant','equals','1'),
				'title'    => esc_html__( 'Footer Widget Link Color', 'clariwell' ),
				'output' => array('#footer .widget a'),
				'transparent' => false,
				'visited' => false,
				'active' => false,
				'default'  => array(
				'regular'  => '#c4c4c4',
				'hover'    => '#fff'
				),
			),

			array(
				'id'       => 'footer-bg-color',
				'type'     => 'background',
				'required' => array('footer-variant','!=','3'),
				'output' => array('#footer'), 
				'title'    => esc_html__( 'Footer Background', 'clariwell' ),
				'default'  => array('background-color' => '#212121'),
			),    

			array(
				'id'       => 'footer_border',
				'type'     => 'border',
				'title'    => esc_html__( 'Section Top Border', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify the top border of the section.', 'clariwell' ),
				'default'  => '',
				'left' => false,
				'right' => false,
				'bottom' => false,
				'all' => false,
				'output' => array( '#footer' )
			),

			array(
				'id'   => 'info_normal',
				'type' => 'info',
				'desc' => esc_html__('Copyright', 'clariwell')
			),

			array(
				'id'       => 'switch_copyright',
				'type'     => 'switch', 
				'title'    => esc_html__('Copyright Area', 'clariwell'),
				'subtitle' => esc_html__('Enable / Disable Copyright Area.', 'clariwell'),
				'default'  => true,
			),

			array(
				'id'=>'textarea_copyright',
				'type' => 'textarea',
				'title' => esc_html__('Copyright Text', 'clariwell'), 
				'subtitle' => esc_html__('Enter your Copyright Text (HTML allowed).', 'clariwell'),
				'default' => '2018 clariwell- WordPress Theme built by <a href="http://insigniatechnolabs.com/">Insignia</a> using <a href="http://wordpress.org/" target="_blank">WordPress</a>.',
				'required' => array('switch_copyright', "=", '1'),
			),

			array(
				'id'       => 'select_copyright',
				'type'     => 'select',
				'title'    => esc_html__('Copyright Right Content', 'clariwell'), 
				'options'  => array(
				'social_media' => esc_html__('Social Media', 'clariwell'),
				'navigation' => esc_html__('Navigation', 'clariwell'),
				'leave_empty' => esc_html__('Leave Empty', 'clariwell'),
				),
				'default'  => 'Leave Empty',
				'required' => array('switch_copyright', "=", '1'),
			),

			array(
				'id'       => 'copyright_bg',
				'type'     => 'color',
				'transparent' => false,
				'title'    => __( 'Sub Footer Background Color', 'clariwell' ),           
				'default'  => '#1b1b1b',
				'output'   => array( 'background-color' => '#copyright'),
				'required' => array('switch_copyright', "=", '1'),
			),  

			array(
				'id'       => 'copyright_color',
				'type'     => 'color',
				'transparent' => false,
				'default'  => '#6d8190',
				'title'    => __( 'Copyright Text Color', 'clariwell' ),
				'output'   => array( 'color' => '#copyright, #copyright p, #copyright h1, #copyright h2, #copyright h3, #copyright h4, #copyright h5, #copyright h6, #copyright strong, #copyright li'),         
				'required' => array('switch_copyright', "=", '1'),
			), 

			array(
				'id'       => 'copyright_link',
				'type'     => 'link_color',
				'title'    => __( 'Copyright Link Color', 'clariwell' ), 
				'transparent' => false,
				'visited' => false,
				'active' => false,
				'default'  => array(
					'regular'  => '#6d8190',
					'hover'    => '#cccccc'
				),
				'output'   => array('#copyright a'), 
				'required' => array('switch_copyright', "=", '1'),
			), 

			array(
				'id'       => 'copyright_border',
				'type'     => 'border',
				'title'    => esc_html__( 'Section Top Border', 'clariwell' ),
				'subtitle' => esc_html__( 'Specify the top border of the section.', 'clariwell' ),
				'default'  => '',
				'left' => false,
				'right' => false,
				'bottom' => false,
				'all' => false,
				'output' => array( '#copyright' )
			),

        ),
    ) );
/**
*
*end footer
*
**/   


/**
*
*Contact options
*
**/

    // -> START Editors

    Redux::setSection( $opt_name, array(
		'title'      => __( 'Contact options', 'clariwell' ),
		'id'         => 'contact-option',
		//'subsection' => true,
		'icon'             => 'el el-headphones',
		'fields'     => array(
			array(
				'id' => 'ins-business-phone',
				'type' => 'text',
				'title' => esc_html__('Business Phone', 'clariwell'),
				'default' => '(145)-456-865'
			),
			array(
				'id' => 'ins-business-email',
				'type' => 'text',
				'title' => esc_html__('Business Email', 'clariwell'),
				'default' => 'contact@clariwell-theme.com'
			),
			array(
				'id' => 'ins-business-address',
				'type' => 'text',
				'title' => esc_html__('Business Address', 'clariwell'),
				'default' => '49, Suitland Street, Sydney, Australia'
			),
				
			array(
				'id'       => 'ins-opt-google-api',
				'type'     => 'text',
				'title'    => __( 'Google Maps API Key', 'clariwell' ),
				'subtitle' => __( 'Paste your Google Maps Api Key. This is necessary for the Google Map to work on your website.', 'clariwell' ),
				'compiler' => 'true'
			)
		),
    ) );

/**
*
* End Google Map
*
**/

       // Advanced 
    
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Advanced', 'clariwell' ),
        'id'     => 'advanced',
        'icon'   => 'el el-wrench',
        'fields' => array(
        	array(
        	    'id'       => 'custom_html',
        	    'type'     => 'ace_editor',
        	    'title'    => esc_html__( 'Custom HTML Code', 'clariwell' ),
        	    'subtitle' => esc_html__( 'Paste a custom HTML code here and it will be placed just before your site\'s <body> tag. Great for placing <script> scripts of Facebook Pixel or Google Analytics.', 'clariwell' ),
        	    'mode'     => 'html',
        	    'theme'		=> 'chrome',
        	    'default'  => ""
        	),
            array(
                'id'       => 'custom_css',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'Custom CSS Code', 'clariwell' ),
                'subtitle' => esc_html__( 'Paste your CSS code here.', 'clariwell' ),
                'mode'     => 'css',
                'theme'		=> 'chrome',
                'default'  => ""
            ),
            
    	)
    ) );

    /*
       End sections
    */

    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */


    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'clariwell' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'clariwell' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = false;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }