<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'profil de '.$w_user['pseudo']]);
?>

<?php


if ($w_user) {

 $this->start('main_content'); ?>


<div class"container-fluid">
  <div class="row">
    <div class="col-1">
      <!-- colonne vite !-->
    </div>
    <div class="col-12 col-md-12 col-xl-2 col-sm-12">
      <div class="card">
        <p class="center"><img class="rounded-circle profilepicture" src="<?= $avatar['path'].$avatar['name']; ?>" alt="Card image cap"></p>
        <span class="center" id="modifavatar" style="color:#3f51b5; font-size:0.70em;" ><a href="<?= $this->url('users_avatar'); ?>">Modifier la photo de profil</a></span>
      <div class="card-block">
        <h4 class="center policetitre" ><?= $w_user['pseudo']; ?></h4>
      </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">    <?= $w_user['first_name']; ?>   <?= $w_user['last_name']; ?></li>
          <li class="list-group-item"><?= $w_user['email']; ?></li>
          <li class="list-group-item"><?= 'Inscrit le '.$w_user['created_at']; ?></li>
          <li class="list-group-item"><?= 'Région : '.$w_user['region_id']; ?></li>
          <li class="list-group-item"><a href="#">Modifier mes informations</a></li>
        </ul>
      </div>
    </div>
    <div class="col-12   col-md-12 col-xl-8 col-sm-12">
      <div class="card" >
        <p id="titleprofil" class="policetitre">Vos statistiques</p>
          <div class="card-block">
            <div class="row">
              <div class="col-12 col-md-6 col-xl-6 col-sm-6">
                <p class="center"><b>Cours suivis</b></p>
                if cours suivi = 0 ->  echo "Vous n'avez pas encore suivi de cours" + lien suivre un cours (renvoi vers région)| else : Affiche les cours suivis + Suivre un nouveau cours
              </div>
              <div class="col-12 col-md-6 col-xl-6 col-sm-6">
                <p class="center"><b>Cours donnés</b></p>
                if cours donné = 0 ->  echo "Vous n'avez pas encore donné de cours" + lien donner un cours (renvoi vers région)| else : Affiche les cours donnés + donner un nouveau cours
              </div>
            </div>
          </div>
        </div>
      <br>
      <div class="card" >
        <p id="titleprofil" class="policetitre">Votre fiche contact</p>
        <div class="card-block">
          <div class="row">
            <div class="col-12">
              <p><b>Adresse :</b>   if adress == null -> echo "Vous n'avez pas encore ajouté votre adresse" -> Lien "Ajouter une adresse" |  else -> echo adress</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
            </div>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-6">
            <p class="center" id="profilcours"><button type="button" class="btn btn-primary btn-lg">Donner un cours</button></p>
          </div>
          <div class="col-6">
            <p class="center" id="profilcours"><button type="button" class="btn btn-primary btn-lg">Suivre un cours</button></p>
          </div>
        </div>
      </div>
    </div>
  </div>



<?php debug($avatar);
debug($avatar);

 $this->stop('main_content');


};
