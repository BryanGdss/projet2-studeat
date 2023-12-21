<? php
/** 
 * Template Name: Template courses
 */
?>
<?php get_header(); ?>

<h1>Courses</h1>
<div class="row d-flex">
    <?php
    $args_courses = array(
        'post_type' => 'courses',  
        'posts_per_page' => -1,
        'orderby' => 'title', 
        'order' => 'ASC', 
    );

    $coursesList = new WP_Query($args_courses);
    ?>

    <?php while ($coursesList->have_posts()): $coursesList->the_post(); ?>
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