<?php/** 
* Template Name: Template commande
*/
?>
<?php get_header(); ?>
<div class="menuchoix">
            <div class="row row-cols-5 g-3"></div>
             <div class="col">
                <div class="card-custom">
                 <a href="restaurant"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/restaurant.png" class="d-block w-100" class="card-img-top" alt="L'image ne s'affiche pas" />
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
                  <a href="halal"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/halal.png" class="d-block w-100" class="card-img-top" alt="L'image ne s'affiche pas" /> 
                  <div class="card-body">
                    <h5 class="card-title">Halal</h5>
                  </a>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card-custom ">
                <a href="fastfood"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fastfood.png" class="d-block w-100" class="card-img-top" alt="L'image ne s'affiche pas" />
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
<div class="galerie" class="container mt-4">
<h2>Restaurants à proximité</h2>

    <div class="row">
        <div class="col-md-4 mb-4 first-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 1.png" alt="Photo 1" class="img-fluid">
        </div>
        <div class="col-md-4 mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 2.png" alt="Photo 2" class="img-fluid">
        </div>
        <div class="col-md-4 mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 3.png" alt="Photo 3" class="img-fluid">
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 4.png" class="img-fluid">
        </div>
        <div class="col-md-4 mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 5.png" alt="Photo 5" class="img-fluid">
        </div>
        <div class="col-md-4 mb-4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 6.png" alt="Photo 6" class="img-fluid">
        </div>
    </div>
</div>


<?php get_footer() ?> 