<?php
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y');
$idintervention = $_GET['idintervention'];
$sql_inter = mysql_query("SELECT * FROM intervention, client WHERE intervention.idclient = client.idclient AND idintervention = $idintervention");
$donnee_inter = mysql_fetch_array($sql_inter);
?>	
	</div>	
	<div class="main-content">
		
<?php include ('../../../inc/headerbar.php'); ?>

<hr />
			<ol class="breadcrumb bc-3">
				<li><a href="index.html"><i class="entypo-home"></i>Accueil</a></li>
				<li><a href="<?php echo $rootsite; ?>/core/main/inter/index.php">Intervention</a></li>
				<li class="active"><strong>Fiche de l'intervention n°<?php echo $donnee_inter['idintervention']; ?></strong></li>
			</ol>
			



<h3>Intervention n° <?php echo $donnee_inter['idintervention']; ?> - <?php echo $donnee_inter['nom']; ?> <?php echo $donnee_inter['prenom']; ?></h3>
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
					<h1>
						<center>
							<?php
								switch($donnee_inter['etat_intervention'])
									{
										case "1":
										print("<font color=red>Non vu</font>");
										break;

										case "2":
										print("<font color=yellow>En Cours</font>");
										break;

										case "3":
										print("<font color=green>Terminé - Réparé</font>");
										break;

										case "4":
										print("<font color=blue>Terminé - non réparé</font>");
										break;

										default:
										print("<i class='fa fa-warning'></i>Etat inconnue");
										break;
									}
								?>
						</center>
					</h1>			
				</div>
				
			</div>
		
		</div>
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
							<td>CLT000<?php echo $donnee_inter['idclient']; ?></td>
						</tr>
						<tr>
							<td><?php echo $donnee_inter['nom']; ?> <?php echo $donnee_inter['prenom']; ?></td>
						</tr>
						<tr>
							<td><?php echo $donnee_inter['adresse1']; ?></td>
						</tr>
						<tr>
							<td><?php echo $donnee_inter['adresse2']; ?></td>
						</tr>
						<tr>
							<td><?php echo $donnee_inter['cp']; ?>  <?php echo $donnee_inter['ville']; ?></td>
						</tr>
						<tr>
							<td>Tel:<?php echo $donnee_inter['tel']; ?></td>
							<td>Port:<?php echo $donnee_inter['port']; ?></td>
						</tr>
					</table>				
				</div>
				
			</div>
		
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
		
			<div data-collapsed="0" class="panel panel-default panel-shadow"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Identification Matériel</div>
					
					<div class="panel-options">
						<a class="bg" data-target="#sample-modal-dialog-3" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
						<a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
						<a data-rel="reload" href="#"><i class="entypo-arrows-ccw"></i></a>
						<a data-rel="close" href="#"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					Catégorie:		<?php echo $donnee_inter['categorie_materiel']; ?><br>
					Marque:			<?php echo $donnee_inter['marque_materiel']; ?><br>		
					Modèle:			<?php echo $donnee_inter['modele_materiel']; ?><br>
					Référence:		<?php echo $donnee_inter['reference_materiel']; ?><br>
					N° de série:	<?php echo $donnee_inter['num_serie']; ?><br>
				</div>
				
			</div>
		
		</div>
		<div class="col-md-6">
		
			<div data-collapsed="0" class="panel panel-warning panel-shadow"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Information de Garantie & Retour</div>
					
					<div class="panel-options">
						<a class="bg" data-target="#sample-modal-dialog-3" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
						<a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
						<a data-rel="reload" href="#"><i class="entypo-arrows-ccw"></i></a>
						<a data-rel="close" href="#"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
				Date Achat: 		<?php echo $donnee_inter['date_achat']; ?><br>
				Lieu d'Achat: 		<?php echo $donnee_inter['lieu_achat']; ?><br>
				N° Facture d'achat:	<?php echo $donnee_inter['num_fact_achat']; ?><br>
				Garantie:
					<?php 
						if($donnee_inter['garantie'] == 1){echo "OUI";}
						if($donnee_inter['garantie'] == 0){echo "NON";}
					?>
					<br>
				Type de garantie:
					<?php
						switch($donnee_inter['type_garantie'])
							{
								case "1":
								print("HG - Hors Garantie");
								break;

								case "2":
								print("1 an");
								break;

								case "3":
								print("2 ans");
								break;

								case "4":
								print("3 ans");
								break;

								case "5":
								print("5 ans");
								break;

								case "6":
								print("10 ans");
								break;

								case "7":
								print("A vie");
								break;

								default:
								print("Inconnue");
								break;
							}
					?>
					<br>
					Retour:
						<?php
							if($donnee_inter['retour'] == 1){echo "OUI";}
							if($donnee_inter['retour'] == 0){echo "NON";}
						?>
					<br>
					Type de retour:
						<?php
							switch($donnee_inter['type_retour'])
								{
									case "1":
									print("Retour Constructeur");
									break;

									case "2":
									print("Retour Magasin d'achat");
									break;

									default:
									print("Inconnu");
									break;
								}
						?>

				</div>
				
			</div>
		
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
		
			<div data-collapsed="0" class="panel panel-default panel-shadow"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Symptome</div>
					
					<div class="panel-options">
						<a class="bg" data-target="#sample-modal-dialog-3" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
						<a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
						<a data-rel="reload" href="#"><i class="entypo-arrows-ccw"></i></a>
						<a data-rel="close" href="#"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					<?php echo $donnee_inter['symptome']; ?>			
				</div>
				
			</div>
		
		</div>
		<div class="col-md-6">
		
			<div data-collapsed="0" class="panel panel-default panel-shadow"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">
					Devis: 
						<?php
							if($donnee_inter['devis'] == 0){echo "NON";}
							if($donnee_inter['devis'] == 1){echo "OUI";}
						?>
					</div>
					
					<div class="panel-options">
						<a class="bg" data-target="#sample-modal-dialog-3" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
						<a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
						<a data-rel="reload" href="#"><i class="entypo-arrows-ccw"></i></a>
						<a data-rel="close" href="#"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
						Montant autorisé:
							<?php
								if($donnee_inter['montant_autorise_devis'] == true){echo $donnee_inter['montant_autorise_devis'];}else{echo "0,00";}
							?> €
				</div>
				
			</div>
		
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
		
			<div data-collapsed="0" class="panel panel-default panel-shadow"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Remarque</div>
					
					<div class="panel-options">
						<a class="bg" data-target="#sample-modal-dialog-3" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
						<a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
						<a data-rel="reload" href="#"><i class="entypo-arrows-ccw"></i></a>
						<a data-rel="close" href="#"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					<?php echo $donnee_inter['remarques']; ?>			
				</div>
				
			</div>
		
		</div>
		<div class="col-md-6">
		
			<div data-collapsed="0" class="panel panel-default panel-shadow"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">
					Acompte: 
						<?php
							if($donnee_inter['acompte'] == 0){echo "NON";}
							if($donnee_inter['acompte'] == 1){echo "OUI";}
						?>
					</div>
					
					<div class="panel-options">
						<a class="bg" data-target="#sample-modal-dialog-3" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
						<a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
						<a data-rel="reload" href="#"><i class="entypo-arrows-ccw"></i></a>
						<a data-rel="close" href="#"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
						Montant perçu:
							<?php
								if($donnee_inter['montant_acompte'] == true){echo $donnee_inter['montant_acompte'];}else{echo "0,00";}
							?> €
				</div>
				
			</div>
		
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		
			<div data-collapsed="0" class="panel panel-default panel-shadow"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Suivi</div>
					
					<div class="panel-options">
						<a class="bg" data-target="#sample-modal-dialog-3" data-toggle="modal" href="#sample-modal"><i class="entypo-cog"></i></a>
						<a data-rel="collapse" href="#"><i class="entypo-down-open"></i></a>
						<a data-rel="reload" href="#"><i class="entypo-arrows-ccw"></i></a>
						<a data-rel="close" href="#"><i class="entypo-cancel"></i></a>
					</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
					<div class="scrollable" data-height="150" data-autohide="0">
					<?php
						$sql_suivi = mysql_query("SELECT * FROM suivi_intervention WHERE idintervention = $idintervention");
						while($donne_suivi = mysql_fetch_array($sql_suivi))
							{
					?>
						<li>Le <?php echo $donne_suivi['date_suivi']; ?> à <?php echo $donne_suivi['heure_suivi']; ?>: <font color=blue><?php echo $donne_suivi['libelle']; ?></font></li>
					<?php } ?>	
					</div>		
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
							<li><a href="#profile-2" data-toggle="tab"><i class="entypo-print">Impression</i></a></li>
							<li><a href="#profile-3" data-toggle="tab"><i class="entypo-doc">Courrier</i></a></li>
							<li><a href="#profile-4" data-toggle="tab"><i class="entypo-mail">E-Mail</i></a></li>
						</ul>
					</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body">
				
				<div class="tab-content">
					<div id="profile-1" class="tab-pane active">
						<center>
							<a href="supp.inter.php?idintervention=<?php echo $idintervention; ?>"><button class="btn btn-red btn-icon btn-lg" type="button">Supprimer l'intervention<i class="entypo-cancel"></i></button></a>
							<a href="insert_task.inter.php?idintervention=<?php echo $idintervention; ?>"><button class="btn btn-black btn-icon btn-lg" type="button">Ajouter une tache<i class="fa fa-tasks"></i></button></a>
							<a href="close.inter.php?idintervention=<?php echo $idintervention; ?>"><button class="btn btn-green btn-icon btn-lg" type="button">Cloturer l'intervention<i class="entypo-check"></i></button></a>
						</center>
					</div>
					
					<div id="profile-2" class="tab-pane">
						<center>
							<a href="<?php echo $rootsite; ?>/pdf/fiche_entre.php?idintervention=<?php echo $idintervention; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Bon d'entrée<i class="entypo-download"></i></button></a><br><br>
							<a href="<?php echo $rootsite; ?>/pdf/point_detaille.php?idintervention=<?php echo $idintervention; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Point détaillé<i class="entypo-download"></i></button></a><br><br>
							<?php
								if($donnee_inter['etat_intervention'] >= 3){
							?>
							<a href="print/bon_livraison.php?idintervention=<?php echo $idintervention; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Bon de livraison<i class="entypo-download"></i></button></a><br><br>
							<a href="print/facture.php?idintervention=<?php echo $idintervention; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Facture<i class="entypo-download"></i></button></a><br><br>
							<?php } ?>
					</div>
					<div id="profile-3" class="tab-pane">
						<center>
							<a href="<?php echo $rootsite; ?>/pdf/bienvenue.php?idclient=<?php echo $donnee_inter['idclient']; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Lettre de Bienvenue<i class="entypo-mail"></i></button></a><br><br>
							<a href="<?php echo $rootsite; ?>/pdf/justificatif.php?idclient=<?php echo $donnee_inter['idclient']; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Demande de Justificatif<i class="entypo-mail"></i></button></a><br><br>
						</center>
					</div>
					<div id="profile-4" class="tab-pane">
						<center>
							<a href="<?php echo $rootsite; ?>/email/bienvenue.php?idclient=<?php echo $donnee_inter['idclient']; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">E mail de Bienvenue<i class="entypo-mail"></i></button></a><br><br>
							<a href="<?php echo $rootsite; ?>/email/disposition.php?idclient=<?php echo $donnee_inter['idclient']; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Mise à disposition du matériel<i class="entypo-mail"></i></button></a><br><br>
							<a href="<?php echo $rootsite; ?>/email/justificatif.php?idclient=<?php echo $donnee_inter['idclient']; ?>"><button class="btn btn-default btn-icon btn-lg" type="button">Demande de Justificatif<i class="entypo-mail"></i></button></a><br><br>
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