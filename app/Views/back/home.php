<?php $this->layout('layoutback', ['title' => 'Accueil BackOffice']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid">


	<div class="row">
		<div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-3">
			<a href="<?= $this->url('back_users'); ?>">
				<div class="panel blue">
					<i class="fa fa-user fa-5x"></i>
					<div class="textWrapper">
						<div class="huge">56</div>
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
			<div class="huge">22</div>
			<div>cours proposés</div>
			</div>
			</div>
			</a>
		</div>
		<div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-3">
			<a href="localhost:1080" target="_blank">
	<div class="panel orange">
		<i class="fa fa-envelope fa-5x"></i>
		<div class="textWrapper">
			<div class="huge">0</div>
			<div>messages</div>
		</div>
	</div>
			</a>
		</div>
		<div class="col-12 col-lg-6 col-sm-12 col-md-6 col-xl-3">
			<a href="<?= $this->url('back_ameliorations'); ?>">
			<div class="panel red">
				<i class="fa fa-sticky-note fa-5x"></i>
				<div class="textWrapper">
					<div class="huge">0</div>
					<div>idées d'amélioration</div>
				</div>
			</div>
			</a>
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
