<?php
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y');
$idsupport = $_GET['idsupport'];
$sql_modif_lu = mysql_query("UPDATE support_client SET etat_support = 2");
$sql_support = mysql_query("SELECT * FROM support_client WHERE idsupport = $idsupport");
$donnee_support = mysql_fetch_array($sql_support);
$nom = $donnee_support['nom'];

?>	
	</div>	
	<div class="main-content">
		
<?php include ('../../../inc/headerbar.php'); ?>

<hr />
			<ol class="breadcrumb bc-3">
				<li><a href="index.html"><i class="entypo-home"></i>Accueil</a></li>
				<li><a href="<?php echo $rootsite; ?>/core/main/inter/index.php">Support Client</a></li>
				<li class="active"><strong>Réponse au message SUP000<?php echo $idsupport; ?></strong></li>
			</ol>
			




<style>
.ms-container .ms-list {
	width: 135px;
	height: 205px;
}

.post-save-changes {
	float: right;
}

@media screen and (max-width: 789px)
{
	.post-save-changes {
		float: none;
		margin-bottom: 20px;
	}
}
</style>

<form method="post" role="form" action="submit.support.php">
	
	<div class="row">
		<div class="col-sm-2 post-save-changes">
			<button type="submit" class="btn btn-green btn-lg btn-block btn-icon">
				Publish
				<i class="entypo-check"></i>
			</button>
		</div>

	</div>
	
	<br />
	<div class="form-group">
		<label for="field-1" class="col-sm-3 control-label">N° Support</label>
						
		<div class="col-sm-5">
			<input type="text" class="form-control" id="field-1" value="<?php echo $idsupport; ?>" name="idsupport">
		</div>
	</div>
	<br />
	<div class="form-group">
		<label for="field-1" class="col-sm-3 control-label">Nom</label>
						
		<div class="col-sm-5">
			<input type="text" class="form-control" id="field-1" value="<?php echo $donnee_support['nom']; ?>" name="nom">
		</div>
	</div>
	<br />
	<div class="row">
		<div class="col-sm-12">
			<textarea class="form-control wysihtml5" rows="18" data-stylesheet-url="assets/css/wysihtml5-color.css" name="reponse" id="post_content"></textarea>
		</div>
	</div>
	
	<br />
	
</form><!-- Footer -->
<footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
	
</footer>	</div>
	



	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/wysihtml5/bootstrap-wysihtml5.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/selectboxit/jquery.selectBoxIt.css">

	<!-- Bottom Scripts -->
	<script src="<?php echo $rootsite; ?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/joinable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/resizeable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-api.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/wysihtml5/wysihtml5-0.4.0pre.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/wysihtml5/bootstrap-wysihtml5.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.multi-select.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/fileinput.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-tagsinput.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-chat.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-custom.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-demo.js"></script>

</body>
</html>