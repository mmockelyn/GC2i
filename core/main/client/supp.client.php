<?php
//import donnée post

$idclient = $_GET['idclient'];

mysql_connect("mysql51-66.pro", "lsiinforinter", "1992maxime");
mysql_select_db("lsiinforinter");
$error_sql = mysql_error();

mysql_query("DELETE FROM client WHERE idclient=".$idclient);
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y');
?>	
	</div>	
	<div class="main-content">
	<?php include ('../../../inc/headerbar.php'); ?>
		<h2>Suppression d'un client</h2>
		<div class="row">
	
			<h3>La Suppression du client a été  exécuté avec succès</h3>
			<a href="<?php echo $rootsite; ?>/core/main/client/">
			<button class="btn btn-blue btn-icon" type="button">
				Retour à la page d'accueil client
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