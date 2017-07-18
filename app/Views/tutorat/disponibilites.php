<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Disponibilités']);
?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12"> <?php

      if($w_user['role'] == 'enseignant'){ ?>
        <p id="titleconnexion" class="policetitre">Liste des apprenants disponibles</p>
<?php   }else{ ?>
  <p id="titleconnexion" class="policetitre">Listes de enseignants disponibles</p>

<?php   } ?>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-8 offset-md-2">
    <ul class="list-group">
      <?php foreach ($inscrits as $inscrit){ ?>
      <li class="list-group-item justify-content-between">
        <?php
        if($w_user['role'] == 'enseignant'){
          echo '<p><b>'.$inscrit['pseudo'].'</b> veut suivre des cours de <b>'.$inscrit['name'].'</b></p>
          <p><a href="'.$this->url('tutorat_disponibilites_action',
                                                                  ['id_competences' => $inscrit['competences_id'],
                                                                   'id_region'      => $w_user['region_id'],
                                                                   'id_connect'     => $w_user['id'],
                                                                   'id_distant'     => $inscrit['user_id'],
                                                                   'role_connect'   => $w_user['role']
                                                                  ]).'"> Accepter l\'apprenant</a></p>';
        }else{
          echo '<p><b>'.$inscrit['pseudo'].'</b> peut donner des cours de <b>'.$inscrit['name'].'</b></p>
          <p><a href="'.$this->url('tutorat_disponibilites_action',
                                                                  ['id_competences' => $inscrit['competences_id'],
                                                                   'id_region'      => $w_user['region_id'],
                                                                   'id_connect'     => $w_user['id'],
                                                                   'id_distant'     => $inscrit['user_id'],
                                                                   'role_connect'   => $w_user['role']
                                                                  ]).'"> S\'inscrire au cours</a></p>';
        }

?>        </li> <?php
        }; ?>
    </ul>
  </div>
</div>
<?php
// debug($w_user);
// debug($inscrits);
// echo 'matiere : '.$inscrit['id'].'<br>';
// echo 'region : '.$w_user['region_id'].'<br>';
// echo 'id Conect : '.$w_user['id'].'<br>';
// echo 'role connect : '.$w_user['role'].'<br>';
// echo 'role distant : '.$inscrit['role'].'<br>';
// echo 'id distant : '.$inscrit['user_id'].'<br>';


 ?>






<?php $this->stop('main_content'); ?>
