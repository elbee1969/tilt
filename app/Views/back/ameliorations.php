<?php $this->layout('layoutback', ['title' => 'Améliorations']) ?>

<?php $this->start('main_content') ?>

<p>hello</p>
<div class="container-fluid">
  <div class="row">
    <div class="col-8 offset-md-2">
      <h4>Proposer une amélioration</h4>
      <form>
        <div class="form-group">
          <label for="formGroupExampleInput"></label>
          <input type="text" class="form-controlall" id="formGroupExampleInput" value="<?= $w_user['pseudo']; ?>">
          <label for="exampleSelect1"></label>
          <select class="form-controlall" id="exampleSelect1">
            <option selected>Catégorie d'amélioration</option>
            <option>Bases de données</option>
            <option>Design</option>
            <option>PHP</option>
            <option>Ajout de fonctionnalités</option>
            <option>Créations</option>
          </select>
          <label for="exampleTextarea"></label>
          <textarea class="form-controlall" id="exampleTextarea" rows="3" placeholder="Description détaillée de l'idée d'amélioration ..."></textarea>

          <input class="btn btn-primary btn-lg btn-block" title="Ajouter" type="submit" name="btnSubmit" value="Ajouter aux idées d'améliorations"/>


    </div>
  </form>
<br>
  Affichage foreach des propositions dont le statut est en cours / Ne pas afficher les résolus !-->

      <ul class="list-group">
      <h4>Améliorations en cours</h4>
      <br>
        <li class="list-group-item justify-content-between">
          <b><span>Par : </span></b>  <b><span>date :</span></b>
          <span class="badge badge-default "><i class="fa fa-trash" aria-hidden="true"></i></span>
        </li>
        <li class="list-group-item justify-content-between">
<p>echo textarea du form au dessus</p>
        </li>
      </ul>




  </div>
</div>
</div>

<?php $this->stop('main_content') ?>
