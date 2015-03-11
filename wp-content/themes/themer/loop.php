<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<?php the_post_thumbnail(array(1200,500)); // Declare pixel size you need inside the array ?>
			<span class="slider-caption col-md-9">
				<h2><?php echo the_content();?></h2>
			</span>

		<?php endif; ?>

	</article>
	<!-- /article -->


<?php endwhile; ?>
	<div class="row">
		

	<div class="container-fluid">


			<div class="col-md-8 col-md-offset-2 <?php echo $post->post_name;?>">
				<h2>Books</h2>

				<?php
				$type = 'project';
				$args = array(
					'post_type' => $type,
					'post_status' => 'publish',
					'orderby' => 'title'

				);

				$my_query = null;
				$my_query = new WP_Query($args);

				if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
					?>
					<div class="col-md-4">
						<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );
						?>
						<img src=" <?php echo $src[0];?> " alt=""/>

						<div class="col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0">
							<h2 class="service-title"><span><?php the_title();?></span></h2>
							<?php the_content();?>
						</div>
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>

			<?php
			$type = 'about';
			$args = array(
				'post_type' => $type,
				'post_status' => 'publish',
				'orderby' => 'title'
			);
			

			$my_query = null;
			$my_query = new WP_Query($args);
			if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
				?>
				<?php 	$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );?>
				<div class="about col-md-12">

					<div class="col-sm-12 col-sm-offset-0 col-md-5 col-md-offset-2" >
						<h2 class="about-title"><?php the_title();?></h2>
					<span class="about-text">
						<?php the_content();?>
					</span>

					</div>
					<div class="col-md-5">

						<img class="houses col-md-12" src="<?php echo $src[0];?>"/>

					</div>
				</div>	


			<?php endwhile; endif; wp_reset_postdata(); ?>

		<!--End Content-->
	</div>
	</div>
<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
