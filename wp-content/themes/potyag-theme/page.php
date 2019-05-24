<?php
get_header();
?>


		<div class="content-page <?php esc_attr_e( $l['content-class'] ); ?>">
			<?php if(have_posts()): while(have_posts()) : the_post(); ?>
			
				<?php the_content(); ?>


				<div class="post-navigation">
					<?php wp_link_pages(); ?>
				</div>

				<!--					--><?php //if ($post->ID != 0 && current_user_can('edit_post', $post->ID)): ?>
				<!--						--><?php //edit_post_link( __('Edit this', 'royal'), '<p class="edit-link">', '</p>' ); ?>
				<!--					--><?php //endif ?>

			<?php endwhile; else: ?>

				<h3><?php esc_html_e('No pages were found!', 'royal') ?></h3>

			<?php endif; ?>

		</div>

<?php


get_footer() ?>
</body>
</html>
