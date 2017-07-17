<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Inscription apprenant']);
?>

<?php $this->start('main_content'); ?>

<h1>Page Inscription apprenant</h1>

<p>Si pas inscrit affichage du formulaire d'inscription qui fera l'update du rôle guest en apprenant(juste un bouton)</p>

<p>liste des matières avec checkbox pour pouvoir en selectionner plusieurs</p>

<p>si matière recherchée non présente formulaire de contact par mail</p>

<?php if ($w_user['role'] == 'enseignant') { ?>
      <p style="color: red">Cette fonctionnalité n'est pas encore disponible.</p>
<?php } else { ?>
  <form class="apprenant" action="" method="post">

    <input type="submit" name="apprenant" value="Devenir apprenant">
    <p>Vous allez être déconnecté</p>
    
  </form>
<?php } ?>



<?php $this->stop('main_content'); ?>
