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
			
							<strong>Nouvelle intervention</strong>
					</li>
					</ol>
<br />


<br />
<br />
	


<h4>Nouvelle intervention</h4>
<hr />


<form class="form-wizard validate" action="valid.nouv.inter.php" method="post" id="rootwizard-2" novalidate="novalidate">
	
	<div class="steps-progress" style="margin-left: 10%; margin-right: 10%;">
		<div class="progress-indicator" style="width: 0px;"></div>
	</div>
	
	<ul>
		<li class="active">
			<a data-toggle="tab" href="#tab2-1"><span>1</span>Selection du client</a>
		</li>
		<li>
			<a data-toggle="tab" href="#tab2-2"><span>2</span>Identification</a>
		</li>
		<li>
			<a data-toggle="tab" href="#tab2-3"><span>3</span>Matériel</a>
		</li>
		<li>
			<a data-toggle="tab" href="#tab2-4"><span>4</span>Intervention</a>
		</li>
	</ul>
	
	<div class="tab-content">
		<div id="tab2-1" class="tab-pane active">
			
			<div class="row">
				
				<div class="col-md-12">
					<div class="form-group">
						<label class="col-sm-3 control-label">Séléction du Client</label>
						<?php
							$sql_client = mysql_query("SELECT * FROM client");
						?>
						<div class="col-sm-5">
							<select class="form-control" name="idclient">
							<?php
								while($donnee_client = mysql_fetch_array($sql_client))
								{
							?>
								<option value="<?php echo $donnee_client['idclient']; ?>"><?php echo $donnee_client['nom']; ?> <?php echo $donnee_client['prenom']; ?></option>
							<?php } ?>
							</select>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
		
		<div id="tab2-2" class="tab-pane">
			
			<div class="row">
				
				<div class="col-md-4">
					<div class="form-group">
						<label class="col-sm-3 control-label">Séléction du Technicien</label>
						<?php
							$sql_technicien = mysql_query("SELECT * FROM technicien");
						?>
						<div class="col-sm-5">
							<select class="form-control" name="idtechnicien">
							<?php
								while($donnee_technicien = mysql_fetch_array($sql_technicien))
								{
							?>
								<option value="<?php echo $donnee_technicien['idtechnicien']; ?>"><?php echo $donnee_technicien['prenom_technicien']; ?></option>
							<?php } ?>
							</select>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label class="col-sm-3 control-label">Date et heure</label>
				
							<div class="col-sm-5">
								<input type="text" data-mask="datetime" class="form-control" value="<?php echo $date; ?>" name="date">
							</div>
					</div>
				</div>
				
			</div>
			
		</div>
		
		<div id="tab2-3" class="tab-pane">
			
			<strong>Le Matériel</strong>
			<br>
			<br>
			<div class="row">
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Type de Téléphone</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" placeholder="Type de Téléphone" name="materiel">
						</div>
					</div>
			</div>
			<div class="row">
					<br>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Marque</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" placeholder="Marque du Téléphone" name="marque">
						</div>
					</div>
					<br>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Série</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" placeholder="Serie de la Marque" name="serie">
						</div>
					</div>
					<br>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Numéro de Série</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" placeholder="N° de Série du Matériel en Maintenance" name="num_serie">
						</div>
					</div>
					<br>
					<div class="form-group">
						<label for="field-1" class="col-sm-3 control-label">Numéro IMEI</label>
						
						<div class="col-sm-5">
							<input type="text" class="form-control" id="field-1" placeholder="N° IMEI du Matériel en Maintenance" name="num_imei">
						</div>
					</div>
			</div>
			<div class="row">
					<br>
					<div class="form-group">
						<label for="field-ta" class="col-sm-3 control-label">Accessoire</label>
						
						<div class="col-sm-5">
							<textarea class="form-control" id="field-ta" placeholder="Liste des Accessoires et Logiciel fournis avec le Matériel" name="accessoire"></textarea>
						</div>
					</div>
			</div>
			<div class="row">
					<br>
					<div class="form-group">
						<label class="col-sm-3 control-label">Garantie</label>
						
						<div class="col-sm-5">
							<select class="form-control" name="garantie">
								<option value="0">NON</option>
								<option value="1">OUI</option>
							</select>
						</div>
					</div>
			</div>
			<div class="row">
					<br>
					<div class="form-group">
						<label class="col-sm-3 control-label">Date D'achat</label>
						
						<div class="col-sm-5">
							<input type="text" data-mask="date" class="form-control" name="date_achat">
						</div>
					</div>
			</div>
			
		</div>
		
		<div id="tab2-4" class="tab-pane">
			<div class="row">
				<div class="form-group">
					<label class="col-sm-3 control-label" for="field-ta">Description du Problème</label>
							
					<div class="col-sm-9">
						<textarea placeholder="Description du Problème" id="field-ta" class="form-control" name="desc_probleme"></textarea>
					</div>
				</div>
			</div>
			<br>
			<div class="row">
					<br>
					<div class="form-group">
						<label class="col-sm-3 control-label">Date de Maintenance Prévue</label>
						
						<div class="col-sm-5">
							<input type="text" data-mask="date" class="form-control" name="date_maintenance_prevu">
						</div>
					</div>
			</div>
			<br>
			<div class="row">
					<br>
					<div class="form-group">
						<label class="col-sm-3 control-label">Le Téléphone demarre t-il ?</label>
						<div class="col-sm-5">
							<select class="form-control" name="tel_demarre">
								<option value="0">Non</option>
								<option value="1">Oui</option>
							</select>
						</div>
					</div>
					<br>
					<div class="form-group">
						<label class="col-sm-3 control-label">Code de Déverrouillage:</label>
						
						<div class="col-sm-5">
							<input type="text" id="field-1" class="form-control" name="code_util">
						</div>
					</div>
					<br>
					<div class="form-group">
						<label class="col-sm-3 control-label">Opérateur Téléphonique</label>
						
						<div class="col-sm-5">
							<input type="text" id="field-1" class="form-control" name="operateur">
						</div>
					</div>
					<br>
					<div class="form-group">
						<label class="col-sm-3 control-label">Le client a-t-il fait une sauvegarde de donnée ?</label>
						<div class="col-sm-5">
							<select class="form-control" name="sauvegarde">
								<option value="0">Non</option>
								<option value="1">Oui</option>
							</select>
						</div>
					</div>
					<br>
					<div class="form-group">
						<label class="col-sm-3 control-label">Accepte t-il une restauration eventuel ?</label>
						<div class="col-sm-5">
							<select class="form-control" name="restauration">
								<option value="0">Non</option>
								<option value="1">Oui</option>
							</select>
						</div>
					</div>

			</div>
			<br>
			<div class="row">
				<center>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Valider</button>
				</div>
				</center>
			</div>
		</div>
		
		<ul class="pager wizard">
			<li class="previous disabled">
				<a href="#"><i class="entypo-left-open"></i> Previous</a>
			</li>
			
			<li class="next">
				<a href="#">Next <i class="entypo-right-open"></i></a>
			</li>
		</ul>
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
	<script src="<?php echo $rootsite; ?>assets/js/select2/select2.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-tagsinput.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/typeahead.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.inputmask.bundle.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-timepicker.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/daterangepicker/moment.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.multi-select.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/icheck/icheck.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-chat.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-custom.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-demo.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.bootstrap.wizard.min.js"></script>
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/select2/select2.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/selectboxit/jquery.selectBoxIt.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/daterangepicker/daterangepicker-bs3.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/icheck/skins/minimal/_all.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/icheck/skins/square/_all.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/icheck/skins/flat/_all.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/icheck/skins/futurico/futurico.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/icheck/skins/polaris/polaris.css">

</body>
</html>