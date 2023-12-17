<?php/** 
* Template Name: Template conctact
*/
?>
<?php get_header(); ?>




<?php
$restaurantsList = new WP_Query([
    'post_type' => 'restaurants',
    'posts_per_page' => -1
]);

// Créer une nouvelle instance de WP_Query pour les articles
$restaurantsList = new WP_Query($restaurantsList);
?>

<?php if ($restaurantsList->have_posts()): ?>
    <h3>Nos restaurants</h3>
    <ul>
        <?php while ($restaurantsList->have_posts()): $restaurantsList->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
    <?php
    // Réinitialiser la requête pour éviter des conflits
    wp_reset_postdata();
else :
    // Aucun article trouvé
    echo 'Aucun article trouvé.';
endif;
?>





<?php get_footer() ?>