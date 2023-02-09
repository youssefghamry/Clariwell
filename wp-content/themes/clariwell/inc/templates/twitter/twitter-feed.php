<?php	
	if ($GLOBALS['twitter_consumer_key1'] && $GLOBALS['twitter_consumer_secret1'] && $GLOBALS['twitter_access_token1'] && $GLOBALS['twitter_access_token_secret1'] && $GLOBALS['twitter_id1'] && $GLOBALS['twitter_no_of_tweets1']) {
			$transName = 'list_tweets_';
			$cacheTime = 10;
			delete_transient($transName);
			if (false === ($twitterData = get_transient($transName))) {
				// require the twitter auth class
				require_once( ABSPATH .'wp-content/plugins/clariwell-vc-elements/clariwell-widgets/twitteroauth/twitteroauth.php' );
				$twitterConnection = new TwitterOAuth(
					$GLOBALS['twitter_consumer_key1'], // Consumer Key
					$GLOBALS['twitter_consumer_secret1'], // Consumer secret
					$GLOBALS['twitter_access_token1'], // Access token
					$GLOBALS['twitter_access_token_secret1'] // Access token secret
				);
				$twitterData = $twitterConnection->get(
					'statuses/user_timeline',
					array(
						'screen_name' => $GLOBALS['twitter_id1'],
						'count' => $GLOBALS['twitter_no_of_tweets1'],
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
				<div class="vc_element-twitter-box <?php echo esc_attr($GLOBALS['twitter_extra_class1']); ?>">
					<div class="vc_element-twitter-holder">
						<div class="b">
							<div class="tweets-container">
							<div class="twitter-icon-wrapper"><i style="color: <?php echo esc_attr($GLOBALS['twitter_icon_color1']); ?>;" class="fa fa-twitter" aria-hidden="true"></i></div>
								<ul id="insignia-twitter-vc_element" class="styled twitter-carousel-slider slider">
									<?php foreach ($twitter as $tweet): ?>
									<?php
									$twitterTime = $tweet->created_at;
									
									$date = str_replace('/', '-', $twitterTime);
									
									//$timeAgo = $this->ago($twitterTime);
									?>
										<li class="vc_element_list_tweet">
											<p class="vc_element_list_tweet_text element-icon-twitter" style="color: <?php echo esc_attr($GLOBALS['twitter_tweet_color1']); ?>;">
												<?php
												$latestTweet = $tweet->text;
												$latestTweet = preg_replace('/https:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '&nbsp;<a href="https://$1" target="_blank">https://$1</a>&nbsp;', $latestTweet);
												$latestTweet = preg_replace('/@([a-z0-9_]+)/i', '&nbsp;<a href="https://twitter.com/$1" target="_blank">$1</a>&nbsp;', $latestTweet);
												echo wp_kses_post($latestTweet);
												?>
											</p>
                                            <div class="vc_element_list_tweet_date" style="color: <?php echo esc_attr($GLOBALS['tweet_date_color1']); ?>;"><span class="vc_element_tweet_user_link"><a href="https://twitter.com/<?php echo esc_html($GLOBALS['twitter_id1']); ?>">@<?php echo esc_html($GLOBALS['twitter_id1']); ?></a></span><?php echo esc_html__('Tweeted on','clariwell'); ?> <?php echo date('d M', strtotime($date)); ?></div>
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