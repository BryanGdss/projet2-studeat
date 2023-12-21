<?php/** 
* Template Name: Template commande
*/
?>
<?php get_header(); ?>
<div class="menuchoix">
            <div class="row row-cols-5 g-3"></div>
             <div class="col">
                <div class="card-custom">
                 <a href="<?php echo "restaurant" ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/restaurant.png" class="d-block w-100" class="card-img-top" alt="L'image ne s'affiche pas" />
                  <div class="card-body">
                    <h5 class="card-title">Restaurants</h5>
                  </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card-custom">
                  <a href="<?php echo "vegetarien" ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/vegetarien.png" class="d-block w-100" class="card-img-top" alt="L'image ne s'affiche pas" />
                  <div class="card-body">
                    <h5 class="card-title">Végétariens</h5>
                  </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card-custom">
                  <a href="<?php echo "halal" ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/halal.png" class="d-block w-100" class="card-img-top" alt="L'image ne s'affiche pas" /> 
                  <div class="card-body">
                    <h5 class="card-title">Halal</h5>
                  </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card-custom ">
                <a href="fast-food"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fastfood.png" class="d-block w-100" class="card-img-top" alt="L'image ne s'affiche pas" />
                  <div class="card-body">
                    <h5 class="card-title">Fast-foods</h5>
                  </a>
                  </div>
                </div>
              </div>
              
              <div class="col">
                <div class="card-custom" >
                 <a href="courses"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/courses.png" class="d-block w-100" class="card-img-top " alt="L'image ne s'affiche pas" />
                  <div class="card-body">
                    <h5 class="card-title">Courses</h5>
                  </a>
                  </div>
                </div>
              </div>
            </div>
          </div> <br>
          

<br>


<h2>Restaurants à proximité</h2>
    <div class="gallery-container">


      <div class="gallery-item">
        <a href="<?php echo '../vegetarien/kabukicho/'; ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 1.png" alt="Image 1">
          <p>Kabukicho</p>
        </a>
      </div>
      <div class="gallery-item">
        <a href="../vegetarien/kitchen-burger/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 2.png" alt="Image 2">
          <p>Kitchen Burger</p>
        </a>
      </div>
      <div class="gallery-item">
        <a href="../vegetarien/taormina/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 3.png" alt="Image 3">
          <p>Taormina</p>
        </a>
      </div>
      <div class="gallery-item">
        <a href="../vegetarien/el-paso-cocina/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 4.png" alt="Image 4">
          <p>El Paso Cocina</p>
        </a>
      </div>
      <div class="gallery-item">
        <a href="../vegetarien/sao-thai/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 5.png" alt="Image 5">
          <p>Sao Thaï</p>
        </a>
      </div>
      <div class="gallery-item">
        <a href="../vegetarien/beijingya/">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 6.png" alt="Image 6">
          <p>Beijingya</p>
        </a>
      </div>
    </div>
  




<?php get_footer() ?> 