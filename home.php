<?php 
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<div id="work-showcase">

	<div id="workbg" class="flexslider">
		<ul class="slides">
			<?php query_posts(array('post_type' => 'project', 'posts_per_page' => 5, 'meta_query' => array(
				array(
					'key' => 'featured',
					'value' => 'yes')
				))); 
				if (have_posts()) : $full_post = get_option('full_post'); while (have_posts()) : the_post(); ?>
					<li style="background: <?php the_field('background_color'); ?> url(<?php the_field('work_background'); ?>) center center no-repeat;">
					</li>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>
		</ul>
	</div><!--#workbg.flexslider-->

	<div class="work-slider">
		<div id="work-slider" class="flexslider">
			<ul class="slides">
				<?php query_posts(array('post_type' => 'project', 'posts_per_page' => 5, 'meta_query' => array(
					array(
						'key' => 'featured',
						'value' => 'yes')
					))); 
					if (have_posts()) : $full_post = get_option('full_post'); while (have_posts()) : the_post(); ?>  
					<li>
						<div class="workfeat">
							<div class="img-holder">
								<a rel="<?php the_ID(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="post-link">
									<img src="<?php the_field('home_image');?>" alt="" />
								</a>
							</div><!--.img-holder-->
						</div><!--.workfeat-->
					</li>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</ul>
		</div><!--#work-slider.flexslider-->
	</div><!--.work-slider-->
</div><!--#work-->
<section id="main-content" class="home">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>" class="home-content">

			<?php the_content(''); ?>
			<div class="clear"></div>

		</article>

	<?php endwhile; endif; ?>
	<article id="single-project"></article>
</section>
<?php get_footer(); ?>
