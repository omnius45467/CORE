<!-- sidebar -->
<div class="container-fluid">
	

<aside class=" col-md-8 col-md-offset-2 sidebar" role="complementary">


	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>
	<br/>
	<br/>
	<p>&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?> <?php _e('Solutions Group'); ?></p>

</aside>
</div>
<!-- /sidebar -->
