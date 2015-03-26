<?php
  $post = get_post($_POST['id']);
  if (have_posts()) : $full_post = get_option('full_post'); while (have_posts()) : the_post(); ?>
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
	
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
			<?php the_content(''); ?>
	
		</article>
	
<?php endwhile; endif; ?>