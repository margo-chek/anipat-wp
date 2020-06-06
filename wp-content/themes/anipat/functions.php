<?php
/**
 * Anipat functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Anipat
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'anipat_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function anipat_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Anipat, use a find and replace
		 * to change 'anipat' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'anipat', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'post-thumb', 670, 402, true );
		add_image_size( 'blog-card', 750, 375, true );
		add_image_size( 'blog-post', 80, 80, true );
		add_image_size( 'blog-thumb', 68, 68, true );
		add_image_size( 'post-nav', 60, 60, true );
		add_image_size( 'serv-card', 98, 80, true );
		add_image_size( 'care-thumb', 445, 580, true );
		add_image_size( 'help-thumb', 80, 82, true );
		add_image_size( 'photo-thumb', 130, 148, true );
		add_image_size( 'photo-team-thumb', 350, 308, true );
		add_image_size( 'post-bg', 1920, 270, true );
		add_image_size( 'logo', 146, 36, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'nav-header-menu' => esc_html__( 'Nav Header', 'anipat' ),
				'header-operated-menu' => esc_html__( 'Top Header', 'anipat' ),
				'contact-footer-menu' => esc_html__( 'Contact Us Footer', 'anipat' ),
				'servces-footer-menu' => esc_html__( 'Our Servces Footer', 'anipat' ),
				'lincs-footer-menu' => esc_html__( 'Quick Link', 'anipat' ),
				'footer-menu' => esc_html__( 'Menu Footer', 'anipat' ),
				'social-links-header-menu' => esc_html__( 'Social Header', 'anipat' ),
				'social-links-footer-menu' => esc_html__( 'Social Footer', 'anipat' ),
				'social-links-post-menu' => esc_html__( 'Social Post', 'anipat' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'anipat_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 36,
				'width'       => 146,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'anipat_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function anipat_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'anipat_content_width', 640 );
}
add_action( 'after_setup_theme', 'anipat_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function anipat_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Blog', 'anipat' ),
			'id'            => 'sidebar-blog',
			'description'   => esc_html__( 'Add widgets here.', 'anipat' ),
			'before_widget' => '<div class="single_sidebar_widget %2$s" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget_title"><h4>',
			'after_title'   => '</h4></div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Category', 'anipat' ),
			'id'            => 'sidebar-category',
			'description'   => esc_html__( 'Add widgets here.', 'anipat' ),
			'before_widget' => '<div class="footer-widget %2$s" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="footer-title"><h3>',
			'after_title'   => '</h3></div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Post', 'anipat' ),
			'id'            => 'sidebar-post',
			'description'   => esc_html__( 'Add widgets here.', 'anipat' ),
			'before_widget' => '<div class="single_sidebar_widget %2$s" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="widget_title"><h4>',
			'after_title'   => '</h4></div>',
		)
	);
}
add_action( 'widgets_init', 'anipat_widgets_init' );

// Contact Form 7 remove auto added p tags
add_filter('wpcf7_autop_or_not', '__return_false'); 
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    return $content;
});

/**
 * Enqueue scripts and styles.
 */
