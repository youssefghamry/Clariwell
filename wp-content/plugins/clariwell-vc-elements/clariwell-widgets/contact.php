<?php

class widget_contact extends WP_Widget { 
	 
	// Widget Settings
	    function __construct() {
            parent::__construct(
            
            // Base ID of your widget
            'contact', 
            
            // Widget name will appear in UI
            __('Insignia Contact', 'clariwell'), 
            
            // Widget description
            array( 'description' => __( 'A widget that displays your Contact Informations', 'clariwell' ), ) 
            );
        }
	
	// Widget Output
	function widget($args, $instance) {
		extract($args);
		$title = apply_filters('widget_title', esc_html($instance['title']));
		// ------
		echo $before_widget;
		echo $before_title . esc_html($title) . $after_title;
		?>
		
		<address>
			<?php if($instance['address']): ?>
			<span class="address widget-contact-item"><i class="fa fa-map-marker"></i><span class="adress-overflow"><?php echo wp_kses_post($instance['address']); ?></span></span>
			<?php endif; ?>
	
			<?php if($instance['phone']): ?>
			<span class="phone widget-contact-item"><i class="fa fa-phone"></i><strong><?php _e( 'Phone', 'clariwell' ) ?>:</strong> <?php echo esc_html($instance['phone']); ?></span>
			<?php endif; ?>
	
			<?php if($instance['fax']): ?>
			<span class="fax widget-contact-item"><i class="fa fa-fax"></i><strong><?php _e( 'Fax', 'clariwell' ) ?>:</strong> <?php echo esc_html($instance['fax']); ?></span>
			<?php endif; ?>
	
			<?php if($instance['email']): ?>
			<span class="email widget-contact-item"><i class="fa fa-envelope"></i><strong><?php _e( 'E-Mail', 'clariwell' ) ?>:</strong> <a href="mailto:<?php echo esc_html($instance['email']); ?>"><?php echo esc_html($instance['email']); ?></a></span>
			<?php endif; ?>
	
			<?php if($instance['web']): ?>
			<span class="web widget-contact-item"><i class="fa fa-globe"></i><strong><?php _e( 'Web', 'clariwell' ) ?>:</strong> <a href="http://<?php echo esc_html($instance['web']); ?>" target="_blank"><?php echo esc_html($instance['web']); ?></a></span>
			<?php endif; ?>
		</address>
		
		<?php
		echo $after_widget;
		// ------
	}
	
	// Update
	function update( $new_instance, $old_instance ) {  
		$instance = $old_instance; 
		$instance['title'] = $new_instance['title'];
		$instance['address'] = $new_instance['address'];
		$instance['phone'] = $new_instance['phone'];
		$instance['fax'] = $new_instance['fax'];
		$instance['email'] = $new_instance['email'];
		$instance['web'] = $new_instance['web'];
		return $instance;
	}
	
	// Backend Form
	function form($instance) {
		
		// Default Values
		$defaults = array('title' => 'Contact Info', 'address' => '', 'phone' => '', 'fax' => '', 'email' => '', 'web' => '');
		$instance = wp_parse_args((array) $instance, $defaults); ?>

		<p>
			<label for="<?php echo esc_attr($this->get_field_id('title')); ?>">Title:</label><br />
			<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" value="<?php echo esc_attr($instance['title']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('address')); ?>">Address:</label>
			<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" value="<?php echo esc_attr($instance['address']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('phone')); ?>">Phone:</label>
			<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" value="<?php echo esc_attr($instance['phone']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('fax')); ?>">Fax:</label>
			<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('fax')); ?>" name="<?php echo esc_attr($this->get_field_name('fax')); ?>" value="<?php echo esc_attr($instance['fax']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('email')); ?>">Email:</label>
			<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" value="<?php echo esc_attr($instance['email']); ?>" />
		</p>
		<p>
			<label for="<?php echo esc_attr($this->get_field_id('web')); ?>">Website URL (without http://):</label>
			<input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('web')); ?>" name="<?php echo esc_attr($this->get_field_name('web')); ?>" value="<?php echo esc_attr($instance['web']); ?>" />
		</p>
		
    <?php }
}

// Add Widget
function widget_contact_init() {
	register_widget('widget_contact');
}
add_action('widgets_init', 'widget_contact_init');

?>