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
                <?php
                if (has_post_thumbnail()) {
                    echo wp_get_attachment_image(get_post_thumbnail_id(), 'custom-thumbnail', false, ['class' => 'card-img-top', 'alt' => get_the_title(), 'style' => 'width: 100%; height: auto;']);
                }
                ?>
                <div class="card-body">
                    <p class="card-text"><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>

    <?php wp_reset_postdata();?>
</div>








<?php get_footer() ?>