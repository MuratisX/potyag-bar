<?php

register_nav_menus( array(
	'main_menu'    => __( 'Top Menu', 'potyag-theme' ),

) );

add_theme_support( 'post-thumbnails' );



remove_filter( 'the_content', 'wpautop' ); // Отключаем автоформатирование в полном посте
remove_filter( 'the_excerpt', 'wpautop' ); // Отключаем автоформатирование в кратком(анонсе) посте
remove_filter('comment_text', 'wpautop'); // Отключаем автоформатирование в комментариях

function true_style_frontend() {

	wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/style.css') ;
	wp_enqueue_script('Jquery');
	
	wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/assets/js/slick.min.js');
	wp_enqueue_script('fancybox', get_stylesheet_directory_uri() . '/assets/js/jquery.fancybox.min.js');
	wp_enqueue_script('maskedIput', get_stylesheet_directory_uri() . '/assets/js/jquery.maskedinput.min.js');
	wp_enqueue_script('likely', get_stylesheet_directory_uri() . '/assets/js/likely.js');
	wp_enqueue_script('validator', get_stylesheet_directory_uri() . '/assets/js/validator.min.js');
	wp_enqueue_script('all-js', get_stylesheet_directory_uri() . '/assets/js/js.js');

	if ( is_page('privacy-policy') ) {
		wp_deregister_style ( 'style' );
		wp_deregister_style ( 'blog' );
		wp_deregister_style ( 'recent' );
		wp_enqueue_style( 'privacy', get_template_directory_uri() . '/css/privacy.css') ;
	}

	if ( is_home() ) {
		wp_deregister_style ( 'style' );
	}

}

add_action( 'wp_enqueue_scripts', 'true_style_frontend' );


function wpb_widgets_init() {
	register_sidebar( array(
		'name'          => 'Menu-buttons',
		'id'            => 'custom-header-widget',
	) );
	register_sidebar( array(
		'name'          => 'Footer',
		'id'            => 'footer_widget',
	) );

	register_sidebar( array(
		'name'          => 'Posts-sidebar',
		'id'            => 'post_widgets',
	) );

	register_sidebar( array(
		'name'          => 'Footer posts',
		'id'            => 'footer_posts',
	) );
}

add_action( 'widgets_init', 'wpb_widgets_init' );


function btn_load_widget() {
	register_widget( 'buttons_widget' );
	register_widget( 'footer_widget' );
	register_widget( 'recent_posts' );
	register_widget( 'archives_posts' );
	register_widget( 'categories_posts' );
}

add_action( 'widgets_init', 'btn_load_widget' );

class categories_posts extends WP_Widget {

	function __construct() {

		parent::__construct(
			'categories_posts',
			__('Categories Posts', 'categories_posts'),
			array( 'description' => __( 'Categories Posts', 'categories_posts' ), )
		);
	}


	public function widget( $args, $instance ) {
		$title_section_categories = $instance['title_section_categories'] ;

		echo '<div class="categories">
			<h2 class="title-section">' . $title_section_categories . '</h2>';
		echo '<ul class="categories__list">';
		$categories = get_categories(array(
			'orderby' => 'name',
			'order' => 'ASC'
		));
		foreach( $categories as $category ){
			echo ' <li class="category__item">
 								<a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a></li> ';
		}
		echo '</ul> </div>';




	}

	public function form( $instance ) {
		if ( isset( $instance[ 'title_section_categories' ] ) ) {
			$title_section_categories = $instance['title_section_categories'];
		}
		else {
			$title_section_categories = __( 'Categories', 'categories_posts' );
		}

		?>


		<label for="<?php echo $this->get_field_id( 'title_section_categories' ); ?>">Title section</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title_section_categories' ); ?>" name="<?php echo $this->get_field_name( 'title_section_categories' ); ?>" type="text" value="<?php echo esc_attr( $title_section_categories ); ?>" />

		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title_section_categories'] = ( ! empty( $new_instance['title_section_categories'] ) ) ? strip_tags( $new_instance['title_section_categories'] ) : '';
		return $instance;
	}
}


class archives_posts extends WP_Widget {

	function __construct() {

		parent::__construct(
			'archives_posts',
			__('Archives Posts', 'archives_posts'),
			array( 'description' => __( 'Archives Posts', 'archives_posts' ), )
		);
	}


	public function widget( $args, $instance ) {
		$title_section_archives = $instance['title_section_archives'] ;

		echo '<div class="archives">
				<h2 class="title-section">' . $title_section_archives . '</h2>' . '<ul class="archives__list">';
		wp_get_archives('type=monthly&limit=12');
		echo '</ul> </div>';



	}

