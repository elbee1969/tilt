<?php $this->layout('layoutback', ['title' => 'Utilisateurs']) ?>

<?php $this->start('main_content') ?>

<p>Hello</p>
<div class="container-fluid">
<div class="row">
<div class="col-8 offset-md-2">
<ul class="list-group">

<h4>Liste des utilisateurs</h4>
<br>
foreach

  <li class="list-group-item justify-content-between">
    <b><span>Pseudo :</span></b>  <b><span>Région : </span></b> <b><span>inscrit le : </span></b>
    <span class="badge badge-default badge-pill"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></span>
  </li>
</ul>
</div>
</div>
</div>


<?php $this->stop('main_content') ?>
