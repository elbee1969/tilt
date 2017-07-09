<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Nom de la région']);
?>

<?php $this->start('main_content'); ?>

<h1>Page Régions</h1>


<?php $this->stop('main_content'); ?>
