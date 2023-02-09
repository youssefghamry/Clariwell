<?php
// Add Widget
function widget_insignia_recent_post_init() {
	register_widget('widget_insignia_recent_post');
}
add_action('widgets_init', 'widget_insignia_recent_post_init');
class widget_insignia_recent_post extends WP_Widget { 
	 
	// Widget Settings
	    
    function __construct() {
        parent::__construct(
            
        // Base ID of your widget
        'recent_post', 
            
        // Widget name will appear in UI
        __('Insignia Recent Post', 'clariwell'), 
        
        // Widget description
        array( 'description' => __( 'A widget that displays your most recent posts', 'clariwell' ), ) 
        );
		add_action( 'save_post', array($this, 'flush_widget_cache') );
        add_action( 'deleted_post', array($this, 'flush_widget_cache') );
        add_action( 'switch_theme', array($this, 'flush_widget_cache') );
        }
	
	// Widget Output
	function widget($args, $instance) {
        $cache = wp_cache_get('widget_insignia_recent_post', 'widget');

        if ( !is_array($cache) )
            $cache = array();

        if ( ! isset( $args['widget_id'] ) )
            $args['widget_id'] = $this->id;

        if ( isset( $cache[ $args['widget_id'] ] ) ) {
            echo $cache[ $args['widget_id'] ];
            return;
        }

        ob_start();
        extract($args);

        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Recent Posts' );
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 10;
        if ( ! $number )
            $number = 10;
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;

        $r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
        if ($r->have_posts()) :
?>
        <?php echo $before_widget; ?>
        <?php if ( $title ) echo $before_title . $title . $after_title; ?>
        <ul class="clearfix ins-widget-posts-holder">
        <?php while ( $r->have_posts() ) : $r->the_post(); ?>
            <li class="clearfix ins-widget-posts">
            <?php if(has_post_thumbnail()){ ?>
			  <div class="ins-widget-posts-image">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array( 80, 85)); ?></a></div> <?php } ?>
                    <div class="ins-widget-posts-content">
                    <a href="<?php the_permalink(); ?>" class="inv-title-h6"><?php get_the_title() ? the_title() : the_ID(); ?></a>
            <?php if ( $show_date ) : ?>
                    <div class="ins-widget-posts-date">
                    <span class="post-date"><?php echo get_the_date(); ?></span>
                    </div>
            <?php endif; ?>
			         </div>
            </li>
        <?php endwhile; ?>
        </ul>
        <?php echo $after_widget; ?>
        <?php
        // Reset the global $the_post as this query will have stomped on it
        wp_reset_postdata();

        endif;

        $cache[$args['widget_id']] = ob_get_flush();
        wp_cache_set('widget_insignia_recent_post', $cache, 'widget');
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['number'] = (int) $new_instance['number'];
        $instance['show_date'] = (bool) $new_instance['show_date'];
        $this->flush_widget_cache();

        $alloptions = wp_cache_get( 'alloptions', 'options' );
        if ( isset($alloptions['insignia_widget_recent_entries']) )
            delete_option('insignia_widget_recent_entries');

        return $instance;
    }

    function flush_widget_cache() {
        wp_cache_delete('widget_insignia_recent_post', 'widget');
    }

    function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
        $show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
    ?>
        <p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>

        <p><label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
        <input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>

        <p><input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
        <label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' ); ?></label></p>
    <?php
       }
    }
?>