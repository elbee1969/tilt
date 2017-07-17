<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'profil de '.$w_user['pseudo']]);



 $this->start('main_content'); ?>



<div class"container-fluid">
  <div class="row">
    <div class="col-1">

    </div>
    <div class="col-12 col-md-12 col-xl-2 col-sm-12">
      <div class="card">
        <p class="center"><img class="rounded-circle profilepicture" src="<?= $avatar['path'].$avatar['name']; ?>" alt="Card image cap"></p>
        <?php if(in_array($w_user['role'], ['apprenant', 'enseignant', 'admin','guest'])){ ?>
        <span class="center" id="modifavatar" style="color:#3f51b5; font-size:0.70em;" >
          <a href="<?= $this->url('users_avatar'); ?>">Modifier la photo de profil</a>
        </span>
        <?php } ?>
      <div class="card-block">
        <h4 class="center policetitre" ><?= $w_user['pseudo']; ?></h4>
      </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><?= $w_user['email']; ?></li>
          <li class="list-group-item"><?= 'Inscrit le '.$w_user['created_at']; ?></li>
          <li class="list-group-item"><?= 'Région : '.$regionName['name']; ?></li>

          <?php if(isset($adresse[0])) { ?>
          <li class="list-group-item"><?= 'Nom: '.$adresse[0]['nom']; ?></li>
          <li class="list-group-item"><?= 'Prénom: '.$adresse[0]['prenom']; ?></li>
          <li class="list-group-item"><?= 'Adresse: '.$adresse[0]['num_rue'].' '.$adresse[0]['nom_voie']; ?></li>
          <li class="list-group-item"><?= 'Code Postal: '.$adresse[0]['code_postal']; ?></li>
          <li class="list-group-item"><?= 'Ville: '.$adresse[0]['ville']; ?></li>
          <?php  } ?>
          <?php if(in_array($w_user['role'], ['apprenant', 'enseignant', 'admin', 'guest'])){ ?>
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
      <?php } ?>
      <div class="row">
        <?php if(in_array($w_user['role'], ['guest'])){ ?>

          <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <p id="titleconnexion" class="policetitre">à vous de jouer !</p>
            </div>
          </div>
</div>

<div class="container-fluid">
  <div class="row">

        <div class="col-md-6 col-12">
<br>
          <p class="policejosefin center" >Transmettre son savoir faire</p><br>
          <p class="center">Vous désirez <b>transmettre</b> votre Savoir ? Sélectionnez nos matières référencées et partagez vos compétences & connaissances.</p><br>
          <p class="center" id="profilcours"><a href="<?= $this->url('users_inscrenseignant'); ?>"><button type="button" class="btn btn-primary btn-lg">Donner un cours</button></a></p>
        </div>
        <div class="col-md-6 col-12">
<br>
          <p class="policejosefin center" >Aquerir de nouvelles compétences</p><br>
          <p class="center">Vous avez soif d'<b>apprendre</b> de nouvelles compétences/connaissances ? Entrez en contact avec les enseignants "Tilter" de votre région.</p><br>
          <p class="center" id="profilcours"><a href="<?= $this->url('users_inscrapprenant'); ?>"><button type="button" class="btn btn-primary btn-lg">Suivre un cours</button></a></p>
        </div>

      <?php } ?>
        <div class="col-6">

        </div>
        <div class="col-6">

        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php
 $this->stop('main_content'); ?>
