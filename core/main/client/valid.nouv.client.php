<?php
//import donnée post

$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse1 = $_POST['adresse1'];
$adresse2 = $_POST['adresse2'];
$cp = $_POST['cp'];
$ville = $_POST['ville'];
$tel = $_POST['tel'];
$fax = $_POST['fax'];
$port = $_POST['port'];
$mail = $_POST['mail'];
$raison_social = $_POST['raison_social'];
$siret = $_POST['siret'];
$tva_intra = $_POST['tva_intra'];


mysql_connect("mysql51-66.pro", "lsiinforinter", "1992maxime");
mysql_select_db("lsiinforinter");
$error_sql = mysql_error();

$req = "INSERT INTO `lsiinforinter`.`client` (`idclient`, `civilite`, `nom`, `prenom`, `adresse1`, `adresse2`, `cp`, `ville`, `tel`, `fax`, `port`, `mail`, `raison_social`, `siret`, `tva_intra`) 
VALUES (NULL, '$civilite', '$nom', '$prenom', '$adresse1', '$adresse2', '$cp', '$ville', '$tel', '$fax', '$port', '$mail', '$raison_social', '$siret', '$tva_intra');";

mysql_query($req); 
echo $req;

include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y');
?>	
	</div>	
	<div class="main-content">
	<?php include ('../../../inc/headerbar.php'); ?>
		<h2>Ajout d'un client</h2>
		<?php
			if($req == true)
				{
		?>
				<div class="row">
	
					<h3>L'ajout du client <?php echo $nom; ?> <?php echo $prenom; ?> à été ajouté avec succès</h3>
					<a href="<?php echo $rootsite; ?>/core/main/client/">
					<button class="btn btn-blue btn-icon" type="button">
						Retour à la page d'accueil client
						<i class="entypo-home"></i>
					</button>
					</a>
				</div>
		<?php
			}else{
		?>
					<div class="row">
	
						<h3>L'ajout du client <?php echo $nom; ?> <?php echo $prenom; ?> à Echouer</h3>
						<a href="<?php echo $rootsite; ?>/core/main/client/">
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