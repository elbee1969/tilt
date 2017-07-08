<?php
//hérite du fichier layout.php à la racine de app/Views/
$this->layout('layout', ['title' => 'profil de '.$w_user['pseudo']]);
?>

<?php $this->start('main_content'); ?>

<h1>Page Profil</h1>
<h2><?= 'Bonjour '.$w_user['pseudo']; ?></h2>


<?php $this->stop('main_content'); ?>
