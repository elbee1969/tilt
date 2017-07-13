<?php $this->layout('layoutback', ['title' => 'Cours']) ?>

<?php $this->start('main_content') ?>

<p>Hello</p>
<div class="container-fluid">
<div class="row">
<div class="col-8 offset-md-2">
<ul class="list-group">

<h4>Liste des cours proposés</h4>
<br>
foreach

  <li class="list-group-item justify-content-between">
    <b><span>Matières : </span></b>  <b><span>Cours proposé par :</span></b> <b><span>date :</span></b>
    <span class="badge badge-default badge-pill"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></span>
  </li>
</ul>
</div>
</div>
</div>

<?php $this->stop('main_content') ?>
