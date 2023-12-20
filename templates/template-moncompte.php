<?php/** 
* Template Name: Template mon compte
*/
?>
<?php get_header(); ?>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Créer un compte</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-facebook fa-bounce" style="color: #000000;"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-x-twitter fa-bounce" style="color: #000000;"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram fa-bounce" style="color: #000000;"></i></a>
                </div>
                <span>ou utiliser l'adresse mail pour s'enregistrer</span>
                <input type="text" placeholder="Nom, prénom">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Mot de passe">
                <button>S'enregistrer</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <h1>Se connecter</h1>
                <div class="social-icons">
                   
                    <a href="#" class="icon"><i class="fa-brands fa-facebook fa-bounce" style="color: #000000;"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-x-twitter fa-bounce" style="color: #000000;"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram fa-bounce" style="color: #000000;"></i></a>
             
                </div>
                <span>ou se connecter par mail</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Mot de passe">
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