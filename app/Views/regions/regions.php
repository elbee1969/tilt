<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Liste des régions']);
?>

<?php $this->start('main_content'); ?>

<h1>Page Régions</h1>
<?php
foreach ($regions as $region) {
 echo '<p> '. $region['name'].'</p>';
?>
 <a href="<?= $this->url('regions_region', ['id' => $region['id']]) ?>">vers région</a>
 <?php
}

 ?>


<?php $this->stop('main_content'); ?>
