<?php
//import donnée post
$idclient = $_POST['idclient'];
$idtechnicien = $_POST['idtechnicien'];
$date_entre = $_POST['date_entre'];
$heure_entre = $_POST['heure_entre'];
$provenance = $_POST['provenance'];
$idtechnicien = $_POST['idtechnicien'];
$categorie_materiel = $_POST['categorie_materiel'];
$marque_materiel = $_POST['marque_materiel'];
$modele_materiel = $_POST['modele_materiel'];
$reference_materiel = $_POST['reference_materiel'];
$num_serie = $_POST['num_serie'];
$info_complementaire = $_POST['info_complementaire'];
$garantie = $_POST['garantie'];
$date_achat = $_POST['date_achat'];
$lieu_achat = $_POST['lieu_achat'];
$num_fact_achat = $_POST['num_fact_achat'];
$type_garantie = $_POST['type_garantie'];
$retour = $_POST['retour'];
$type_retour = $_POST['type_retour'];
$symptome = $_POST['symptome'];
$date_prevue = $_POST['date_prevue'];
$devis = $_POST['devis'];
$montant_autorise_devis = $_POST['montant_autorise_devis'];
$acompte = $_POST['acompte'];
$montant_acompte = $_POST['montant_acompte'];





include ('../../../inc/config.php');
$error_sql = mysql_error();

$req = "INSERT INTO `intervention`(`idintervention`, `idclient`, `date_entre`, `heure_entre`, `provenance`, `employe`, `categorie_materiel`, `marque_materiel`, `modele_materiel`, `reference_materiel`, `num_serie`, `garantie`, `date_achat`, `lieu_achat`, `num_fact_achat`, `type_garantie`, `retour`, `type_retour`, `symptome`, `remarques`, `info_complementaire`, `etat_intervention`, `devis`, `montant_autorise_devis`, `acompte`, `montant_acompte`, `date_prevue`) 
VALUES (NULL,'$idclient','$date_entre','$heure_entre','$provenance','$idtechnicien','$categorie_materiel','$marque_materiel','$modele_materiel','$reference_materiel','$num_serie','$garantie','$date_achat','$lieu_achat','$num_fact_achat','$type_garantie','$retour','$type_retour','$symptome','','$info_complementaire','1','$devis','$montant_autorise_devis','$acompte','$montant_acompte','$date_prevue')";

mysql_query($req);
echo $error_sql; 
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y');
?>	
	</div>	
	<div class="main-content">
	<?php include ('../../../inc/headerbar.php'); ?>
		<h2>Ajout d'une intervention</h2>
		<?php
			if($req == true)
				{
		?>
				<div class="row">
	
					<h3>L'ajout de l'intervention pour la date du <?php echo $date_entre; ?> à été ajouté avec succès</h3>
					<a href="<?php echo $rootsite; ?>/core/main/inter/">
					<button class="btn btn-blue btn-icon" type="button">
						Retour à la page d'accueil Intervention
						<i class="entypo-home"></i>
					</button>
					</a>
				</div>
		<?php
			}else{
		?>
					<div class="row">
	
						<h3>L'ajout de l'intervention pour la date du <?php echo $date_entre; ?> à Echouer</h3>
						<a href="<?php echo $rootsite; ?>/core/main/inter/">
						<button class="btn btn-blue btn-icon" type="button">
							Retour à la page d'accueil Intervention
							<i class="entypo-home"></i>
						</button>
						</a>
					</div>
		<?php } ?>

	
	</div>


<br />

<!-- lets do some work here... --><!-- Footer -->
<footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
	
</footer>	</div>
	
		
	</div>




	<!-- Bottom Scripts -->
	<script src="<?php echo $rootsite; ?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/joinable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/resizeable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-api.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-custom.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-demo.js"></script>

</body>
</html>