	public function form( $instance ) {
		if ( isset( $instance[ 'title_section_archives' ] ) ) {
			$title_section_archives = $instance['title_section_archives'];
		}
		else {
			$title_section_archives = __( 'Archives posts', 'archives_posts' );
		}

		?>


		<label for="<?php echo $this->get_field_id( 'title_section_archives' ); ?>">Title section</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title_section_archives' ); ?>" name="<?php echo $this->get_field_name( 'title_section_archives' ); ?>" type="text" value="<?php echo esc_attr( $title_section_archives ); ?>" />

		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title_section_archives'] = ( ! empty( $new_instance['title_section_archives'] ) ) ? strip_tags( $new_instance['title_section_archives'] ) : '';
		return $instance;
	}
}





class recent_posts extends WP_Widget {

	function __construct() {

		parent::__construct(
			'recent_posts',
			__('Recent Posts', 'recent_posts'),
			array( 'description' => __( 'Recent Posts', 'recent_posts' ), )
		);
	}


	public function widget( $args, $instance ) {
		$title_section = $instance['title_section'] ;
		$numberposts = $instance['numberposts'] ;



		echo '<div class="recent-posts">
				<h2 class="title-section">' . $title_section .'</h2>' . '<div class="posts">';
		$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$params = array(
			'posts_per_page' => $numberposts,
			'post_type'       => 'post',
			'paged'           => $current_page
		);
		query_posts($params);
		while(have_posts()): the_post();
			get_template_part( 'template/recent-posts', get_post_format() );
		endwhile;

		'</div> </div>';


	}

	public function form( $instance ) {
		if ( isset( $instance[ 'title_section' ] ) ) {
			$title_section = $instance['title_section'];
		}
		else {
			$title_section = __( 'Recent posts', 'recent_posts' );
		}

		if ( isset( $instance['numberposts']) ) {
			$numberposts = $instance['numberposts'];
		}
		else {
			$numberposts  = __( '5', 'recent_posts' );
		}


		?>


		<label for="<?php echo $this->get_field_id( 'title_section' ); ?>">Title section</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title_section' ); ?>" name="<?php echo $this->get_field_name( 'title_section' ); ?>" type="text" value="<?php echo esc_attr( $title_section ); ?>" />

		<label for="<?php echo $this->get_field_id( 'numberposts' ); ?>">Number posts</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'numberposts' ); ?>" name="<?php echo $this->get_field_name( 'numberposts' ); ?>" type="number" value="<?php echo esc_attr( $numberposts ); ?>" />


		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title_section'] = ( ! empty( $new_instance['title_section'] ) ) ? strip_tags( $new_instance['title_section'] ) : '';
		$instance['numberposts'] = ( ! empty( $new_instance['numberposts'] ) ) ? strip_tags( $new_instance['numberposts'] ) : '';
		return $instance;
	}
}





class footer_widget extends WP_Widget {

	function __construct() {

		parent::__construct(
			'footer_widget',
			__('Edit text Footer', 'footer_widget'),
			array( 'description' => __( 'Text for footer', 'footer_widget' ), )
		);
	}


	public function widget( $args, $instance ) {
		$copy = $instance['copy-text'] ;
		$privacy_link = $instance['privacy_link'] ;
		$privacy_text = $instance['privacy_text'] ;



		echo '<div class="copy">
				<p>' .$copy . '&copy; </p>
				</div>';

		echo '<div class="privacy wrapper"><a href="' . $privacy_link. '"' . '>' . $privacy_text  . '</a></div>';

	}

	public function form( $instance ) {
		if ( isset( $instance[ 'copy-text' ] ) ) {
			$copy = $instance['copy-text'];
		}
		else {
			$copy  = __( 'Copyright EthicsInsight 2018', 'footer_widget' );
		}

		if ( isset( $instance['privacy_link']) ) {
			$privacy_link = $instance['privacy_link'];
		}
		else {
			$privacy_link  = __( '/privacy policy', 'footer_widget' );
		}

		if ( isset( $instance['privacy_text'] ) ) {
			$privacy_text = $instance['privacy_text'] ;
		}
		else {
			$privacy_text = __(  'Privacy policy', 'footer_widget' );
		}

		?>


		<label for="<?php echo $this->get_field_id( 'copy-text' ); ?>">Text copyright</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'copy-text' ); ?>" name="<?php echo $this->get_field_name( 'copy-text' ); ?>" type="text" value="<?php echo esc_attr( $copy ); ?>" />

