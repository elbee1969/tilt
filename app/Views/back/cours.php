<?php $this->layout('layoutback', ['title' => 'Cours']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid">
<div class="row">
<div class="col-8 offset-md-2 offset-2">
<ul class="list-group">

<?php

$originalDate = $w_user['created_at'];
$newDate = date("d/m/Y", strtotime($originalDate));

?>


<h4 style="margin-top:50px;">Liste des cours proposés</h4>
<br>
 <li class="list-group-item">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-12">
<b><span>Matière :</span></b>
    </div>
    <div class="col-md-5 col-12 ">
<b><span>Cours proposé par :</span></b>
    </div>
    <div class="col-md-3 col-12">
<b><span>Date :</span></b>
    </div>
    <div class="col-md-1 col-12">
    </form>
    <form class="delete" action="" method="post">
    <span><input class="btn btn-primary btn-lg btn-block" type="submit" name="btnSubmit" value="&#10006;"/></span>
    </div>

  </div>

</div>



    </li>


</ul>
</div>
</div>
</div>



<?php $this->stop('main_content') ?>
