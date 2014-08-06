<?php
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y H:i');
?>		
	</div>	
	<div class="main-content">
		
<?php include ('../../../inc/headerbar.php'); ?>

<hr />
			<ol class="breadcrumb bc-3">
						<li>
				<a href="index.html"><i class="entypo-home"></i>Accueil</a>
			</li>
					<li>
			
							<a href="forms-main.html">Intervention Mobile</a>
					</li>
				<li class="active">
			
							<strong>Modifier Intervention</strong>
					</li>
					</ol>
<br />


<br />
<br />
<?php
$idintervention = $_GET['idintervention'];

$sql_inter = mysql_query("SELECT * FROM mobile WHERE idinterventionmobile =" .$idintervention);
$donnee_inter = mysql_fetch_array($sql_inter);
?>


<h4>Modifier Intervention</h4>
<hr />

				<form role="form" class="form-horizontal form-groups-bordered" method="post" action="valid.modif.inter.php">

					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">ID Intervention</label>
						
						<div class="col-sm-6">
							<input type="text" class="form-control" id="field-1" placeholder="Id Intervention" name="idintervention" value="<?php echo $donnee_inter['idinterventionmobile']; ?>">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label" for="field-ta">Description de la solution</label>
						
						<div class="col-sm-5">
							<textarea placeholder="Description de la solution au probleme" id="field-ta" class="form-control" name="desc_soluce"></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label">Etat de l'intervention</label>
						
						<div class="col-sm-5">
							<select class="form-control" name="etat_intervention">
								<option value="1">Pris en charge par un technicien</option>
								<option value="2">Problème Matériel: Pièce en attente de commande</option>
								<option value="3">Probleme Matériel: Problème en cours de traitement</option>
								<option value="4">Probleme Matériel: Résolue, en attente du client</option>
								<option value="5">Probleme Logiciel: en attente de plus d'information</option>
								<option value="6">Probleme Logiciel: en cours de Traitement</option>
								<option value="7">Probleme Logiciel: Résolue, en attente du Client</option>
								<option value="8">Intervention Terminé</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label">Date et heure</label>
				
							<div class="col-sm-5">
								<input type="text" data-mask="datetime" class="form-control" value="<?php echo $date; ?>" name="date">
							</div>
					</div>

					<div class="form-group">

						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" class="btn btn-green">Valider</button>
							<button type="reset" class="btn btn-red">Reset</button>
						</div>
					</div>

				</form>


<footer class="main">
	
		
	&copy; 2014 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
	
</footer>	</div>
	
	
<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
	<div class="chat-inner">
	
		
		<h2 class="chat-header">
			<a href="#" class="chat-close" data-animate="1"><i class="entypo-cancel"></i></a>
			
			<i class="entypo-users"></i>
			Chat
			<span class="badge badge-success is-hidden">0</span>
		</h2>
		
		
		<div class="chat-group" id="group-1">
			<strong>Favorites</strong>
			
			<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
			<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
		</div>
		
		
		<div class="chat-group" id="group-2">
			<strong>Work</strong>
			
			<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
			<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
			<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
		</div>
		
		
		<div class="chat-group" id="group-3">
			<strong>Social</strong>
			
			<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
			<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
			<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
		</div>
	
	</div>
	
	<!-- conversation template -->
	<div class="chat-conversation">
		
		<div class="conversation-header">
			<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
			
			<span class="user-status"></span>
			<span class="display-name"></span> 
			<small></small>
		</div>
		
		<ul class="conversation-body">	
		</ul>
		
		<div class="chat-textarea">
			<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
		</div>
		
	</div>
	
</div>


<!-- Chat Histories -->
<ul class="chat-history" id="sample_history">
	<li>
		<span class="user">Art Ramadani</span>
		<p>Are you here?</p>
		<span class="time">09:00</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>This message is pre-queued.</p>
		<span class="time">09:25</span>
	</li>
	
	<li class="opponent">
		<span class="user">Catherine J. Watkins</span>
		<p>Whohoo!</p>
		<span class="time">09:26</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Catherine J. Watkins</span>
		<p>Do you like it?</p>
		<span class="time">09:27</span>
	</li>
</ul>




<!-- Chat Histories -->
<ul class="chat-history" id="sample_history_2">
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>I am going out.</p>
		<span class="time">08:21</span>
	</li>
	
	<li class="opponent unread">
		<span class="user">Daniel A. Pena</span>
		<p>Call me when you see this message.</p>
		<span class="time">08:27</span>
	</li>
</ul>	
	</div>



	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/selectboxit/jquery.selectBoxIt.css">

	<!-- Bottom Scripts -->
	<script src="<?php echo $rootsite; ?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/joinable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/resizeable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-api.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.bootstrap.wizard.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.inputmask.bundle.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-switch.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.multi-select.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-chat.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-custom.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-demo.js"></script>

</body>
</html>