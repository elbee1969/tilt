<?php $this->layout('layoutback', ['title' => 'Utilisateurs']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid">
<div class="row">
<div class="col-8 offset-md-2 offset-2">
<ul class="list-group">

<?php

$originalDate = $w_user['created_at'];
$newDate = date("d/m/Y", strtotime($originalDate));

?>


<h4 style="margin-top:50px;">Liste des utilisateurs</h4>
<br>


  <?php foreach ($allUser as $user) {
      echo '<li class="list-group-item">
  <div class="container-fluid">
  <div class="row">
    <div class="col-12 col-md-3">
<b><span> '. $user['pseudo']. ' </span></b>
    </div>
    <div class="col-12 col-md-4">
<b><span> '. $user['email']. ' </span></b>
    </div>
    <div class="col-12 col-md-4">
<b><span> inscrit le '. $newDate. ' </span></b>
    </div>
    <div class="col-12 col-md-1">
    </form>
    <form class="delete" action="" method="post">
    <input class="btn btn-primary btn-lg btn-block" type="submit" name="btnSubmit" value="&#10006;"/>
    </div>

  </div>

</div>



    </li> ';
  } ?>
<div class="wrapper" style="margin-bottom:50px;">

</div>

</ul>
</div>
</div>
</div>


<?php $this->stop('main_content') ?>
