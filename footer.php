<?php wp_footer(); ?>

 <footer>
 <?php wp_nav_menu( [
 'theme_location' => 'footer',
 'container' => false,
 'menu_class' => 'liens'
 ])
 ?>
<ul class="Social-media">
    <a href="https://www.facebook.com/"><li class="RS" ><i class="fab fa-facebook"></i></a>
    <a href="https://twitter.com/"><li class="RS" ><i class="fab fa-twitter"></i></a>
    <a href="https://www.instagram.com/"><li class="RS" ><i class="fab fa-instagram"></i></a>
</ul>  
  <div>Copyright - 2023 <?php bloginfo('name') ?> Brussels. All rights reserved.</div>
  
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/script/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>