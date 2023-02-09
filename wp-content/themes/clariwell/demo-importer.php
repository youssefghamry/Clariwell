<?php
function insignia_import_files() {
	return array(
		array(
			'import_file_name'             => 'Home-1',
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/home-1/home-1.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/home-1/home-1.wie',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'demos/home-1/home-1.json',
					'option_name' => 'ins_opt',
					),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . '/assets/img/home-1.jpg',
		),

		array(
			'import_file_name'             => 'Home-2',
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/home-2/home-2.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/home-2/home-2.wie',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'demos/home-2/home-2.json',
					'option_name' => 'ins_opt',
					),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . '/assets/img/home-2.jpg',
		),

		array(
			'import_file_name'             => 'Home-3',
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/home-3/home-3.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/home-3/home-3.wie',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'demos/home-3/home-3.json',
					'option_name' => 'ins_opt',
					),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . '/assets/img/home-3.jpg',
		),

		array(
			'import_file_name'             => 'Home-4',
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/home-4/home-4.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/home-4/home-4.wie',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'demos/home-4/home-4.json',
					'option_name' => 'ins_opt',
					),
			),
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . '/assets/img/home-4.jpg',
		),

		array(
			'import_file_name'             => 'Home-5',
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/home-5/home-5.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/home-5/home-5.wie',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'demos/home-5/home-5.json',
					'option_name' => 'ins_opt',
				),
			),
		'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . '/assets/img/home-5.jpg',
		),
	
		array(
			'import_file_name'             => 'Inner-Pages',
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'demos/inner-pages/inner-pages.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demos/inner-pages/widget.wie',
			'import_preview_image_url'     => trailingslashit( get_template_directory_uri() ) . '/assets/img/inner-pages.jpg',
			),
		);
}
add_filter( 'pt-ocdi/import_files', 'insignia_import_files' );

if ( ! function_exists( 'insignia_after_import' ) ) :
    function insignia_after_import( $selected_import ) {
          
		if ( 'Home-1' === $selected_import['import_file_name'] ) {
			
			//Import Revolution Slider
			if ( class_exists( 'RevSlider' ) ) {
				$slider_array = array(
					get_template_directory()."/demos/home-1/home-1.zip",
				);

				$slider = new RevSlider();
				foreach($slider_array as $filepath){
					$slider->importSliderFromPost(true,true,$filepath);  
				}
			}
		  
		}elseif( 'Home-2' === $selected_import['import_file_name']) {
		 
			//Import Revolution Slider
			if ( class_exists( 'RevSlider' ) ) {
				$slider_array = array(
				get_template_directory()."/demos/home-2/home-2.zip",
			);

			$slider = new RevSlider();
			foreach($slider_array as $filepath){
				$slider->importSliderFromPost(true,true,$filepath);  
			}
			}
		
		}elseif( 'Home-3' === $selected_import['import_file_name']) {
		 
				//Import Revolution Slider
				if ( class_exists( 'RevSlider' ) ) {
					$slider_array = array(
						get_template_directory()."/demos/home-3/home-3.zip",
					);
					$slider = new RevSlider();
					foreach($slider_array as $filepath){
						$slider->importSliderFromPost(true,true,$filepath);  
					}
				}
		
		}elseif( 'Home-4' === $selected_import['import_file_name']) {
		 
				//Import Revolution Slider
				if ( class_exists( 'RevSlider' ) ) {
					$slider_array = array(
						get_template_directory()."/demos/home-4/home-4.zip",
					);

				   $slider = new RevSlider();
				   foreach($slider_array as $filepath){
						$slider->importSliderFromPost(true,true,$filepath);  
					}
				}
		}
		update_option( 'active demo', $selected_import['import_file_name'] );
    }
     
add_action( 'pt-ocdi/after_import', 'insignia_after_import' );
endif;
?>