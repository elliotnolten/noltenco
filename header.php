<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<!--[if IE]><![endif]-->
<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<?php if ( file_exists(TEMPLATEPATH .'/favicon.ico') ) : ?>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
<?php endif; ?><?php if ( file_exists(TEMPLATEPATH .'/apple-touch-icon.png') ) : ?>
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">
<?php endif; ?><link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/flexslider.css">
<link href='http://fonts.googleapis.com/css?family=Source Sans Pro:300,600' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head><?php $body_classes = join( ' ', get_body_class() ); ?>
<!--[if lt IE 7 ]><body class="ie6 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 7 ]><body class="ie7 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 8 ]><body class="ie8 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 9 ]><body class="ie9 <?php echo $body_classes; ?>"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body class="<?php echo $body_classes; ?>"><!--<![endif]-->

<header id="header" role="banner" class="dark-gradient">
	<nav id="main-nav" role="navigation">
		<?php if (is_home() || is_front_page()) {
			
		} else {
			echo('<h1>'); the_title(); echo('</h1>');
		} ?>
		<div id="logo"><a href="<?php bloginfo('url'); ?>/"><span></span></a></div>
		<?php//wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		<ul class="pages">
			<!--<li class="work"><a href="<?php bloginfo('url'); ?>/work"><span></span></a></li>
			<li class="info"><a href="<?php bloginfo('url'); ?>/info"><span></span></a></li>-->
			<!--<li class="clessic"><a href="http://clessic.com" target="_blank" title="clessic"><span></span></a></li>
			<li class="sporti"><a href="http://getsporti.net" target="_blank" title="sporti"><span></span></a></li>-->
		</ul>
		<ul class="social">
			<li class="links">
				<a href="#"><span></span></a>
				<ul>
					<li class="fb"><a href="https://facebook.com/elliot.nolten" target="_blank" title="Join me on Facebook"></a></li>
					<li class="tw"><a href="https://twitter.com/elliotnolten" target="_blank" title="Follow me on Twitter"></a></li>
					<li class="in"><a href="http://nl.linkedin.com/in/elliotnolten" target="_blank" title="Add me to your network"></a></li>
					<li class="dr"><a href="http://dribbble.com/elliotnolten" target="_blank" title="Like my shots"></a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<?php if (is_home() || is_front_page()) : ?>	
	<?php endif; ?>
</header>
	
<div id="main" role="main">