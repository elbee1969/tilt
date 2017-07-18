<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'A propos']);
?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">

  <div class="row">
    <div class="col-12">
      <p id="titleapropos" class="policetitre">Tilt c'est ...</p>
    </div>
  </div>

  <div class="row" style="margin-bottom:12%; margin-top:10%">
    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
      <p class="count center chiffresapropos"><?php echo $countusers ?></p>
      <p class="center policejosefin" ><b>tilters dans toute la France</b></p>
    </div>
    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
      <p class="count center chiffresapropos"><?php echo $countcours ?></p>
      <p class="center policejosefin" ><b>cours suivis</b></p>
    </div>
    <div class="col-12 col-md-4 col-lg-4 col-xl-4">
      <p class="center"><span class="count chiffresapropos"><?php echo $countmessages ?></span></p>
      <p class="center policejosefin" ><b>messages échangés </b></p>
    </div>
  </div>


  <div class="row">
    <div class="col-12">
      <p id="titleapropos" class="policetitre">Tilt en détails</p>
    </div>
  </div>
<div class="row">
  <div class="col-2">

  </div>
  <div class="col-8">
<p class="center policejosefin" style="margin-top:10%">Simple, social, local et instantané, Tilt est un réseau social fondé sur le partage ressources, de connaissances et de compétences entre personnes, appelées les Tilters. La plate-forme permet des mises en relation immédiates et directes. Avec Tilt on peut ainsi se faire aider en temps réel quand on en a cruellement besoin, et pour presque toutes les demandes possibles les réponses arrivent en moins d'une heure dans les grandes villes.  Nous vous offrons tout cela sur un plateau avec coeur !</p>

<p class="center">
  <img id="coeurplateau" style="margin-bottom:10%;" src="<?= $this->assetUrl('img/tilt.png') ?>" alt="">
</p>
  </div>


</div>






<div class="row" style=" margin-top:5%">
  <div class="col-12">
    <p id="titleapropos" class="policetitre">L'équipe</p>
  </div>
</div>



<div class="row" style="margin-top:5%">
<div class="col-md-6 col-12 col-lg-6 col-xl-6 col-sm-12">
<p class="center iconhomepage "><img class="testiconcept rounded-circle " src="<?= $this->assetUrl('img/equipe/nicolas.jpg') ?>" alt=""></p>
<p class="center subtitle_icon">Nicolas L.</p>
<p class="center iconhomepage"><img class="separator" src="<?= $this->assetUrl('img/separator.png') ?>" alt=""></p>
<p class="center policejosefin"><b>Gestionnaire de BDD</b></p>
<p class="center policejosefin" style="font-size :1.5em; margin-bottom:5%;">Quand il ne joue pas au frisbee sur les terres bretonnes,<br> Nicolas s'occupe des bases de données Tilt.</p>
</div>
<div class="col-md-6 col-12 col-lg-6 col-xl-6 col-sm-12">
<p class="center iconhomepage "><img class="testiconcept rounded-circle " src="<?= $this->assetUrl('img/equipe/boris.jpg') ?>" alt=""></p>
<p class="center subtitle_icon">Boris B.</p>
<p class="center iconhomepage"><img class="separator" src="<?= $this->assetUrl('img/separator.png') ?>" alt=""></p>
<p class="center policejosefin"><b>Gestionnaire des utilisateurs</b></p>
<p class="center policejosefin" style="font-size :1.5em; margin-bottom:5%;">Pilote de drone confirmé et entrepreneur,<br> Boris peaufine inlassablement votre expérience sur Tilt. </p>
</div>
</div>
<div class="row" style="margin-top:5%">
<div class="col-md-6 col-12 col-lg-6 col-xl-6 col-sm-12">
<p class="center iconhomepage"><img class="testiconcept rounded-circle " src="<?= $this->assetUrl('img/equipe/laurent.jpg') ?>" alt=""></p>
<p class="center subtitle_icon">Laurent B.</p>
<p class="center iconhomepage"><img class="separator" src="<?= $this->assetUrl('img/separator.png') ?>" alt=""></p>
<p class="center policejosefin"><b>Developpeur back-end</b></p>
<p class="center policejosefin" style="font-size :1.5em; margin-bottom:5%;">Fan inconditionnel de basket américain,<br> il code aussi rapidement qu’il enchaîne les paniers à trois points. </p>
</div>
<div class="col-md-6 col-12 col-lg-6 col-xl-6 col-sm-12">
<p class="center iconhomepage"><img class="testiconcept rounded-circle " src="<?= $this->assetUrl('img/equipe/baptiste.jpg') ?>" alt=""></p>
<p class="center subtitle_icon">Baptiste C.</p>
<p class="center iconhomepage"><img class="separator" src="<?= $this->assetUrl('img/separator.png') ?>" alt=""></p>
<p class="center policejosefin"><b>Integrateur</b></p>
<p class="center policejosefin" style="font-size :1.5em; margin-bottom:5%;">Chasseur de grands crus à ses heures perdues,<br> Baptiste cherche aussi à donner du style à Tilt. </p>

</div>


</div>
</div>
<?php $this->stop('main_content'); ?>
