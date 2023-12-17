<?php wp_footer(); ?>

 <footer>
 <?php wp_nav_menu( [
 'theme_location' => 'footer',
 'container' => false,
 'menu_class' => 'liens'
 ])
 ?>
  <ul class="Social-media">
    <li class="RS" href="#"><i class="fab fa-facebook"></i></li>
    <li class="RS" href="#"><i class="fab fa-twitter"></i></li>
    <li class="RS" href="#"><i class="fab fa-instagram"></i></li>
   
</ul>  
  <div>Copyright - 2023 <?php bloginfo('name') ?> Brussels. All rights reserved.</div>
  
  </footer>
</body>
</html>