		<label for="<?php echo $this->get_field_id( 'privacy_link' ); ?>">Link privacy</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'privacy_link' ); ?>" name="<?php echo $this->get_field_name( 'privacy_link' ); ?>" type="text" value="<?php echo esc_attr( $privacy_link  ); ?>" />

		<label for="<?php echo $this->get_field_id( 'privacy_text' ); ?>">Text for privacy link</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'privacy_text' ); ?>" name="<?php echo $this->get_field_name( 'privacy_text' ); ?>" type="text" value="<?php echo esc_attr( $privacy_text   ); ?>" />

		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['copy-text'] = ( ! empty( $new_instance['copy-text'] ) ) ? strip_tags( $new_instance['copy-text'] ) : '';
		$instance['privacy_link'] = ( ! empty( $new_instance['privacy_link'] ) ) ? strip_tags( $new_instance['privacy_link'] ) : '';
		$instance['privacy_text'] = ( ! empty( $new_instance['privacy_text'] ) ) ? strip_tags( $new_instance['privacy_text'] ) : '';
		return $instance;
	}
}


class buttons_widget extends WP_Widget {

	function __construct() {

		parent::__construct(
			'buttons_widget',
			__('Buttons for menu Widget', 'btn_widget'),
			array( 'description' => __( 'Buttons "Sign in" and "Contact us"', 'btn_widget' ), )
		);
	}

// Creating widget front-end

	public function widget( $args, $instance ) {
		$btn_1 = $instance['btn-1-title'] ;
		$href1 = $instance['href_1'] ;
		$btn_2 = $instance['btn-2-title'] ;
		$href_2 = $instance['href_2'] ;

		echo '<a href="' . $href_2 . '"' .  ' class="btn-sign-in"' .'>' . $btn_2 . '</a>';
		if (is_home()) {
			echo '<a href="/' . $href1 . '"' .  ' class="btn-contact"' . '>' . $btn_1 . '</a>';
		} else {
			echo '<a href="' . $href1 . '"' .  ' class="btn-contact"' . '>' . $btn_1 . '</a>';
		}


	}

	public function form( $instance ) {
		if ( isset( $instance[ 'btn-1-title' ] ) ) {
			$btn_1  = $instance[ 'btn-1-title' ];
		}
		else {
			$btn_1  = __( 'Contact us', 'btn_widget' );
		}

		if ( isset( $instance[ 'btn-2-title' ] ) ) {
			$btn_2= $instance[ 'btn-2-title' ];
		}
		else {
			$btn_2 = __( 'Sign in', 'btn_widget' );
		}

		if ( isset( $instance[ 'href_1' ] ) ) {
			$href_1= $instance[ 'href_1' ];
		}
		else {
			$href_1 = __( '/login', 'btn_widget' );
		}

		if ( isset( $instance[ 'href_2' ] ) ) {
			$href_2= $instance[ 'href_2' ];
		}
		else {
			$href_2 = __( '#contact-us', 'btn_widget' );
		}
		?>


		<label for="<?php echo $this->get_field_id( 'btn-1-title' ); ?>">Button 1</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'btn-1-title' ); ?>" name="<?php echo $this->get_field_name( 'btn-1-title' ); ?>" type="text" value="<?php echo esc_attr( $btn_1 ); ?>" />

		<label for="<?php echo $this->get_field_id( 'href_1' ); ?>">Link for button 1</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'href_1' ); ?>" name="<?php echo $this->get_field_name( 'href_1' ); ?>" type="text" value="<?php echo esc_attr( $href_1  ); ?>" />

		<label for="<?php echo $this->get_field_id( 'btn-2-title' ); ?>">Button 2</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'btn-2-title' ); ?>" name="<?php echo $this->get_field_name( 'btn-2-title' ); ?>" type="text" value="<?php echo esc_attr( $btn_2  ); ?>" />

		<label for="<?php echo $this->get_field_id( 'href_2' ); ?>">Link for button 2</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'href_2' ); ?>" name="<?php echo $this->get_field_name( 'href_2' ); ?>" type="text" value="<?php echo esc_attr( $href_2 ); ?>" />

		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['btn-1-title'] = ( ! empty( $new_instance['btn-1-title'] ) ) ? strip_tags( $new_instance['btn-1-title'] ) : '';
		$instance['href_1'] = ( ! empty( $new_instance['href_1'] ) ) ? strip_tags( $new_instance['href_1'] ) : '';
		$instance['btn-2-title'] = ( ! empty( $new_instance['btn-2-title'] ) ) ? strip_tags( $new_instance['btn-2-title'] ) : '';
		$instance['href_2'] = ( ! empty( $new_instance['href_2'] ) ) ? strip_tags( $new_instance['href_2'] ) : '';
		return $instance;
	}
}





