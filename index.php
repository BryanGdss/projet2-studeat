
<?php get_header(); ?>


<h1>Des repas sains et pas cher</h1>
<h1>Livrés chez vous !</h1>
<br>
<div class="recherche">
    <form class="d-flex" role="search" id="Adresse">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
      </svg> 
      <input class="form-control me-2" type="search" placeholder="Adresse (Ville, code postal, rue, etc.) " aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg> </button>
      </form>
    </div>


 <br>

 <div class="row row-cols-1 row-cols-md-3 g-4 nav justify-content-center" id="corps">
   
 <div class="col">
        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/commander.png" class="card-img-top" alt="L'image ne s'affiche pas." > 
          <div class="card-body">
            <h5 class="card-title">Commander</h5>
            <p class="card-text">Commandez un repas sain et pas cher, dans un restaurant à proximité de votre domicile. </p> 
            
            <a href="<?php echo 'commande'; ?>" class="btn btn-primary">Voir les offres ...</a> 
          </div>
        </div>
    </div>

    <div class="col" >
        <div class="card" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/livreur.png" class="card-img-top" alt="L'image ne s'affiche pas." > 
          <div class="card-body">
            <h5 class="card-title">Devenir livreur</h5>
            <p class="card-text">Devenir livreur bénévole et rejoignez la Stud' Eat Family remplie de jeunes motivés à faire bouger les choses !</p>
            <a href="<?php echo 'livreur'; ?>" class="btn btn-primary">En savoir plus ...</a>
          </div>
        </div>
    </div>
    
    <div class="col">
        <div class="card">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/partenaire.png" class="card-img-top" alt="L'image ne s'affiche pas." > 
          <div class="card-body">
            <h5 class="card-title">Devenir partenaire</h5>
            <p class="card-text">Devenez un restaurant partenaire avec Stud' Eat afin de liquider vos invendus et éviter le gaspillage.</p>
            <a href="<?php echo 'partenaire'; ?>" class="btn btn-primary">En savoir plus ...</a>
          </div>
        </div>
    </div>
  </div>
  
</div>
<h2>Le saviez vous ?</h2>
<div class="annecdote">
<div class="card">
    <div class="card-body">
      <span>Chaque année à Bruxelles </span>
          <h2>+ 25 000 Tonnes</h2>
    <span>De produits alimentaires sont jetées à la poubelle </span>
    </div>
  </div>
</div>
<br>
<div class="text">
    <h2>Stud' Eat ?</h2>
        <h2>Pour qui ? pour quoi ?</h2>    
        <br>  
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title">Les <span><img class="cardimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/test.png" alt="L'image ne s'affiche pas" width="7%" height="7%"></span>étudiants</h3>
          <p class="card-text">  Notre service de livraison de repas Stud’Eat, permet
            aux étudiants et plus largement aux personnes n’en ayant pas 
            les moyens de se procurer des repas sains et bon marché.
            Ce qui devrait être la norme, ne l’est pas.
            En effet, près de la moitié des étudiants assurent ne pas avoir
             les moyens de manger sainement tous les jours, 
            tandis que 1/5 étudiants affirme devoir sauter au
            moins 1 repas par jour pour des questions de manque d’argent.
            
            Ayant nous mêmes été confrontés à cette situation, 
            nous avons donc décidé de créer Stud'Eat. </p>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card" >
        <div class="card-body">
          <h3 class="card-title">Les <span><img class="cardimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/test2.png" alt="L'image ne s'affiche pas" width="15%" height="15%"></span> restaurants</h3>
          <p class="card-text">Notre plateforme de revente d’invendus Stud’Eat, permet
            aux restaurants, mais égalements à tout autre établissement
            qui propose des produits alimentaires, de revendre 
            les produits qui n’ont pas été vendus durant la journée, 
            afin de ne pas les jeter à la poubelle.
            
            Comme dit précédemment, plus de 25 000 tonnes 
            de produits alimentaires sont jetés chaque année à
            Bruxelles. Ce qui représente énormément de gachis.
            
            C’est pour cette raison que nous avons décidé de créer
            le service de revente d’invendus Stud’Eat. </p>
        </div>
      </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>