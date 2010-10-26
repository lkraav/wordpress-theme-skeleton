<?php 
/**
 * TwentyTen functions and definitions
 *
 * @package WordPress
 * @subpackage Stereotunnel
 * @since Stereotunnel 1.0
 */
// Saftey first.
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'functions.php' == basename($_SERVER['SCRIPT_FILENAME']))
die ('Please do not load this page directly, Hassan!');

// Plug it
header('X-Powered-By: Semantics are everything. me@kennethreitz.com for more info.');

// Add awesome brower classes to body tag
add_filter('body_class','browser_body_class');
function browser_body_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'gecko';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) $classes[] = 'ie';
	else $classes[] = 'unknown';

	if($is_iphone) $classes[] = 'iphone';
	return $classes;
}

// Remove usless the_generator meta tag - whoops
add_filter( 'the_generator', create_function('$a', "return null;") );

// Custom Logo
function custom_logo() { ?> 
	<style type="text/css">
		h1 a { background-image: url(
			<?php get_bloginfo('template_directory'); ?>/img/logo-login.gif
		) !important) }
    </style>
<?php }

add_action('login_head', 'custom_logo');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @uses add_theme_support() To add support for nav menus.
 * @uses load_theme_textdomain() For translation/localization support.
 *
 * @since Stereotunnel 1.0
 */

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}

// Make theme available for translation
// Translations can be filed in the /languages/ directory
load_theme_textdomain('stereotunnel', TEMPLATEPATH . '/languages');

$locale = get_locale();
$locale_file = TEMPLATEPATH."/languages/$locale.php";
if ( is_readable( $locale_file ) )
	require_once( $locale_file );
