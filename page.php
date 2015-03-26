<?php get_header(); ?>

<section id="main-content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
		<?php if (get_option('constellation_show_subpages')=='yes') {
			$subpages = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&sort_column=menu_order&depth=1');
			if ($subpages) echo '<nav id="subpages"><ul>' . str_replace('</a>',' &rarr;</a>',$subpages) . '</ul></nav>';
		} ?>
		
		<?php the_content(''); ?>

	</article>

<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>