<?php/** 
* Template Name: Template Paiement
*/
?>

<?php get_header(); ?>


<div class="contactez-nous">
<h1>Paiement</h1>
<form action="/page-traitement-donnees" method="post">
<div class="cadre">
<label for="nom">Votre nom et prénom</label>
<input type="text" id="nom" name="nom" placeholder="Dupont Marc" required>
</div>
<div class="cadre">
<label for="email">Votre e-mail</label>
<input type="email" id="email" name="email" placeholder="monadresse@mail.com" required>
</div>
<div class="cadre">
<label for="carte">Choissez votre moyen de paiement:</label>
  <select  name="cars">
    <option value="volvo">Paypal</option>
    <option value="saab">Carte bancaire</option>
  </select>
</div>
<button type="submit">Payer</button>
</div>
</form>
</div>
<br>

<div class="contactez-nous">
<h1>Total</h1>
<form action="/page-traitement-donnees" method="post">
<button type="submit">Payer</button>
</div>
</form>
</div>






<?php get_footer(); ?>
