<?php/** 
* Template Name: Template vegetarien
*/
?>
<?php get_header(); ?>
<?php

$args_vegetariens = array(
    'post_type' => 'vegetarien',  
    'posts_per_page' => -1,
);


$VegetariensList = new WP_Query($args_vegetariens);
?>

<?php
$count = 1; 

while ($VegetariensList->have_posts()): $VegetariensList->the_post(); ?>

    <div class="accordion accordion-flush" id="accordionFlushExample<?php echo $count; ?>">
        <div class="accordion-item">
            <h2 class="accordion-header">
            <button class="accordion-button collapsed unique-button-<?php echo $count; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $count; ?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $count; ?>">
<?php the_title(); ?>
</button>

            </h2>
            <div id="flush-collapse<?php echo $count; ?>" class="accordion-collapse collapse unique-collapse-<?php echo $count; ?>" data-bs-parent="#accordionFlushExample<?php echo $count; ?>">
                <div class="accordion-body"><?php the_content(); ?>
            </div>
        </div>
    </div>

<?php
$count++; 
endwhile;
?>

<?php get_footer() ?>