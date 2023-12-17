<?php get_header(); ?>


<!-- La on place la condition "si articles alors..." -->
<?php if (have_posts()): ?>
    <h1>Mes articles</h1>
    <!-- C'est ici qu'on pourra afficher nos articles -->
<?php else: ?>
    <h1>Aucun articles disponible pour le moment</h1>
<?php endif; ?>







<?php get_footer(); ?>