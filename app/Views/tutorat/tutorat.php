<?php
$this->layout('layout', ['title' => 'Ajout apprenant']);
?>

<?php $this->start('main_content'); ?>
<?php
if(in_array($w_user['role'], ['apprenant', 'enseignant'])){
 //si apprenant on affiche liste des enseignants

 if(in_array($w_user['role'], ['apprenant'])){ ?>

   <div class="container-fluid">
     <div class="row">
       <div class="col-12 col-lg-4 col-md-4 col-sm-6">
<?php     echo '<p class="policetitre" style="margin-top:30px;"><a href="'. $this->url('tutorat_disponibilites', ['region_id' => $w_user['region_id'],'role' => $w_user['role']]).'">Voir les offres de formations</a></p>'; ?>

       </div>
       <div class="col-12 col-lg-4 col-md-4 col-sm-6">
<?php      echo '<p class="policetitre" style="margin-top:30px;"><a href="'. $this->url('tutorat_cours').'">s\'inscrire à un cours</a></p>'; ?>
       </div>
       <div class="col-12 col-lg-4 col-md-4 col-sm-6">
<?php echo '          <p  class="policetitre" style="margin-top:30px;">Liste des mes enseignants</p> '  ?>



<div class="card">
  <ul class="list-group list-group-flush">

<?php     foreach ($msgenseignants as $msg) {
?>
               <li class="list-group-item">
                 <?php     echo '<p>'.$msg['pseudo'].' formateur en  <b>'.$msg['matiere'].'</b> dans la région '.$msg['region'].'
                  <a href="'. $this->url('messages_messages', ['id' => $msg['id_apprenant'], 'user_id' => $msg['id']]).'">
                    <i class="fa fa-commenting" aria-hidden="true">
                    </i>
                    </a>
                    </p>';
                 } ?>
               </li>
             </ul>
           </div>
       </div>
     </div>
   </div>
 <?php }?>


<?php if(in_array($w_user['role'], ['enseignant'])){ ?>

     <div class="container-fluid">
       <div class="row">
         <div class="col-12 col-lg-4 col-md-4 col-sm-6">
 <?php     echo '<p class="policetitre" style="margin-top:30px;"><a href="'. $this->url('tutorat_disponibilites', ['region_id' => $w_user['region_id'],'role' => $w_user['role']]).'">Voir les demandeurs</a></p>'; ?>
         </div>
         <div class="col-12 col-lg-4 col-md-4 col-sm-6">
 <?php      echo '<p class="policetitre" style="margin-top:30px;"><a href="'. $this->url('tutorat_cours').'">Donner des cours</a></p>'; ?>
         </div>
         <div class="col-12 col-lg-4 col-md-4 col-sm-6">
 <?php echo '          <p  class="policetitre" style="margin-top:30px;">Liste des mes apprenants</p> '  ?>

 <div class="card">
 <ul class="list-group list-group-flush">
 <?php     foreach ($msgapprenants as $msg) {
 ?>
                 <li class="list-group-item">
                    <?php     echo '<p>'.$msg['pseudo'].' apprenant en  <b>'.$msg['matiere'].'</b> dans la région '.$msg['region'].'
                      <a href="'. $this->url('messages_messages', ['id' => $msg['id_enseignant'], 'user_id' => $msg['id']]).'">
                        <i class="fa fa-commenting" aria-hidden="true">
                        </i>
                        </p>
                      </a>
                        </li>';
   }; ?>
               </ul>
             </div>
         </div>
       </div>
     </div>

     <?php } ?>


<!-- CHANGER LE UL LI POUR NE PAS QUE LES USERS S'IMBRIQUENT !-->

<?php

}else{
 echo '<p>Données non disponibles avec le rôle "admin".</p>';
 echo '<p>Vers 403</p>';

}


?>


<?php $this->stop('main_content'); ?>
