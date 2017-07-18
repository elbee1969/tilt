<?php $this->layout('layoutback', ['title' => 'Utilisateurs']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid">
<div class="row">
<div class="col-8 offset-md-2">
<ul class="list-group">

<?php

$originalDate = $w_user['created_at'];
$newDate = date("d/m/Y", strtotime($originalDate));

?>


<h4 style="margin-top:50px;">Liste des utilisateurs</h4>
<br>
foreach
<?php if ($w_user['status'] == 1) { ?>
  <li class="list-group-item justify-content-between">
    <b><span><?= $w_user['pseudo']; ?></span></b><b><span><?= $regionName['name']; ?></span></b> <b><span><?= $newDate ?></span></b>
    <form class="delete" action="" method="post">
      <span><input class="btn btn-primary btn-lg btn-block" type="submit" name="btnSubmit" value="&#10006;"/></span>
    </form>
  </li>
<?php } else { ?>
  <li class="list-group-item justify-content-between">
    <b><span>Pseudo : </span></b><b><span>Région : </span></b> <b><span>Date d'inscription :</span></b>
    <form class="delete" action="" method="post">
      <span><input class="btn btn-primary btn-lg btn-block" type="submit" name="btnSubmit" value="&#10006;"/></span>
    </form>
  </li>
<?php } ?>

</ul>
</div>
</div>
</div>


<?php $this->stop('main_content') ?>
