<?php
/**
 * The main template file.
 *
 */
get_header();
?>
<?php

$l = et_page_config();

$content_layout = etheme_get_option('blog_layout');

$full_width = false;

if($content_layout == 'mosaic') {
	$full_width = etheme_get_option('blog_full_width');
}

if($content_layout == 'mosaic') {
	$content_layout = 'grid';
}
?>

<?php do_action( 'et_page_heading' ); ?>

	<div id="blog" class="<?php echo (!$full_width) ? 'container-page' : 'blog-full-width'; ?>">
		<div class="container container-blog sidebar-position-<?php esc_attr_e( $l['sidebar'] ); ?> sidebar-mobile-<?php esc_attr_e( $l['sidebar-mobile'] ); ?>">
			<div class="row">
				<div class="all-posts col-12 col-md-6">

					<?php if(have_posts()):
						while(have_posts()) : the_post(); ?>
dfgfdfdfdfdfdfdfdfdfdfdfdfd
							fghfghfghfghfgh

						<?php endwhile; ?>
					<?php else: ?>

						<h1><?php esc_html_e('No posts were found!', 'royal') ?></h1>

					<?php endif; ?>
					<div class="articles-nav">
						<div class="left"><?php next_posts_link(__('&larr; Older Posts', 'royal')); ?></div>
						<div class="right"><?php previous_posts_link(__('Newer Posts &rarr;', 'royal')); ?></div>
						<div class="clear"></div>
					</div>

				</div>

				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php
get_footer();
?>