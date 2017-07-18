<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Région']);
?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <p id="titleconnexion" class="policetitre"><?= $region['name']; ?></p><br>
    <!--  <p>Manque la pagination, le foreach ...</p><br> -->
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
              //<h4 class="card-title">Nom Prénom </h4>
                //<p class="card-text">J'aimerai faire du sport mais je n'arrive pas à me motiver .............</p>
                foreach ($allEnseignantsInRegion as $enseignant) {
                echo '<div class="card">
                      <div class="card-block">
                        <div class="row">
                          <div class="col-1">
                            <img class="courspicture rounded-circle" src=" '.$avatarFromIntermId[0]['path'].$avatarFromIntermId[0]['name'].' " alt="Photo de profil">
                          </div>
                          <div class="col-9">
                            <h4 class="card-title">Le Tilter '.$enseignant['pseudo'].'</h4>
                            <p class="card-text">propose de vous enseigner la matière: '.$enseignant['name'].'<p>
                          </div>
                          <div class="col-2">
                            <p style="text-align:right;"><a href="#" class="btn btn-primary">Go somewhere</a></p>
                          </div>
                        </div>
                      </div>
                      </div>';
                  } ?>

      </div>
    </div>
  </div>


</div>



<?php $this->stop('main_content'); ?>
