<?php get_header(); ?>


  <?php if (have_posts()): ?>
  
    
    <?php while(have_posts()): the_post(); ?>
        
        <h1><?php the_title(); ?></h1>
        

        <p>
          <img src="<?php the_post_thumbnail_url(); ?>" style="width:100%;height:auto;" />
        </p>
        <?php the_content(); ?>

    <?php endwhile; ?>

  <?php else: ?>
    <h1>Aucun articles disponible pour le moment</h1>
  <?php endif; ?>

<?php get_footer(); ?>