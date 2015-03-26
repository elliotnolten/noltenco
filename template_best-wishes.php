<?php
/*
Template Name: Best Wishes
*/
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title><?php the_title(); ?></title>
		<meta name="description" content="Best Wishes for 2013, Hayley, Pamela, Elliot" />
		<meta name="keywords" content="Best Wishes for 2013, Hayley, Pamela, Elliot" />
		<meta name="author" content="elliotnolten.com" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/best-wishes/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/best-wishes/css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/best-wishes/css/custom.css" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/best-wishes/js/modernizr.custom.79639.js"></script> 
		<noscript><link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/best-wishes/css/noJS.css" /></noscript>
		<script type="text/javascript">
		
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-37198049-1']);
		  _gaq.push(['_setDomainName', 'nolten.co']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>
	</head>
	<body>
		<header id="header" role="banner" class="dark-gradient">
			<nav id="main-nav" role="navigation">
				<div id="logo"><a href="http://nolten.co/"><span></span></a></div>
						<ul class="pages">
					<!--<li class="work"><a href="http://nolten.co/work"><span></span></a></li>
					<li class="info"><a href="http://nolten.co/info"><span></span></a></li>-->
					<li class="clessic"><a href="http://clessic.com" target="_blank" title="clessic"><span></span></a></li>
					<li class="sporti"><a href="http://getsporti.net" target="_blank" title="sporti"><span></span></a></li>
				</ul>
				<ul class="social">
					<li class="links">
						<a><span></span></a>
						<ul>
							<li class="fb"><a href="https://facebook.com/elliot.nolten" target="_blank" title="Join me on Facebook"></a></li>
							<li class="tw"><a href="https://twitter.com/elliotnolten" target="_blank" title="Follow me on Twitter"></a></li>
							<li class="in"><a href="http://nl.linkedin.com/in/elliotnolten" target="_blank" title="Add me to your network"></a></li>
							<li class="dr"><a href="http://dribbble.com/elliotnolten" target="_blank" title="Like my shots"></a></li>
						</ul>
					</li>
				</ul>
			</nav>
				
			</header>
		<div class="container">
			
			<section class="main">

				<div class="bb-custom-wrapper">
					<div id="bb-bookblock" class="bb-bookblock">
						<div class="bb-item">
							<img src="<?php bloginfo('template_url'); ?>/best-wishes/front@2x.png" width="894" height="614" alt="The best wishes for 2013"/>
						</div>
						<div class="bb-item">
							<img src="<?php bloginfo('template_url'); ?>/best-wishes/back@2x.png" width="894" height="614" alt="See you next year!"/>
						</div>
					</div>
					
					<nav>
						<a id="bb-nav-prev" href="#" onClick="_gaq.push(['_trackEvent', 'Card Flip', 'Previous', ''">Previous</a>
						<a id="bb-nav-next" href="#" onClick="_gaq.push(['_trackEvent', 'Card Flip', 'Next', ''">Next</a>
					</nav>
				</div>
				
			</section>
			
		</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/best-wishes/js/jquerypp.custom.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/best-wishes/js/jquery.bookblock.js"></script>
		<script type="text/javascript">
					$(function() {
		
						var Page = (function() {
		
							var config = {
									$bookBlock : $( '#bb-bookblock' ),
									$navNext : $( '#bb-nav-next' ),
									$navPrev : $( '#bb-nav-prev' ),
									$navJump : $( '#bb-nav-jump' ),
									bb : $( '#bb-bookblock' ).bookblock( {
										speed : 800,
										shadowSides : 0.8,
										shadowFlip : 0.7
									} )
								},
								init = function() {
		
									initEvents();
									
								},
								initEvents = function() {
		
									var $slides = config.$bookBlock.children(),
											totalSlides = $slides.length;
		
									// add navigation events
									config.$navNext.on( 'click', function() {
		
										config.bb.next();
										return false;
		
									} );
		
									config.$navPrev.on( 'click', function() {
										
										config.bb.prev();
										return false;
		
									} );
		
									config.$navJump.on( 'click', function() {
										
										config.bb.jump( totalSlides );
										return false;
		
									} );
									
									// add swipe events
									$slides.on( {
		
										'swipeleft'		: function( event ) {
										
											config.bb.next();
											return false;
		
										},
										'swiperight'	: function( event ) {
										
											config.bb.prev();
											return false;
											
										}
		
									} );
		
								};
		
								return { init : init };
		
						})();
		
						Page.init();
		
					});
				</script>
	</body>
</html>