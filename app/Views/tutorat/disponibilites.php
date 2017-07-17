<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Disponibilités']);
?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12"> <?php

      if($w_user['role'] == 'enseignant'){ ?>
        <p id="titleconnexion" class="policetitre">Listes des apprenants disponibles</p>
<?php   }else{ ?>
  <p id="titleconnexion" class="policetitre">Listes des enseignants disponibles</p>

<?php   } ?>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-8 offset-md-2">
    <ul class="list-group">
      <?php foreach ($apprenants as $apprenant){ ?>
      <li class="list-group-item justify-content-between">
        <?php
        if($w_user['role'] == 'enseignant'){
          echo '<p><b>'.$apprenant['pseudo'].'</b> veut suivre des cours de <b>'.$apprenant['name'].'</b></p> <p><a href="#"> Accepter l\'apprenant</a></p>';

        }else{
          echo '<p><b>'.$apprenant['pseudo'].'</b> peut donner des cours de <b>'.$apprenant['name'].'</b></p> <p><a href="#"> S\'inscrire au cours</a></p>';
        }

?>        </li> <?php
        }; ?>
    </ul>
  </div>
</div>







<?php $this->stop('main_content'); ?>
