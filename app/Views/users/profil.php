<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'profil de '.$w_user['pseudo']]);
?>


<?php $this->start('main_content'); ?>



<div class"container-fluid">
  <div class="row">
    <div class="col-1">

    </div>
    <div class="col-12 col-md-12 col-xl-2 col-sm-12">
      <div class="card">

        <p class="center"><img class="rounded-circle profilepicture" src="<?= $avatar['path'].$avatar['name']; ?>" alt="Card image cap"></p>
        <?php if(in_array($w_user['role'], ['apprenant', 'enseignant', 'admin'])){ ?>
        <span class="center" id="modifavatar" style="color:#3f51b5; font-size:0.70em;" >
          <a href="<?= $this->url('users_avatar'); ?>">Modifier la photo de profil</a>
        </span>
        <?php } ?>
      <div class="card-block">
        <h4 class="center policetitre" ><?= $w_user['pseudo']; ?></h4>
      </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">    <?= $w_user['first_name']; ?>   <?= $w_user['last_name']; ?></li>
          <li class="list-group-item"><?= $w_user['email']; ?></li>
          <li class="list-group-item"><?= 'Inscrit le '.$w_user['created_at']; ?></li>
          <li class="list-group-item"><?= 'Région : '.$w_user['region_id']; ?></li>
          <?php if(in_array($w_user['role'], ['apprenant', 'enseignant', 'admin'])){ ?>
          <li class="list-group-item"><a href="#">Modifier mes informations</a></li>
          <?php } ?>
        </ul>
      </div>

    </div>

    <div class="col-12   col-md-12 col-xl-8 col-sm-12">
    <?php if(in_array($w_user['role'], ['apprenant', 'enseignant', 'admin'])){ ?>
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
          <div class="row">

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

            <p><b>Numéro de téléphone :</b> if tel == null -> echo "Vous n'avez pas encore ajouté votre numéro de téléphone" Lien "Ajouter un num de tel" |  else -> echo tel</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12">

            </div>
          </div>
        </div>
      </div>
      <?php } ?>
      <div class="row">
        <?php if(in_array($w_user['role'], ['guest'])){ ?>
        <div class="col-12">
          <h4>Transmettre son savoir faire :</h4>
          <p>Vous désirez <b>transmettre</b> votre Savoir, cliquez sur le bouton <b>"Donner un cours"</b> ci-dessous.<br>
          Vous obtiendrez ainsi, un status d'enseignant "Tilter" dans votre région. Ceci qui vous permettra de proposer votre savoir parmis nos matières référencées ou bien d'en proposer de nouvelles qui vous correspondent...
          <h4>Aquerir de nouvelles compétences :</h4>
          <p>Vous avez soif d'<b>apprendre</b>, cliquez sur le  bouton <b>"Suivre un cours"</b> ci-dessous.<br>
          Vous pourrez, alors en tant qu'apprenant "Tilter", vous mettre en contact avec des enseignants "Tilter" de votre région.<br>
          Si vous ne trouvez pas votre bonheur ... pas de soucis, proposez votre recherche ! Après validation de notre part, nous la proposerons en ligne afin de trouver l'enseignant "Tilter" adéquat !</p>

        </div>
      <?php } ?>
        <div class="col-6">
          <p class="center" id="profilcours"><a href="<?= $this->url('users_inscrenseignant'); ?>"><button type="button" class="btn btn-primary btn-lg">Donner un cours</button></a></p>

        </div>
        <div class="col-6">
          <p class="center" id="profilcours"><a href="<?= $this->url('users_inscrapprenant'); ?>"><button type="button" class="btn btn-primary btn-lg">Suivre un cours</button></a></p>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="infouser">
  <div class="first_name">
    <?= $w_user['first_name']; ?>
  </div>
  <div class="last_name">
    <?= $w_user['last_name']; ?>
  </div>
  <div class="mail">
    <?= $w_user['email']; ?>
  </div>
  <div class="role">
    <?= $w_user['role']; ?>
  </div>
  <div class="created_at">
    <?= $w_user['created_at']; ?>
  </div>
</div>






<?php $this->stop('main_content'); ?>
