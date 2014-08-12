<?php
//import donnée post
$idintervention = $_POST['idintervention'];
$designation1 = $_POST['designation1'];
$qte1 = $_POST['qte1'];
$pvht1 = $_POST['pvht1'];
$designation2 = $_POST['designation2'];
$qte2 = $_POST['qte2'];
$pvht2 = $_POST['pvht2'];
$designation3 = $_POST['designation3'];
$qte3 = $_POST['qte3'];
$pvht3 = $_POST['pvht3'];
$designation4 = $_POST['designation4'];
$qte4 = $_POST['qte4'];
$pvht4 = $_POST['pvht4'];
$designation5 = $_POST['designation5'];
$qte5 = $_POST['qte5'];
$pvht5 = $_POST['pvht5'];
$remise = $_POST['remise'];
$mode_paiement = $_POST['mode_paiement'];
$etat_intervention = $_POST['etat_intervention'];
$info_complementaire_bdl = $_POST['info_complementaire_bdl'];





include ('../../../inc/config.php');
$error_sql = mysql_error();

$req = "INSERT INTO `facture_intervention`(`idfactureintervention`, `idintervention`, `idclient`, `article1`, `article2`, `article3`, `article4`, `article5`, `qte1`, `qte2`, `qte3`, `qte4`, `qte5`, `pvht1`, `pvht2`, `pvht3`, `pvht4`, `pvht5`, `remise`, `mode_paiement`) 
VALUES (NULL,'$idintervention','','$designation1','$designation2','$designation3','$designation4','$designation5','$qte1','$qte2','$qte3','$qte4','$qte5','$pvht1','$pvht2',$pvht3,'$pvht4','$pvht5','$remise','$mode_paiement')";

mysql_query($req);
mysql_query("INSERT INTO `bonlivraison_intervention`(`idbonlivraison`, `idintervention`, `info_complementaire_bdl`) VALUES (NULL,'$idintervention','$info_complementaire_bdl')");
mysql_query("UPDATE intervention SET etat_intervention = '$etat_intervention' WHERE idintervention = $idintervention");
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