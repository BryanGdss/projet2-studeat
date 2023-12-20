<?php/** 
* Template Name: Template livreur

*/
?>
<?php get_header(); ?>
<div class="row">
      
      <div class="col-md-4 custom-card">
        <div class="card">
          <h5 class="card-header bg-success text-white">
            Incrivez-vous en tant que livreur
          </h5>
          <div class="card-body">
            <p class="card-text">En vous déplaçant à travers les rues de votre ville pour apporter des repas savoureux aux étudiants avec Stud'Eat, vous pouvez désormais créer une source de revenus supplémentaire.</p>
          </div>
        </div>
      </div>

      
      <div class="col-md-4 custom-card">
        <div class="card">
          <h5 class="card-header bg-success text-white">
            Notre équipe
          </h5>
          <div class="card-body">
            <p class="card-text">Rejoignez notre équipe de jeunes dynamiques chez Stud'Eat pour faire bouger les choses et créer un impact positif en tant que livreur bénévole !</p>
          </div>
        </div>
      </div>

    
      <div class="col-md-4 custom-card">
        <div class="card">
          <h5 class="card-header bg-success text-white">
            Nos valeurs
          </h5>
          <div class="card-body">
            <p class="card-text">Nos équipes de bénévoles œuvrent chaque jour pour combattre le gaspillage alimentaire et la précarité étudiante.</p>
          </div>
        </div>
      </div>
    </div>
 

<h4>Questions fréquentes</h4>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/" class="d-block w-75" alt="L'image ne s'affiche pas">
    </div>
    <div class="carousel-item">
      <img src="images/partenaire.png" class="d-block w-75" alt="L'image ne s'affiche pas">
    </div>
    <div class="carousel-item">
      <img src="images/livreur.png" class="d-block w-75" alt="L'image ne s'affiche pas">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>







<?php get_footer() ?>