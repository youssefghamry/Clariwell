<?php
/***
*
*Instagram widget
*
****/
    function insignia_load_widget() {
    	register_widget( 'insignia_widget' );
    }
    add_action( 'widgets_init', 'insignia_load_widget' );

// Creating the widget 
class insignia_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
        
        // Base ID of your widget
        'insignia_widget', 
        
        // Widget name will appear in UI
        __('Instagram Widget', 'clariwell'), 
        
        // Widget description
        array( 'description' => __( 'A widget that displays latest Instagram posts', 'clariwell' ), ) 
        );
    }

    // Creating widget front-end
    
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    //$user_id = apply_filters( 'widget_title', $instance['user_id'] );
    //$access_token = apply_filters( 'widget_title', $instance['access_token'] );
    
    // before and after widget arguments are defined by themes
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
    
    // This is where you run the code and display the output
    	    $userid = $instance[ 'user_id' ];
    		$accessToken = $instance[ 'access_token' ];
    
    
    $json = file_get_contents("https://api.instagram.com/v1/users/$userid/media/recent/?access_token=$accessToken");
    $data = json_decode($json);
    
    	?>
    <div class="insignia_instagram_container clearfix">
    	<?php 
            $count = 1;
    		foreach( $data->data as $post ) :
    if($count<=9){
    ?> 
    	
    <div class="col-md-4 col-sm-4 col-xs-4 instagram-widget-padding">
    <a class="group"  href="<?php echo esc_url($post->images->standard_resolution->url);  ?>"><img src="<?php echo esc_url($post->images->thumbnail->url);  ?>" alt="instagram_image" class="road_instagram_img">
    <div class="inv-instagram-overlay">
    	<div class="inv-instagram-overlay-inner">
    		<div class="inv-instagram-overlay-inner2">
    			<span class="overlay-icon social-instagram"></span>
    		</div>
    	</div>
    </div>
    </a></div>
    
    	<?php 
    }
    $count++;
    endforeach;  ?>
    </div>
    <?php
        echo $args['after_widget'];
    }
		
// Widget Backend 
public function form( $instance ) {

    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'Instagram', 'clariwell' );
    }
    
    if ( isset( $instance[ 'user_id' ] ) ) {
    $user_id = $instance[ 'user_id' ];
    }
    else {
    $user_id = __( '3054236984', 'clariwell' );
    }
    
    if ( isset( $instance[ 'access_token' ] ) ) {
    $access_token = $instance[ 'access_token' ];
    }
    else {
    $access_token = __( '3054236984.1654d0c.0c7a5e5ba2ef455c9855243da1c6a281', 'clariwell' );
    }

    // Widget admin form
    ?>
    <p>
    <label for="<?php echo esc_html($this->get_field_id( 'title' )); ?>"><?php echo esc_html_e( 'Title:','clariwell' ); ?></label> 
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_html($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_html( $title ); ?>" />
    </p>
    
    <p>
    <label for="<?php echo esc_html($this->get_field_id( 'user_id' )); ?>"><?php echo esc_html_e( 'UserID:','clariwell' ); ?></label> 
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'user_id' )); ?>" name="<?php echo esc_html($this->get_field_name( 'user_id' )); ?>" type="text" value="<?php echo esc_html( $user_id ); ?>" />
    </p>
    <p>You can get your Instagram User-Id from <a href="http://www.ershad7.com/InstagramUserID/" target="_blank">here</a></p>
    
    <p>
    <label for="<?php echo esc_html($this->get_field_id( 'access_token' )); ?>"><?php echo esc_html_e( 'Access Token:','clariwell' ); ?></label> 
    <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'access_token' )); ?>" name="<?php echo esc_html($this->get_field_name( 'access_token' )); ?>" type="text" value="<?php echo esc_html( $access_token ); ?>" />
    </p>
    <p>You can get your Instagram Access Token from <a href="http://instagram.pixelunion.net/" target="_blank">here</a></p>
    <?php 
}
	
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['user_id'] = ( ! empty( $new_instance['user_id'] ) ) ? strip_tags( $new_instance['user_id'] ) : '';
    $instance['access_token'] = ( ! empty( $new_instance['access_token'] ) ) ? strip_tags( $new_instance['access_token'] ) : '';
    return $instance;
    }
} // Class insignia_widget ends here



/**
*
*Twitter feed
*
**/

/* insignia_Widget_Tweets */

function insignia_twitter_widget() {
	register_widget( 'insignia_Widget_Tweets' );
}
add_action( 'widgets_init', 'insignia_twitter_widget' );

class insignia_Widget_Tweets extends WP_Widget {
	function __construct() {
		$widget_ops = array('Tweets' => 'widget_Tweets', 'description' => __('A widget that displays latest Tweets', 'clariwell'));
		parent::__construct('Tweets', __('Tweets', 'clariwell'), $widget_ops);
	}

