<?php

add_filter( 'vc_load_default_templates', 'clariwell_reset_default_templates' ); // Hook in
function clariwell_reset_default_templates( $data ) {
	// This will remove all default templates. Basically you should use native PHP functions to modify existing array and then return it.
    return array(); 
}

function clariwell_add_default_templates() {

	$templates = clariwell_vc_templates();
	return array_map( 'vc_add_default_templates', $templates );
}
clariwell_add_default_templates();

function clariwell_vc_templates(){
	
	$templates = array();
	
	//Home 1
	
//icon-box 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-boxes1.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-boxes';
	$data['content'] = <<<CONTENT
[vc_row][vc_column width="1/3" enable_shadow="true" css=".vc_custom_1543468696908{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 50px !important;padding-right: 50px !important;padding-bottom: 30px !important;padding-left: 50px !important;background-color: #ffffff !important;}"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="14878" icon_align="text-center" icon_title="Laboratory services" icon_text="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt." btn_check="1" btn_text="Read More" btn_link="#" css_animation="ins-animated zoomIn" ib_animation_delay="200" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1"][/vc_column][vc_column width="1/3" enable_shadow="true" css=".vc_custom_1543468690735{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 50px !important;padding-right: 50px !important;padding-bottom: 30px !important;padding-left: 50px !important;background-color: #ffffff !important;}"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="14879" icon_align="text-center" icon_title="Analytical techniques" icon_text="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt." btn_check="1" btn_text="Read More" btn_link="#" css_animation="ins-animated zoomIn" ib_animation_delay="400" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1"][/vc_column][vc_column width="1/3" enable_shadow="true" css=".vc_custom_1543468703211{margin-top: 0px !important;padding-top: 50px !important;padding-right: 50px !important;padding-bottom: 30px !important;padding-left: 50px !important;background-color: #ffffff !important;}"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="14877" icon_align="text-center" icon_title="Laboratory accreditation" icon_text="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt." btn_check="1" btn_text="Read More" btn_link="#" css_animation="ins-animated zoomIn" ib_animation_delay="600" title_font="20" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1"][/vc_column][/vc_row][vc_row][vc_column][vc_empty_space height="20px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//content-block 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Content Block-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/content-blocks1.jpg' );
	$data['sort_name'] = 'Content Blocks';
	$data['custom_class'] = 'content-blocks';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" gap="25" equal_height="yes" content_placement="bottom" css=".vc_custom_1545311097338{padding-top: 90px !important;padding-bottom: 120px !important;background: #f4fcff url(https://insigniathemes.com/clariwell/home-1/wp-content/uploads/sites/2/2018/12/laboratory-pattern-bg1.jpg?id=14649) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/2" css=".vc_custom_1545311084447{background-image: url(https://insigniathemes.com/clariwell/home-1/wp-content/uploads/sites/2/2018/12/lab-home1.jpg?id=14647) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="300px"][/vc_column][vc_column width="1/2" css=".vc_custom_1543315480405{padding-top: 0px !important;}"][insignia_section_heading title="Discoveries to Change Lives." subtitle="" align="text-left" add_icon="" css_animation="ins-animated fadeIn" ib_animation_delay="200" heading_tag="h3" font_weight="default" sub_font_weight="default"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544597165315{margin-bottom: 25px !important;}"]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.[/vc_column_text][insignia_section_heading title="All the services you expect from a clinical trial lab" subtitle="" align="text-left" c_margin_bottom="20px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h5" font_weight="default" sub_font_weight="default"][vc_row_inner][vc_column_inner width="1/2"][insignia_simple_icon_list list_items="Chemical Research,Pathology Testing,Sample Preparation,Healthcare Labs" icon_style="ins-icon-list-simple" icon_size="list-icon-medium" border_bottom="select" css_animation="ins-animated fadeInUp" ib_animation_delay="200" icon_fontawesome="fa fa-angle-right"][/vc_column_inner][vc_column_inner width="1/2"][insignia_simple_icon_list list_items="Advanced Microscopy,Advanced Robotics,Environmental Testing,Anatomical Pathology" icon_style="ins-icon-list-simple" icon_size="list-icon-medium" border_bottom="select" css_animation="ins-animated fadeInUp" ib_animation_delay="400" icon_fontawesome="fa fa-angle-right"][/vc_column_inner][/vc_row_inner][insignia_button btn_text="Read More" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated fadeInUp" ib_animation_delay="400" text_font_weight="font-weight-700" text_color="#ffffff" hover_text_color="#ffffff" hover_bg_color="#074575" hover_border_color="#074575"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Counters 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter1.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1545311118228{background: #074575 url(https://insigniathemes.com/clariwell/home-1/wp-content/uploads/sites/2/2018/12/clariwell-footer-bg.jpg?id=14651) !important; background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1543393653380{padding-top: 70px !important;padding-bottom: 70px !important;}"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="About Laboratory" subtitle="" align="text-center" c_margin_bottom="25px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h3" font_weight="default" heading_color="#ffffff" sub_font_weight="default"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544597223588{margin-bottom: 60px !important;}"]</p>
<p class="text-white text-center text-medium">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1543395343652{border-right-width: 2px !important;padding-top: 20px !important;padding-bottom: 20px !important;border-right-color: rgba(255,255,255,0.1) !important;border-right-style: solid !important;}"][counter title="Award Shows" number="130" icon_text="" add_icon="" align="text-center" css_animation="ins-animated fadeInUp" ib_animation_delay="200" num_size="70" title_size="18" number_font_weight="font-weight-700" title_font_weight="font-weight-500" num_color="#ffffff" title_color="#ffffff" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1543395352057{border-right-width: 2px !important;padding-top: 20px !important;padding-bottom: 20px !important;border-right-color: rgba(255,255,255,0.1) !important;border-right-style: solid !important;}"][counter title="Permanent Staff" number="350" icon_text="" add_icon="" align="text-center" css_animation="ins-animated fadeInUp" ib_animation_delay="400" num_size="70" title_size="18" number_font_weight="font-weight-700" title_font_weight="font-weight-500" num_color="#ffffff" title_color="#ffffff" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1543395356330{border-right-width: 2px !important;padding-top: 20px !important;padding-bottom: 20px !important;border-right-color: rgba(255,255,255,0.1) !important;border-right-style: solid !important;}"][counter title="Years of Experience" number="35" icon_text="" add_icon="" align="text-center" css_animation="ins-animated fadeInUp" ib_animation_delay="600" num_size="70" title_size="18" number_font_weight="font-weight-700" title_font_weight="font-weight-500" num_color="#ffffff" title_color="#ffffff" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1543395360522{border-right-width: 2px !important;padding-top: 20px !important;padding-bottom: 20px !important;border-right-color: rgba(255,255,255,0.01) !important;border-right-style: solid !important;}"][counter title="Suppliers" number="430" icon_text="" add_icon="" align="text-center" css_animation="ins-animated fadeInUp" ib_animation_delay="800" num_size="70" title_size="18" number_font_weight="font-weight-700" title_font_weight="font-weight-500" num_color="#ffffff" title_color="#ffffff" title_letter_spacing="letter-spacing-1"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Image-Boxes 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Image Boxes-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/image-boxes1.jpg' );
	$data['sort_name'] = 'Image Boxes';
	$data['custom_class'] = 'image-boxes';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column][vc_empty_space height="70px"][vc_row_inner content_placement="middle"][vc_column_inner width="7/12"][insignia_section_heading title="Explore our Main Services." subtitle="" align="text-left" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h3" font_weight="default" sub_font_weight="default"][/vc_column_inner][vc_column_inner width="5/12"][insignia_button btn_text="View all Services" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-right" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated fadeIn" text_font_weight="font-weight-700" text_color="#07a7e3" hover_text_color="#ffffff" btn_bg_color="rgba(0,0,0,0.01)" hover_bg_color="#07a7e3" border_color="#07a7e3" hover_border_color="#07a7e3"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/3"][insignia_image_box custom_image="14652" image_title="Pathology Testing" image_text="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt." enable_button="1" btn_text="Read More" btn_link="url:%23|||" box_align="text-left" css_animation="ins-animated fadeInUp" ib_animation_delay="200" title_font="text-large" title_font_weight="font-weight-600"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box custom_image="14653" image_title="Chemical Research" image_text="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt." enable_button="1" btn_text="Read More" btn_link="url:%23|||" box_align="select" css_animation="ins-animated fadeInUp" ib_animation_delay="400" title_font="text-large" title_font_weight="font-weight-600"][/vc_column_inner][vc_column_inner width="1/3"][insignia_image_box custom_image="14654" image_title="Advanced Microscopy" image_text="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt." enable_button="1" btn_text="Read More" btn_link="url:%23|||" box_align="select" css_animation="ins-animated fadeInUp" ib_animation_delay="600" title_font="text-large" title_font_weight="font-weight-600"][/vc_column_inner][/vc_row_inner][vc_empty_space height="120px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//content-block 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Content Block-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/content-blocks2.jpg' );
	$data['sort_name'] = 'Content Blocks';
	$data['custom_class'] = 'content-blocks';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" gap="20" css=".vc_custom_1545044287508{padding-top: 80px !important;padding-bottom: 70px !important;background-color: #f7fbfd !important;}"][vc_column width="5/12"][insignia_section_heading title="Make an Appointment Today" subtitle="We Are Here for you" align="text-left" sub_position="subtitle-top" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h4" font_weight="default" heading_color="#ffffff" subtitle_fs="text-small" subtitle_letter_spacing="letter-spacing-1" sub_font_weight="font-weight-500" subtitle_color="#ffffff" css=".vc_custom_1545128269361{padding-top: 40px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #074575 !important;}"][vc_row_inner css=".vc_custom_1543489911377{margin-right: 0px !important;margin-left: 0px !important;}"][vc_column_inner css=".vc_custom_1543489740394{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #ffffff !important;}"][contact-form-7 id="392"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="7/12"][vc_single_image image="14655" img_size="full" css_animation="fadeIn"][insignia_section_heading title="Qualified Staff With Expertise in Services We Offer for more Resonable cost with love" subtitle="WELCOME TO LABORATORY" align="text-left" sub_position="subtitle-top" c_margin_bottom="30px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h4" font_weight="default" subtitle_fs="extra-medium" subtitle_letter_spacing="letter-spacing-2" sub_font_weight="font-weight-600" subtitle_color="#07a7e3"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545314457818{margin-bottom: 0px !important;}"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.[/vc_column_text][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Testimonials 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial1.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" bg_overlay="dark20" css=".vc_custom_1545311262686{background-image: url(https://insigniathemes.com/clariwell/home-1/wp-content/uploads/sites/2/2018/12/lab-home1-1.jpg?id=14662) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1543472602915{padding-top: 9% !important;padding-right: 9% !important;padding-bottom: 9% !important;padding-left: 9% !important;}"][vc_row_inner][vc_column_inner width="1/2"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1545128224005{padding-top: 50px !important;padding-right: 40px !important;padding-bottom: 10px !important;padding-left: 40px !important;background-color: #ffffff !important;}"][insignia_section_heading title="What Our Patient Say" subtitle="" align="text-left" border="heading-below-border" border_style="ins-border-solid" c_margin_bottom="20px" add_icon="" heading_tag="h3" font_weight="default" subtitle_fs="text-large" subtitle_letter_spacing="letter-spacing-1" sub_font_weight="font-weight-500" subtitle_color="#074575" border_color="#07a7e3" css=".vc_custom_1543391453761{margin-left: 20px !important;}"][testimonial testimonial_layout="style-2" cats="no-thumbnail" posts_nr="3" autoplay="true" slidetoshow="1" testimonial_navigation_dots="false" font_color="#6d8190" title_font_color="#074575" position_font_color="#07a7e3" italic_font="1" dots_position="dots-left" text_font="18" text_line_height="33"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Teams 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team1.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team-members';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner content_placement="middle"][vc_column_inner width="7/12"][insignia_section_heading title="Led by Passionate Experts" subtitle="" align="text-left" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h3" font_weight="default" sub_font_weight="default"][/vc_column_inner][vc_column_inner width="5/12"][insignia_button btn_text="Meet Our Team" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-right" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated fadeIn" text_font_weight="font-weight-700" text_color="#07a7e3" hover_text_color="#ffffff" btn_bg_color="rgba(0,0,0,0.01)" hover_bg_color="#07a7e3" border_color="#07a7e3" hover_border_color="#07a7e3"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner gap="5"][vc_column_inner width="1/3"][insignia_team name="Elsa Minor" position="Designer" img="14656" enable_popup="1" popup_bio="Ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultricies nisi at scelerisque pellentesque. Nunc feugiat felis vitae aliquet consequat." css_animation="ins-animated fadeInUp" ib_animation_delay="200" twitter="#" facebook="#" linkedin="#" instagram="#"][/vc_column_inner][vc_column_inner width="1/3"][insignia_team name="Milton Glaser" position="Manager" img="14657" enable_popup="1" popup_bio="Ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultricies nisi at scelerisque pellentesque. Nunc feugiat felis vitae aliquet consequat." css_animation="ins-animated fadeInUp" ib_animation_delay="400" facebook="#" linkedin="#" google-plus="#" twitter="#"][/vc_column_inner][vc_column_inner width="1/3"][insignia_team name="Mark Anthony" position="CEO" img="14658" enable_popup="1" popup_bio="Ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ultricies nisi at scelerisque pellentesque. Nunc feugiat felis vitae aliquet consequat." css_animation="ins-animated fadeInUp" ib_animation_delay="600" facebook="#" linkedin="#" google-plus="#" skype="#"][/vc_column_inner][/vc_row_inner][vc_empty_space height="120px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

//Blog 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Blog-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/blog1.jpg' );
	$data['sort_name'] = 'Blog';
	$data['custom_class'] = 'blog';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1544188308684{background-color: #f3f7f9 !important;}"][vc_column][vc_empty_space height="70px"][vc_row_inner content_placement="middle"][vc_column_inner width="7/12"][insignia_section_heading title="Publish What you Think" subtitle="" align="text-left" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h3" font_weight="default" sub_font_weight="default"][/vc_column_inner][vc_column_inner width="5/12"][insignia_button btn_text="Continue Reading" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-right" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated fadeIn" text_font_weight="font-weight-700" text_color="#07a7e3" hover_text_color="#ffffff" btn_bg_color="rgba(0,0,0,0.01)" hover_bg_color="#07a7e3" border_color="#07a7e3" hover_border_color="#07a7e3"][/vc_column_inner][/vc_row_inner][vc_empty_space height="20px"][vc_row_inner gap="20"][vc_column_inner][blog_news blog_style="blog_grid" blog_layout="3Columns" post_cat="gemological" blog_no_posts="3" blog_gap="30"][/vc_column_inner][/vc_row_inner][vc_empty_space height="110px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Contact 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact1.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1545311332000{background-image: url(https://insigniathemes.com/clariwell/home-1/wp-content/uploads/sites/2/2018/12/lab-page-title.jpg?id=14659) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1545044535626{padding-top: 80px !important;padding-bottom: 70px !important;}"][vc_row_inner][vc_column_inner width="1/4"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_title="Call us now" icon_text="Office 1: +(01) 1234 387 4444<br />
Office 2: +(01)1234 387 4444" btn_check="1" btn_text="Contact Us" btn_link="#" css_animation="ins-animated zoomIn" ib_animation_delay="200" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#ffffff" text_color="#ced5e4" btn_color="#ffffff" icon_iconsmind="iconsmind-Phone"][/vc_column_inner][vc_column_inner width="1/4"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_title="Drop us an email" icon_text="admin@invictus.com<br />
support@invictus.com" btn_check="1" btn_text="Contact Us" btn_link="#" css_animation="ins-animated zoomIn" ib_animation_delay="400" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#ffffff" text_color="#ced5e4" btn_color="#ffffff" icon_iconsmind="iconsmind-Email"][/vc_column_inner][vc_column_inner width="1/4"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_title="We are Here" icon_text="29 Pacific highway,<br />
Los Angeles CA, 92173" btn_check="1" btn_text="Get Direction" btn_link="#" css_animation="ins-animated zoomIn" ib_animation_delay="600" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#ffffff" text_color="#ced5e4" btn_color="#ffffff" icon_iconsmind="iconsmind-Map2"][/vc_column_inner][vc_column_inner width="1/4"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_title="We are open on" icon_text="Mon – Sat 07:00 – 21:00<br />
Sunday – Closed" btn_check="1" btn_text="Contact Us" btn_link="#" css_animation="ins-animated zoomIn" ib_animation_delay="800" title_font="text-extra-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#ffffff" text_color="#ced5e4" btn_color="#ffffff" icon_iconsmind="iconsmind-Clock"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]

CONTENT;

$templates[] = $data;


//Home 2

//content-block 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Content Block-03', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/content-blocks3.jpg' );
	$data['sort_name'] = 'Content Blocks';
	$data['custom_class'] = 'content-blocks';
	$data['content'] = <<<CONTENT
[vc_row gap="10" equal_height="yes" css=".vc_custom_1545045053610{margin-bottom: 120px !important;padding-top: 80px !important;}"][vc_column width="1/3"][vc_single_image image="581" img_size="full" css_animation="fadeIn"][insignia_section_heading title="Offering a wide range of diagnostics services." subtitle="" align="text-left" c_margin_bottom="15px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h4" font_weight="default" heading_letter_spacing="letter-spacing-1" sub_font_weight="default"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544597778924{margin-bottom: 20px !important;}"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam.[/vc_column_text][insignia_button btn_text="Read More" btn_link="url:%23|||" button_size="btn-small" border_radius="btn-radius-default" button_align="text-left" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated fadeInUp" ib_animation_delay="200" text_font_weight="font-weight-700"][/vc_column][vc_column width="1/3"][vc_single_image image="355" img_size="full" css_animation="fadeIn"][insignia_simple_icon_list list_items="Sed ut perspiciatis unde omnis,Iste natus error sit voluptatem,Sint occaecati cupiditate tempore,Reiciendis voluptatibus maiores alias,Quis autem vel eum iure repre,Accumsan sit amet nulla,cursus turpis massa tincidunt dui" icon_style="ins-icon-list-simple" icon_size="list-icon-medium" border_bottom="select" css_animation="ins-animated fadeInUp" ib_animation_delay="200" icon_fontawesome="fa fa-check" css=".vc_custom_1544597795848{margin-top: 20px !important;}"][/vc_column][vc_column width="1/3" css=".vc_custom_1544523527515{margin-left: 15px !important;padding-top: 25px !important;padding-right: 40px !important;padding-bottom: 35px !important;padding-left: 40px !important;background: #f1f5f7 url(https://insigniathemes.com/clariwell/home-2/wp-content/uploads/sites/3/2018/12/lab-hours-bg.jpg?id=14350) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][insignia_section_heading title="Opening Hours" subtitle="" align="text-left" c_margin_bottom="15px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h4" font_weight="default" heading_letter_spacing="letter-spacing-1" sub_font_weight="default"][vc_column_text css=".vc_custom_1543581162142{margin-bottom: 20px !important;}"]</p>
<p class="text-medium" style="color: #074575;">On the other hand we denounce with righteous indignation.</p>
<p>[/vc_column_text][working_hours map_business_schedule="%5B%7B%22map_schedule_day_name%22%3A%22Monday%22%2C%22map_schedule_day_hours%22%3A%2210.00%20-%2018.00%22%7D%2C%7B%22map_schedule_day_name%22%3A%22Tuesday%22%2C%22map_schedule_day_hours%22%3A%2210.00%20-%2018.00%22%7D%2C%7B%22map_schedule_day_name%22%3A%22Wednesday%22%2C%22map_schedule_day_hours%22%3A%2210.00%20-%2018.00%22%7D%2C%7B%22map_schedule_day_name%22%3A%22Thursday%22%2C%22map_schedule_day_hours%22%3A%2210.00%20-%2018.00%22%7D%2C%7B%22map_schedule_day_name%22%3A%22Friday%22%2C%22map_schedule_day_hours%22%3A%2210.00%20-%2018.00%22%7D%2C%7B%22map_schedule_day_name%22%3A%22Saturday%22%2C%22map_schedule_day_hours%22%3A%2210.00%20-%2015.00%22%7D%2C%7B%22map_schedule_day_name%22%3A%22Sunday%22%2C%22map_schedule_day_hours%22%3A%2210.00%20-%2015.00%22%7D%5D" text_color="#074575" border_color="#074575" css_animation="ins-animated fadeIn" ib_animation_delay="200"][insignia_button btn_text="Book Appoinment" btn_link="url:%23|||" button_size="btn-extra-large" border_radius="btn-radius-default" enable_icon="" text_transform="text-uppercase" margin_bottom="10px" css_animation="ins-animated fadeInUp" ib_animation_delay="200" text_font_weight="font-weight-700"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Image-Boxes 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Image Boxes-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/image-boxes2.jpg' );
	$data['sort_name'] = 'Image Boxes';
	$data['custom_class'] = 'image-boxes';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1544188097974{background-color: #f7fbfd !important;}"][vc_column][vc_empty_space height="70px"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_title="" icon_text="" btn_check="" css_animation="ins-animated fadeIn" ib_animation_delay="200" title_font_weight="default" text_font_weight="default" icon_iconsmind="iconsmind-Chemical"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545216073608{margin-bottom: 20px !important;}"]</p>
<h3 class="text-center">Dedicated to Providing <span class="font-weight-400">Quality Lab Services</span></h3>
<p>[/vc_column_text][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/3"][insignia_interactive_banner img="355" title="Advanced Microscopy" enable_button="1" btn_text="READ MORE" btn_link="url:%23|||" css_animation="ins-animated fadeInUp" ib_animation_delay="200" title_font_size="25" title_line_height="35" title_font_weight="font-weight-500" title_letter_spacing="letter-spacing-1" btn_border_radius="btn-radius-default" btn_font_weight="font-weight-700" btn_color="#ffffff" btn_hover_color="#ffffff"][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/3"][insignia_interactive_banner img="354" title="Analytical techniques" enable_button="1" btn_text="READ MORE" btn_link="url:%23|||" css_animation="ins-animated fadeInUp" ib_animation_delay="400" title_font_size="25" title_line_height="35" title_font_weight="font-weight-500" title_letter_spacing="letter-spacing-1" btn_border_radius="btn-radius-default" btn_font_weight="font-weight-500" btn_color="#ffffff" btn_hover_color="#ffffff"][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/3"][insignia_interactive_banner img="356" title="Laboratory accreditation" enable_button="1" btn_text="READ MORE" btn_link="url:%23|||" css_animation="ins-animated fadeInUp" ib_animation_delay="600" title_font_size="25" title_line_height="30" title_font_weight="font-weight-500" title_letter_spacing="letter-spacing-1" btn_border_radius="btn-radius-default" btn_font_weight="font-weight-500" btn_color="#ffffff" btn_hover_color="#ffffff"][vc_empty_space height="20px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Tabs 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Tabs-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/tabs1.jpg' );
	$data['sort_name'] = 'Tabs';
	$data['custom_class'] = 'tabs';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="85px"][vc_tta_tour style="insignia_tour_layout1 title-font" active_section="1"][vc_tta_section title="Chemical Research" tab_id="1543490476767-3b62742f-98c2"][insignia_section_heading title="Chemical Research" subtitle="" align="text-left" add_icon="" heading_tag="h4" font_weight="default" sub_font_weight="default"][vc_column_text css=".vc_custom_1543492671513{margin-bottom: 25px !important;}"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in esse cillum dolore eu fugiat nulla pariatur.[/vc_column_text][vc_row_inner content_placement="middle"][vc_column_inner width="8/12"][insignia_simple_icon_list list_items="Orci varius natoque penatibus et magnis.,Nam imperdiet venenatis mauris vel dictum leo luctus non.,Maecenas quis mi egestas volutpat dolor ultricies vulputate.,Integer sem purus ullamcorper scelerisque felis eu.,Aenean mi nisi rhoncus eget pharetra non porttitor at augue.,Proin hendrerit magna ac elit bibendum." icon_style="ins-icon-list-simple" icon_size="list-icon-medium" border_bottom="select" icon_fontawesome="fa fa-check"][/vc_column_inner][vc_column_inner width="4/12"][vc_single_image image="445" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Pathology Testing" tab_id="1543490762800-b198fa67-4c92"][insignia_section_heading title="Pathology Testing" subtitle="" align="text-left" add_icon="" heading_tag="h4" font_weight="default" sub_font_weight="default"][vc_column_text css=".vc_custom_1543492671513{margin-bottom: 25px !important;}"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in esse cillum dolore eu fugiat nulla pariatur.[/vc_column_text][vc_row_inner content_placement="middle"][vc_column_inner width="8/12"][insignia_simple_icon_list list_items="Orci varius natoque penatibus et magnis.,Nam imperdiet venenatis mauris vel dictum leo luctus non.,Maecenas quis mi egestas volutpat dolor ultricies vulputate.,Integer sem purus ullamcorper scelerisque felis eu.,Aenean mi nisi rhoncus eget pharetra non porttitor at augue.,Proin hendrerit magna ac elit bibendum." icon_style="ins-icon-list-simple" icon_size="list-icon-medium" border_bottom="select" icon_fontawesome="fa fa-check"][/vc_column_inner][vc_column_inner width="4/12"][vc_single_image image="445" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Sample Preparation" tab_id="1543490921194-0b4c9c7f-a0de"][insignia_section_heading title="Sample Preparation" subtitle="" align="text-left" add_icon="" heading_tag="h4" font_weight="default" sub_font_weight="default"][vc_column_text css=".vc_custom_1543492671513{margin-bottom: 25px !important;}"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in esse cillum dolore eu fugiat nulla pariatur.[/vc_column_text][vc_row_inner content_placement="middle"][vc_column_inner width="8/12"][insignia_simple_icon_list list_items="Orci varius natoque penatibus et magnis.,Nam imperdiet venenatis mauris vel dictum leo luctus non.,Maecenas quis mi egestas volutpat dolor ultricies vulputate.,Integer sem purus ullamcorper scelerisque felis eu.,Aenean mi nisi rhoncus eget pharetra non porttitor at augue.,Proin hendrerit magna ac elit bibendum." icon_style="ins-icon-list-simple" icon_size="list-icon-medium" border_bottom="select" icon_fontawesome="fa fa-check"][/vc_column_inner][vc_column_inner width="4/12"][vc_single_image image="445" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Healthcare Labs" tab_id="1543490919863-2919da44-1bb7"][insignia_section_heading title="Healthcare Labs" subtitle="" align="text-left" add_icon="" heading_tag="h4" font_weight="default" sub_font_weight="default"][vc_column_text css=".vc_custom_1543492671513{margin-bottom: 25px !important;}"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in esse cillum dolore eu fugiat nulla pariatur.[/vc_column_text][vc_row_inner content_placement="middle"][vc_column_inner width="8/12"][insignia_simple_icon_list list_items="Orci varius natoque penatibus et magnis.,Nam imperdiet venenatis mauris vel dictum leo luctus non.,Maecenas quis mi egestas volutpat dolor ultricies vulputate.,Integer sem purus ullamcorper scelerisque felis eu.,Aenean mi nisi rhoncus eget pharetra non porttitor at augue.,Proin hendrerit magna ac elit bibendum." icon_style="ins-icon-list-simple" icon_size="list-icon-medium" border_bottom="select" icon_fontawesome="fa fa-check"][/vc_column_inner][vc_column_inner width="4/12"][vc_single_image image="445" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Advanced Microscopy" tab_id="1543490919296-8267db7a-77b4"][insignia_section_heading title="Advanced Microscopy" subtitle="" align="text-left" add_icon="" heading_tag="h4" font_weight="default" sub_font_weight="default"][vc_column_text css=".vc_custom_1543492671513{margin-bottom: 25px !important;}"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in esse cillum dolore eu fugiat nulla pariatur.[/vc_column_text][vc_row_inner content_placement="middle"][vc_column_inner width="8/12"][insignia_simple_icon_list list_items="Orci varius natoque penatibus et magnis.,Nam imperdiet venenatis mauris vel dictum leo luctus non.,Maecenas quis mi egestas volutpat dolor ultricies vulputate.,Integer sem purus ullamcorper scelerisque felis eu.,Aenean mi nisi rhoncus eget pharetra non porttitor at augue.,Proin hendrerit magna ac elit bibendum." icon_style="ins-icon-list-simple" icon_size="list-icon-medium" border_bottom="select" icon_fontawesome="fa fa-check"][/vc_column_inner][vc_column_inner width="4/12"][vc_single_image image="445" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Advanced Robotics" tab_id="1543490918866-1c990d7b-ac8c"][insignia_section_heading title="Advanced Robotics" subtitle="" align="text-left" add_icon="" heading_tag="h4" font_weight="default" sub_font_weight="default"][vc_column_text css=".vc_custom_1543492671513{margin-bottom: 25px !important;}"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in esse cillum dolore eu fugiat nulla pariatur.[/vc_column_text][vc_row_inner content_placement="middle"][vc_column_inner width="8/12"][insignia_simple_icon_list list_items="Orci varius natoque penatibus et magnis.,Nam imperdiet venenatis mauris vel dictum leo luctus non.,Maecenas quis mi egestas volutpat dolor ultricies vulputate.,Integer sem purus ullamcorper scelerisque felis eu.,Aenean mi nisi rhoncus eget pharetra non porttitor at augue.,Proin hendrerit magna ac elit bibendum." icon_style="ins-icon-list-simple" icon_size="list-icon-medium" border_bottom="select" icon_fontawesome="fa fa-check"][/vc_column_inner][vc_column_inner width="4/12"][vc_single_image image="445" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Environmental Testing" tab_id="1543490917974-b0333be3-7079"][insignia_section_heading title="Environmental Testing" subtitle="" align="text-left" add_icon="" heading_tag="h4" font_weight="default" sub_font_weight="default"][vc_column_text css=".vc_custom_1543492671513{margin-bottom: 25px !important;}"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in esse cillum dolore eu fugiat nulla pariatur.[/vc_column_text][vc_row_inner content_placement="middle"][vc_column_inner width="8/12"][insignia_simple_icon_list list_items="Orci varius natoque penatibus et magnis.,Nam imperdiet venenatis mauris vel dictum leo luctus non.,Maecenas quis mi egestas volutpat dolor ultricies vulputate.,Integer sem purus ullamcorper scelerisque felis eu.,Aenean mi nisi rhoncus eget pharetra non porttitor at augue.,Proin hendrerit magna ac elit bibendum." icon_style="ins-icon-list-simple" icon_size="list-icon-medium" border_bottom="select" icon_fontawesome="fa fa-check"][/vc_column_inner][vc_column_inner width="4/12"][vc_single_image image="445" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Anatomical Pathology" tab_id="1543491018299-cac7a91f-b1f3"][insignia_section_heading title="Anatomical Pathology" subtitle="" align="text-left" add_icon="" heading_tag="h4" font_weight="default" sub_font_weight="default"][vc_column_text css=".vc_custom_1543492671513{margin-bottom: 25px !important;}"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in esse cillum dolore eu fugiat nulla pariatur.[/vc_column_text][vc_row_inner content_placement="middle"][vc_column_inner width="8/12"][insignia_simple_icon_list list_items="Orci varius natoque penatibus et magnis.,Nam imperdiet venenatis mauris vel dictum leo luctus non.,Maecenas quis mi egestas volutpat dolor ultricies vulputate.,Integer sem purus ullamcorper scelerisque felis eu.,Aenean mi nisi rhoncus eget pharetra non porttitor at augue.,Proin hendrerit magna ac elit bibendum." icon_style="ins-icon-list-simple" icon_size="list-icon-medium" border_bottom="select" icon_fontawesome="fa fa-check"][/vc_column_inner][vc_column_inner width="4/12"][vc_single_image image="445" img_size="full"][/vc_column_inner][/vc_row_inner][/vc_tta_section][/vc_tta_tour][vc_empty_space height="90px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//content-block 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Content Block-04', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/content-blocks4.jpg' );
	$data['sort_name'] = 'Content Blocks';
	$data['custom_class'] = 'content-blocks';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" color_scheme="white" css=".vc_custom_1544516754691{background-image: url(https://insigniathemes.com/clariwell/home-2/wp-content/uploads/sites/3/2018/11/lab-home2-1.jpg?id=491) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="70px"][vc_row_inner equal_height="yes" gap="30"][vc_column_inner width="5/12" css=".vc_custom_1544516742033{background-image: url(https://insigniathemes.com/clariwell/home-2/wp-content/uploads/sites/3/2018/11/lab-home2-3.jpg?id=586) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="300px"][/vc_column_inner][vc_column_inner width="7/12" css=".vc_custom_1543556276542{padding-left: 50px !important;}"][vc_empty_space height="40px"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545216200880{margin-bottom: 20px !important;}"]</p>
<h2>We ensure safe diagnoses and <span class="font-weight-400">effective therapies</span></h2>
<p>[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1544597952726{margin-bottom: 70px !important;}"]</p>
<p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
<p>[/vc_column_text][vc_progress_bar values="%5B%7B%22label%22%3A%22FINANCIAL%20SERVICES%22%2C%22value%22%3A%2290%22%2C%22color%22%3A%22custom%22%2C%22customtxtcolor%22%3A%22%23ffffff%22%7D%2C%7B%22label%22%3A%22BUSINESS%20SERVICES%22%2C%22value%22%3A%2270%22%2C%22color%22%3A%22custom%22%2C%22customtxtcolor%22%3A%22%23ffffff%22%7D%2C%7B%22label%22%3A%22DIGITAL%20STRATEGY%22%2C%22value%22%3A%2264%22%2C%22color%22%3A%22custom%22%2C%22customtxtcolor%22%3A%22%23ffffff%22%7D%5D" bgcolor="custom" css_animation="fadeIn" units="%" customtxtcolor="#ffffff" custombgcolor="#07a7e3"][vc_empty_space height="40px"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Counters 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter2.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1544523547562{background-image: url(https://insigniathemes.com/clariwell/home-2/wp-content/uploads/sites/3/2018/12/lab-home2-2.jpg?id=14339) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_title="" icon_text="" btn_check="" css_animation="ins-animated fadeIn" ib_animation_delay="200" title_font_weight="default" text_font_weight="default" icon_iconsmind="iconsmind-Chemical"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545216279015{margin-bottom: 20px !important;}"]</p>
<h3 class="text-center">Led by Passionate <span class="font-weight-400">Experts</span></h3>
<p>[/vc_column_text][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1543560213226{border-right-width: 1px !important;padding-right: 30px !important;padding-left: 30px !important;border-right-color: #cfe9f5 !important;border-right-style: solid !important;}"][counter title="Award Shows" number="300" icon_text="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod." add_icon="" align="text-center" css_animation="ins-animated fadeInUp" ib_animation_delay="200" num_size="70" title_size="18" number_font_weight="font-weight-600" title_font_weight="font-weight-600" num_color="#07a7e3" title_color="#074575" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1543560237193{border-right-width: 1px !important;padding-right: 30px !important;padding-left: 30px !important;border-right-color: #cfe9f5 !important;border-right-style: solid !important;}"][counter title="Permanent Staff" number="380" icon_text="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod." add_icon="" align="text-center" css_animation="ins-animated fadeInUp" ib_animation_delay="400" num_size="70" title_size="18" number_font_weight="font-weight-600" title_font_weight="font-weight-600" num_color="#07a7e3" title_color="#074575" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1543560244874{border-right-width: 1px !important;padding-right: 30px !important;padding-left: 30px !important;border-right-color: #cfe9f5 !important;border-right-style: solid !important;}"][counter title="Years of Experience" number="35" icon_text="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod." add_icon="" align="text-center" css_animation="ins-animated fadeInUp" ib_animation_delay="600" num_size="70" title_size="18" number_font_weight="font-weight-600" title_font_weight="font-weight-600" num_color="#07a7e3" title_color="#074575" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1543560250601{padding-top: 35px !important;padding-right: 30px !important;padding-left: 30px !important;}"][counter title="Suppliers" number="450" icon_text="Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod." add_icon="" align="text-center" css_animation="ins-animated fadeInUp" ib_animation_delay="800" num_size="70" title_size="18" number_font_weight="font-weight-600" title_font_weight="font-weight-600" num_color="#07a7e3" title_color="#074575" title_letter_spacing="letter-spacing-1"][/vc_column_inner][/vc_row_inner][vc_empty_space height="120px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Pricing 1 vc-template

	$data = array();
	$data['name'] = esc_html__( 'Pricing-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/pricing1.jpg' );
	$data['sort_name'] = 'Pricing';
	$data['custom_class'] = 'pricing-tables';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_title="" icon_text="" btn_check="" css_animation="ins-animated fadeIn" ib_animation_delay="200" title_font_weight="default" text_font_weight="default" icon_iconsmind="iconsmind-Chemical"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545216390111{margin-bottom: 20px !important;}"]</p>
<h3 class="text-center">Affordable <span class="font-weight-400">Health Packages</span></h3>
<p>[/vc_column_text][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row gap="35" equal_height="yes" color_scheme="white" css=".vc_custom_1543563428727{margin-bottom: 100px !important;}"][vc_column width="1/3" css=".vc_custom_1544516787557{padding-top: 45px !important;padding-right: 35px !important;padding-bottom: 35px !important;padding-left: 35px !important;background-image: url(https://insigniathemes.com/clariwell/home-2/wp-content/uploads/sites/3/2018/11/lab-pricing-bg-1.jpg?id=522) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_text css=".vc_custom_1543563499350{margin-bottom: 25px !important;}"]</p>
<h6 class="text-extra-small letter-spacing-2 font-weight-500 margin-5px-bottom">BASIC PACKAGE</h6>
<h4 class="letter-spacing-1">Basic Blood Profile</h4>
<p>It is a long established fact that a reader will the readable content.[/vc_column_text][insignia_simple_icon_list list_items="Fasting Required: 10-14 Hours,Report available: Same Day,Receive Report by Email" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="select" icon_color="#ffffff" icon_fontawesome="fa fa-circle-thin"][vc_row_inner][vc_column_inner width="1/2"][vc_column_text css=".vc_custom_1545131355785{margin-top: 10px !important;margin-bottom: 10px !important;}"]</p>
<h3>$88.00</h3>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1545130428901{padding-right: 9px !important;padding-left: 9px !important;}"][insignia_button btn_text="View More" btn_link="url:%23|||" button_size="btn-small" border_radius="btn-radius-default" button_align="text-right" enable_icon="" text_transform="text-uppercase" margin_top="10px" margin_bottom="10px" css_animation="ins-animated zoomIn" text_font_weight="font-weight-700" text_color="#07a7e3" hover_text_color="#ffffff" btn_bg_color="#ffffff" hover_bg_color="rgba(255,255,255,0.01)" border_color="#ffffff" hover_border_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3" css=".vc_custom_1544516797236{padding-top: 45px !important;padding-right: 35px !important;padding-bottom: 35px !important;padding-left: 35px !important;background-image: url(https://insigniathemes.com/clariwell/home-2/wp-content/uploads/sites/3/2018/11/lab-pricing-bg-2.jpg?id=525) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_text css=".vc_custom_1543563547359{margin-bottom: 25px !important;}"]</p>
<h6 class="text-extra-small letter-spacing-2 font-weight-500 margin-5px-bottom">BASIC PACKAGE</h6>
<h4 class="letter-spacing-1">Gold Health Check</h4>
<p>It is a long established fact that a reader will the readable content.</p>
<p>[/vc_column_text][insignia_simple_icon_list list_items="Fasting Required: 10-14 Hours,Report available: Same Day,Receive Report by Email" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="select" icon_color="#ffffff" icon_fontawesome="fa fa-circle-thin"][vc_row_inner][vc_column_inner width="1/2"][vc_column_text css=".vc_custom_1545131363700{margin-top: 10px !important;margin-bottom: 10px !important;}"]</p>
<h3>$99.00</h3>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1545130435557{padding-right: 9px !important;padding-left: 9px !important;}"][insignia_button btn_text="View More" btn_link="url:%23|||" button_size="btn-small" border_radius="btn-radius-default" button_align="text-right" enable_icon="" text_transform="text-uppercase" margin_top="10px" margin_bottom="10px" css_animation="ins-animated zoomIn" ib_animation_delay="200" text_font_weight="font-weight-700" text_color="#07a7e3" hover_text_color="#ffffff" btn_bg_color="#ffffff" hover_bg_color="rgba(255,255,255,0.01)" border_color="#ffffff" hover_border_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3" css=".vc_custom_1544516806351{padding-top: 45px !important;padding-right: 35px !important;padding-bottom: 35px !important;padding-left: 35px !important;background-image: url(https://insigniathemes.com/clariwell/home-2/wp-content/uploads/sites/3/2018/11/lab-pricing-bg-3.jpg?id=559) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_text css=".vc_custom_1543563648382{margin-bottom: 25px !important;}"]</p>
<h6 class="text-extra-small letter-spacing-2 font-weight-500 margin-5px-bottom">BASIC PACKAGE</h6>
<h4 class="letter-spacing-1">Platinum Health Check</h4>
<p>It is a long established fact that a reader will the readable content.[/vc_column_text][insignia_simple_icon_list list_items="Fasting Required: 10-14 Hours,Report available: Same Day,Receive Report by Email" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="select" icon_color="#ffffff" icon_fontawesome="fa fa-circle-thin"][vc_row_inner][vc_column_inner width="1/2"][vc_column_text css=".vc_custom_1545131371287{margin-top: 10px !important;margin-bottom: 10px !important;}"]</p>
<h3>$199.00</h3>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1545130442540{padding-right: 9px !important;padding-left: 9px !important;}"][insignia_button btn_text="View More" btn_link="url:%23|||" button_size="btn-small" border_radius="btn-radius-default" button_align="text-right" enable_icon="" text_transform="text-uppercase" margin_top="10px" margin_bottom="10px" css_animation="ins-animated zoomIn" ib_animation_delay="400" text_font_weight="font-weight-700" text_color="#07a7e3" hover_text_color="#ffffff" btn_bg_color="#ffffff" hover_bg_color="rgba(255,255,255,0.01)" border_color="#ffffff" hover_border_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Testimonials 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial2.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1545291552858{background-color: #f3fbff !important;}"][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_title="" icon_text="" btn_check="" css_animation="ins-animated fadeIn" ib_animation_delay="200" title_font_weight="default" text_font_weight="default" icon_iconsmind="iconsmind-Chemical"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545286553208{margin-bottom: 20px !important;}"]</p>
<h3 class="text-center">What Our <span class="font-weight-400">Patient Say</span></h3>
<p>[/vc_column_text][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][vc_empty_space height="20px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][testimonial testimonial_layout="style-1" posts_nr="4" autoplay="true" slidetoshow="3" testimonial_navigation_dots="true" italic_font=""][vc_empty_space height="90px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Call to Action 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action1.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" color_scheme="white" css=".vc_custom_1545049276160{background: #074575 url(https://insigniathemes.com/clariwell/home-2/wp-content/uploads/sites/3/2018/12/clariwell-blue-bg.jpg?id=14478) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn"]</p>
<div class="text-center">
<h6 class="margin-20px-bottom extra-medium letter-spacing-1">WELCOME TO LABORATORY</h6>
<h1 class="margin-60px-bottom" style="font-size: 60px; line-height: 75px; letter-spacing: 2px;">Best Outcome For <span class="font-weight-400">Every Patient</span> Every Time</h1>
</div>
<p>[/vc_column_text][insignia_button btn_text="Purchase Now" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-center" enable_icon="" text_transform="text-uppercase" margin_top="20px" margin_bottom="40px" css_animation="ins-animated zoomIn" ib_animation_delay="200" text_font_weight="font-weight-700"][vc_column_text css_animation="fadeIn"]</p>
<h6 class="text-center">or contact us via <a style="text-decoration: underline; color: #fff;" href="mailto:support@invictus.com">support@clariwell.com</a></h6>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]	
CONTENT;

$templates[] = $data;

//Accordions 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Accordions-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/accordions1.jpg' );
	$data['sort_name'] = 'Accordions';
	$data['custom_class'] = 'accordions';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_title="" icon_text="" btn_check="" css_animation="ins-animated fadeIn" ib_animation_delay="200" title_font_weight="default" text_font_weight="default" icon_iconsmind="iconsmind-Chemical"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545216549272{margin-bottom: 20px !important;}"]</p>
<h3 class="text-center">Your Questions, <span class="font-weight-400">Our Answers</span></h3>
<p>[/vc_column_text][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][/vc_column][/vc_row][vc_row gap="35" equal_height="yes" content_placement="middle" css=".vc_custom_1543566956254{margin-bottom: 60px !important;}"][vc_column width="1/2" css=".vc_custom_1544524003455{background-image: url(https://insigniathemes.com/clariwell/home-2/wp-content/uploads/sites/3/2018/12/lab-research-1.jpg?id=14361) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="120px"][vc_video_box title="" description="" link="https://youtu.be/7e90gBu4pas"][vc_empty_space height="120px"][/vc_column][vc_column width="1/2" css=".vc_custom_1543565709534{padding-top: 15px !important;}"][vc_tta_accordion style="insignia_accordion_layout1" active_section="1"][vc_tta_section title="Amet justo donec enim diam quis" tab_id="1543565177437-20b495c7-54fd"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.[/vc_column_text][/vc_tta_section][vc_tta_section title="Fermentum iaculis eu non diam phasellus" tab_id="1543565666981-dc679ffb-0d9e"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.[/vc_column_text][/vc_tta_section][vc_tta_section title="Ornare quam viverra orci sagittis" tab_id="1543565665714-646fed24-8f47"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.[/vc_column_text][/vc_tta_section][vc_tta_section title="Adipiscing elit duis tristique sollicitudin" tab_id="1543565226134-717f5185-6841"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Clients 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Clients-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/clients1.jpg' );
	$data['sort_name'] = 'Clients';
	$data['custom_class'] = 'clients';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1545045427078{margin-bottom: 70px !important;padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column css=".vc_custom_1543566513850{padding-top: 0px !important;}"][insignia_clients_logos images="14353,14355,14352,14354,14356,14357,14358,14359" cols="5" dots="false"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Contact 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact2.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][insignia_google_map address="40.719175,-74.0015925" map_style="light" map_business_panel_settings="left_info_panel" map_business_name="Contact Info" map_business_address="25, Suitland Street, New York, NY 10012, USA." map_business_email="admin@insignia.com" map_business_phone="+1-999-9999-9999" map_business_opening_hours="Working Hours" map_business_schedule="%5B%7B%22map_schedule_day_name%22%3A%22Monday%20to%20Friday%22%2C%22map_schedule_day_hours%22%3A%229%20AM%20to%2010%20PM%5Cn%22%7D%2C%7B%22map_schedule_day_name%22%3A%22Saturday%20%26%20Sunday%22%2C%22map_schedule_day_hours%22%3A%2210%20AM%20to%2010%20PM%22%7D%5D"][/vc_column][/vc_row]</p>
CONTENT;

$templates[] = $data;

//Home 3

//content-block 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Content Block-05', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/content-blocks5.jpg' );
	$data['sort_name'] = 'Content Blocks';
	$data['custom_class'] = 'content-blocks';
	$data['content'] = <<<CONTENT
[vc_row equal_height="yes" content_placement="middle" css=".vc_custom_1545045615735{margin-top: 85px !important;}"][vc_column width="5/12" css=".vc_custom_1543814343958{padding-top: 50px !important;padding-right: 40px !important;padding-bottom: 40px !important;padding-left: 40px !important;background-color: #f7fbfd !important;}"][insignia_section_heading title="Welcome to Clariwell" subtitle="" align="text-left" c_margin_bottom="20px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h3" font_weight="default" heading_letter_spacing="letter-spacing-1" sub_font_weight="default"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544598998644{margin-bottom: 20px !important;}"]</p>
<p class="text-medium">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa placerat duis ultricies lacus sed turpis tincidunt. Massa tincidunt dui ut ornare lectus sit amet. Turpis egestas pretium aenean pharetra magna ac placerat vestibulum.</p>
<p>[/vc_column_text][/vc_column][vc_column width="7/12" css=".vc_custom_1544522234063{background-image: url(https://insigniathemes.com/clariwell/home-3/wp-content/uploads/sites/4/2018/11/lab-home1-3.jpg?id=411) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="300px"][/vc_column][/vc_row][vc_row equal_height="yes" content_placement="middle"][vc_column width="5/12" css=".vc_custom_1543581543126{padding-top: 50px !important;padding-right: 40px !important;padding-bottom: 40px !important;padding-left: 40px !important;background-color: #074575 !important;}"][insignia_section_heading title="About Clariwell" subtitle="" align="text-left" c_margin_bottom="20px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h4" font_weight="default" heading_letter_spacing="letter-spacing-1" heading_color="#ffffff" sub_font_weight="default"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544599013056{margin-bottom: 25px !important;}"]</p>
<p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Massa placerat duis ultricies lacus sed turpis tincidunt. Massa tincidunt dui ut ornare lectus sit amet. Turpis egestas pretium aenean pharetra magna.</p>
<p>[/vc_column_text][insignia_button btn_text="How We Work" btn_link="url:%23|||" button_size="btn-small" border_radius="btn-radius-default" button_align="text-left" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated fadeInUp" ib_animation_delay="200" text_font_weight="font-weight-700" text_color="#ffffff" hover_text_color="#ffffff"][/vc_column][vc_column width="7/12" css=".vc_custom_1543832873041{padding-left: 40px !important;background-color: #f7fbfd !important;}"][vc_row_inner][vc_column_inner width="1/2"][insignia_section_heading title="What we do?" subtitle="" align="text-left" c_margin_bottom="20px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h4" font_weight="default" heading_letter_spacing="letter-spacing-1" sub_font_weight="default"][insignia_simple_icon_list list_items="Sed ut perspiciatis unde omnis,Iste natus error sit voluptatem,Sint occaecati cupiditate tempore,Accumsan sit amet nulla,Reiciendis voluptatibus alias,Quis autem vel iure repre" icon_style="ins-icon-list-simple" icon_size="list-icon-small" border_bottom="select" css_animation="ins-animated fadeInUp" ib_animation_delay="200" icon_fontawesome="fa fa-check"][/vc_column_inner][vc_column_inner width="1/2"][vc_single_image image="14334" img_size="full" css_animation="fadeIn"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//icon-box 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-boxes2.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-boxes';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="110px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Your full-service lab for clinical trials" subtitle="WHY CHOOSE CLARIWELL" align="text-center" sub_position="subtitle-top" c_margin_bottom="20px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h3" font_weight="default" subtitle_letter_spacing="letter-spacing-2" sub_font_weight="default" subtitle_color="#07a7e3"][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_title="Qualified Staff" icon_text="Lorem Ipsum is simply text of the printing and typesetting industry Lorem Ipsum has been." btn_check="" css_animation="ins-animated fadeInUp" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#07a7e3" title_color="#074575" icon_iconsmind="iconsmind-Doctor"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_title="Latest Equipment" icon_text="Lorem Ipsum is simply text of the printing and typesetting industry Lorem Ipsum has been." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="200" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#07a7e3" title_color="#074575" icon_iconsmind="iconsmind-Chemical-3"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_title="Highest Quality Results" icon_text="Lorem Ipsum is simply text of the printing and typesetting industry Lorem Ipsum has been." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="400" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#07a7e3" title_color="#074575" icon_iconsmind="iconsmind-Approved-Window"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_title="State of the Art Facility" icon_text="Lorem Ipsum is simply text of the printing and typesetting industry Lorem Ipsum has been." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="200" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#07a7e3" title_color="#074575" icon_iconsmind="iconsmind-Medical-Sign"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_title="Unmatched Expertise" icon_text="Lorem Ipsum is simply text of the printing and typesetting industry Lorem Ipsum has been." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="400" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#07a7e3" title_color="#074575" icon_iconsmind="iconsmind-Atom"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-icon-box-align-left-basic" icon_title="Awarded Accolades" icon_text="Lorem Ipsum is simply text of the printing and typesetting industry Lorem Ipsum has been." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="600" title_font="text-large" title_font_weight="font-weight-600" text_font_weight="default" title_letter_spacing="letter-spacing-1" icon_color="#07a7e3" title_color="#074575" icon_iconsmind="iconsmind-Medal-2"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Counters 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-03', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter3.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1544683978390{background-image: url(https://insigniathemes.com/clariwell/home-3/wp-content/uploads/sites/4/2018/12/clariwell-footer-bg.jpg?id=14352) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="80px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Discoveries to Change Lives" subtitle="WHO WE ARE" align="text-center" sub_position="subtitle-top" c_margin_bottom="15px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h3" font_weight="default" heading_color="#ffffff" subtitle_letter_spacing="letter-spacing-2" sub_font_weight="default" subtitle_color="#07a7e3"][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center text-white text-medium">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="330px"][/vc_column][/vc_row][vc_row equal_height="yes" content_placement="middle" css=".vc_custom_1543820785578{margin-top: -300px !important;}"][vc_column width="1/2" enable_shadow="true" css=".vc_custom_1544522287710{background: #074575 url(https://insigniathemes.com/clariwell/home-3/wp-content/uploads/sites/4/2018/11/lab-home2-3.jpg?id=586) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="250px"][/vc_column][vc_column width="1/2" enable_shadow="true" css=".vc_custom_1543819647553{padding-top: 70px !important;padding-right: 50px !important;padding-bottom: 60px !important;padding-left: 50px !important;background-color: #ffffff !important;}"][insignia_section_heading title="Qualified Staff With Expertise in Services We Offer for more Resonable cost with love, Just explore about More!" subtitle="" align="text-left" c_margin_bottom="35px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h5" font_weight="default" sub_font_weight="default" extra_class="text-center-mobile"][vc_row_inner][vc_column_inner width="1/3"][counter title="Award Shows" number="350" icon_text="" add_icon="1" icon_layout="ins-count-icon" count_layout="default" align="text-center" text_transform="text-transform-none" css_animation="ins-animated fadeInUp" ib_animation_delay="200" icon_size="50" num_size="45" title_size="17" number_font_weight="font-weight-700" title_font_weight="font-weight-600" icon_color="#07a7e3" num_color="#074575" title_color="#07a7e3" title_letter_spacing="letter-spacing-1" icon_iconsmind="iconsmind-Medal-3"][/vc_column_inner][vc_column_inner width="1/3"][counter title="Team Members" number="500" icon_text="" add_icon="1" icon_layout="ins-count-icon" count_layout="default" align="text-center" text_transform="text-transform-none" css_animation="ins-animated fadeInUp" ib_animation_delay="400" icon_size="50" num_size="45" title_size="17" number_font_weight="font-weight-700" title_font_weight="font-weight-600" icon_color="#07a7e3" num_color="#074575" title_color="#07a7e3" title_letter_spacing="letter-spacing-1" icon_iconsmind="iconsmind-Doctor"][/vc_column_inner][vc_column_inner width="1/3"][counter title="Suppliers" number="450" icon_text="" add_icon="1" icon_layout="ins-count-icon" count_layout="default" align="text-center" text_transform="text-transform-none" css_animation="ins-animated fadeInUp" ib_animation_delay="600" icon_size="50" num_size="45" title_size="17" number_font_weight="font-weight-700" title_font_weight="font-weight-600" icon_color="#07a7e3" num_color="#074575" title_color="#07a7e3" title_letter_spacing="letter-spacing-1" icon_iconsmind="iconsmind-Chemical"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_column_text css_animation="fadeIn" el_class="text-center-mobile"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Porta lorem mollis aliquam ut porttitor leo a.[/vc_column_text][insignia_button btn_text="Read More" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-left" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated fadeInUp" extra_class="text-center-mobile" text_font_weight="font-weight-700" text_color="#ffffff" hover_text_color="#ffffff"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Teams 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Team-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/team2.jpg' );
	$data['sort_name'] = 'Teams';
	$data['custom_class'] = 'team-members';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="100px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Led by Passionate Experts" subtitle="MEET OUR TEAM" align="text-center" sub_position="subtitle-top" c_margin_bottom="15px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h3" font_weight="default" subtitle_letter_spacing="letter-spacing-2" sub_font_weight="default" subtitle_color="#07a7e3"][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][vc_row_inner][vc_column_inner width="1/4"][vc_single_image image="620" img_size="229x229" alignment="center" style="vc_box_circle" css_animation="fadeIn" css=".vc_custom_1544599601836{margin-bottom: 20px !important;}"][vc_column_text css_animation="fadeInUp"]</p>
<div class="text-center">
<h5 style="margin-bottom: 5px;">Elsa Minor</h5>
<p style="font-size: 16px;">Dentist</p>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="619" img_size="229x229" alignment="center" style="vc_box_circle" css_animation="fadeIn" css=".vc_custom_1544599608965{margin-bottom: 20px !important;}"][vc_column_text css_animation="fadeInUp"]</p>
<div class="text-center">
<h5 style="margin-bottom: 5px;">Milton Glaser</h5>
<p style="font-size: 16px;">Dental Assistant</p>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="621" img_size="229x229" alignment="center" style="vc_box_circle" css_animation="fadeIn" css=".vc_custom_1544599617159{margin-bottom: 20px !important;}"][vc_column_text css_animation="fadeInUp"]</p>
<div class="text-center">
<h5 style="margin-bottom: 5px;">Mark Anthony</h5>
<p style="font-size: 16px;">Dentist</p>
</div>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][vc_single_image image="627" img_size="229x229" alignment="center" style="vc_box_circle" css_animation="fadeIn" css=".vc_custom_1544599624599{margin-bottom: 20px !important;}"][vc_column_text css_animation="fadeInUp"]</p>
<div class="text-center">
<h5 style="margin-bottom: 5px;">Robert Reed</h5>
<p style="font-size: 16px;">Dentist</p>
</div>
<p>[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_empty_space height="80px"][/vc_column][/vc_row]
CONTENT;


$templates[] = $data;

//Call to Action 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action2.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" equal_height="yes" content_placement="middle" css=".vc_custom_1543835077385{padding-top: 50px !important;padding-bottom: 50px !important;background-color: #074575 !important;}"][vc_column width="3/4" css=".vc_custom_1543390331922{padding-top: 0px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544599424766{margin-bottom: 0px !important;}"]</p>
<h3 class="text-white" style="font-size: 30px;">Get Your Quote or Call: (0090) 987-444-123</h3>
<p class="text-medium text-white" style="letter-spacing: 1px;">Pellentesque habitant morbi tristique senectus habitant morbi.</p>
<p>[/vc_column_text][/vc_column][vc_column width="1/4" css=".vc_custom_1543390348434{padding-top: 0px !important;}"][insignia_button btn_text="Contact us" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-right" enable_icon="" text_transform="text-uppercase" margin_top="20px" margin_bottom="20px" css_animation="ins-animated zoomIn" ib_animation_delay="200" text_font_weight="font-weight-700" hover_bg_color="#074575" hover_border_color="#ffffff"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Pricing 2 vc-template

	$data = array();
	$data['name'] = esc_html__( 'Pricing-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/pricing2.jpg' );
	$data['sort_name'] = 'Pricing';
	$data['custom_class'] = 'pricing-tables';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Affordable Health Packages" subtitle="PRICING PLANS" align="text-center" sub_position="subtitle-top" c_margin_bottom="15px" add_icon="" heading_tag="h3" font_weight="default" subtitle_letter_spacing="letter-spacing-2" sub_font_weight="default" subtitle_color="#07a7e3"][vc_column_text css=".vc_custom_1543822674890{margin-bottom: 15px !important;}"]</p>
<p class="text-center">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="20"][vc_column_inner width="1/3"][pricing_box style="style1" custom_image="355" title="Basic Blood Profile" subtitle="" price="88" features="Fasting Required: 10-14 Hours,Report available: Same Day,Receive Report by Email" content_alignment="text-center" btn_border_radius="btn-radius-default" css_animation="ins-animated fadeInUp" ib_animation_delay="200"][/vc_column_inner][vc_column_inner width="1/3"][pricing_box style="style1" custom_image="356" title="Gold Health Check" subtitle="" features="Fasting Required: 10-14 Hours,Report available: Same Day,Receive Report by Email" content_alignment="text-center" btn_border_radius="btn-radius-default" css_animation="ins-animated fadeInUp" ib_animation_delay="400"][/vc_column_inner][vc_column_inner width="1/3"][pricing_box style="style1" custom_image="354" title="Platinum Health Check" subtitle="" price="199" features="Fasting Required: 10-14 Hours,Report available: Same Day,Receive Report by Email" content_alignment="text-center" btn_border_radius="btn-radius-default" css_animation="ins-animated fadeInUp" ib_animation_delay="600"][/vc_column_inner][/vc_row_inner][vc_empty_space height="110px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Portfolio 1 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Portfolio-01', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/portfolio1.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1544697979450{background-image: url(https://insigniathemes.com/clariwell/home-3/wp-content/uploads/sites/4/2018/12/lab-page-title.jpg?id=902) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="430px"][/vc_column][/vc_row][vc_row css=".vc_custom_1544618846501{margin-top: -400px !important;}" el_id="case-studies"][vc_column][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Our Latest Work" subtitle="PORTFOLIO" align="text-center" sub_position="subtitle-top" c_margin_bottom="15px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h3" font_weight="default" heading_letter_spacing="letter-spacing-2" heading_color="#ffffff" sub_font_weight="default" subtitle_color="#07a7e3"][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center text-white text-medium">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="50px"][portfolio port_layout="port_grid3" port_on_hover="layout_2" port_cat="laboratory" port_filter="" port_no_posts="6" port_overlay_color="#07a7e3" css_animation="ins-animated fadeInUp" ib_animation_delay="200" title_size="19" category_size="15" css=".vc_custom_1545132462085{padding-bottom: 40px !important;}"][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Blog 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Blog-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/blog2.jpg' );
	$data['sort_name'] = 'Blog';
	$data['custom_class'] = 'blog';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1543836171038{background-color: #f7fbfd !important;}"][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Publish What you Think" subtitle="NEWS & BLOG" align="text-center" sub_position="subtitle-top" c_margin_bottom="15px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h3" font_weight="default" subtitle_letter_spacing="letter-spacing-2" sub_font_weight="default" subtitle_color="#07a7e3"][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][blog_news blog_style="blog_grid" blog_layout="3Columns" post_cat="" blog_no_posts="3" blog_gap="10"][insignia_button btn_text="View More" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-center" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated zoomIn" text_font_weight="font-weight-700" text_color="#ffffff" hover_text_color="#ffffff"][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Contact 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-03', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact3.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT
[vc_row gap="15" equal_height="yes" content_placement="middle" css=".vc_custom_1545046018823{padding-top: 70px !important;padding-bottom: 30px !important;}"][vc_column width="1/2"][vc_custom_heading text="125, Suitland Street, New York" font_container="tag:h4|font_size:27px|text_align:left" use_theme_fonts="yes" css=".vc_custom_1544104185766{margin-bottom: 15px !important;}"][vc_custom_heading text="Email: contact@clariwell.com" font_container="tag:h5|text_align:left" use_theme_fonts="yes" css=".vc_custom_1544103477687{margin-bottom: 5px !important;}"][vc_custom_heading text="Phone: + (100) 1234 6598" font_container="tag:h5|text_align:left" use_theme_fonts="yes" css=".vc_custom_1544103382270{margin-bottom: 20px !important;}"][vc_custom_heading text="Lorem ipsum dolor sit amet, adipiscing elit, sed do tempor incididunt ut labore et dolore magna aliqua." font_container="tag:h6|text_align:left|color:%23888888" use_theme_fonts="yes" css=".vc_custom_1544103754742{margin-bottom: 30px !important;}" el_class="font-weight-400"][insignia_social_icons color="colorful" border_radius="round" icon_size="regular" hover_effect="none" icon_align="left" css_animation="ins-animated zoomIn" ib_animation_delay="200" twitter="#" facebook="#" linkedin="#" google-plus="#" instagram="#"][/vc_column][vc_column width="1/2"][contact-form-7 id="13965"][/vc_column][/vc_row]</p>
CONTENT;

$templates[] = $data;

//Home 4

//content-block 6 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Content Block-06', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/content-blocks6.jpg' );
	$data['sort_name'] = 'Content Blocks';
	$data['custom_class'] = 'content-blocks';
	$data['content'] = <<<CONTENT
[vc_row gap="30" equal_height="yes" css=".vc_custom_1545046105919{margin-top: 70px !important;margin-bottom: 115px !important;}"][vc_column width="1/4" css=".vc_custom_1544079748759{background-image: url(https://insigniathemes.com/clariwell/home-4/wp-content/uploads/sites/5/2018/12/team-home3-3.jpg?id=621) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="200px"][/vc_column][vc_column width="5/12"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545217075407{margin-bottom: 20px !important;}"]</p>
<h3>Welcome to <span class="font-weight-400">Laboratory!</span></h3>
<p>[/vc_column_text][vc_column_text css_animation="fadeIn"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In vitae turpis massa sed elementum tempus egestas sed sed. Turpis egestas integer eget aliquet nibh praesent tristique magna. Molestie a iaculis at erat pellentesque adipiscing. Cras ornare arcu dui vivamus.[/vc_column_text][vc_single_image image="14339" img_size="full" css_animation="fadeIn"][/vc_column][vc_column width="1/3" css=".vc_custom_1544081112505{padding-top: 30px !important;padding-right: 40px !important;padding-bottom: 30px !important;padding-left: 40px !important;background-color: #074575 !important;}"][insignia_section_heading title="Opening Hours" subtitle="" align="text-left" c_margin_bottom="15px" add_icon="" css_animation="ins-animated fadeIn" ib_animation_delay="200" heading_tag="h4" font_weight="default" heading_letter_spacing="letter-spacing-1" heading_color="#ffffff" sub_font_weight="default"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544600062365{margin-bottom: 25px !important;}"]</p>
<p class="text-white"><span style="color: #ffffff; font-size: 15px; line-height: 24px;">Monday to Friday : 10.00 - 18.00</span><br />
<span style="color: #ffffff; font-size: 15px; line-height: 24px;"> Sunday : Closed</span></p>
<p>[/vc_column_text][insignia_section_heading title="Our Location" subtitle="" align="text-left" c_margin_bottom="15px" add_icon="" css_animation="ins-animated fadeIn" ib_animation_delay="200" heading_tag="h4" font_weight="default" heading_letter_spacing="letter-spacing-1" heading_color="#ffffff" sub_font_weight="default"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544600080206{margin-bottom: 20px !important;}"]</p>
<p class="text-white">We are located at <a style="color: #fff;" href="https://goo.gl/maps/aFsaL19J3SH2" target="_blank" rel="noopener">25, Suitland Street, New York,NY 10012, USA.</a></p>
<p>[/vc_column_text][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Counters 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Counters-04', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/counter4.jpg' );
	$data['sort_name'] = 'Counters';
	$data['custom_class'] = 'counters';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1544524551494{background-image: url(https://insigniathemes.com/clariwell/home-4/wp-content/uploads/sites/5/2018/12/lab-home4-1.jpg?id=1010) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="3/4"][vc_empty_space height="70px"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545292976261{margin-bottom: 20px !important;}"]</p>
<h3>We’ll ensure you always get <span class="font-weight-400">the best Results.</span></h3>
<p>[/vc_column_text][vc_column_text css_animation="fadeIn" css=".vc_custom_1544600114150{padding-right: 50px !important;}"]</p>
<p style="color: #656e75;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In vitae turpis massa sed elementum tempus egestas sed sed. Turpis egestas integer eget aliquet nibh praesent tristique magna.</p>
<p>[/vc_column_text][vc_empty_space height="20px"][vc_row_inner][vc_column_inner width="1/4"][counter title="Award Shows" number="130" icon_text="" add_icon="" align="text-left" text_transform="text-transform-none" css_animation="ins-animated fadeInUp" ib_animation_delay="200" num_size="50" title_size="20" number_font_weight="font-weight-600" title_font_weight="font-weight-600" num_color="#07a7e3" title_color="#074575" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4"][counter title="Suppliers" number="430" icon_text="" add_icon="" align="text-left" text_transform="text-transform-none" css_animation="ins-animated fadeInUp" ib_animation_delay="400" num_size="50" title_size="20" number_font_weight="font-weight-600" title_font_weight="font-weight-600" num_color="#07a7e3" title_color="#074575" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4"][counter title="Permanent Staff" number="350" icon_text="" add_icon="" align="text-left" text_transform="text-transform-none" css_animation="ins-animated fadeInUp" ib_animation_delay="600" num_size="50" title_size="20" number_font_weight="font-weight-600" title_font_weight="font-weight-600" num_color="#07a7e3" title_color="#074575" title_letter_spacing="letter-spacing-1"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Tabs 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Tabs-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/tabs2.jpg' );
	$data['sort_name'] = 'Tabs';
	$data['custom_class'] = 'tabs';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545217150051{margin-bottom: 20px !important;}"]</p>
<h3 class="text-center">Explore Our <span class="font-weight-400">Main Services</span></h3>
<p>[/vc_column_text][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_tta_tabs style="insignia_tab_layout3 title-font" active_section="1"][vc_tta_section title="Pathology Testing" tab_id="1544075674363-9dd76ecd-442b"][vc_row_inner content_placement="middle" gap="30" css=".vc_custom_1544082021446{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column_inner width="1/2"][vc_single_image image="354" img_size="full"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="Pathology Testing" subtitle="" align="text-left" c_margin_bottom="15px" add_icon="" heading_tag="h4" font_weight="default" heading_letter_spacing="letter-spacing-1" sub_font_weight="default"][vc_column_text]</p>
<p style="margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Morbi tristique senectus et netus et malesuada fames ac.[/vc_column_text][insignia_button btn_text="View More" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-left" enable_icon="" text_transform="text-uppercase" margin_bottom="35px" text_font_weight="font-weight-700" text_color="#ffffff" hover_text_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Chemical Research" tab_id="1544076000882-428e7164-4bfc"][vc_row_inner content_placement="middle" gap="30" css=".vc_custom_1544082096278{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column_inner width="1/2"][vc_single_image image="356" img_size="full"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="Chemical Research" subtitle="" align="text-left" c_margin_bottom="15px" add_icon="" heading_tag="h4" font_weight="default" heading_letter_spacing="letter-spacing-1" sub_font_weight="default"][vc_column_text]</p>
<p style="margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Morbi tristique senectus et netus et malesuada fames ac.[/vc_column_text][insignia_button btn_text="View More" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-left" enable_icon="" text_transform="text-uppercase" margin_bottom="35px" text_font_weight="font-weight-700" text_color="#ffffff" hover_text_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Advanced Microscopy" tab_id="1544075999562-00bd44e5-e6be"][vc_row_inner content_placement="middle" gap="30" css=".vc_custom_1544082133215{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column_inner width="1/2"][vc_single_image image="355" img_size="full"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="Advanced Microscopy" subtitle="" align="text-left" c_margin_bottom="15px" add_icon="" heading_tag="h4" font_weight="default" heading_letter_spacing="letter-spacing-1" sub_font_weight="default"][vc_column_text]</p>
<p style="margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Morbi tristique senectus et netus et malesuada fames ac.[/vc_column_text][insignia_button btn_text="View More" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-left" enable_icon="" text_transform="text-uppercase" margin_bottom="35px" text_font_weight="font-weight-700" text_color="#ffffff" hover_text_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Healthcare Labs" tab_id="1544076036616-624dc31f-48ab"][vc_row_inner content_placement="middle" gap="30" css=".vc_custom_1544082161254{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column_inner width="1/2"][vc_single_image image="736" img_size="full"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="Healthcare Labs" subtitle="" align="text-left" c_margin_bottom="15px" add_icon="" heading_tag="h4" font_weight="default" heading_letter_spacing="letter-spacing-1" sub_font_weight="default"][vc_column_text]</p>
<p style="margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Morbi tristique senectus et netus et malesuada fames ac.[/vc_column_text][insignia_button btn_text="View More" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-left" enable_icon="" text_transform="text-uppercase" margin_bottom="35px" text_font_weight="font-weight-700" text_color="#ffffff" hover_text_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Environmental Testing" tab_id="1544076683922-fc876e4a-2d5c"][vc_row_inner content_placement="middle" gap="30" css=".vc_custom_1544082188558{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column_inner width="1/2"][vc_single_image image="731" img_size="full"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="Environmental Testing" subtitle="" align="text-left" c_margin_bottom="15px" add_icon="" heading_tag="h4" font_weight="default" heading_letter_spacing="letter-spacing-1" sub_font_weight="default"][vc_column_text]</p>
<p style="margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Morbi tristique senectus et netus et malesuada fames ac.[/vc_column_text][insignia_button btn_text="View More" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-left" enable_icon="" text_transform="text-uppercase" margin_bottom="35px" text_font_weight="font-weight-700" text_color="#ffffff" hover_text_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Sample Preparation" tab_id="1544076682804-9d982b7c-9dd4"][vc_row_inner content_placement="middle" gap="30" css=".vc_custom_1544082230701{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column_inner width="1/2"][vc_single_image image="735" img_size="full"][/vc_column_inner][vc_column_inner width="1/2"][insignia_section_heading title="Sample Preparation" subtitle="" align="text-left" c_margin_bottom="15px" add_icon="" heading_tag="h4" font_weight="default" heading_letter_spacing="letter-spacing-1" sub_font_weight="default"][vc_column_text]</p>
<p style="margin-bottom: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Morbi tristique senectus et netus et malesuada fames ac.</p>
<p>Amet mattis vulputate enim nulla aliquet porttitor lacus luctus accumsan. Morbi tristique senectus et netus et malesuada fames ac.[/vc_column_text][insignia_button btn_text="View More" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-left" enable_icon="" text_transform="text-uppercase" margin_bottom="35px" text_font_weight="font-weight-700" text_color="#ffffff" hover_text_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_tta_section][/vc_tta_tabs][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//icon-box 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-03', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-boxes3.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-boxes';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" equal_height="yes"][vc_column width="1/3" css=".vc_custom_1544524582501{background-image: url(https://insigniathemes.com/clariwell/home-4/wp-content/uploads/sites/5/2018/11/lab-home2-3.jpg?id=586) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="300px"][/vc_column][vc_column width="2/3" css=".vc_custom_1544163033742{padding-top: 0px !important;background-color: #f7fbfd !important;}"][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_size="icon-large" icon_title="Qualified Staff" icon_text="Lorem ipsum dolor sit amet, elit do eiusmod tempor incididunt." btn_check="" css_animation="ins-animated fadeInUp" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#074575" icon_iconsmind="iconsmind-Add-User" css=".vc_custom_1544600343600{margin-bottom: 0px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;padding-top: 50px !important;padding-right: 30px !important;padding-bottom: 50px !important;padding-left: 30px !important;border-right-color: #e8f0f5 !important;border-right-style: solid !important;border-bottom-color: #e8f0f5 !important;border-bottom-style: solid !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_size="icon-large" icon_title="Latest Equipment" icon_text="Lorem ipsum dolor sit amet, elit do eiusmod tempor incididunt." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="200" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#074575" icon_iconsmind="iconsmind-Chemical-3" css=".vc_custom_1544600348763{margin-bottom: 0px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;padding-top: 50px !important;padding-right: 30px !important;padding-bottom: 50px !important;padding-left: 30px !important;border-right-color: #e8f0f5 !important;border-right-style: solid !important;border-bottom-color: #e8f0f5 !important;border-bottom-style: solid !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_size="icon-large" icon_title="Highest Quality Results" icon_text="Lorem ipsum dolor sit amet, elit do eiusmod tempor incididunt." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="400" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#074575" icon_iconsmind="iconsmind-Approved-Window" css=".vc_custom_1545134855280{margin-bottom: 0px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;padding-top: 50px !important;padding-right: 28px !important;padding-bottom: 50px !important;padding-left: 28px !important;border-right-color: #e8f0f5 !important;border-right-style: solid !important;border-bottom-color: #e8f0f5 !important;border-bottom-style: solid !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_size="icon-large" icon_title="State of the Art Facility" icon_text="Lorem ipsum dolor sit amet, elit do eiusmod tempor incididunt." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="200" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#074575" icon_iconsmind="iconsmind-Medical-Sign" css=".vc_custom_1545134846983{margin-bottom: 0px !important;border-right-width: 1px !important;padding-top: 50px !important;padding-right: 28px !important;padding-bottom: 50px !important;padding-left: 28px !important;border-right-color: #e8f0f5 !important;border-right-style: solid !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_size="icon-large" icon_title="Unmatched Expertise" icon_text="Lorem ipsum dolor sit amet, elit do eiusmod tempor incididunt." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="400" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#074575" icon_iconsmind="iconsmind-Atom" css=".vc_custom_1544600328824{margin-bottom: 0px !important;border-right-width: 1px !important;padding-top: 50px !important;padding-right: 30px !important;padding-bottom: 50px !important;padding-left: 30px !important;border-right-color: #e8f0f5 !important;border-right-style: solid !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-center" icon_size="icon-large" icon_title="Awarded Accolades" icon_text="Lorem ipsum dolor sit amet, elit do eiusmod tempor incididunt." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="600" title_font="text-large" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" title_color="#074575" icon_iconsmind="iconsmind-Medal-2" css=".vc_custom_1544600337816{margin-bottom: 0px !important;border-right-width: 1px !important;padding-top: 50px !important;padding-right: 30px !important;padding-bottom: 50px !important;padding-left: 30px !important;border-right-color: #e8f0f5 !important;border-right-style: solid !important;}"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//icon-box 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-04', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-boxes4.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-boxes';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1544083592439{background-image: url(https://insigniathemes.com/clariwell/home-4/wp-content/uploads/sites/5/2018/12/dotted-map.png?id=1002) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545217217635{margin-bottom: 20px !important;}"]</p>
<h3 class="text-center">Your full-service lab for <span class="font-weight-400">clinical trials</span></h3>
<p>[/vc_column_text][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="20"][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="14450" icon_align="text-left" icon_title="Laboratory services" icon_text="Lorem ipsum dolor sit amet elit adipiscing sed do eiusmod tempor incididunt labore." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="200" extra_class="inner-column-shadow" title_font="20" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" css=".vc_custom_1545467927044{padding-top: 50px !important;padding-right: 40px !important;padding-bottom: 30px !important;padding-left: 40px !important;background-color: #ffffff !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="14451" icon_align="text-left" icon_title="Analytical techniques" icon_text="Lorem ipsum dolor sit amet elit adipiscing sed do eiusmod tempor incididunt labore." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="400" extra_class="inner-column-shadow" title_font="20" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" css=".vc_custom_1545467935439{padding-top: 50px !important;padding-right: 40px !important;padding-bottom: 30px !important;padding-left: 40px !important;background-color: #ffffff !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_custom_icon_box layout_style="ins-top-icon-basic" custom_icon="14452" icon_align="text-left" icon_title="Laboratory accreditation" icon_text="Lorem ipsum dolor sit amet elit adipiscing sed do eiusmod tempor incididunt labore." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="600" extra_class="inner-column-shadow" title_font="20" title_font_weight="font-weight-500" text_font_weight="default" title_letter_spacing="letter-spacing-1" css=".vc_custom_1545467947687{padding-top: 50px !important;padding-right: 40px !important;padding-bottom: 30px !important;padding-left: 40px !important;background-color: #ffffff !important;}"][/vc_column_inner][/vc_row_inner][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Testimonials 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Testimonial-03', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/testimonial3.jpg' );
	$data['sort_name'] = 'Testimonials';
	$data['custom_class'] = 'testimonial';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1544773107900{background-image: url(https://insigniathemes.com/clariwell/home-4/wp-content/uploads/sites/5/2018/12/clariwell-blue-bg.jpg?id=14362) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_empty_space height="50px"][testimonial testimonial_layout="style-2" alignment="text-center" cats="laboratory" posts_nr="3" autoplay="false" slidetoshow="1" testimonial_navigation_dots="true" font_color="#ffffff" title_font_color="#ffffff" position_font_color="#ffffff" italic_font="1" text_font="20" text_line_height="35"][vc_empty_space height="90px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Blog 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Blog-03', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/blog3.jpg' );
	$data['sort_name'] = 'Blog';
	$data['custom_class'] = 'blog';
	$data['content'] = <<<CONTENT
[vc_row gap="15" css=".vc_custom_1544090872687{margin-top: 60px !important;margin-bottom: 90px !important;}"][vc_column width="5/12"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545217456109{margin-bottom: 40px !important;}"]</p>
<h3>Latest <span class="font-weight-400">News</span></h3>
<p>[/vc_column_text][blog_news blog_style="blog_list" post_cat="chemistry" blog_no_posts="3"][/vc_column][vc_column width="7/12"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545217462547{margin-bottom: 40px !important;}"]</p>
<h3>Frequently Asked <span class="font-weight-400">Questions</span></h3>
<p>[/vc_column_text][vc_tta_accordion style="insignia_accordion_layout1" active_section="1"][vc_tta_section title="Nascetur ridiculus mus mauris vitae ultricies" tab_id="1544089867039-92bc114d-fb65"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and specimen book. It has survived not only five centuries.[/vc_column_text][/vc_tta_section][vc_tta_section title="Risus in hendrerit gravida rutrum" tab_id="1544090253233-89281578-7fcc"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and specimen book. It has survived not only five centuries.[/vc_column_text][/vc_tta_section][vc_tta_section title="Nunc id cursus metus aliquam eleifend" tab_id="1544089906749-05266f7f-5458"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and specimen book. It has survived not only five centuries.[/vc_column_text][/vc_tta_section][vc_tta_section title="Sollicitudin tempor id eu nisl nunc" tab_id="1544089906284-da4c602e-07cd"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and specimen book. It has survived not only five centuries.[/vc_column_text][/vc_tta_section][vc_tta_section title="Vestibulum rhoncus est pellentesque elit" tab_id="1544089905476-5d254947-eaa8"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and specimen book. It has survived not only five centuries.[/vc_column_text][/vc_tta_section][/vc_tta_accordion][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Call to Action 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-03', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action3.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1544592883775{background-image: url(https://insigniathemes.com/clariwell/home-4/wp-content/uploads/sites/5/2018/12/lab-slide1.jpg?id=14209) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1544092713880{padding-top: 80px !important;padding-right: 13% !important;padding-bottom: 80px !important;padding-left: 13% !important;background-color: rgba(7,69,117,0.88) !important;*background-color: rgb(7,69,117) !important;}"][vc_column_text css_animation="fadeInUp" css=".vc_custom_1544600483301{margin-bottom: 0px !important;}"]</p>
<h3 class="text-white text-center margin-0px-bottom" style="font-weight: 400; line-height: 50px; font-size: 30px; max-width: 970px; margin: 0 auto;">We provide innovative <span style="color: #64d5ff;">product solutions</span> for sustainable progress. Our professional team works to increase productivity and cost effectiveness on the market.</h3>
<p>[/vc_column_text][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Clients 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Clients-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/clients2.jpg' );
	$data['sort_name'] = 'Clients';
	$data['custom_class'] = 'clients';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="70px"][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][vc_column_text css_animation="fadeIn" css=".vc_custom_1545217376406{margin-bottom: 20px !important;}"]</p>
<h3 class="text-center">Meet the happy <span class="font-weight-400">clients</span></h3>
<p>[/vc_column_text][vc_column_text css_animation="fadeIn"]</p>
<p class="text-center">On the other hand we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the pleasure of the desire that they cannot foresee.</p>
<p>[/vc_column_text][vc_empty_space height="30px"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner][insignia_clients_logos images="14337,14335,14336,14333,14334,14332,14331,14330" type="grid"][/vc_column_inner][/vc_row_inner][vc_empty_space height="30px"][insignia_button btn_text="Become a client" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-center" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated fadeInUp" text_font_weight="font-weight-700" text_color="#ffffff" hover_text_color="#ffffff"][vc_empty_space height="100px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Contact 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-04', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact4.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row_content_no_spaces"][vc_column][insignia_google_map address="40.719175,-74.0015925" map_style="light" map_business_panel_settings="right_info_panel" map_business_name="Contact Info" map_business_address="25, Suitland Street, New York, NY 10012, USA." map_business_email="admin@insignia.com" map_business_phone="+1 999 9999 9999" map_business_opening_hours="Working Hours" map_business_schedule="%5B%7B%22map_schedule_day_name%22%3A%22Monday%20to%20Friday%22%2C%22map_schedule_day_hours%22%3A%229%20AM%20to%2010%20PM%22%7D%2C%7B%22map_schedule_day_name%22%3A%22Saturday%20%26%20Sunday%22%2C%22map_schedule_day_hours%22%3A%2210%20AM%20to%2010%20PM%22%7D%5D"][/vc_column][/vc_row]</p>
CONTENT;

$templates[] = $data;

//Home 5

//icon-box 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Icon Boxes-05', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/icon-boxes5.jpg' );
	$data['sort_name'] = 'Icon Boxes';
	$data['custom_class'] = 'icon-boxes';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" gap="30" equal_height="yes" content_placement="middle" css=".vc_custom_1545046785919{margin-top: 55px !important;padding-bottom: 90px !important;background-image: url(https://insigniathemes.com/clariwell/home-5/wp-content/uploads/sites/6/2018/11/laboratory-pattern-bg1.jpg?id=292) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/2"][vc_row_inner gap="30"][vc_column_inner width="1/2" css=".vc_custom_1545136172846{padding-right: 60px !important;padding-left: 30px !important;background-image: url(https://insigniathemes.com/clariwell/home-5/wp-content/uploads/sites/6/2018/12/iconbox-bg-02.jpg?id=14017) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="30px"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_title="Latest Equipment" icon_text="" btn_check="" css_animation="ins-animated zoomIn" ib_animation_delay="200" title_font_weight="default" text_font_weight="default" title_letter_spacing="select" icon_color="#ffffff" title_color="#ffffff" icon_iconsmind="iconsmind-Chemical"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1545136179972{padding-right: 60px !important;padding-left: 30px !important;background-image: url(https://insigniathemes.com/clariwell/home-5/wp-content/uploads/sites/6/2018/12/iconbox-bg-03.jpg?id=14016) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="30px"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_title="Highest Quality Results" icon_text="" btn_check="" css_animation="ins-animated zoomIn" ib_animation_delay="400" title_font_weight="default" text_font_weight="default" title_letter_spacing="select" icon_color="#ffffff" title_color="#ffffff" icon_iconsmind="iconsmind-Approved-Window"][/vc_column_inner][/vc_row_inner][vc_row_inner gap="30"][vc_column_inner width="1/2" css=".vc_custom_1545136194947{padding-right: 60px !important;padding-left: 30px !important;background-image: url(https://insigniathemes.com/clariwell/home-5/wp-content/uploads/sites/6/2018/12/iconbox-bg-01.jpg?id=14018) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="30px"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_title="State of the Art Facility" icon_text="" btn_check="" css_animation="ins-animated zoomIn" ib_animation_delay="600" title_font_weight="default" text_font_weight="default" title_letter_spacing="select" icon_color="#ffffff" title_color="#ffffff" icon_iconsmind="iconsmind-Medical-Sign"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1545136200843{padding-right: 60px !important;padding-left: 30px !important;background-image: url(https://insigniathemes.com/clariwell/home-5/wp-content/uploads/sites/6/2018/12/iconbox-bg-04.jpg?id=14015) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_empty_space height="30px"][insignia_icon_box layout_style="ins-top-icon-basic" icon_align="text-left" icon_title="Unmatched Expertise" icon_text="" btn_check="" css_animation="ins-animated zoomIn" ib_animation_delay="800" title_font_weight="default" text_font_weight="default" title_letter_spacing="select" icon_color="#ffffff" title_color="#ffffff" icon_iconsmind="iconsmind-Medal-3"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2"][vc_custom_heading text="Welcome to Clariwell" font_container="tag:h6|text_align:left|color:%2307a7e3" use_theme_fonts="yes" css_animation="fadeIn"][vc_custom_heading text="Over 20 Years of Experience. We’ll Ensure You Always Get the Best Results." font_container="tag:h3|font_size:28px|text_align:left|line_height:39px" use_theme_fonts="yes" css_animation="fadeIn" el_class="no-letter-spacing" css=".vc_custom_1544601066981{margin-bottom: 20px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544601074145{margin-bottom: 25px !important;}"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Neque convallis a cras semper auctor neque vitae tempus.</p>
<p>Est placerat in egestas erat imperdiet sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Urna et pharetra pharetra massa.[/vc_column_text][insignia_button btn_text="Learn More" btn_link="url:%23|||" button_size="btn-medium" button_align="text-left" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated fadeInUp" ib_animation_delay="200" text_font_weight="font-weight-700"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Image-Boxes 3 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Image Boxes-03', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/image-boxes3.jpg' );
	$data['sort_name'] = 'Image Boxes';
	$data['custom_class'] = 'image-boxes';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1545046806590{padding-top: 70px !important;background-color: #f7fbfd !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="High Quality Services" subtitle="" align="text-center" border="heading-below-border" border_style="ins-border-solid" c_margin_bottom="20px" add_icon="" font_weight="default" sub_font_weight="default" border_color="#07a7e3"][vc_column_text css=".vc_custom_1544171125397{margin-bottom: 10px !important;}"]</p>
<p class="text-medium text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel fringilla est ullamcorper eget nulla etiam diam.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" gap="35" css=".vc_custom_1545046830695{padding-top: 30px !important;padding-bottom: 110px !important;background-color: #f7fbfd !important;}"][vc_column width="1/3" enable_shadow="true" css=".vc_custom_1544170357549{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 20px !important;padding-left: 0px !important;background-color: #ffffff !important;}"][vc_single_image image="354" img_size="full" css=".vc_custom_1544170008148{margin-bottom: 0px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544600831265{margin-bottom: 25px !important;padding-top: 30px !important;padding-right: 20px !important;padding-left: 20px !important;background-color: #ffffff !important;}"]</p>
<div class="text-center">
<h5 style="font-size: 22px;">Pathology Testing</h5>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt lacus sed.</div>
<p>[/vc_column_text][insignia_button btn_text="Read More" btn_link="url:%23|||" button_size="btn-small" button_align="text-center" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated zoomIn" ib_animation_delay="200" text_font_weight="font-weight-700"][/vc_column][vc_column width="1/3" enable_shadow="true" css=".vc_custom_1544170588935{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 20px !important;padding-left: 0px !important;background-color: #ffffff !important;}"][vc_single_image image="356" img_size="full" css=".vc_custom_1544170777785{margin-bottom: 0px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544600837084{margin-bottom: 25px !important;padding-top: 30px !important;padding-right: 20px !important;padding-left: 20px !important;background-color: #ffffff !important;}"]</p>
<div class="text-center">
<h5 style="font-size: 22px;">Chemical Research</h5>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt lacus sed.</div>
<p>[/vc_column_text][insignia_button btn_text="Read More" btn_link="url:%23|||" button_size="btn-small" button_align="text-center" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated zoomIn" ib_animation_delay="400" text_font_weight="font-weight-700"][/vc_column][vc_column width="1/3" enable_shadow="true" css=".vc_custom_1544170632658{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 20px !important;padding-left: 0px !important;background-color: #ffffff !important;}"][vc_single_image image="355" img_size="full" css=".vc_custom_1544170787241{margin-bottom: 0px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544600843680{margin-bottom: 25px !important;padding-top: 30px !important;padding-right: 20px !important;padding-left: 20px !important;background-color: #ffffff !important;}"]</p>
<div class="text-center">
<h5 style="font-size: 22px;">Advanced Microscopy</h5>
<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt lacus sed.</div>
<p>[/vc_column_text][insignia_button btn_text="Read More" btn_link="url:%23|||" button_size="btn-small" button_align="text-center" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated zoomIn" ib_animation_delay="600" text_font_weight="font-weight-700"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//content-block 7 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Content Block-07', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/content-blocks7.jpg' );
	$data['sort_name'] = 'Content Blocks';
	$data['custom_class'] = 'content-blocks';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1545046844930{padding-top: 120px !important;padding-bottom: 120px !important;background-image: url(https://insigniathemes.com/clariwell/home-5/wp-content/uploads/sites/6/2018/12/lab-home5-bg.jpg?id=14134) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/2" css=".vc_custom_1544182689421{padding-top: 60px !important;padding-right: 60px !important;padding-bottom: 40px !important;padding-left: 60px !important;background-color: #ffffff !important;}"][insignia_section_heading title="Your full-service lab for clinical trials" subtitle="Welcome to Clariwell" align="text-left" sub_position="subtitle-top" c_margin_bottom="25px" add_icon="" css_animation="ins-animated fadeIn" ib_animation_delay="200" heading_tag="h2" font_weight="default" heading_letter_spacing="letter-spacing-1" subtitle_fs="extra-medium" subtitle_letter_spacing="letter-spacing-1" sub_font_weight="font-weight-500" subtitle_color="#07a7e3"][vc_column_text css_animation="fadeIn"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sagittis purus sit amet volutpat. Commodo elit at imperdiet dui accumsan sit. Eros in cursus turpis massa tincidunt dui ut.[/vc_column_text][insignia_button btn_text="Contact Us" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-left" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated fadeInUp" ib_animation_delay="200" text_font_weight="font-weight-700" text_color="#ffffff" hover_text_color="#ffffff"][/vc_column][vc_column width="1/2"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//content-block 8 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Content Block-08', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/content-blocks8.jpg' );
	$data['sort_name'] = 'Content Blocks';
	$data['custom_class'] = 'content-blocks';
	$data['content'] = <<<CONTENT
[vc_row][vc_column][vc_empty_space height="60px"][vc_row_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="01." num_title="Latest Equipment" num_text="Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="200" title_font="text-large" number_font_weight="font-weight-700" title_font_weight="font-weight-600" title_color="#074575" css=".vc_custom_1545136487736{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;border-left-color: #ededed !important;border-left-style: solid !important;border-right-color: #ededed !important;border-right-style: solid !important;border-top-color: #ededed !important;border-top-style: solid !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="02." num_title="Highest Quality Results" num_text="Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="400" title_font="text-large" number_font_weight="font-weight-700" title_font_weight="font-weight-600" title_color="#074575" css=".vc_custom_1545136494752{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;border-left-color: #ededed !important;border-left-style: solid !important;border-right-color: #ededed !important;border-right-style: solid !important;border-top-color: #ededed !important;border-top-style: solid !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;}"][/vc_column_inner][vc_column_inner width="1/3"][insignia_number_box layout_style="ins-number-box-small-number-near-title" number="03." num_title="Unmatched Expertise" num_text="Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua." btn_check="" css_animation="ins-animated fadeInUp" ib_animation_delay="600" title_font="text-large" number_font_weight="font-weight-700" title_font_weight="font-weight-600" title_color="#074575" css=".vc_custom_1545136501038{border-top-width: 1px !important;border-right-width: 1px !important;border-bottom-width: 1px !important;border-left-width: 1px !important;padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;border-left-color: #ededed !important;border-left-style: solid !important;border-right-color: #ededed !important;border-right-style: solid !important;border-top-color: #ededed !important;border-top-style: solid !important;border-bottom-color: #ededed !important;border-bottom-style: solid !important;}"][/vc_column_inner][/vc_row_inner][vc_empty_space height="70px"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Portfolio 2 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Portfolio-02', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/portfolio2.jpg' );
	$data['sort_name'] = 'Portfolio';
	$data['custom_class'] = 'portfolio';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1545046927247{padding-top: 70px !important;padding-bottom: 80px !important;background-color: #f7fbfd !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][insignia_section_heading title="Our Recent Case studies" subtitle="" align="text-center" border="heading-below-border" border_style="ins-border-solid" c_margin_bottom="20px" add_icon="" css_animation="ins-animated fadeIn" ib_animation_delay="200" font_weight="default" sub_font_weight="default" border_color="#07a7e3"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544600932425{margin-bottom: 60px !important;}"]</p>
<p class="text-medium text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vel fringilla est ullamcorper eget nulla etiam diam.</p>
<p>[/vc_column_text][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][portfolio port_layout="port_grid3" port_on_hover="layout_1" port_cat="laboratory" port_filter="" port_no_posts="6" port_gap="40" port_overlay_color="#074575" css_animation="ins-animated fadeInUp" ib_animation_delay="200" title_size="23" title_line_height="35" title_color="#ffffff" title_text_transform="text-capitalize" category_size="17" category_line_height="27" category_color="#07a7e3" category_text_transform="text-capitalize"][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Call to Action 4 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Call to Action-04', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/call-to-action4.jpg' );
	$data['sort_name'] = 'Call to Action';
	$data['custom_class'] = 'call-to-action';
	$data['content'] = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1545046947832{padding-top: 80px !important;padding-bottom: 90px !important;background-image: url(https://insigniathemes.com/clariwell/home-5/wp-content/uploads/sites/6/2018/12/lab-home1-3-1.jpg?id=14342) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_row_inner css=".vc_custom_1544176235993{padding-right: 10% !important;padding-left: 10% !important;}"][vc_column_inner][vc_custom_heading text="With over a decade of experience." font_container="tag:h3|font_size:30px|text_align:center|color:%237fcae6|line_height:35px" use_theme_fonts="yes" css_animation="fadeIn"][vc_custom_heading text="we’ll ensure you always get the best Results." font_container="tag:h3|text_align:center|color:%23ffffff" use_theme_fonts="yes" css_animation="fadeIn" css=".vc_custom_1544600969999{margin-bottom: 30px !important;}"][vc_custom_heading text="Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." font_container="tag:p|font_size:17px|text_align:center|color:%23ffffff|line_height:25px" use_theme_fonts="yes" css_animation="fadeIn" css=".vc_custom_1544600987433{margin-bottom: 30px !important;}"][vc_custom_heading text="+(01)1234 387 4444" font_container="tag:h2|text_align:center|color:%23ffffff" use_theme_fonts="yes" css_animation="fadeIn" css=".vc_custom_1544600992947{margin-bottom: 45px !important;}"][insignia_button btn_text="Contact us" btn_link="url:%23|||" button_size="btn-medium" border_radius="btn-radius-default" button_align="text-center" enable_icon="" text_transform="text-uppercase" css_animation="ins-animated fadeInUp" ib_animation_delay="200" text_font_weight="font-weight-700"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;

$templates[] = $data;

//Contact 5 vc-template
	$data = array();
	$data['name'] = esc_html__( 'Contact-05', 'clariwell' );
	$data['disabled'] = true; //disable it to not show in the default tab
	$data['image_path'] = preg_replace( '/\s/', '%20',  CLARIWELL_EXTENSIONS_PLUGIN_URL . 'vc_uiblocks/vc_images/contact5.jpg' );
	$data['sort_name'] = 'Contact';
	$data['custom_class'] = 'contact';
	$data['content'] = <<<CONTENT
[vc_row content_placement="bottom" css=".vc_custom_1545046993200{margin-top: 60px !important;}"][vc_column width="1/2"][vc_single_image image="14165" img_size="full" css=".vc_custom_1544186625225{margin-bottom: 0px !important;}"][/vc_column][vc_column width="1/2" css=".vc_custom_1545046997748{margin-bottom: 30px !important;}"][insignia_section_heading title="Make an appointment" subtitle="" align="text-left" border="heading-below-border" border_style="ins-border-solid" c_margin_bottom="20px" add_icon="" css_animation="ins-animated fadeIn" heading_tag="h2" font_weight="font-weight-500" sub_font_weight="default" border_color="#07a7e3"][vc_column_text css_animation="fadeIn" css=".vc_custom_1544601010206{margin-bottom: 20px !important;}"]Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/vc_column_text][vc_column_text css_animation="fadeIn"]</p>
<p class="text-medium"><span style="color: #074575; margin-left: 0px; margin-right: 12px; font-weight: 500;">Phone:</span>+1 999 9999 9999 <span style="color: #074575; margin-left: 25px; margin-right: 12px; font-weight: 500;">Email:</span>admin@insignia.com</p>
<p>[/vc_column_text][contact-form-7 id="13965"][vc_empty_space height="40px"][/vc_column][/vc_row]</p>

CONTENT;

$templates[] = $data;

return $templates;

}
