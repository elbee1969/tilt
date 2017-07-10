<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Nom de la région']);
?>

<?php $this->start('main_content'); ?>

<h1>Page Région</h1>
<?php echo $region['name']; ?>

<?php $this->stop('main_content'); ?>
