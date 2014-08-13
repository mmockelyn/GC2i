<?php
//import donnée post
$idinterventionmobile = $_POST['idinterventionmobile'];
$desc_task = $_POST['desc_task'];
$date = $_POST['date'];
$heure = $_POST['heure'];


include ('../../../inc/config.php');
$error_sql = mysql_error();

mysql_query("INSERT INTO `tache_intervention_mobile`(`idtache`, `idinterventionmobile`, `date_tache`, `heure_tache`, `description_tache`) VALUES (NULL,'$idinterventionmobile','$date','$heure','$desc_task') ");
mysql_query("INSERT INTO `suivi_intervention_mobile`(`idsuivi`, `idinterventionmobile`, `date_suivi`, `heure_suivi`, `libelle`) VALUES (NULL,'$idinterventionmobile','$date','$heure','Ajout de la tache: $desc_task')");
mysql_query("UPDATE mobile SET etat_intervention = '2' WHERE idinterventionmobile=".$idinterventionmobile);
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
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
		<h2>Ajout d'une Tache</h2>
		<div class="row">
	
			<h3><i class="entypo-check"></i>L'ajout de la tache pour l'intervention N° <?php echo $idinterventionmobile; ?> à été inseré avec succès.</h3>
			<a href="<?php echo $rootsite; ?>/core/main/mobile/fiche.inter.php?idinterventionmobile=<?php echo $idinterventionmobile; ?>">
			<button class="btn btn-blue btn-icon" type="button">
				Retour à la fiche d'intervention mobile
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