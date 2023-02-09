<?php
global $post;
    function get_met($value) {
    	$message = $post->ID;
        echo $message;
    	$field = get_post_meta($post->ID, $value, 1);
    	if ( ! empty( $field ) ) {
    		return is_array( $field ) ? stripslashes_deep( $field ) : stripslashes( wp_kses_decode_entities( $field ) );
    	} else {
    		return false;
    	}
    }
    if ( file_exists( plugin_dir_path( __FILE__ ) . '/cmb2/init.php' ) ) {
    	require_once plugin_dir_path( __FILE__ ) . '/cmb2/init.php';
    } elseif ( file_exists( plugin_dir_path( __FILE__ ) . '/CMB2/init.php' ) ) {
    	require_once plugin_dir_path( __FILE__ ) . '/CMB2/init.php';
    }
    
    add_action( 'cmb2_init', 'insignia_post_metabox' );
    function insignia_post_metabox() {

	$prefix = '_ins_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'post_setting',
		'title'        => __( 'Blog Post', 'clariwell' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );


	$cmb->add_field( array(
		'name' => __( 'Post Media', 'clariwell' ),
		'id' => $prefix . 'post_media',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'hide' => __( 'Hide', 'clariwell' )
		),
		'desc' => __( 'Display post media on single post page according to post format i.e. video player for "video" format etc.', 'cmb2' ),
	) );
	

	$cmb->add_field( array(
		'name' => __( 'Blog Category Section', 'clariwell' ),
		'id' => $prefix . 'page_title_blog_category',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'hide' => __( 'Hide', 'clariwell' )
		),
		'desc' => __( 'Display the blog post category section on top of the post title.', 'cmb2' ),
	) );


	$cmb->add_field( array(
		'name' => __( 'Blog Meta Section', 'clariwell' ),
		'id' => $prefix . 'page_title_blog_meta',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'hide' => __( 'Hide', 'clariwell' )
		),
		'desc' => __( 'Display the blog post meta section under the post title.', 'cmb2' ),
	) );
}


    add_action( 'cmb2_init', 'ins_add_general_metabox' );
    function ins_add_general_metabox() {

	$prefix = '_ins_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'layout',
		'title'        => __( 'General', 'clariwell' ),
		'object_types' => array( 'page', 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Page Layout', 'clariwell' ),
		'id' => $prefix . 'select_layout',
		'type' => 'select',
		'default' => 'select_layout',
		'options' => array(
			'select_layout' => __( 'Select Layout', 'clariwell' ),
			'full_width' => __( 'Full width', 'clariwell' ),
			'left_sidebar' => __( 'Left sidebar', 'clariwell' ),
			'right_sidebar' => __( 'Right sidebar', 'clariwell' ),
		),
		'desc' => __( 'Choose a layout for this page.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Page Top Padding', 'clariwell' ),
		'id' => $prefix . 'page_content_padding-top',
		'type' => 'text_small',
		'desc' => __( 'Set a top (between Title Area and Content) padding. In pixels. Add Numeric value only, Do not add "px".', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Page Bottom Padding', 'clariwell' ),
		'id' => $prefix . 'page_content_padding-bottom',
		'type' => 'text_small',
		'desc' => __( 'Set a bottom (between Content and Footer) padding. In pixels. Add Numeric value only, Do not add "px".', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( '#Wrapper Classes', 'clariwell' ),
		'id' => $prefix . 'wrapper_classes',
		'type' => 'text',
		'desc' => __( 'Type CSS classes that will be added to the website\'s main container #wrapper. You may add as many classes as you want, just separate them with a space. You may later easily select them in your CSS code, like .myclass', 'cmb2' ),
	) );

}

    add_action( 'cmb2_init', 'ins_add_general_portfolio_metabox' );
    function ins_add_general_portfolio_metabox() {

	$prefix = '_ins_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'port_layout',
		'title'        => __( 'General', 'clariwell' ),
		'object_types' => array( 'portfolio' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Page Top Padding', 'clariwell' ),
		'id' => $prefix . 'page_content_padding-top',
		'type' => 'text_small',
		'desc' => __( 'Set a top (between Title Area and Content) padding. In pixels. Add Numeric value only, Do not add "px".', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Page Bottom Padding', 'clariwell' ),
		'id' => $prefix . 'page_content_padding-bottom',
		'type' => 'text_small',
		'desc' => __( 'Set a bottom (between Content and Footer) padding. In pixels. Add Numeric value only, Do not add "px".', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( '#Wrapper Classes', 'clariwell' ),
		'id' => $prefix . 'wrapper_classes',
		'type' => 'text',
		'desc' => __( 'Type CSS classes that will be added to the website\'s main container #wrapper. You may add as many classes as you want, just separate them with a space. You may later easily select them in your CSS code, like .myclass', 'cmb2' ),
	) );

}

    add_action( 'cmb2_init', 'page_title_add_metabox' );
    function page_title_add_metabox() {

	$prefix = '_ins_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'page_header',
		'title'        => __( 'Page Title Area', 'clariwell' ),
		'object_types' => array( 'page', 'post', 'portfolio' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Page Title', 'clariwell' ),
		'id' => $prefix . 'custom_pagetitle',
		'type' => 'radio_inline',
		'options' => array(
			'enable' => __( 'Enable', 'clariwell' ),
			'disable' => __( 'Disable', 'clariwell' ),
		),
	) );

	$cmb->add_field( array(
		'name' => __( 'Custom Title Text', 'clariwell' ),
		'id' => $prefix . 'custom_title',
		'type' => 'text',
		'desc' => __( 'Type a different page title. Leave blank for default.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Page Subtitle', 'clariwell' ),
		'id' => $prefix . 'page_subtitle',
		'type' => 'text',
		'desc' => __( 'Optional page subtitle.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Text Align', 'clariwell' ),
		'id' => $prefix . 'pagetitle_align',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'center' => __( 'Center', 'clariwell' ),
			'left' => __( 'Left', 'clariwell' ),
			'right' => __( 'Right', 'clariwell' )
		),
	) );

	$cmb->add_field( array(
		'name' => __( 'Title Color', 'clariwell' ),
		'id' => $prefix . 'pagetitle_color',
		'type' => 'colorpicker',
		'desc' => __( 'Custom color of the page title heading. Leave blank for default.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Subtitle Color', 'clariwell' ),
		'id' => $prefix . 'pagetitle_subtitle_color',
		'type' => 'colorpicker',
		'desc' => __( 'Custom color of the page subtitle. Leave blank for default.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Page Title Height', 'clariwell' ),
		'id' => $prefix . 'pagetitle_height',
		'type' => 'text_small',
		'desc' => __( 'Enter height of page header. Enter Number without unit for example "300".', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Background Image', 'clariwell' ),
		'id' => $prefix . 'pagetitle_bg_image',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Background Color', 'clariwell' ),
		'id' => $prefix . 'pagetitle_bg_color',
		'type' => 'colorpicker',
	) );

	$cmb->add_field( array(
		'name' => __( 'Background Image Overlay', 'clariwell' ),
		'id' => $prefix . 'pagetitle_bg_image_overlay',
		'type' => 'select',
		'options' => array(
				"" => __("", "clariwell" ),
				"none" => __("None", "clariwell" ),
				"dark30" => __("Dark 30%","clariwell" ),
				"dark50" => __("Dark 50%","clariwell" ),
				"dark70" => __("Dark 70%","clariwell" ),
				"dark80" => __("Dark 80%","clariwell" ),
				"dark90" => __("Dark 90%","clariwell" ),
				"light30" => __("Light 30%","clariwell" ),
				"light50" => __("Light 50%","clariwell" ),
				"light70" => __("Light 70%","clariwell" ),
				"light80" => __("Light 80%","clariwell" ),
				"light90" => __("Light 90%","clariwell" )
		),
		'desc' => __( 'Choose an overlay for your background image.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Background size', 'clariwell' ),
		'id' => $prefix . 'pagetitle_bg_size',
		'type' => 'select',
		'options' => array(
			'' => __( '', 'clariwell' ),
			'initial' => __( 'initial', 'clariwell' ),
			'inherit' => __( 'inherit', 'clariwell' ),
			'contain' => __( 'contain', 'clariwell' ),
			'cover' => __( 'cover', 'clariwell' ),
		),
	) );

	$cmb->add_field( array(
		'name' => __( 'Background Position', 'clariwell' ),
		'id' => $prefix . 'pagetitle_bg_position',
		'type' => 'select',
		'options' => array(
			'' => __( '', 'clariwell' ),
			'left top' => __( 'left top', 'clariwell' ),
			'left center' => __( 'left center', 'clariwell' ),
			'left bottom' => __( 'left bottom', 'clariwell' ),
			'right top' => __( 'right top', 'clariwell' ),
			'right center' => __( 'right center', 'clariwell' ),
			'right bottom' => __( 'right bottom', 'clariwell' ),
			'center top' => __( 'center top', 'clariwell' ),
			'center center' => __( 'center center', 'clariwell' ),
			'center bottom' => __( 'center bottom', 'clariwell' ),
		),
	) );

	$cmb->add_field( array(
		'name' => __( 'Background Repeat', 'clariwell' ),
		'id' => $prefix . 'pagetitle_bg_repeat',
		'type' => 'select',
		'options' => array(
			'' => __( '', 'clariwell' ),
			'inherit' => __( 'Inherit', 'clariwell' ),
			'no-repeat' => __( 'No Repeat', 'clariwell' ),
			'repeat' => __( 'Repeat All', 'clariwell' ),
			'repeat-x' => __( 'Repeat Horizontally', 'clariwell' ),
			'repeat-y' => __( 'Repeat Vertically', 'clariwell' ),
		),
	) );

	$cmb->add_field( array(
		'name' => __( 'Background Attachment', 'clariwell' ),
		'id' => $prefix . 'pagetitle_bg_attachment',
		'type' => 'select',
		'options' => array(
			'' => __( '', 'clariwell' ),
			'inherit' => __( 'inherit', 'clariwell' ),
			'fixed' => __( 'fixed', 'clariwell' ),
			'scroll' => __( 'scroll', 'clariwell' ),
		),
	) );

	$cmb->add_field( array(
		'name' => __( 'Fullscreen Page Title', 'clariwell' ),
		'id' => $prefix . 'pagetitle_fullscreen',
		'type' => 'radio_inline',
		'options' => array(
			'on' => __( 'On', 'clariwell' ),
			'off' => __( 'Off', 'clariwell' )
		),
		'desc' => __( 'Choose size of your Page Title Area.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Breadcrumbs', 'clariwell' ),
		'id' => $prefix . 'pagetitle_breadcrumbs',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'yes' => __( 'Enable', 'clariwell' ),
			'no' => __( 'Disable', 'clariwell' )
		),
		'desc' => __( 'Enable or disable the breadcrumbs navigation.', 'cmb2' ),
	) );

}

