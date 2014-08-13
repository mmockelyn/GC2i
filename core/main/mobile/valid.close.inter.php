<?php
//import donnée post
$idinterventionmobile = $_POST['idinterventionmobile'];
$etat_intervention = $_POST['etat_intervention'];





include ('../../../inc/config.php');
$error_sql = mysql_error();

mysql_query("UPDATE mobile SET etat_intervention = '$etat_intervention' WHERE idinterventionmobile = $idinterventionmobile");
echo $error_sql; 
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y');
?>	
	</div>	
	<div class="main-content">
	<?php include ('../../../inc/headerbar.php'); ?>
		<h2>Cloture d'une intervention mobile</h2>
		<?php
			if($req == true)
				{
		?>
				<div class="row">
	
					<h3><i class="entypo-check"></i>La cloture de l'intervention mobile n° <?php echo $idinterventionmobile; ?> à été exécuter avec succès</h3>
					<a href="<?php echo $rootsite; ?>/core/main/mobile/fiche.inter.php?idinterventionmobile=<?php echo $idinterventionmobile; ?>">
					<button class="btn btn-blue btn-icon" type="button">
						Retour sur la fiche d'intervention
						<i class="entypo-document"></i>
					</button>
					</a>
				</div>
		<?php
			}else{
		?>
					<div class="row">
	
						<h3><i class="entypo-cancel"></i>La cloture de l'intervention mobile n° <?php echo $idinterventionmobile; ?> à rencontrer une erreur.<br>
						Contacter votre administrateur réseau.
						</h3>
						<a href="<?php echo $rootsite; ?>/core/main/mobile/fiche.inter.php?idinterventionmobile=<?php echo $idinterventionmobile; ?>">
						<button class="btn btn-blue btn-icon" type="button">
							Retour sur la fiche d'intervention
							<i class="entypo-document"></i>
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