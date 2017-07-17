<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Inscription enseignant']);
?>

<?php $this->start('main_content'); ?>

<h1>Page Inscription enseignant</h1>

<p>si pas encore inscrit affichage formulaire pour passer de rôle guest à enseignant (juste un bouton)</p>

<p>affichage si inscrit de la liste des matières en bdd en checkbox pour choix multiple</p>

<p>si matière non existante formulaire pour demande par mail</p>

<form class="apprenant" action="" method="post">

  <input type="submit" name="apprenant" value="Devenir enseignant">

</form>

<?php $this->stop('main_content'); ?>
