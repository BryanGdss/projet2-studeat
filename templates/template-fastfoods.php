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











    <?php get_footer() ?>