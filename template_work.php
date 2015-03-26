<?php
/*
Template Name: Work
*/
?>
<?php get_header(); ?>
<script type="text/javascript">
$(document).ready(function() {
	$('#collection-slider').flexslider({
	  animation: "slide"
	});
});

</script>
<?php
  function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}
?>
<div id="collection-slider" class="flexslider">
<ul class="slides">
<?php query_posts(array('post_type' => 'project', 'posts_per_page' => 2, 'orderby' => 'ASC')); if (have_posts()) : $full_post = get_option('full_post'); while (have_posts()) : the_post(); ?>
		<li class="map" id="<?php the_slug();?>">     
       <?php get_template_part( 'content', 'collection' ); ?>
		</li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
</ul>
</div><!--#collection-slider-->

<?php get_footer(); ?>