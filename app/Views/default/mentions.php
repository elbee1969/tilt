<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Mentions légales']);

 $this->start('main_content');
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <p id="titleconnexion" class="policetitre">Mentions légales</p>
    </div>
  </div>

<div class="row">
<div class="col-12 col-md-8 offset-md-2 offset-0">

  <h3>Entreprise</h3>
  <p>
    Le site est édité par TILT FRANCE, SAS au capital de 9.999,999 euros, immatriculée au registre du commerce et des sociétés d'Evreux sous le numéro 521 724 336.</p><p> Siège social : 3 rue Saint-Jean 27400 LOUVIERS</p>
  <p>Le Directeur de Publication de tilt.fr est Monsieur Laurent Berthelot.</p>

  <p>Numéro de TVA intracommunautaire : FR32521724336</p>
  <h3>Contact</h3><br>
    <ul>
      <li>– Courrier électronique : tilt@tilt.fr</li>
      <li>– Numéro de téléphone : 02 32 40 00 00</li>
    </ul>
    <p>Conception et développement : Team Tilt – 27400 Louviers</p>
    <p>Hébergement par la Team Tilt – 27400 Louviers</p>
  </div>
</div>
</div>
<?php

 $this->stop('main_content'); ?>