	function widget($args, $instance) {
		extract($args);
		$widget_data = array_merge(array(
			'title' => '',
			'consumer_key' => '',
			'consumer_secret' => '',
			'access_token' => '',
			'access_token_secret' => '',
			'twitter_id' => '',
			'count' => '',
		), $instance);
		echo $before_widget;
		if ($widget_data['title']) {
			echo $before_title . $widget_data['title'] . $after_title;
		}
		if ($widget_data['twitter_id'] && $widget_data['consumer_key'] && $widget_data['consumer_secret'] && $widget_data['access_token'] && $widget_data['access_token_secret'] && $widget_data['count']) {
			$transName = 'list_tweets_' . $args['widget_id'];
			$cacheTime = 10;
			delete_transient($transName);
			if (false === ($twitterData = get_transient($transName))) {
				// require the twitter auth class
				require_once( ABSPATH .'wp-content/plugins/clariwell-vc-elements/clariwell-widgets/twitteroauth/twitteroauth.php' );
				$twitterConnection = new TwitterOAuth(
					$widget_data['consumer_key'], // Consumer Key
					$widget_data['consumer_secret'], // Consumer secret
					$widget_data['access_token'], // Access token
					$widget_data['access_token_secret'] // Access token secret
				);
				$twitterData = $twitterConnection->get(
					'statuses/user_timeline',
					array(
						'screen_name' => $widget_data['twitter_id'],
						'count' => $widget_data['count'],
						'exclude_replies' => false
					)
				);
				if ($twitterConnection->http_code != 200) {
					$twitterData = get_transient($transName);
				}
				// Save our new transient.
				set_transient($transName, $twitterData, 60 * $cacheTime);
			};
			$twitter = get_transient($transName);
			if ($twitter && is_array($twitter)) {
				?>
				<div class="widget-twitter-box">
					<div class="widget-twitter-holder">
						<div class="b">
							<div class="tweets-container" id="tweets_<?php echo $args['widget_id']; ?>">
								<ul id="insignia-twitter-widget" class="styled">
									<?php foreach ($twitter as $tweet): ?>
									<?php
									$twitterTime = strtotime($tweet->created_at);
									$timeAgo = $this->ago($twitterTime);
									?>
										<li class="widget_list_tweet"><div class="widget_list_tweet_date"><?php echo $timeAgo; ?></div>
											<p class="widget_list_tweet_text tweet-icon-twitter">
												<?php
												$latestTweet = $tweet->text;
												$latestTweet = preg_replace('/https:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '&nbsp;<a href="https://$1" target="_blank">https://$1</a>&nbsp;', $latestTweet);
												$latestTweet = preg_replace('/@([a-z0-9_]+)/i', '&nbsp;<a href="https://twitter.com/$1" target="_blank">@$1</a>&nbsp;', $latestTweet);
												echo $latestTweet;
												?>
											</p>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
					<span class="arrow"></span>
				</div>
			<?php
			}
		}
		echo $after_widget;
	}

	function ago($time) {
		$periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
		$lengths = array("60", "60", "24", "7", "4.35", "12", "10");
		$now = time();
		$difference = $now - $time;
		$tense = "ago";
		for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
			$difference /= $lengths[$j];
		}
		$difference = round($difference);

		if ($difference != 1) {
			$periods[$j] .= "s";
		}
		return "$difference $periods[$j] ago ";
	}

	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['consumer_key'] = $new_instance['consumer_key'];
		$instance['consumer_secret'] = $new_instance['consumer_secret'];
		$instance['access_token'] = $new_instance['access_token'];
		$instance['access_token_secret'] = $new_instance['access_token_secret'];
		$instance['twitter_id'] = $new_instance['twitter_id'];
		$instance['count'] = $new_instance['count'];
		return $instance;
	}

	function form($instance) {
		$defaults = array(
			'title' => 'Recent Tweets',
			'twitter_id' => '',
			'count' => 3,
			'consumer_key' => '',
			'consumer_secret' => '',
			'access_token' => '',
			'access_token_secret' => ''
		);
		$instance = wp_parse_args((array)$instance, $defaults); ?>
		<p><?php printf(__('<a href="%s">Find or Create your Twitter App</a>', 'clariwell'), 'http://dev.twitter.com/apps'); ?></p>
		<p>
			<label for="<?php echo esc_html($this->get_field_id('title')); ?>"><?php echo esc_html_e('Title:','clariwell'); ?> </label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>"
				   name="<?php echo esc_html($this->get_field_name('title')); ?>" value="<?php echo esc_html($instance['title']); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_html($this->get_field_id('consumer_key')); ?>"><?php echo esc_html_e('Consumer Key:','clariwell');?> </label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('consumer_key')); ?>"
				   name="<?php echo esc_html($this->get_field_name('consumer_key')); ?>"
				   value="<?php echo esc_html($instance['consumer_key']); ?>"/>
		</p>

		<p>
			<label for="<?php echo esc_html($this->get_field_id('consumer_secret')); ?>"><?php echo esc_html_e('Consumer Secret:','clariwell');?> </label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('consumer_secret')); ?>"
				   name="<?php echo esc_html($this->get_field_name('consumer_secret')); ?>"
				   value="<?php echo esc_html($instance['consumer_secret']); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_html($this->get_field_id('access_token')); ?>"><?php echo esc_html_e('Access Token:','clariwell');?> </label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('access_token')); ?>"
			name="<?php echo esc_html($this->get_field_name('access_token')); ?>"
			value="<?php echo esc_html($instance['access_token']); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_html($this->get_field_id('access_token_secret')); ?>"><?php echo esc_html_e('Access Token Secret:','clariwell');?> </label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('access_token_secret')); ?>"
				   name="<?php echo esc_html($this->get_field_name('access_token_secret')); ?>"
				   value="<?php echo esc_html($instance['access_token_secret']); ?>"/>
		</p>

		<p>
			<label for="<?php echo esc_html($this->get_field_id('twitter_id')); ?>"><?php echo esc_html_e('Twitter ID:','clariwell');?> </label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter_id')); ?>"
				   name="<?php echo esc_html($this->get_field_name('twitter_id')); ?>"
				   value="<?php echo esc_html($instance['twitter_id']); ?>"/>
		</p>
		<p>
			<label for="<?php echo esc_html($this->get_field_id('count')); ?>"><?php echo esc_html_e('Number of Tweets:', 'clariwell'); ?> </label>
			<input class="widefat" id="<?php echo esc_attr($this->get_field_id('count')); ?>"
				   name="<?php echo esc_html($this->get_field_name('count')); ?>" value="<?php echo esc_html($instance['count']); ?>"/>
		</p>

	<?php
	}
}