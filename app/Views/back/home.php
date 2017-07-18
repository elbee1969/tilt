<?php $this->layout('layoutback', ['title' => 'Accueil BackOffice']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid">

	<div class="row">
		<div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-3">
			<a href="<?= $this->url('back_users'); ?>">
				<div class="panel blue">
					<i class="fa fa-user fa-5x"></i>
					<div class="textWrapper">
						<div class="huge"><?php echo $countusers ?></div>
						<div>personnes inscrites </div>
					</div>
				</div>
			</a>

		</div>
		<div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-3">
			<a href="<?= $this->url('back_cours'); ?>">
			<div class="panel green">
			<i class="fa fa-tasks fa-5x"></i>
			<div class="textWrapper">
			<div class="huge"><?php echo $countcours ?></div>
			<div>cours proposés</div>
			</div>
			</div>
			</a>
		</div>
		<div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-3">
	<div class="panel orange">
		<i class="fa fa-envelope fa-5x"></i>
		<div class="textWrapper">
			<div class="huge"><?php echo $countmessages ?></div>
			<div>messages échangés</div>
		</div>
	</div>
		</div>
		<div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-3">
			<div class="panel red">
				<i class="fa fa-sticky-note fa-5x"></i>
				<div class="textWrapper">
					<div class="huge"><?php echo $countmatieres ?></div>
					<div>matières proposées</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid">
<br>
Idées : Personne qui a donné le plus de cours ? <br>
				Personne qui a pris le plus de cours ?<br>
				Quelles données pouvons nous mettre dans l'admin ?<br>
				Prévoir une table des messages qui nous seront adressés via le form de contact -> back message


</div>

<?php $this->stop('main_content') ?>
