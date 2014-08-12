<?php
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y');
$idclient = $_GET['idclient'];
$sql_client = mysql_query("SELECT * FROM client WHERE idclient = $idclient");
$donnee_client = mysql_fetch_array($sql_client);
?>	
	</div>	
	<div class="main-content">
		
<?php include ('../../../inc/headerbar.php'); ?>

<hr />
			<ol class="breadcrumb bc-3">
				<li><a href="index.html"><i class="entypo-home"></i>Accueil</a></li>
				<li><a href="<?php echo $rootsite; ?>/core/main/client/index.php">Client</a></li>
				<li class="active"><strong>Fiche du Client n°<?php echo $donnee_client['idclient']; ?></strong></li>
			</ol>
			



<h3>Client n° <?php echo $donnee_client['idclient']; ?> - <?php echo $donnee_client['nom']; ?> <?php echo $donnee_client['prenom']; ?></h3>
	<div class="row">
		<div class="col-md-6">
		
			<div data-collapsed="0" class="panel panel-default panel-shadow"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Fiche Client</div>
					
					<div class="panel-options">
						<a class="bg" data-target="#sample-modal-dialog-3" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
						<a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
						<a data-rel="reload" href="#"><i class="entypo-arrows-ccw"></i></a>
						<a data-rel="close" href="#"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					<table>
						<tr>
							<td>Code Client:</td>
							<td>CLT000<?php echo $donnee_client['idclient']; ?></td>
						</tr>
						<tr>
							<td>Civilité:</td>
							<td>
								<?php
									if($donnee_client['civilite'] == 1){echo "Monsieur";}
									if($donnee_client['civilite'] == 2){echo "Madame";}
									if($donnee_client['civilite'] == 3){echo "Mademoiselle";}
								?>
							</td>
						</tr>
						<tr>
							<td>Nom:</td>
							<td><?php echo $donnee_client['nom']; ?></td>
						</tr>
						<tr>
							<td>Prénom:</td>
							<td><?php echo $donnee_client['prenom']; ?></td>
						</tr>
						<tr>
							<td>Nom:</td>
							<td><?php echo $donnee_client['nom']; ?></td>
						</tr>
						<tr>
							<td>Adresse:</td>
							<td><?php echo $donnee_client['adresse1']; ?></td>
						</tr>
						<tr>
							<td>Complément d'adresse:</td>
							<td><?php echo $donnee_client['adresse2']; ?></td>
						</tr>
						<tr>
							<td>Code Postal:</td>
							<td><?php echo $donnee_client['cp']; ?></td>
							<td>Ville:</td>
							<td><?php echo $donnee_client['ville']; ?></td>
						</tr>
						<tr>
							<td>Téléphone Fixe:</td>
							<td><?php echo $donnee_client['tel']; ?></td>
						</tr>
						<tr>
							<td>Téléphone Portable:</td>
							<td><?php echo $donnee_client['port']; ?></td>
						</tr>
						<tr>
							<td>Fax:</td>
							<td><?php echo $donnee_client['fax']; ?></td>
						</tr>
						<tr>
							<td>Adresse Mail:</td>
							<td><?php echo $donnee_client['mail']; ?></td>
						</tr>
					</table>				
				</div>
				
			</div>
		
		</div>
		<div class="col-md-6">
		
			<div data-collapsed="0" class="panel panel-default panel-shadow"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Fiche Professionnel</div>
					
					<div class="panel-options">
						<a class="bg" data-target="#sample-modal-dialog-3" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
						<a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
						<a data-rel="reload" href="#"><i class="entypo-arrows-ccw"></i></a>
						<a data-rel="close" href="#"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					<table>
						<tr>
							<td>Raison Social:</td>
							<td><?php echo $donnee_client['raison_social']; ?></td>
						</tr>
						<tr>
							<td>Siret:</td>
							<td><?php echo $donnee_client['siret']; ?></td>
						</tr>
						<tr>
							<td>N° de Tva Intracommunautaire:</td>
							<td><?php echo $donnee_client['tva_intra']; ?></td>
						</tr>
					</table>
				</div>
				
			</div>
		
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		
			<div data-collapsed="0" class="panel panel-default panel-shadow"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Action</div>
					
					<div class="panel-options">
					
						<ul class="nav nav-tabs">
							<li class="active"><a href="#profile-1" data-toggle="tab"><i class="entypo-target">Action</i></a></li>
							<li><a href="#profile-2" data-toggle="tab"><i class="entypo-doc">Courrier</i></a></li>
							<li><a href="#profile-3" data-toggle="tab"><i class="entypo-mail">E-Mail</i></a></li>
						</ul>
					</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
				
				<div class="tab-content">
					<div id="profile-1" class="tab-pane active">
						<center>
							<a href="supp.client.php?idclient=<?php echo $idclient; ?>"><button class="btn btn-red btn-icon btn-lg" type="button">Supprimer le client<i class="entypo-cancel"></i></button></a>
							<a href="modif.client.php?idclient=<?php echo $idclient; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Modifier le client<i class="entypo-pencil"></i></button></a>
						</center>
					</div>
					
					<div id="profile-2" class="tab-pane">
						<center>
							<a href="<?php echo $rootsite; ?>/pdf/bienvenue.php?idclient=<?php echo $idclient; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Lettre de Bienvenue<i class="entypo-mail"></i></button></a><br><br>
							<a href="<?php echo $rootsite; ?>/pdf/justificatif.php?idclient=<?php echo $idclient; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Demande de Justificatif<i class="entypo-mail"></i></button></a><br><br>
						</center>
					</div>
					<div id="profile-3" class="tab-pane">
						<center>
							<a href="<?php echo $rootsite; ?>/email/bienvenue.php?idclient=<?php echo $idclient; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">E mail de Bienvenue<i class="entypo-mail"></i></button></a><br><br>
							<a href="<?php echo $rootsite; ?>/email/disposition.php?idclient=<?php echo $idclient; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Mise à disposition du matériel<i class="entypo-mail"></i></button></a><br><br>
							<a href="<?php echo $rootsite; ?>/email/justificatif.php?idclient=<?php echo $idclient; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Demande de Justificatif<i class="entypo-mail"></i></button></a><br><br>
						</center>
					</div>
				</div>
				
			</div>
				
			</div>
		
		</div>
	</div>
<br />
</div>

<!-- lets do some work here... --><!-- Footer -->
<footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
	
</footer>	</div>
	
		
	</div>




	<!-- Bottom Scripts -->
	<link href="<?php echo $rootsite; ?>assets/css/font-icons/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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