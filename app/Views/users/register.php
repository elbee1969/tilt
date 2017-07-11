<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Inscription']);
?>

<?php $this->start('main_content');


 ?>

 <div class="container-fluid">

   <form id="formconnexion" action="<?= $this->url('users_register_action'); ?>"  method="POST">
<div class="row">
  <div class="col-12">
    <p id="titleinscription" class="policetitre">Rejoignez la communauté des Tilters !</p>
    <p class="center">Pssst ! Cela ne prend qu'une minute !</p>
    <p class="center">Tous les champs marqués d'un astérisque (*) sont obligatoires.</p>
  </div>
</div>
  <div class="row">
<div class="col-4">
  <!-- Rien dans cette col, c'est pour centrer la deuxième !-->
</div>
<div class="col-md-4 col-xl-4 col-">
  <div class="form-group">
    <label for="prenom"></label>
    <div class="col-12">
      <input class="form-controlall" id="prenom" type="text" placeholder="Prénom *" name="prenom" value="<?php if(!empty($_POST['prenom'])){ echo $_POST['prenom']; }; ?>">
      <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['prenom'])){ echo $errors['prenom']; }; ?></span>
      </div>
        <label for="nom"></label>
    <div class="col-12">
      <input class="form-controlall" id="nom" type="text" placeholder="Nom *" name="nom" value="<?php if(!empty($_POST['nom'])){ echo $_POST['nom']; }; ?>">
      <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['nom'])){ echo $errors['nom']; }; ?></span>
      </div>
      <label for="pseudo"></label>
  <div class="col-12">
    <input class="form-controlall" id="pseudo" type="text" placeholder="Pseudo *" name="pseudo" value="<?php if(!empty($_POST['pseudo'])){ echo $_POST['pseudo']; }; ?>">
    <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['pseudo'])){ echo $errors['pseudo']; }; ?></span>
    </div>
    <label for="email"></label>
<div class="col-12">
  <input class="form-controlall" id="email" type="text" placeholder="Email *" name="email" value="<?php if(!empty($_POST['email'])){ echo $_POST['email']; }; ?>">
  <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['email'])){ echo $errors['email']; }; ?></span>
  </div>
<div class="col-12">

  <label for="region"></label>
  <select class="form-controlall" id="region" type="text" name="region" value="<?php if(!empty($_POST['region'])){ echo $_POST['region']; }; ?>">
  <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['region'])){ echo $errors['region']; }; ?></span>
  <option value=""></option>
  <?php for ($i=0; $i < 13; $i++) {
    echo '<option value=" ' .$allRegions[$i]['id']. ' ">' .$allRegions[$i]['name']. '</option>';
  } ?>
  </select>
  </div>

<label for="password"></label>
<div class="col-12">
  <input class="form-controlall" placeholder="Mot de passe *" id="password" type="password" name="password" value="<?php if(!empty($_POST['password'])){ echo $_POST['password']; }; ?>">
  <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['password'])){ echo $errors['password']; }; ?></span>
</div>
<label for="password2"></label>
<div class="col-12">
  <input class="form-controlall" placeholder="Retapez le mot de passe *" id="password2" type="password" name="password2" value="<?php if(!empty($_POST['password2'])){ echo $_POST['password2']; }; ?>">
  <span style="color:red; font-size:0.70em;" ><?php if(!empty($errors['password2'])){ echo $errors['password2']; }; ?></span>
<input id="btninscription" class="btn btn-primary btn-lg btn-block" title="s'inscrire" type="submit" name="submitconnexion" value="Je rejoins la communauté ! "/>
</div>
</form>






</div>
</div>


<div class="col-4">
  <!-- Rien dans cette col, c'est pour centrer la deuxième !-->
</div>
  </div>
</div>

<!-- Pour Baptiste, de la part de Nicolas: select à mettre à la place du input des régions  -->


<?php $this->stop('main_content'); ?>
