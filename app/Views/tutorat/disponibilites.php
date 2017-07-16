<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Disponibilités']);
?>

<?php $this->start('main_content'); ?>
<h1>Listes des disponibilités</h1>
<?php //debug($apprenants); ?>
<?php foreach ($apprenants as $apprenant): ?>
<?php
if($w_user['role'] == 'enseignant'){
  echo '<p>'.$apprenant['pseudo'].' veux suivre des cours de '.$apprenant['name'].' <a href="#"> Accepter l\'apprenant</a></p>';

}else{
  echo '<p>'.$apprenant['pseudo'].' Peux donner des cours de '.$apprenant['name'].' <a href="#"> S\'inscrire au cours</a></p>';
}

 ?>
<?php endforeach; ?>


<?php $this->stop('main_content'); ?>
