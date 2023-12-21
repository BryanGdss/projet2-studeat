<?php/** 
* Template Name: Template restaurants
*/
?>
<?php get_header(); ?>

<h1>Restaurant</h1>
<div class="row d-flex">
    <?php
    $args_restaurants = array(
        'post_type' => 'restaurants',  
        'posts_per_page' => -1,
        'orderby' => 'title',  
        'order' => 'ASC', 
    );

    $restaurantsList = new WP_Query($args_restaurants);
    ?>

    <?php while ($restaurantsList->have_posts()): $restaurantsList->the_post(); ?>
        <div class="col-sm-4 d-flex">
            <div class="card flex-fill" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text"><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

    <?php wp_reset_postdata();?>
</div>








<?php get_footer() ?>