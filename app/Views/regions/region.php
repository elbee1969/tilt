<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Enseignants disponibles']);
?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <p id="titleconnexion" class="policetitre"><?= $region['name']; ?></p><br>

    </div>
  </div>

  <div class="row">
    <div class="col-1">
    </div>
    <div class="col-10">
      <div class="card espacement_card">
        <div class="card-header">
        </div>


              <?php
              // le foreach ne doit être généré que s'il y a des enseignants dans la région
              if($allEnseignantsInRegion[0]['user_id'] != '') {

                foreach ($allEnseignantsInRegion as $enseignant) {
                echo '<div class="card">
                      <div class="card-block">
                        <div class="row">
                          <div class="col-1">
                            <img class="courspicture rounded-circle" src=" '.$enseignant['path'].$enseignant['avatarname'].' " alt="Photo de profil">
                          </div>
                          <div class="col-9">
                            <h4 class="card-title">Le Tilter '.$enseignant['pseudo'].'</h4>
                            <p class="card-text">propose de vous enseigner la matière: '.$enseignant['name'].'<p>
                          </div>
                          <div class="col-2">
                            <p style="text-align:right;"><a href="" class="btn btn-primary">Entrer en contact</a></p>
                          </div>
                        </div>
                      </div>
                      </div>';
                  }
                } else {
                  echo 'Il n\'y a pas encore d\'enseignants en '.$region['name'].', revenez nous voir bientôt!';
                }?>

      </div>
    </div>
  </div>
</div>



<?php $this->stop('main_content'); ?>
