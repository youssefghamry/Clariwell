<?php
$post_id =  get_the_ID();
$vimeo_video = get_post_meta($post->ID, '_ins_vimeo_video', true);
$youtube_video = get_post_meta($post->ID, '_ins_youtube_video', true);

if ($vimeo_video){ ?>
	<div class="flex-video widescreen vimeo">
		<iframe src='https://player.vimeo.com/video/<?php echo esc_html($vimeo_video); ?>?portrait=0' width='640' height='460' frameborder='0'></iframe>
	</div>

<?php
}
if ($youtube_video){ ?>
	<div class="flex-video  widescreen">
		<iframe width="640" height="460" src="https://www.youtube.com/embed/<?php echo esc_html($youtube_video); ?>?wmode=opaque" class="youtube-video" allowfullscreen></iframe>
	</div>

<?php
}

if( get_post_meta($post_id, "_ins_hosted_video_mp4",true ) ||  get_post_meta($post_id, "_ins_hosted_video_webm", true )) {

	if (has_post_thumbnail()) {
		$thumb = get_post_thumbnail_id();
		$img_url = wp_get_attachment_url($thumb, 'full'); //get img URL
		$article_image = insignia_aq_resize($img_url, 900, 650, true, true, true);
		if(!$article_image) {
			$article_image = $img_url;
		}
	} else {
		$article_image = '';
	} ?>

	<video id="video-post<?php the_ID();?>" class="video-js vjs-default-skin" controls
		   preload="auto"
		   width="900"
		   height="650"
		   poster="<?php echo esc_url($article_image); ?>"
		   data-setup="{}" >

		<?php if( get_post_meta($post_id, "_ins_hosted_video_mp4",true ) ): ?>
			<source src="<?php echo esc_url(get_post_meta($post_id, "_ins_hosted_video_mp4",true )); ?>" type='video/mp4'>
		<?php endif;?>
		<?php if( get_post_meta($post_id, "_ins_hosted_video_webm", true ) ): ?>
			<source src="<?php echo esc_url(get_post_meta($post_id, "_ins_hosted_video_webm", true )); ?>" type='video/webm'>
		<?php endif;?>
	</video>

<?php }