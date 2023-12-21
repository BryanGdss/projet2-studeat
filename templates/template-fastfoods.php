<? php
/** 
 * Template Name: Template fast-foods
 */
?>
<?php get_header(); ?>

<h1>Fast-foods</h1>
<div class="row d-flex">
    <?php
    $args_fastfoods = array(
        'post_type' => 'fast-foods',  
        'posts_per_page' => -1,
        'orderby' => 'title',  
        'order' => 'ASC', 
    );

    $fastfoodsList = new WP_Query($args_fastfoods);
    ?>

    <?php while ($fastfoodsList->have_posts()): $fastfoodsList->the_post(); ?>
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