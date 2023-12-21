<?php/** 
* Template Name: Template contact
*/
?>
<?php get_header(); ?>



<div class="contactez-nous">
<h1>Contactez-nous</h1>
<p>Un problème, une question, envie de nous envoyer un message d’amour ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec nous !</p>
<form action="/page-traitement-donnees" method="post">
<div class="cadre">
<label for="nom">Votre nom</label>
<input type="text" id="nom" name="nom" placeholder="Martin" required>
</div>
<div class="cadre">
<label for="email">Votre e-mail</label>
<input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
</div>
<div class="cadre">
<label for="sujet">Quel est le sujet de votre message ?</label>
<select name="sujet" id="sujet" required>
<option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
<option value="probleme-compte">Problème avec mon compte</option>
<option value="question-produit">Question à propos d’un produit</option>
<option value="suivi-commande">Suivi de ma commande</option>
<option value="autre">Autre...</option>
</select>
</div>
<div class="cadre">
<label for="message">Votre message</label>
<textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
</div>
<div>
<button type="submit">Envoyer mon message</button>
</div>
</form>
</div>





<?php get_footer() ?>