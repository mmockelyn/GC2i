<?php
//import donnée post
$idclient = $_POST['idclient'];
$idtechnicien = $_POST['idtechnicien'];
$date_entre = $_POST['date_entre'];
$heure_entre = $_POST['heure_entre'];
$provenance = $_POST['provenance'];
$idtechnicien = $_POST['idtechnicien'];
$categorie_telephone = $_POST['categorie_telephone'];
$marque_telephone = $_POST['marque_telephone'];
$modele_telephone = $_POST['modele_telephone'];
$imei = $_POST['imei'];
$info_complementaire = $_POST['info_complementaire'];
$garantie = $_POST['garantie'];
$date_achat = $_POST['date_achat'];
$operateur = $_POST['operateur'];
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

$req = "INSERT INTO `mobile`(`idinterventionmobile`, `idclient`, `date_entre`, `heure_entre`, `provenance`, `employe`, `categorie_telephone`, `marque_telephone`, `modele_telephone`, `imei`, `garantie`, `date_achat`, `operateur`, `retour`, `type_retour`, `symptome`, `remarques`, `info_complementaire`, `etat_intervention`, `devis`, `montant_autorise_devis`, `acompte`, `montant_acompte`, `date_prevue`) 
VALUES (NULL,'$idclient','$date_entre','$heure_entre','$provenance','$employe','$categorie_telephone','$marque_telephone','$modele_telephone','$imei','$garantie','$date_achat','$operateur','$retour','$type_retour','$symptome','$remarques','$info_complementaire','1','$devis','$montant_autorise_devis','$acompte','$montant_acompte','$date_prevue')";

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
		<h2>Ajout d'une intervention Mobile</h2>
		<?php
			if($req == true)
				{
		?>
				<div class="row">
	
					<h3><i class="entypo-check"></i>L'ajout de l'intervention pour la date du <?php echo $date_entre; ?> à été ajouté avec succès</h3>
					<a href="<?php echo $rootsite; ?>/core/main/mobile/">
					<button class="btn btn-blue btn-icon" type="button">
						Retour à la page d'accueil Intervention mobile
						<i class="entypo-home"></i>
					</button>
					</a>
				</div>
		<?php
			}else{
		?>
					<div class="row">
	
						<h3><i class="entypo-cancel"></i>L'ajout de l'intervention pour la date du <?php echo $date_entre; ?> à Echouer</h3>
						<a href="<?php echo $rootsite; ?>/core/main/mobile/">
						<button class="btn btn-blue btn-icon" type="button">
							Retour à la page d'accueil Intervention mobile
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