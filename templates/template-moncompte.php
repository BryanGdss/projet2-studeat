<?php/** 
* Template Name: Template mon compte
*/
?>
<?php get_header(); ?>
<!--<section class="text-center">

  <div class="p-5 bg-image" style="
        background-image: url('https://ichef.bbci.co.uk/news/800/cpsprodpb/1709F/production/_109476349_foodwaste1pile_of_fruit.jpg');
        height: 300px;
        "></div>
 

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">S'inscrire</h2>
          <form>
            <div class="row">
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example1" class="form-control" />
                  <label class="form-label" for="form3Example1">Prénom</label>
                </div>
              </div>
              <div class="col-md-6 mb-4">
                <div class="form-outline">
                  <input type="text" id="form3Example2" class="form-control" />
                  <label class="form-label" for="form3Example2">Nom</label>
                </div>
              </div>
            </div>

            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control" />
              <label class="form-label" for="form3Example3">Adresse mail</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" class="form-control" />
              <label class="form-label" for="form3Example4">Mot de passe</label>
            </div>

            
            <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
              <label class="form-check-label" for="form2Example33">
              S'inscrire à la newsletter ?
              </label>
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4">
            S'inscrire
            </button>

          </form>
        </div>
      </div>
    </div>
  </div>
</section> -->




    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Créer un compte</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>ou utiliser l'adresse mail pour s'enregistrer</span>
                <input type="text" placeholder="Name">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>S'enregistrer</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Se connecter</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>ou se connecter par mail</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Mot de passe oublier ?</a>
                <button>Se connecter</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bon retour parmi nous</h1>
                    <p>Entrez vos détails personnels</p>
                    <button class="hidden" id="login">Se connecter</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello !</h1>
                    <p>Entrez vos identifiants personnels</p>
                    <button class="hidden" id="register">S'enregistrer</button>
                </div>
            </div>
        </div>
    </div>

  





<?php get_footer(); ?>