function anipat_scripts() {

	wp_enqueue_style( 'open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700|Poppins:200,200i,300,300i,400,500,500i,600,700,800,900&display=swap' );
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/css/themify-icons.css' );
	wp_enqueue_style( 'carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/css/nice-select.css' );
	wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/css/flaticon.css' );
	wp_enqueue_style( 'gijgo', get_template_directory_uri() . '/css/gijgo.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/css/slicknav.css' );
	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'anipat-style', get_stylesheet_uri(), array(), _S_VERSION ); // подключаем главный файл стилей style.css, который в корне

	wp_style_add_data( 'anipat-style', 'rtl', 'replace' );

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery-1.12.4.min.js');
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/js/vendor/modernizr-3.5.0.min.js', 'jquery', null, true );
	wp_enqueue_script( 'popper-script', get_template_directory_uri() . '/js/popper.min.js', 'jquery', null, true );
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', null, true );
	wp_enqueue_script( 'carousel-script', get_template_directory_uri() . '/js/owl.carousel.min.js', 'jquery', null, true );
	wp_enqueue_script( 'counterup-script', get_template_directory_uri() . '/js/jquery.counterup.min.js', 'jquery', null, true );
	wp_enqueue_script( 'imagesloaded-script', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', 'jquery', null, true );
	wp_enqueue_script( 'scrollIt-script', get_template_directory_uri() . '/js/scrollIt.js', 'jquery', null, true );
	wp_enqueue_script( 'scrollUp-script', get_template_directory_uri() . '/js/jquery.scrollUp.min.js', 'jquery', null, true );
	wp_enqueue_script( 'wow-script', get_template_directory_uri() . '/js/wow.min.js', 'jquery', null, true );
	wp_enqueue_script( 'nice-select-script', get_template_directory_uri() . '/js/nice-select.min.js', 'jquery', null, true );
	wp_enqueue_script( 'slicknav-script', get_template_directory_uri() . '/js/jquery.slicknav.min.js', 'jquery', null, true );
	wp_enqueue_script( 'magnific-popup-script', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', 'jquery', null, true );
	wp_enqueue_script( 'plugins-script', get_template_directory_uri() . '/js/plugins.js', 'jquery', null, true );
	wp_enqueue_script( 'gijgo-script', get_template_directory_uri() . '/js/gijgo.min.js', 'jquery', null, true );

	wp_enqueue_script( 'contact-script', get_template_directory_uri() . '/js/contact.js', 'jquery', null, true );
	wp_enqueue_script( 'ajaxchimp-script', get_template_directory_uri() . '/js/jquery.ajaxchimp.min.js', 'jquery', null, true );
	wp_enqueue_script( 'form-script', get_template_directory_uri() . '/js/jquery.form.js', 'jquery', null, true );
	wp_enqueue_script( 'validate-script', get_template_directory_uri() . '/js/jquery.validate.min.js', 'jquery', null, true );

	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', 'jquery', null, true );
	
	wp_enqueue_script( 'anipat-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'anipat_scripts' );

add_filter('show_admin_bar', '__return_false');

add_filter( 'get_the_archive_title', function( $title ) {
});

remove_filter('the_content', 'wptexturize');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function add_span_cat_count($text) {
	$str = str_replace('<a', '<a class="d-flex justify-content-between"', $text);
	$str = str_replace('</a>', '', $str);
	$str = str_replace('(', '<p>(', $str);
	$str = str_replace(')', ')</p></a>', $str);

	return $str;
}
add_filter('wp_list_categories', 'add_span_cat_count');

function echo_trim_title($title) {
	if (substr($title, 0, 2) !== "<i") {
		return wp_trim_words( $title, 5, ' ...' );
	} else {
		return $title;
	}
}

function show_recent_post( $atts ) {
	$atts = shortcode_atts( [
		'quantity'  => 4,
	], $atts );

	if (!empty($atts['quantity']) && is_numeric($atts['quantity']) && $atts['quantity'] > 0 && $atts['quantity'] <= 5) {
		$att_quantity = $atts['quantity'];
	} else {
		$att_quantity = 4;
	}

	global $post;
	$temp_post = $post;

	$posts = get_posts( array(
		'numberposts' => $att_quantity,
		'orderby'     => 'date',
		// 'order'       => 'DESC', // DESC по умолчанию - от большего к меньшему
	) );

	$result = '';

	foreach( $posts as $post ) {
		setup_postdata($post);

		$title = echo_trim_title(get_the_title($post));

		$result .= '<div class="media post_item">';
		$result .= '<a alt="post" href="' . get_the_permalink($post) . '">' . get_the_post_thumbnail($post, 'blog-post') . '</a>';
		$result .= '<div class="media-body">';
		$result .= '<a href="' . get_the_permalink($post) . '"><h3">' . $title . '</h3></a>';
		$result .= '<p>' . get_the_date('F j, Y', $post) . '</p>'; // January 12, 2019
		$result .= '</div></div>';
	}

	wp_reset_postdata();

	$post = $temp_post;

	return $result;
}
add_shortcode( 'recent_post', 'show_recent_post' ); // использование: [recent_post quantity=4]

add_action('init', 'services_init');
function services_init() {
	register_post_type('service', array(
		'labels'             => array(
			'name'               => 'Сервисы',
			'singular_name'      => 'Service',
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый сервис',
			'edit_item'          => 'Редактировать сервис',
			'new_item'           => 'Новый сервис',
			'view_item'          => 'Посмотреть сервис',
			'search_items'       => 'Найти сервис',
			'not_found'          => 'Сервисов не найден',
			'not_found_in_trash' => 'В корзине сервисов не найден',
			'parent_item_colon'  => '',
			'menu_name'          => 'Сервисы'
			),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'			 => 'dashicons-cart',
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 22,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}

add_action('init', 'reviews_init');
function reviews_init() {
	register_post_type('review', array(
		'labels'             => array(
			'name'               => 'Отзывы',
			'singular_name'      => 'Reviews',
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый отзыв',
			'edit_item'          => 'Редактировать отзыв',
			'new_item'           => 'Новый отзыв',
			'view_item'          => 'Посмотреть отзыв',
			'search_items'       => 'Найти отзыв',
			'not_found'          => 'Отзывов не найдено',
			'not_found_in_trash' => 'В корзине отзывов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Отзывы'
			),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'			 => 'dashicons-testimonial',
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 23,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}

add_action('init', 'teams_init');
function teams_init() {
	register_post_type('team', array(
		'labels'             => array(
			'name'               => 'Команды',
			'singular_name'      => 'Teams',
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую команду',
			'edit_item'          => 'Редактировать команду',
			'new_item'           => 'Новая команда',
			'view_item'          => 'Посмотреть команду',
			'search_items'       => 'Найти команду',
			'not_found'          => 'Команд не найдено',
			'not_found_in_trash' => 'В корзине команд не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Команды'
			),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'			 => 'dashicons-buddicons-buddypress-logo',
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 24,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}


// хук, через который подключается функция
// регистрирующая новые таксономии (create_video_taxonomies)
// add_action( 'init', 'create_video_taxonomies' );

// функция, создающая 2 новые таксономии "genres" и "authors" для постов типа "video"
// function create_video_taxonomies() {

	// Добавляем древовидную таксономию 'genre' (как категории)
	// register_taxonomy('genre', array('video'), array(
	// 	'hierarchical'  => true,
	// 	'labels'        => array(
	// 		'name'              => _x( 'Жанры', 'taxonomy general name' ),
	// 		'singular_name'     => _x( 'Genre', 'taxonomy singular name' ),
	// 		'search_items'      =>  __( 'Search Genres' ),
	// 		'all_items'         => __( 'All Genres' ),
	// 		'parent_item'       => __( 'Parent Genre' ),
	// 		'parent_item_colon' => __( 'Parent Genre:' ),
	// 		'edit_item'         => __( 'Edit Genre' ),
	// 		'update_item'       => __( 'Update Genre' ),
	// 		'add_new_item'      => __( 'Добавить новый жанр' ),
	// 		'new_item_name'     => __( 'New Genre Name' ),
	// 		'menu_name'         => __( 'Жанры' ),
	// 	),
	// 	'show_ui'       => true,
	// 	'query_var'     => true,
	// 	'rewrite'       => array( 'slug' => 'the_genre' ), // есть свой собственный слаг в URL
	// ));

	// Добавляем НЕ древовидную таксономию 'estimation' (как метки)
// 	register_taxonomy('estimation', 'review', array(
// 		'hierarchical'  => false,
// 		'labels'        => array(
// 			'name'                        => _x( 'Авторы', 'taxonomy general name' ),
// 			'singular_name'               => _x( 'Estimation', 'taxonomy singular name' ),
// 			'search_items'                =>  __( 'Search Authors' ),
// 			'popular_items'               => __( 'Popular Authors' ),
// 			'all_items'                   => __( 'All Authors' ),
// 			'parent_item'                 => null,
// 			'parent_item_colon'           => null,
// 			'edit_item'                   => __( 'Edit Author' ),
// 			'update_item'                 => __( 'Update Author' ),
// 			'add_new_item'                => __( 'Add New Author' ),
// 			'new_item_name'               => __( 'New Author Name' ),
// 			'separate_items_with_commas'  => __( 'Separate authors with commas' ),
// 			'add_or_remove_items'         => __( 'Add or remove authors' ),
// 			'choose_from_most_used'       => __( 'Choose from the most used authors' ),
// 			'menu_name'                   => __( 'Авторы' ),
// 		),
// 		'show_ui'       => true,
// 		'query_var'     => true,
// 		'rewrite'       => array( 'slug' => 'the_author' ), // свой слаг в URL
// 	));
// }


add_action( 'init', 'create_review_taxonomies' );
function create_review_taxonomies() {

	// Добавляем НЕ древовидные таксономии
	register_taxonomy('estimation', 'review', array(
		'hierarchical'  => false,
		'labels'        => array(
			'name'                        => _x( 'Оценка', 'taxonomy general name' ),
			'singular_name'               => _x( 'Estimation', 'taxonomy singular name' ),
			'search_items'                =>  __( 'Search Estimations' ),
			'popular_items'               => __( 'Popular Estimations' ),
			'all_items'                   => __( 'All Estimations' ),
			'parent_item'                 => null,
			'parent_item_colon'           => null,
			'edit_item'                   => __( 'Edit Estimation' ),
			'update_item'                 => __( 'Update Estimation' ),
			'add_new_item'                => __( 'Add New Estimation' ),
			'new_item_name'               => __( 'New Estimation Name' ),
			'separate_items_with_commas'  => __( 'Separate estimations with commas' ),
			'add_or_remove_items'         => __( 'Add or remove estimations' ),
			'choose_from_most_used'       => __( 'Choose from the most used estimations' ),
			'menu_name'                   => __( 'Оценки' ),
		),
		'show_ui'       => true,
		'query_var'     => true,
		'rewrite'       => array( 'slug' => 'the_estimation' ), // свой слаг в URL
	));
	register_taxonomy('author_post', 'review', array(
		'hierarchical'  => false,
		'labels'        => array(
			'name'                        => _x( 'Должность автора', 'taxonomy general name' ),
			'singular_name'               => _x( 'Author Post', 'taxonomy singular name' ),
			'search_items'                =>  __( 'Search Author Posts' ),
			'popular_items'               => __( 'Popular Author Posts' ),
			'all_items'                   => __( 'All Author Posts' ),
			'parent_item'                 => null,
			'parent_item_colon'           => null,
			'edit_item'                   => __( 'Edit Author Posts' ),
			'update_item'                 => __( 'Update Author Post' ),
			'add_new_item'                => __( 'Add New Author Post' ),
			'new_item_name'               => __( 'New Author Post Name' ),
			'separate_items_with_commas'  => __( 'Separate author posts with commas' ),
			'add_or_remove_items'         => __( 'Add or remove author posts' ),
			'choose_from_most_used'       => __( 'Choose from the most used author posts' ),
			'menu_name'                   => __( 'Должность автора' ),
		),
		'show_ui'       => true,
		'query_var'     => true,
		'rewrite'       => array( 'slug' => 'the_author_post' ), // свой слаг в URL
	));
}

add_action( 'init', 'create_team_taxonomies' );
function create_team_taxonomies() {

	register_taxonomy('team_post', 'team', array(
		'hierarchical'  => false,
		'labels'        => array(
			'name'                        => _x( 'Должность в команде', 'taxonomy general name' ),
			'singular_name'               => _x( 'Team Post', 'taxonomy singular name' ),
			'search_items'                =>  __( 'Search Team Posts' ),
			'popular_items'               => __( 'Popular Team Posts' ),
			'all_items'                   => __( 'All Team Posts' ),
			'parent_item'                 => null,
			'parent_item_colon'           => null,
			'edit_item'                   => __( 'Edit Team Posts' ),
			'update_item'                 => __( 'Update Team Post' ),
			'add_new_item'                => __( 'Add New Team Post' ),
			'new_item_name'               => __( 'New Team Post Name' ),
			'separate_items_with_commas'  => __( 'Separate team posts with commas' ),
			'add_or_remove_items'         => __( 'Add or remove team posts' ),
			'choose_from_most_used'       => __( 'Choose from the most used team posts' ),
			'menu_name'                   => __( 'Должность в команде' ),
		),
		'show_ui'       => true,
		'query_var'     => true,
		'rewrite'       => array( 'slug' => 'the_team_post' ), // свой слаг в URL
	));
}