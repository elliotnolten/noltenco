<aside id="sidebar">
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
	
		<?php if ( function_exists('dynamic_sidebar') ) dynamic_sidebar( 'primary-widget-area' ); ?>
		
	<?php endif; ?>
</aside>