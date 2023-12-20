<?php/** 
* Template Name: Template contact
*/
?>
<?php get_header(); ?>

<style> 


.contactez-nous {
    width: 700px;
    border: 1px solid;
    border-radius: 8px;
    padding: 0 50px 0 50px;
    background-color: #449653;
    margin-bottom: 7%;
    
    
    }
    
    .contactez-nous > h1 {
    font-weight: 500;
    }
    
    .contactez-nous > p {
    font-weight: 300;
    }
    
    form div {
    width: 100%;
    display: flex;
    flex-direction: column;
    min-height: 83px;
    margin-top: 25px;
    }
    
    form div > label {
    margin-bottom: 7px;
    font-weight: 600;
    }
    
    form div > input, form div > select, form div > textarea {
    background-color: #C1E5C6  ;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 500;
    box-shadow: 0px 2px 2px 0px rgba(0,0,0,0.25);
    
    }
    
    form div > input, form div > select {
    height: 50px;
    padding-left: 10px;
    }
    
    form div > select {
    appearance: none;
    background-size: 15px;
    background-position: right 10px top 50%;
  
    }
    
    form div > textarea {
    height: 195px;
    padding: 15px 0px 0px 10px;
    }
    
    form div > input::placeholder, form div > textarea::placeholder {
    color: #606361;
    }
    
    form div > select:invalid {
    color: #606361;
    }
    
    form div > select option {
    background: white;
    color: #303030;
    }
    
    form div:last-child {
    align-items:center;
    margin-top: 20px;
    }
    
    form button {
    width: 450px;
    max-width: 500px;
    height: 60px;
    font-weight: 700;
    font-size: 28px;
    background: white;
    border: rgba(48, 48, 48, 0.5) solid 1px;
    border-radius: 5px;
    box-shadow: 0px 4px 4px 0px rgba(0,0,0,0.25);
    color: #303030;
    }
</style>
<div class="contactez-nous">
<h1>Contactez-nous</h1>
<p>Un problème, une question, envie de nous envoyer un message d’amour ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec nous !</p>
<form action="/page-traitement-donnees" method="post">
<div>
<label for="nom">Votre nom</label>
<input type="text" id="nom" name="nom" placeholder="Martin" required>
</div>
<div>
<label for="email">Votre e-mail</label>
<input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
</div>
<div>
<label for="sujet">Quel est le sujet de votre message ?</label>
<select name="sujet" id="sujet" required>
<option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
<option value="probleme-compte">Problème avec mon compte</option>
<option value="question-produit">Question à propos d’un produit</option>
<option value="suivi-commande">Suivi de ma commande</option>
<option value="autre">Autre...</option>
</select>
</div>
<div>
<label for="message">Votre message</label>
<textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
</div>
<div>
<button type="submit">Envoyer mon message</button>
</div>
</form>
</div>





<?php get_footer() ?>