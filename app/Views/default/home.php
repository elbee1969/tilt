<?php $this->layout('layout', ['title' => 'Tilt! Communauté d\'enseignants et d\'apprenants']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid">


	<!-- Map !-->


	<div class="row">
		<div class="col-12">
			<p class="policetitre" id="rechercheparregion" style="margin-bottom:4%;">Recherche des Tilters par région</p>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-4 col-12 hidden-xs-down hidden-sm-down">
		</div>
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12           ">
			<div id="francemap" style="width: 100%; height: 600px;">
			</div>
		</div>
		<div class="col-xl-4 col-xs-12 hidden-xs-down hidden-sm-down">
		</div>
	</div>


	<!-- Concept !-->


	<div class="row" style="margin-top:10%" >
		<div class="col-12">
			<p class="policetitre title" >Tilt, tout un concept</p>
		</div>
	</div>
	<div class="row" style="margin-bottom:12%;">
			<div class="col-md-4 col-12">
				<p class="center iconhomepage"><img class="testiconcept rounded-circle" src="<?= $this->assetUrl('img/icon1.png') ?>" alt=""></p>
				<p class="center subtitle_icon policejosefin">Recherchez les apprenants et enseignants près de chez vous</p>
			</div>
			<div class="col-md-4 col-12">
				<p class="center iconhomepage"><img class="testiconcept rounded-circle" src="<?= $this->assetUrl('img/icon2.png') ?>" alt=""></p>
				<p class="center subtitle_icon policejosefin">Inscrivez-vous pour prendre contact avec les enseignants et apprenants inscrits</p>
			</div>
			<div class="col-md-4 col-12">
				<p class="center iconhomepage"><img class="testiconcept rounded-circle" src="<?= $this->assetUrl('img/icon3.png') ?>" alt=""></p>
				<p class="center subtitle_icon policejosefin" >partagez vos compétences & connaissances dans la bonne humeur !</p>
			</div>
	</div>


		<!-- Categories !-->


	<div class="row ">
			<div class="col-12">
				<p class="policetitre" id="categoriesproposees">Les catégories proposées</p>
			</div>
	</div>
	<div class="row" style="margin-bottom:20%;">
			<div class="col-md-3 col-6 col-sm-4 col-lg-2 col-lg-2">
				<p class="center iconcategory">
					<img class="categoryicon" src="<?= $this->assetUrl('img/categories/Education_008_Basketball.png') ?>" alt="">
				</p>
				<p class="center policejosefin"  ><b>Sports</b></p>
			</div>
			<div class="col-md-3 col-6 col-sm-4 col-lg-2 col-lg-2">
				<p class="center iconcategory">
					<img class="categoryicon" src="<?= $this->assetUrl('img/categories/Education_101_Cook.png') ?>" alt="">
				</p>
				<p class="center policejosefin"  ><b>Cuisines</b></p>
			</div>
			<div class="col-md-3 col-6 col-sm-4 col-lg-2 col-lg-2">
				<p class="center iconcategory">
					<img class="categoryicon" src="<?= $this->assetUrl('img/categories/Education_015_Globe.png') ?>" alt="">
				</p>
				<p class="center policejosefin"  ><b>Géographie</b></p>
			</div>
			<div class="col-md-3 col-6 col-sm-4 col-lg-2 col-lg-2">
				<p class="center iconcategory">
					<img class="categoryicon" src="<?= $this->assetUrl('img/categories/Education_068_Mouse.png') ?>" alt="">
				</p>
				<p class="center policejosefin"  ><b>technologies</b></p>
			</div>
			<div class="col-md-3 col-6 col-sm-4 col-lg-2 col-lg-2">
				<p class="center iconcategory">
					<img class="categoryicon" src="<?= $this->assetUrl('img/categories/Education_102_Languages.png') ?>" alt="">
				</p>
				<p class="center policejosefin"  ><b>Langues</b></p>
			</div>
			<div class="col-md-3 col-6 col-sm-4 col-lg-2 col-lg-2">
				<p class="center iconcategory">
					<img class="categoryicon" src="<?= $this->assetUrl('img/categories/Education_082_ColorPalette.png') ?>" alt="">
				</p>
				<p class="center policejosefin"  ><b>Arts</b></p>
			</div>
			<div class="col-md-3 col-6 col-sm-4 col-lg-2 col-lg-2">
				<p class="center iconcategory">
					<img class="categoryicon" src="<?= $this->assetUrl('img/categories/Education_007_AtomicStructure.png') ?>" alt="">
				</p>
				<p class="center policejosefin"  ><b>Chimie</b></p>
			</div>
			<div class="col-md-3 col-6 col-sm-4 col-lg-2 col-lg-2">
				<p class="center iconcategory">
					<img class="categoryicon" src="<?= $this->assetUrl('img/categories/Education_037_Graph.png') ?>" alt="">
				</p>
				<p class="center policejosefin"  ><b>Economie</b></p>
			</div>
			<div class="col-md-3 col-6 col-sm-4 col-lg-2 col-lg-2">
				<p class="center iconcategory">
					<img class="categoryicon" src="<?= $this->assetUrl('img/categories/Education_031_ReadingBook.png') ?>" alt="">
				</p>
				<p class="center policejosefin"  ><b>Français</b></p>
			</div>
			<div class="col-md-3 col-6 col-sm-4 col-lg-2 col-lg-2">
				<p class="center iconcategory">
					<img class="categoryicon" src="<?= $this->assetUrl('img/categories/Education_045_Calendar.png') ?>" alt="">
				</p>
				<p class="center policejosefin"  ><b>Histoire</b></p>
			</div>
			<div class="col-md-3 col-6 col-sm-4 col-lg-2 col-lg-2">
				<p class="center iconcategory">
					<img class="categoryicon" src="<?= $this->assetUrl('img/categories/Education_019_MathSymbols.png') ?>" alt="">
				</p>
				<p class="center policejosefin"  ><b>Mathématiques</b></p>
			</div>
			<div class="col-md-3 col-6 col-sm-4 col-lg-2 col-lg-2">
				<p class="center iconcategory">
					<img class="categoryicon" src="<?= $this->assetUrl('img/categories/Education_046_Notes.png') ?>" alt="">
				</p>
				<p class="center policejosefin"  ><b>Musique</b></p>
			</div>
	</div>


		<!-- Nos tilters adorents !-->


	<div class="row">
			<div class="col-12">
				<p class="policetitre" id="testimonials">Nos Tilters adorent ...</p>
			</div>
	</div>
	<div class="row">
			<div class="col-md-12 col-12 col-lg-4 col-xl-4 col-sm-12">
				<p class="center iconhomepage">
					<img class="testiconcept rounded-circle" src="<?= $this->assetUrl('img/testi1.jpg') ?>" alt="">
				</p>
				<a href="#">
					<p class="center subtitle_icon policejosefin">Franck R.</p>
				</a>
				<p class="center iconhomepage"><img class="separator" src="<?= $this->assetUrl('img/separator.png') ?>" alt=""></p>
				<p class="center policejosefin" style="font-size: 1.5em;"><i>Se site est tou simpleument extra !<br> Je viens de m'inscrire et j'ai déjà un<br> cour de français prévu dans deux jour ! </i></p>
			</div>
			<div class="col-md-12 col-12 col-lg-4 col-xl-4 col-sm-12">
				<p class="center iconhomepage">
					<img class="testiconcept rounded-circle" src="<?= $this->assetUrl('img/testi4.jpg') ?>" alt="">
				</p>
				<a href="#">
					<p class="center subtitle_icon policejosefin">Madonna Louise C.</p>
				</a>
				<p class="center iconhomepage"><img class="separator" src="<?= $this->assetUrl('img/separator.png') ?>" alt=""></p>
				<p class="center policejosefin" style="font-size: 1.5em;"><i>Superbe plateforme d'entraide !<br> Je suis agréablement surprise par l'amabilité des tilters !<br> J'ai envoyé le lien à Snoop Dogg !</i></p>
			</div>

			<div class="col-md-12 col-12 col-lg-4 col-xl-4 col-sm-12">
				<p class="center iconhomepage">
					<img class="testiconcept rounded-circle" src="<?= $this->assetUrl('img/testi2.jpg') ?>" alt="">
				</p>
				<a href="#">
					<p class="center subtitle_icon policejosefin">Albert E.</p>
				</a>
				<p class="center iconhomepage"><img class="separator" src="<?= $this->assetUrl('img/separator.png') ?>" alt=""></p>
				<p class="center policejosefin" style="font-size: 1.5em;"><i>J'ai vu ce site sur e=m6,<br> Je n'en reviens pas que mon voisin Isaac<br> donne des cours de maths à 5km de chez moi ! </i></p>
			</div>
	</div>


		<!-- Et vous ? !-->


	<div class="row" style="margin-top:12%">
			<div class="col-12">
				<p class="policetitre" id="etvousdixdoigts">Et vous, que savez-vous faire de vos 10 doigts ?</p>
				<p class="center policejosefin">Devenez Tilters et révélez toutes vos compétences auprès de la communauté !</p>
				<p class="center" id="propcomp">
					<a href="<?= $this->url('users_register'); ?>" >
						<button type="button" class="btn btn-primary btn-lg">Proposer mes compétences</button>
					</a>
				</p>
			</div>
	</div>
		IF : USER CONNECTE -> VA L'ENVOYER SUR LA PAGE "DONNER UN COURS" / IF : USER NON CONNECTE -> INSCRIPTION ?

</div>



<?php $this->stop('main_content') ?>

<?php $this->start('js') ?>
<link href="<?= $this->assetUrl('map/jqvmap.css')?>" media="screen" rel="stylesheet" type="text/css"/>
<script src="<?= $this->assetUrl('map/jquery.vmap.js')?>" type="text/javascript"></script>
<script src="<?= $this->assetUrl('map/jquery.vmap.france.js')?>" type="text/javascript"></script>
<script src="<?= $this->assetUrl('map/jquery.vmap.colorsFrance.js')?>" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#francemap').vectorMap({
		map: 'france_fr',
		hoverOpacity: 0.5,
		hoverColor: "#9fa8da",
		backgroundColor: "#FFFFFF",
		color: "#3F51B5",
		borderColor: "#ffffff",
		selectedColor: "#9fa8da",
		enableZoom: true,
		showTooltip: true,
			onRegionClick: function(element, code, region)
			{
				console.log (element);
window.location.href = '/tilt/public/region' + code  // + nom de la region créée en BDD & prêt a lusage ;


			}
	});
});
</script>





<?php $this->stop('js') ?>
