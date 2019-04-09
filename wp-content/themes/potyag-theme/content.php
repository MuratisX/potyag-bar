<?php
/**
 *	Template for standart Posts
 */

$postClass = 'blog-post';
$postId = get_the_ID();
$lightbox = etheme_get_option('blog_lightbox');
$blog_slider = etheme_get_option('blog_slider');
$post_format = get_post_format();

$post_content = get_the_content('<span class="btn big filled pull-right read-more">'.__('Read More', 'royal').'</span>');
preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
$attach_ids = array();
$filtered_content = '';
if(!empty($ids)) {
	$attach_ids = explode(",", $ids[1]);
	$content =  str_replace($ids[0], "", $post_content);
	$filtered_content = apply_filters( 'the_content', $content);
}

$slider_id = rand(100,10000);
$postClass .= ' content-'.etheme_get_option('blog_layout');
?>


<article <?php post_class($postClass); ?> class="post" id="post-<?php the_ID(); ?>" >
	<div>
		<?php if($post_format == 'quote' || $post_format == 'video'): ?>

			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="more-link"><span class="btn big filled pull-right read-more"><?php esc_html_e('Read More', 'royal'); ?></span></a>

		<?php elseif($post_format == 'gallery'): ?>
		<?php if(count($attach_ids) > 0): ?>
			<div class="owl-carousel post-gallery-slider slider_id-<?php echo $slider_id; ?>">
				<?php foreach($attach_ids as $attach_id): ?>
					<div>
						<?php
						$image = wp_get_attachment_image_src( $attach_id, 'large' );

						echo sprintf(
							'<img data-src="%s" alt="%s" class="owl-lazy attachment-large size-large" data-srcset="%s" sizes="%s" height="%s" width="%s" />',
							esc_url( $image[0] ),
							get_post_meta( $attach_id, '_wp_attachment_image_alt', true),
							wp_get_attachment_image_srcset( $attach_id, 'large' ),
							wp_get_attachment_image_sizes( $attach_id, 'large' ),
							esc_attr( $image[1] ),
							esc_attr( $image[2] )
						);

						?>
					</div>
				<?php endforeach; ?>
			</div>

			<script type="text/javascript">
				jQuery(document).ready(function(){
					jQuery('.slider_id-<?php echo $slider_id; ?>').owlCarousel({
						items:1,
						nav: true,
						lazyLoad: true,
						rewind: false,
						addClassActive: true,
						autoHeight:true,
						responsive: {
							1600 : {
								items: 1
							}
						}
					});
				});
			</script>
		<?php endif; ?>
		<?php endif; ?>

		<?php if($post_format != 'quote'): ?>
			<div class="post__header">
				<h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="post__meta">
				<span>
					<time datetime="2018-09-04T19:50:16+01:00"><?php the_date()?></time>
				</span>
				</div>
			</div>
			<div class="wp-picture">
				<?php the_post_thumbnail('large'); ?>
				<div class="zoom">
					<div class="btn_group">
						<a href="<?php the_permalink(); ?>" class="btn btn-black xmedium-btn"></a>
					</div>
					<i class="bg"></i>
				</div>
			</div>
		<?php endif; ?>

		<?php if($post_format != 'quote' && $post_format != 'video' && $post_format != 'gallery'): ?>
			
			<div class="post__content">
				<?php the_excerpt(); ?>
			</div>

			<div class="post__footer">
				<a href="<?php the_permalink(); ?>" class="post__more"><?php esc_html_e('Read More', 'royal'); ?></a>
			</div>

		<?php elseif($post_format == 'gallery'): ?>
			<div class="content-article entry-content">
				<?php echo $filtered_content; ?>
			</div>
		<?php endif; ?>
	</div>
	<?php if(etheme_get_option('blog_byline') && etheme_get_option('blog_layout') == 'timeline'): ?>
		<div class="meta-post-timeline">
			<?php the_time(get_option('date_format')); ?> /
			<?php the_time(get_option('time_format')); ?>
		</div>
	<?php endif; ?>
</article>
