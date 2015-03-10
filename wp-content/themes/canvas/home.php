<?php
/**
 * Template Name: Home
 *
 * Here we setup all logic and HTML that is required for the index template, used as both the homepage
 * and as a fallback template, if a more appropriate template file doesn't exist for a specific context.
 *
 * @package WooFramework
 * @subpackage Template
 */

get_header(); ?>
<!--<div class="row">-->
<!--    <div class="container">-->

    <div id="content" class="col-full">

        <?php woo_main_before(); ?>
        
        <?php /*slider*/?>
        
        
        


            <?php do_action( 'homepage' ); ?>
        
        
        
        
        
        <?php /*books*/?>

    <div class=" <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
        <?php

        //get the event custom post types
        $type = 'books';
        $args = array(
            'post_type'        => $type,
            'post_status'      => 'publish',
            'orderby'          => 'title',
            'posts_per_page'   => -1
        );

        $my_query = null;
        $my_query = new WP_Query($args);
        if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
            ?>
            <h1><?php the_title();?></h1>
            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );?>

            <div >
                <img src="<?php echo $src[0]; ?>" alt=""/>
                <h3><?php the_title();?></h3>
                <?php the_content(); ?>
            </div>

        <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        
        
        
        
        
        <?php /*about*/?>
        
        
        
        
        

        <?php woo_main_after(); ?>

    </div><!-- /.content -->
<!---->
<!--    </div>-->
<!--</div>-->
<?php get_footer(); ?>