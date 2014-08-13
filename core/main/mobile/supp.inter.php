<?php
//import donnée post

$idinterventionmobile = $_GET['idinterventionmobile'];

include ('../../../inc/config.php');
$error_sql = mysql_error();

mysql_query("DELETE FROM mobile WHERE idinterventionmobile = $idinterventionmobile");
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y');
?>	
<script type="text/javascript">
<!--
function delayer(){
    window.location = "index.php"
}
//-->
</script>

	</div>	
	<div class="main-content" onLoad="setTimeout('delayer()', 2000)">
	<?php include ('../../../inc/headerbar.php'); ?>
		<h2>Suppression d'une intervention</h2>
		<div class="row">
	
			<h3>La Suppression de l'intervention a été  exécuté avec succès</h3>
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