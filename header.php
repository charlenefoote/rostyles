<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="shortcut icon" href="/favicon.ico">
<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Arapey:400italic,400|Oswald:400,700,300' rel='stylesheet' type='text/css'>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	

	<header id="main">
	
		<section id="introwrap">
	
			<h1><a href="/">RO Styles</a></h1>
			<h2>We create style<span>for everyday looks &amp; memorable events.</span></h2>
			
			<a href="#aboutwrap" class="white-btn"><img src="<?php bloginfo( 'template_directory' ); ?>/images/down-arrow.png"></a>		
		</section>
		
		<nav class="header-bar">
		
			<?php wp_nav_menu ( array ( 'theme_location' => 'primary' ) );  ?>
			
		</nav>
		
	</header>
	