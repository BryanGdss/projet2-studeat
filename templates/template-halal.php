<?php/** 
* Template Name: Template halal
*/
?>
<?php get_header(); ?>

<h1>Halal</h1>
<div class="row d-flex">
    <?php
    $args_halal = array(
        'post_type' => 'halal',  
        'posts_per_page' => -1,
        'orderby' => 'title', 
        'order' => 'ASC', 
    );

    $halalList = new WP_Query($args_halal);
    ?>

    <?php while ($halalList->have_posts()): $halalList->the_post(); ?>
        <div class="col-sm-4 d-flex">
            <div class="card" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text"><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

    <?php wp_reset_postdata();?>
</div>










<?php get_footer() ?>