/*portfolio metabox*/

add_action( 'cmb2_init', 'ins_add_portfolio_metabox' );
function ins_add_portfolio_metabox() {

	$prefix = '_ins_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'portfolio',
		'title'        => __( 'Portfolio Settings', 'clariwell' ),
		'object_types' => array( 'portfolio' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Portfolio Layout', 'clariwell' ),
		'id' => 'portfolio_layout',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'side' => __( 'Side', 'clariwell' ),
			'fullwidth' => __( 'Fullwidth', 'clariwell' )
		),
		'desc' => __( 'Choose layout for your portfolio post.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Show About Project Heading', 'clariwell' ),
		'id' => 'portfolio_project_heading',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'yes' => __( 'Yes', 'clariwell' ),
			'no' => __( 'no', 'clariwell' )
		),
		'desc' => __( 'Display or hide the "About Project" heading above the Post Content.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Show Media', 'clariwell' ),
		'id' => 'portfolio_media_display',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'yes' => __( 'Yes', 'clariwell' ),
			'no' => __( 'No', 'clariwell' )
		),
		'desc' => __( 'Display or hide the portfolio post media(Featured Image, Video, Image Gallery).', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Video Media', 'clariwell' ),
		'id' => 'portfolio_video_type',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Disable', 'clariwell' ),
			'oembed' => __( 'oEmbed (YouTube etc)', 'clariwell' ),
			'self_hosted' => __( 'Self Hosted', 'clariwell' )
		),
		'desc' => __( 'Display video in your portfolio post.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Self Hosted Video', 'clariwell' ),
		'id' =>  'portfolio_video_file',
		'type' => 'file',
		'desc' => __( 'Choose a video file from your library or insert URL.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Video URL', 'clariwell' ),
		'id' =>  'portfolio_video_url',
		'type' => 'text',
		'desc' => __( 'Insert URL to your video from YouTube, Vimeo etc.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Image Gallery', 'clariwell' ),
		'id' =>  'portfolio_gallery',
		'type' => 'file_list',
		'desc' => __( 'Add images to your post\'s gallery.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Gallery Type', 'clariwell' ),
		'id' =>  'portfolio_gallery_type',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'list' => __( 'Image List', 'clariwell' ),
			'slider' => __( 'Image Slider', 'clariwell' )
		),
		'desc' => __( 'Choose a type for your gallery: image slider or list with images displayed one under another.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Show Project Details', 'clariwell' ),
		'id' => 'portfolio_details_display',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'yes' => __( 'Yes', 'clariwell' ),
			'no' => __( 'No', 'clariwell' )
		),
		'desc' => __( 'Display or hide the project details.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Project Details Heading', 'clariwell' ),
		'id' =>  'portfolio_details_heading',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'yes' => __( 'Yes', 'clariwell' ),
			'no' => __( 'No', 'clariwell' )
		),
		'desc' => __( 'Display or hide the "Project Details" heading above the Post Details area.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Display Project Categories', 'clariwell' ),
		'id' =>  'portfolio_display_categories',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'yes' => __( 'Yes', 'clariwell' ),
			'no' => __( 'No', 'clariwell' )
		),
		'desc' => __( 'Display project categories.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Research Name', 'clariwell' ),
		'id' => 'research_name',
		'type' => 'text',
		'desc' => __( 'Insert research name. (Optional)', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Project Client', 'clariwell' ),
		'id' => 'portfolio_client',
		'type' => 'text',
		'desc' => __( 'Insert your project client. (Optional)', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Project Client URL', 'clariwell' ),
		'id' => 'portfolio_client_url',
		'type' => 'text',
		'desc' => __( 'Insert client\'s site URL. (Optional)', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Research Year', 'clariwell' ),
		'id' => 'research_year',
		'type' => 'text',
		'desc' => __( 'Inseart year for your research.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Research Location', 'clariwell' ),
		'id' => 'research_location',
		'type' => 'text',
		'desc' => __( 'Insert research\'s location. (Optional)', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Extra Field Label', 'clariwell' ),
		'id' => 'portfolio_extra1',
		'type' => 'text',
		'desc' => __( 'Additional field displayed in your Project Details area.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Extra Field Value', 'clariwell' ),
		'id' => 'portfolio_extra1_value',
		'type' => 'text',
		'desc' => __( 'Additional field value.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Social Sharing Buttons', 'clariwell' ),
		'id' => 'portfolio_sharing',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'yes' => __( 'Yes', 'clariwell' ),
			'no' => __( 'No', 'clariwell' )
		),
		'desc' => __( 'Display Social sharing buttons.', 'cmb2' ),
	) );

	$cmb->add_field( array(
		'name' => __( 'Post Navigation', 'clariwell' ),
		'id' => 'portfolio_navigation',
		'type' => 'radio_inline',
		'options' => array(
			'default' => __( 'Default', 'clariwell' ),
			'yes' => __( 'Yes', 'clariwell' ),
			'no' => __( 'No', 'clariwell' )
		),
		'desc' => __( 'Display post navigation.', 'cmb2' ),
	) );

}

    /*Testimonial Metabox*/
    add_action( 'cmb2_init', 'ins_add_testimonial_metabox' );
    function ins_add_testimonial_metabox() {

	$prefix = '_ins_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'testimonial',
		'title'        => __( 'Testimonial Options', 'clariwell' ),
		'object_types' => array( 'testimonial_post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Author', 'clariwell' ),
		'id' => $prefix . 'author',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Position', 'clariwell' ),
		'id' => $prefix . 'position',
		'type' => 'text',
	) );

}

    add_action( 'cmb2_init', 'insignia_add_post_video_metabox' );
    function insignia_add_post_video_metabox() {

	$prefix = '_ins_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'post_video',
		'title'        => __( 'Post Video', 'clariwell' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'YouTube video ID', 'clariwell' ),
		'id' => $prefix . 'youtube_video',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Vimeo video ID', 'clariwell' ),
		'id' => $prefix . 'vimeo_video',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Self hosted video file in mp4 format', 'clariwell' ),
		'id' => $prefix . 'hosted_video_mp4',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Self hosted video file in webM format', 'clariwell' ),
		'id' => $prefix . 'hosted_video_webm',
		'type' => 'file',
	) );

}


    add_action( 'cmb2_init', 'insignia_add_post_audio_metabox' );
    function insignia_add_post_audio_metabox() {

	$prefix = '_ins_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'post_audio',
		'title'        => __( 'Post Audio', 'clariwell' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );


	$cmb->add_field( array(
		'name' => __( 'Self hosted audio file in mp3 format', 'clariwell' ),
		'id' => $prefix . 'hosted_audio',
		'type' => 'file',
	) );

    }
    
    add_action( 'cmb2_init', 'insignia_add_post_quote_metabox' );
    function insignia_add_post_quote_metabox() {

	$prefix = '_ins_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'post_quote',
		'title'        => __( 'Post Quote', 'clariwell' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Quote Text', 'clariwell' ),
		'id' => $prefix . 'quote_text',
		'type' => 'textarea',
	) );

	$cmb->add_field( array(
		'name' => __( 'Quote author name', 'clariwell' ),
		'id' => $prefix . 'quote_author',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Background color', 'clariwell' ),
		'id' => $prefix . 'quote_background_color',
		'default' => '#302f35',
		'type' => 'colorpicker',
	) );

	$cmb->add_field( array(
		'name' => __( 'Quote text color', 'clariwell' ),
		'id' => $prefix . 'quote_text_color',
		'default' => '#c1c1c1',
		'type' => 'colorpicker',
	) );

    }

    add_action( 'cmb2_init', 'insignia_add_post_gallery_metabox' );
    function insignia_add_post_gallery_metabox() {

	$prefix = '_ins_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'post_gallery',
		'title'        => __( 'Post Gallery', 'clariwell' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Upload Image Gallery', 'clariwell' ),
		'id' => $prefix . 'gallery_for_post',
		'type' => 'file_list',
	) );
}