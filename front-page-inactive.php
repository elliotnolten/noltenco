<!doctype html>
<html lang="en" class="no-js front-page">
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
<link href='http://fonts.googleapis.com/css?family=Dosis:300,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head><?php $body_classes = join( ' ', get_body_class() ); ?>
<!--[if lt IE 7 ]><body class="ie6 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 7 ]><body class="ie7 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 8 ]><body class="ie8 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 9 ]><body class="ie9 <?php echo $body_classes; ?>"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body class="front-page"><!--<![endif]-->

<header id="header" role="banner" class="dark-gradient">
	<nav id="main-nav" role="navigation">
		<div id="logo"><a href="<?php bloginfo('url'); ?>/"><span></span></a></div>
		<?php//wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		<ul class="pages">
			<li class="instant-inspiration"><a href="http://instant-inspiration.elliotnolten.com"><span></span></a></li>
		</ul>
		<ul class="social">
			<li class="links">
				<a><span></span></a>
				<ul>
					<li class="fb"><a href="https://facebook.com/elliot.nolten" target="_blank" title="Join me on Facebook"></a></li>
					<li class="tw"><a href="https://twitter.com/elliotnolten" target="_blank" title="Follow me on Twitter"></a></li>
					<li class="in"><a href="http://www.linkedin.com/profile/view?id=55987852&authType=NAME_SEARCH&authToken=YRa9&locale=en_US&srchid=0d7cf12b-1223-44c8-b6d3-85d30976c59b-0&srchindex=1&srchtotal=1&goback=%2Efps_PBCK_elliot+nolten_*1_*1_*1_*1_*1_*1_*2_*1_Y_*1_*1_*1_false_1_R_*1_*51_*1_*51_true_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&pvs=ps&trk=pp_profile_name_link" target="_blank" title="Add me to your LinkedIn Network"></a></li>
				</ul>
			</li>
		</ul>
	</nav>
</header>
	
	<div id="main" role="main">

		<section id="main-content" class="front-page">

			<article>
						
				<img src="<?php bloginfo('template_url'); ?>/images/elliotnolten-logo.png" alt="elliotnolten logo" />

			</article>


		</section>

	</div><!-- END MAIN -->

	<footer id="footer" role="contentinfo">
		<nav>
			&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
		</nav>
	</footer>		
	<?php wp_footer(); ?>
	<script type="text/javascript">
	/* <![CDATA[ */
		jQuery('#sidebar .widget:nth-child(even)').css('margin-right', 0);
	/* ]]> */
	</script>
</body>

</html>
