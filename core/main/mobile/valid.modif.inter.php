<?php
//import donnée post
$idintervention = $_POST['idintervention'];
$desc_soluce = $_POST['desc_soluce'];
$etat_intervention = $_POST['etat_intervention'];
$date = $_POST['date'];

mysql_connect("mysql51-66.pro", "lsiinforinter", "1992maxime");
mysql_select_db("lsiinforinter");
$error_sql = mysql_error();

mysql_query("UPDATE mobile SET desc_soluce = '$desc_soluce', etat_intervention='$etat_intervention', date='$date' WHERE idinterventionmobile=".$idintervention);
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
?>	
	</div>	
	<div class="main-content">
	<?php include ('../../../inc/headerbar.php'); ?>
		<h2>Modifier une Intervention</h2>
		<div class="row">
	
			<h3>Modification de l'intervention a été  exécuté avec succès</h3>
			<a href="<?php echo $rootsite; ?>/core/main/mobile/">
			<button class="btn btn-blue btn-icon" type="button">
				Retour à la page d'accueil Intervention
				<i class="entypo-home"></i>
			</button>
			</a>
		</div>
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