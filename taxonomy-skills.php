<?php get_header(); ?>

<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
<?php 
//list terms in a given taxonomy using wp_list_categories (also useful as a widget if using a PHP Code plugin)

$taxonomy     = 'specialties';
$orderby      = 'id'; 
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for n
$hierarchical = 1;      // 1 for yes, 0 for no
$title        = ' ';
$class		  = '';

$args = array(
  'taxonomy'     => $taxonomy,
  'orderby'      => $orderby,
  'show_count'   => $show_count,
  'pad_counts'   => $pad_counts,
  'hierarchical' => $hierarchical,
  'title_li'     => $title,
  'class'		 => $class
);
?>
<div class="specialties">
    <ul>
    <?php wp_list_categories( $args ); ?>
    <ul><li><a href="<?php echo home_url( '/' ); ?>work" title="View all work">View all work</a></li></ul>
    </ul>
</div><!--.specialties-->
<div class="skills">
    <h3>Skills</h3>
    <div style="color:#666; font-size:8pt;"><?php wp_tag_cloud( 'smallest=8&largest=8&taxonomy=skills&separator= ' ); ?></div>
</div><!--.skills-->
</div><!--#filter-->      
<div class="fwork-title"><img src="<?php echo bloginfo('template_url'); ?>/images/ti-work-bl.png" alt="" /><h1>&ldquo;<?php echo $term->name; ?>&rdquo; work</h1></div><!--.fwork-title-->
<div id="work-thumbnails">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>        
        <div class="work-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a></div><!--.work-thumb-->
    <?php endwhile; else: ?>
    <p><h1><?php _e('Sorry, no posts matched your criteria.'); ?></h1></p>
    <?php endif; ?>
</div><!--#work-thumbnails-->
<?php get_footer(); ?>