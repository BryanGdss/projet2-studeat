<?php/** 
* Template Name: Template commande
*/
?>
<?php get_header(); ?>
<div class="menuchoix">
            <div class="row row-cols-5 g-3"></div>
             <div class="col">
                <div class="card-custom">
                 <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/restaurant.png" class="d-block w-100" class="card-img-top" alt="L'image ne s'affiche pas" />
                  <div class="card-body">
                    <h5 class="card-title">Restaurants</h5>
                  </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card-custom">
                  <a href="végétarien.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/vegetarien.png" class="d-block w-100" class="card-img-top" alt="L'image ne s'affiche pas" />
                  <div class="card-body">
                    <h5 class="card-title">Végétariens</h5>
                  </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card-custom">
                  <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/halal.png" class="d-block w-100" class="card-img-top" alt="L'image ne s'affiche pas" /> 
                  <div class="card-body">
                    <h5 class="card-title">Halal</h5>
                  </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card-custom ">
                <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fastfood.png" class="d-block w-100" class="card-img-top" alt="L'image ne s'affiche pas" />
                  <div class="card-body">
                    <h5 class="card-title">Fast-foods</h5>
                  </a>
                  </div>
                </div>
              </div>
              
              <div class="col">
                <div class="card-custom" >
                 <a href=""> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/courses.png" class="d-block w-100" class="card-img-top " alt="L'image ne s'affiche pas" />
                  <div class="card-body">
                    <h5 class="card-title">Courses</h5>
                  </a>
                  </div>
                </div>
              </div>
            </div>
          </div> <br>
          
<h2>Restaurants à proximité</h2>
<br>
<div id="galerie">
  <a href=""><div>
      <p>Kabukicho</p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 1.png"/>
  </div></a>
  <a href=""><div>
      <p>Burger kitchen</p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 2.png"/>
  </div></a>
 <a href="resto1.html"> <div>
      <p href="resto1">Taormina</p>
      <img href="<?php echo get_template_directory_uri(); ?>/assets/img/Image 3.png"/>
  </div></a>
  <a href=""><div>
      <p>El paso cochina</p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 4.png"/>
  </div></a>
  <a href=""><div>
      <p>Sao thaï</p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 5.png"/>
  </div></a>
  <a href=""><div>
      <p>Beijingya</p>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 6.png"/>
  </div></a>
</div>


<?php get_footer() ?>