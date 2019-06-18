<section class="pre-footer">
	<div class="container">
		<div class="row">
			<div class="content col-md-12">
				<div class="documents">
					<a href="/" class="scroll-to">Головна</a>
					<a href="#about-us" class="scroll-to">Про нас</a>
					<a href="#our-tobacco" class="scroll-to">Галерея</a>
					<a href="#address-map" class="scroll-to">Відгуки</a>
					<a href="#address-map" class="scroll-to">Контакти</a>
				</div>
				<div class="soc-wrapper">
					<a href="#" class="ofs" target="_blank">&copy; 2019. Potyag-Bar, усі права захищені</a>

				</div>
			</div>
		</div>
	</div>
</section>


<div class="order-modal-btn">
	<button class="modal-button" class="callback" data-toggle="modal" data-target="#quest-modal"><img src="/wp-content/themes/potyag-theme/assets/img/logo.jpg"></button>
</div>
</div>

<script type="text/javascript">
	jQuery('#sbi_images').slick({
		autoplay: true,
		autoplaySpeed: 8000,
		appendArrows: false,
		slidesToShow: 1,
		dots: true,


	});</script>

<?php

if (is_front_page()) {
	echo '<script type="text/javascript">jQuery(document).on(\'click\', \'.scroll-to\', function (e) {
	e.preventDefault();

	var href = jQuery(this).attr(\'href\');

	jQuery(\'html, body\').animate({
           scrollTop: jQuery(href).offset().top
       }, 1000);

   });</script>';
} else {
	echo '<script type="text/javascript">
	jQuery(\'.scroll-to\').removeClass(\'scroll-to\');

  </script>';
}
wp_footer(); ?>