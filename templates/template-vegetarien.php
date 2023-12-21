<?php/** 
* Template Name: Template vegetarien
*/
?>
<?php get_header(); ?>

<h1>Végétarien</h1>
<div class="row d-flex">
    <?php
    $args_vegetariens = array(
        'post_type' => 'vegetarien',  
        'posts_per_page' => -1,
        'orderby' => 'title',  
        'order' => 'ASC', 
    );

    $VegetariensList = new WP_Query($args_vegetariens);
    ?>

    <?php while ($VegetariensList->have_posts()): $VegetariensList->the_post(); ?>
    <div class="col-sm-4 d-flex">
            <div class="card flex-fill" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text"><?php echo the_content(); ?></p>
                </div>
                <div class="card-footer">
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Découvrez <?php the_title(); ?></a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata();?>
</div>










<?php get_footer() ?>