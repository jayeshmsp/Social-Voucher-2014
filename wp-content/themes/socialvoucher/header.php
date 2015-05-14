<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
    
    <!-- Custom Code by MSP Team -->
    
      <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fonts/fonts.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/js/bower_components/BigVideo/css/bigvideo.css" />
        
    <!-- End Custom Code by MSP Team -->
    
	<?php wp_head(); ?>
    
    <!-- Custom Code by MSP Team -->
    
    <!--<script src="<?php //echo get_stylesheet_directory_uri(); ?>/js/jquery-1.10.2.js"></script>-->
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr-2.6.2.min.js" type="text/javascript"></script>
      <link href="<?php echo get_stylesheet_directory_uri(); ?>/js/jplayer/skin/blue.monday/css/jplayer.blue.monday.min.css" rel="stylesheet" type="text/css" />
      <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jplayer/jquery.jplayer.min.js"></script>
    
    <!-- Global Variable for site url -->
    <script>
        var mainUrl = '<?php echo esc_url( home_url( '/' ) ); ?>';
        var SetPass = "<?php echo get_field('setpassword')?>";
    </script>
    
    
      <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
        
    <!-- End Custom Code by MSP Team -->
</head>

<body <?php body_class(); ?>>
	<div class="page-wrap">
		<header>
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php
                   $siteLogo = get_field('website_logo',2); // 2 is post id of Home page.                               
                   $size = 'full'; // (thumbnail, medium, large, full or custom size)
                   if( $siteLogo ) { echo wp_get_attachment_image( $siteLogo, $size ); }
               ?>
			</a>

		</header><!-- #masthead -->
    <section id="main">