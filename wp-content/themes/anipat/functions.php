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
		add_image_size( 'blog-card', 610, 305, true );
		add_image_size( 'blog-post', 80, 80, true );
		add_image_size( 'blog-thumb', 68, 68, true );
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
			'name'          => esc_html__( 'Sidebar Top', 'anipat' ),
			'id'            => 'sidebar-top-header',
			'description'   => esc_html__( 'Add widgets here.', 'anipat' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Blog', 'anipat' ),
			'id'            => 'sidebar-blog',
			'description'   => esc_html__( 'Add widgets here.', 'anipat' ),
			'before_widget' => '<div class="aside-widget %2$s" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="section-title"><h2>',
			'after_title'   => '</h2></div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Category Footer', 'anipat' ),
			'id'            => 'sidebar-category-footer',
			'description'   => esc_html__( 'Add widgets here.', 'anipat' ),
			'before_widget' => '<div class="footer-widget %2$s" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="footer-title"><h3>',
			'after_title'   => '</h3></div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Contact Footer', 'anipat' ),
			'id'            => 'sidebar-contact-footer',
			'description'   => esc_html__( 'Add widgets here.', 'anipat' ),
			'before_widget' => '<div class="footer_widget %2$s" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="footer_title"><h3>',
			'after_title'   => '</h3></div>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar Widget Footer', 'anipat' ),
			'id'            => 'sidebar-widget-footer',
			'description'   => esc_html__( 'Add widgets here.', 'anipat' ),
			'before_widget' => '<div class="aside-widget %2$s" id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'anipat_widgets_init' );

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
	$str = str_replace('<a', '<a class="d-flex justify-content-between"', $text); // что , на что , где меняем - $text
	// $str = str_replace(')', '</span></a>', $str);
	return $str;
}
add_filter('wp_list_categories', 'add_span_cat_count');

function show_recent_post( $atts ) {
	$atts = shortcode_atts( [
		'quantity'  => 4, // количество постов
	], $atts );

	if (!empty($atts['quantity']) && is_numeric($atts['quantity']) && $atts['quantity'] > 0 && $atts['quantity'] <= 5) {
		$att_quantity = $atts['quantity'];
	} else {
		$att_quantity = 4; // если переданный параметр некорректен - взять параметр по умолчанию
	}

	global $post;
	$temp_post = $post;

	$posts = get_posts( array(
		'numberposts' => $att_quantity,
		'orderby'     => 'date', // 'comment_count',
		// 'order'       => 'DESC', // DESC по умолчанию - от большего к меньшему
	) );

	$result = '';

	foreach( $posts as $post ) {
		setup_postdata($post); // функция, которая устанавливает все переменные permalink, title, category...

		$result .= '<div class="media post_item">';
		$result .= '<a alt="post" href="' . get_the_permalink($post) . '">' . get_the_post_thumbnail($post, 'blog-post') . '</a>'; // <img src="img/post/post_1.png" alt="post">
		$result .= '<div class="media-body">';
		$result .= '<a href="' . get_the_permalink($post) . '"><h3">' . get_the_title($post) . '</h3></a>'; // <a href="single-blog.html"><h3>From life was you fish...</h3></a>
		$result .= '<p>' . get_the_date('F j, Y', $post) . '</p>'; // January 12, 2019
		$result .= '</div></div>';
	
	}

	wp_reset_postdata(); // сброс

	$post = $temp_post;

	return $result;
}
add_shortcode( 'recent_post', 'show_recent_post' ); // использование: [recent_post quantity=4]

// function show_featured_read_posts( $atts ) {
// 	$atts = shortcode_atts( [ // параметры по умолчанию - если не передали
// 		'quantity'  => 2, // количество постов
// 	], $atts );

// 	if (!empty($atts['quantity']) && is_numeric($atts['quantity']) && $atts['quantity'] > 0 && $atts['quantity'] <= 5) {
// 		$att_quantity = $atts['quantity'];
// 	} else {
// 		$att_quantity = 2; // если переданный параметр некорректен - взять параметр по умолчанию
// 	}

// 	global $post;
// 	$temp_post = $post;

// 	$posts = get_posts( array(
// 		'numberposts' => $att_quantity,
// 		'orderby'     => 'date', // 'comment_count',
// 		// 'order'       => 'DESC', // DESC по умолчанию - от большего к меньшему
// 	) );

// 	$result = '';

// 	foreach( $posts as $post ) {
// 		setup_postdata($post);

// 		$result .= '<div class="post post-thumb">';
// 		$result .= '<a class="post-img" href="' . get_the_permalink($post) . '">' . get_the_post_thumbnail($post, 'post-thumb-index') . '</a>';
// 		$result .= '<div class="post-body"><div class="post-meta">';
// 		$result .= '<a class="post-category cat-item-' . get_the_category($post)[0]->cat_ID . '" href="' . get_category_link( get_the_category($post)[0]->cat_ID ) . '">' . get_the_category($post)[0]->cat_name . '</a>';
// 		$result .= '<span class="post-date">' . get_the_date('F j, Y', $post) . '</span></div>';
// 		$result .= '<h3 class="post-title"><a href="' . get_the_permalink($post) . '">' . get_the_title($post) . '</a></h3>';
// 		$result .= '</div></div>';
// 	}

// 	wp_reset_postdata(); // сброс

// 	$post = $temp_post;

// 	return $result;
// }
// add_shortcode('featured-posts-index', 'show_featured_read_posts' ); // использование: [featured-posts-index quantity=2]
