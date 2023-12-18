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

<?php if ($VegetariensList->have_posts()): ?>
    <h3>Nos restaurants végétariens</h3>  
    <ul>
        <?php while ($VegetariensList->have_posts()): $VegetariensList->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
    <?php

    wp_reset_postdata();
else :
    echo 'Aucun restaurant trouvé.';
endif;
?>









<?php get_footer() ?>