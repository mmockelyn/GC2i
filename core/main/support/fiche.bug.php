<?php
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y');
$idsupport = $_GET['idsupport'];



$sql_support = mysql_query("SELECT * FROM support_client WHERE idsupport = $idsupport");
$donnee_support = mysql_fetch_array($sql_support);
if($donnee_support['etat_support'] <= 2){
	mysql_query("UPDATE support_client SET etat_support = 2");
	}
$nom = $donnee_support['nom'];

?>	
	</div>	
	<div class="main-content">
		
<?php include ('../../../inc/headerbar.php'); ?>

<hr />
			<ol class="breadcrumb bc-3">
				<li><a href="index.html"><i class="entypo-home"></i>Accueil</a></li>
				<li><a href="<?php echo $rootsite; ?>/core/main/inter/index.php">Support Client</a></li>
				<li class="active"><strong>Message de support N° SUP000<?php echo $donnee_support['idsupport']; ?></strong></li>
			</ol>
			



<h3>Message support n° SUP000<?php echo $donnee_support['idsupport']; ?></h3>
	<div class="row">
		<div class="col-md-6">
		
			<div data-collapsed="0" class="panel panel-default panel-shadow"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Etat de la requete</div>
					
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
								switch($donnee_support['etat_support'])
									{
										case "1":
										print("<font color=red>Non Lu</font>");
										break;

										case "2":
										print("<font color=#FF6A00>Lu</font>");
										break;

										case "3":
										print("<font color=#FF6A00>En cours de traitement</font>");
										break;

										case "4":
										print("<font color=green>Traité</font>");
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
					<h1>
						<center>
							<?php echo $donnee_support['nom']; ?>
						</center>
					</h1>				
				</div>
				
			</div>
		
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
		
			<div data-collapsed="0" class="panel panel-default panel-shadow"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">Message</div>
					
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
						<?php echo $donnee_support['message']; ?>	
					</div>		
				</div>
			</div>
				<center>
					<a href="reponse.support.php?idsupport=<?php echo $idsupport; ?>">
						<button class="btn btn-green btn-icon btn-lg" type="button">
							Répondre au message
							<i class="entypo-direction"></i>
						</button>
					</a>
				</center>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		
			<div class="panel panel-primary"><!-- to apply shadow add class "panel-shadow" -->
				
				<!-- panel head -->
				<div class="panel-heading">
					<div class="panel-title">
						<h4>
							Réponse du support
						</h4>
					</div>
				</div>
				
				<!-- panel body -->
				<div class="panel-body no-padding">
					<ul class="comments-list">
						<?php
							$sql_reponse = mysql_query("SELECT * FROM reponse_support_client WHERE idsupport = $idsupport");
							while($donnee_reponse = mysql_fetch_array($sql_reponse))
							{
						?>
						<li>							
							<div class="comment-details">
								
								<div class="comment-head">
									<a href="#">Easytech</a> à répondue au support N°<a href="#"><?php echo $donnee_reponse['idsupport']; ?></a>
								</div>
								
								<p class="comment-text">
									<?php echo $donnee_reponse['reponse']; ?> 
								</p>
								
								<div class="comment-footer">
									
									<div class="comment-time">
										<?php echo $donnee_reponse['reponse_support']; ?> - <?php echo $donnee_reponse['heure_support']; ?>
									</div>
									
								</div>
								
							</div>
						</li>
						<?php } ?>
					</ul>		
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
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/selectboxit/jquery.selectBoxIt.css">
	<script src="<?php echo $rootsite; ?>assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
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