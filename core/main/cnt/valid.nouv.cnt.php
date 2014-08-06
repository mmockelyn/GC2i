<?php
//import donnée post
$idclient = $_POST['idclient'];
$idtechnicien = $_POST['idtechnicien'];
$date = $_POST['date'];
$materiel = $_POST['materiel'];
$marque = $_POST['marque'];
$serie = $_POST['serie'];
$num_serie = $_POST['num_serie'];
$accessoire = $_POST['accessoire'];
$garantie = $_POST['garantie'];
$date_achat = $_POST['date_achat'];
$desc_probleme = $_POST['desc_probleme'];
$date_maintenance_prevue = $_POST['date_maintenance_prevu'];



mysql_connect("mysql51-66.pro", "lsiinforinter", "");
mysql_select_db("lsiinforinter");
$error_sql = mysql_error();

$req = "INSERT INTO `inter`.`intervention` (`idintervention`, `idclient`, `date`, `mode_reglement`, `date_maintenance_prevue`, `materiel`, `marque`, `serie`, `num_serie`, `accessoire`, `desc_probleme`, `desc_soluce`, `idtechnicien`, `garantie`, `date_achat`, `etat_materiel`, `etat_intervention`, `cnt`, `idcnt`) 
VALUES (NULL, '$idclient', '$date', '', '$date_maintenance_prevue', '$materiel', '$marque', '$serie', '$num_serie', '$accessoire', '$desc_probleme', '', '$idtechnicien', '$garantie', '$date_achat', '1', '1', '0', '0');";

mysql_query($req); 
echo $error_sql; 
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/LONDON');
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