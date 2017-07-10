<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'A propos']);
?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">

  <div class="row">
    <div class="col-12">
      <p id="titleapropos" class="policetitre">Tilt en détails</p>
    </div>
  </div>
<div class="row">
  <div class="col-12">
<p>Simple, social, local et instantané, Tilt est un réseau social fondé sur le partage ressources entre personnes, appelées les Tilters. La plate-forme permet des mises en relation immédiates et directes. Avec Tilt on peut ainsi se faire aider en temps réel quand on en a cruellement besoin, et pour presque toutes les demandes possibles les réponses arrivent en moins d'une heure dans les grandes villes et même moins de dix minutes pour Paris !</p>

  </div>

</div>


<div class="row">
  <div class="col-12">
    <p id="titleapropos" class="policetitre">Tilt c'est ...</p>
  </div>
</div>

<div class="row">
  <div class="col-4">

    <p class="count center chiffresapropos">853</p>
    <p class="center">tilters dans toute la France</p>
  </div>
  <div class="col-4">

    <p class="count center chiffresapropos">50</p>
    <p class="center">inscriptions par jour environ</p>
  </div>
  <div class="col-4">

    <p class="center"><span class="count chiffresapropos">97</span><span class=" chiffresapropos">%</span></p>
    <p class="center">de Tilters satisfaits </p>
  </div>
</div>



<div class="row">
  <div class="col-12">
    <p id="titleapropos" class="policetitre">L'équipe</p>
  </div>
</div>



<div class="row">
<div class="col-md-6 col-12 col-lg-3 col-xl-3 col-sm-6">
<p class="center iconhomepage"><img class="testiconcept rounded-circle" src="./assets/img/equipe/nicolas.jpg" alt=""></p>
<p class="center subtitle_icon">Nicolas L.</p>
<p class="center iconhomepage"><img class="separator" src="./assets/img/separator.png" alt=""></p>
<p class="center"><b>Gestionnaire de BDD</b></p>
<p class="center"><i>Quand il ne joue pas au frisbee sur les terres bretonnes, Nicolas s'occupe des bases de données Tilt.</i></p>
</div>
<div class="col-md-6 col-12 col-lg-3 col-xl-3 col-sm-6">
<p class="center iconhomepage"><img class="testiconcept rounded-circle" src="./assets/img/equipe/boris.jpg" alt=""></p>
<p class="center subtitle_icon">Boris B.</p>
<p class="center iconhomepage"><img class="separator" src="./assets/img/separator.png" alt=""></p>
<p class="center"><b>Gestionnaire des utilisateurs</b></p>
<p class="center"><i>Pilote de drone confirmé et entrepreneur, Boris peaufine inlassablement votre expérience sur Tilt.</i></p>
</div>
<div class="col-md-6 col-12 col-lg-3 col-xl-3 col-sm-6">
<p class="center iconhomepage"><img class="testiconcept rounded-circle" src="./assets/img/equipe/laurent.jpg" alt=""></p>
<p class="center subtitle_icon">Laurent B.</p>
<p class="center iconhomepage"><img class="separator" src="./assets/img/separator.png" alt=""></p>
<p class="center"><b>Developpeur back-end</b></p>
<p class="center"><i>Fan inconditionnel de basket américain, il code aussi rapidement qu’il enchaîne les paniers à trois points.</i></p>

</div>
<div class="col-md-6 col-12 col-lg-3 col-xl-3 col-sm-6">
<p class="center iconhomepage"><img class="testiconcept rounded-circle" src="./assets/img/equipe/baptiste.jpg" alt=""></p>
<p class="center subtitle_icon">Baptiste C.</p>
<p class="center iconhomepage"><img class="separator" src="./assets/img/separator.png" alt=""></p>
<p class="center"><b>Integrateur</b></p>
<p class="center"><i>Chasseur de grands crus à ses heures perdues, Baptiste cherche aussi à donner du style à Tilt.</i></p>

</div>

<?php $this->stop('main_content'); ?>
