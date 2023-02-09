<?php 

require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'insignia_require_plugins' );

function insignia_require_plugins() {
 
    $plugins = array( 
                      array(
                            'name'               => esc_html__('Redux Framework', 'clariwell'),
                            'slug'               => 'redux-framework',
                            'required'           => true,
                            'force_activation'   => false, 
                       ),
                       array(
                            'name'               => esc_html__('Revolution Slider', 'clariwell'),
                            'slug'               => 'revslider',
                            'source'             => 'https://insigniathemes.com/clariwell/clariwell-plugins/clariwell_plugins01/revslider.zip',  
                            'required'           => true,
                            'force_activation'   => false, 
                       ),
                      array(
                            'name'               => esc_html__('WPBakery Visual Composer', 'clariwell'),
                            'slug'               => 'js_composer',
                            'source'             => 'https://insigniathemes.com/clariwell/clariwell-plugins/clariwell_plugins01/js_composer.zip',  
                            'required'           => true,
                            'force_activation'   => false, 
                       ),
                      array(
                            'name'               => esc_html__('One click demo importer', 'clariwell'),
                            'slug'               => 'one-click-demo-import',
                            'required'           => true,
                            'force_activation'   => false, 
                       ),
                      array(
                            'name'               => esc_html__('Contact Form 7', 'clariwell'),
                            'slug'               => 'contact-form-7',
                            'required'           => true,
                            'force_activation'   => false, 
                       ),
                      array(
                            'name'               => esc_html__('clariwell VC-Elements', 'clariwell'),
                            'slug'               => 'clariwell-vc-elements',
                            'source'             => 'https://insigniathemes.com/clariwell/clariwell-plugins/clariwell_plugins01/clariwell-vc-elements.zip',  
                            'required'           => true,
                            'force_activation'   => false, 
                       ) ,
                      array(
                            'name'               => esc_html__('Woocommerce', 'clariwell'),
                            'slug'               => 'woocommerce',
                            'required'           => true,
                            'force_activation'   => false, 
                       )
                 );
                $config = array(
                            'id'           => 'insignia-plugin',  
                            'menu'         => 'tgmpa-install-plugins', 
                            'has_notices'  => true, 
                            'dismissable'  => false,
                            'dismiss_msg'  => '',
                            'is_automatic' => true, 
                            'message'      => '', 
                            'strings'      => array()
                        );
 
    tgmpa( $plugins, $config );
}