<?php $this->layout('layoutback', ['title' => 'Utilisateurs']) ?>

<?php $this->start('main_content') ?>

<p>Hello</p>
<div class="container-fluid">
<div class="row">
<div class="col-8 offset-md-2">
<ul class="list-group">

<h4>Liste des utilisateurs</h4>
<br>


  <?php foreach ($allUser as $user) {
    echo '<li class="list-group-item justify-content-between">
    <b><span> '. $user['pseudo']. ' </span></b><b><span> '. $user['email']. ' </span></b> <b><span> '. $user['created_at']. ' </span></b>
    <form class="delete" action="" method="post">
      <span><input class="btn btn-primary btn-lg btn-block" type="submit" name="btnSubmit" value="&#10006;"/></span>
    </form>
    </li> ';
  } ?>


</ul>
</div>
</div>
</div>


<?php $this->stop('main_content') ?>
