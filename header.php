<!DOCTYPE html <?php language_attributes(); ?> >
	<!--It's cool to be multilingual.-->
	
<head>
 	<!--Meta Data (that's so meta!)-->
 	<!--Characters-->
 	<meta charset="<?php bloginfo('charset'); ?>"/>
    
    <!--What's your screen width?-->
    <meta name="viewport" content="width=device-width"/>
    
    <!--Hey Google! This is what my site's all about -->
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    
    <!--Know who's linking to your blog with a pingback.-->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    
    <!--The site title.-->
	<title><?php bloginfo('name'); ?></title>
	
	<!--
	The stylesheet
	todo: update this to responsive (base, medium, small)
	note: all classes are Bootstrap 3 classes currently
	-->
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); 
?>" media="all">

	<!--wp_head() hook-->
	<?php wp_head(); ?>

</head>

<!--
Don't be a style tyrant. Give the user body classes.
You can add a custom class like this: body_class('custom-class')
-->
<body <?php body_class(); ?> >

	<div class="container">
		
		<!--
		The header
		note: this may also include logo, main nav, top nav, etc.
		-->	
		<header>
			<h1>
				<!--Take me home-->
				<a href="<?php echo home_url(); ?>" >
					<!--What do you call this site?-->
					<?php bloginfo('name'); ?>
				</a>
			</h1>
			<!--What's this site about?-->
			<h2><?php bloginfo('description'); ?></h2>
			<!-- The Header Widget -->
			<?php dynamic_sidebar('header'); ?>
			<!--Navigation: Main Menu-->
			<?php wp_nav_menu(
				array(
					//Which menu?
					'theme_location' => 'main',
					//turn the <div> container in to <nav> because HTML5
					'container' => 'nav',
					//Bootsrap Pills because Bootstrap Bill
					'menu_class' => 'nav nav-pills'
				)
			); ?>
		</header>

