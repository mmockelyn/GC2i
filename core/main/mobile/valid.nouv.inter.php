<?php
//import donnée post
$idclient = $_POST['idclient'];
$idtechnicien = $_POST['idtechnicien'];	
$date = $_POST['date'];
$materiel = $_POST['materiel'];
$marque = $_POST['marque'];
$serie = $_POST['serie'];
$num_serie = $_POST['num_serie'];
$num_imei = $_POST['num_imei'];
$accessoire = $_POST['accessoire'];
$garantie = $_POST['garantie'];
$date_achat = $_POST['date_achat'];
$desc_probleme = $_POST['desc_probleme'];
$date_maintenance_prevue = $_POST['date_maintenance_prevue'];
$tel_demarre = $_POST['tel_demarre'];
$code_util = $_POST['code_util'];
$operateur = $_POST['operateur'];
$sauvegarde = $_POST['sauvegarde'];
$restauration = $_POST['restauration'];



mysql_connect("mysql51-66.pro", "lsiinforinter", "1992maxime");
mysql_select_db("lsiinforinter");
$error_sql = mysql_error();

$req = "INSERT INTO `mobile`(`idinterventionmobile`, `idclient`, `date`, `date_maintenance_prevue`, `idtechnicien`, `materiel`, `marque`, `serie`, `num_serie`, `num_imei`, `accessoire`, `garantie`, `date_achat`, `desc_probleme`, `desc_soluce`, `tel_demarre`, `code_util`, `operateur`, `sauvegarde`, `restauration`, `etat_intervention`) 
VALUES (NULL,'$idclient' ,'$date', '$date_maintenance_prevue', '$idtechnicien', '$materiel', '$marque', '$serie', '$num_serie', '$num_imei', '$accessoire', '$garantie', '$date_achat', '$desc_probleme', '', '$tel_demarre', '$code_util', '$operateur', '$sauvegarde', '$restauration', '1')";

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
	
					<h3>L'ajout de l'intervention pour la date du <?php echo $date; ?> à été ajouté avec succès</h3>
					<a href="<?php echo $rootsite; ?>/core/main/mobile/">
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
	
						<h3>L'ajout de l'intervention pour la date du <?php echo $date; ?> à Echouer</h3>
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