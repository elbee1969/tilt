<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'Communauté']);
?>

<?php $this->start('main_content'); ?>

<h1>Page Communauté</h1>


<?php $this->stop('main_content'); ?>
