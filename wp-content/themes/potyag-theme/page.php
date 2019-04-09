<?php
get_header();
?>


		<div class="content <?php esc_attr_e( $l['content-class'] ); ?>">
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
<section class="pre-footer">
	<div class="container">
		<div class="row">
			<div class="content col-md-12">
				<div class="documents">
					<a href="/" class="scroll-to">Головна</a>
					<a href="#about-us" class="scroll-to">Про нас</a>
					<a href="#our-tobacco" class="scroll-to">Галерея</a>
					<a href="#our-tobacco" class="scroll-to">Наш табак</a>
					<a href="#address-map" class="scroll-to">Відгуки</a>
					<a href="#address-map" class="scroll-to">Контакти</a>
				</div>
				<div class="soc-wrapper">
					<a href="#" class="ofs" target="_blank">&copy; 2019. Potyag-Bar, усі права захищені</a>

				</div>
			</div>
		</div>
	</div>
	<a href="#" class="go-top up-btn"></a>
</section>


<div class="order-modal-btn">
	<button class="modal-button"><img src="/wp-content/themes/potyag-theme/assets/img/logo.jpg"></button>
</div>

</div>



<?php


wp_footer(); ?>
</body>
</html>
