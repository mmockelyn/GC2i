<?php
//import donnée post
$idintervention = $_POST['idintervention'];
$etat_intervention = $_POST['etat_intervention'];





include ('../../../inc/config.php');
$error_sql = mysql_error();
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
		<h2>Cloture de l'intervention</h2>
		<?php
			if($req == true)
				{
		?>
				<div class="row">
	
					<h3><i class="entypo-check"></i>La cloture de l'intervention n° <?php echo $idintervention; ?> à été exécuter avec succès</h3>
					<a href="<?php echo $rootsite; ?>/core/main/inter/fiche.inter.php?idintervention=<?php echo $idintervention; ?>">
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
	
						<h3><i class="entypo-cancel"></i>L'ajout de l'intervention pour la date du <?php echo $date_entre; ?> à Echouer</h3>
						<a href="<?php echo $rootsite; ?>/core/main/inter/fiche.inter.php?idintervention=<?php echo $idintervention; ?>">
						<button class="btn btn-blue btn-icon" type="button">
							Retour à la fiche d'Intervention
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