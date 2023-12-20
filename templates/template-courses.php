<? php
/** 
 * Template Name: Template courses
 */
?>
<?php get_header(); ?>

<h1>Courses</h1>

<div class="row">
    <?php
    $args_courses = array(
        'post_type' => 'courses',  
        'posts_per_page' => -1,
    );

    $coursesList = new WP_Query($args_courses);
    ?>

    <?php while ($coursesList->have_posts()): $coursesList->the_post(); ?>
        <div class="col-sm-4">
            <div class="card" style="width: 100%;">
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