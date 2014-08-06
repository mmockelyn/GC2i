<?php
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y');
$heure = date('H:i');
$idintervention = $_GET['idintervention'];
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
			<a href="forms-main.html">intervention</a>
		</li>
		<li class="active">
			<strong>Cloturer intervention</strong>
		</li>
	</ol>
<br />


<br />
<br />
	


<h4>Cloturer intervention</h4>
<hr />


<form role="form" class="form-horizontal form-groups-bordered" method="post" action="valid.close.inter.php">

	<div class="form-group">
		<label class="col-sm-3 control-label" for="field-1">Id Intervention</label>
									
		<div class="col-sm-5">
			<input type="text" value="<?php echo $idintervention; ?>" id="field-1" class="form-control" name="idintervention">
		</div>
	</div>

	<table class="table table-bordered responsive">
			<thead>
				<tr>
					<th>Désignation</th>
					<th>Quantité</th>
					<th>Prix Unitaire HT</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="Désignation" id="field-1" class="form-control" name="designation1">
							</div>
						</div>
					</td>
					<td width="7%">
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="qte" id="field-1" class="form-control" name="qte1">
							</div>
						</div>
					</td>
					<td>
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="pvht" id="field-1" class="form-control" name="pvht1">
							</div>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="Désignation" id="field-1" class="form-control" name="designation2">
							</div>
						</div>
					</td>
					<td width="7%">
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="qte" id="field-1" class="form-control" name="qte2">
							</div>
						</div>
					</td>
					<td>
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="pvht" id="field-1" class="form-control" name="pvht2">
							</div>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="Désignation" id="field-1" class="form-control" name="designation3">
							</div>
						</div>
					</td>
					<td width="7%">
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="qte" id="field-1" class="form-control" name="qte3">
							</div>
						</div>
					</td>
					<td>
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="pvht" id="field-1" class="form-control" name="pvht3">
							</div>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="Désignation" id="field-1" class="form-control" name="designation4">
							</div>
						</div>
					</td>
					<td width="7%">
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="qte" id="field-1" class="form-control" name="qte4">
							</div>
						</div>
					</td>
					<td>
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="pvht" id="field-1" class="form-control" name="pvht4">
							</div>
						</div>
					</td>
				</tr>

				<tr>
					<td>
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="Désignation" id="field-1" class="form-control" name="designation5">
							</div>
						</div>
					</td>
					<td width="7%">
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="qte" id="field-1" class="form-control" name="qte5">
							</div>
						</div>
					</td>
					<td>
						<div class="form-group">	
							<div class="col-sm-12">
								<input type="text" placeholder="pvht" id="field-1" class="form-control" name="pvht5">
							</div>
						</div>
					</td>
				</tr>
				
			</tbody>
		</table>

		<div class="form-group">
			<label class="col-sm-3 control-label" for="field-1">Remise</label>
								
			<div class="col-sm-5">
				<input type="text" placeholder="en euros" id="field-1" class="form-control" name="remise">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label">Mode de paiement</label>
								
			<div class="col-sm-5">
				<select class="form-control" name="mode_paiement">
					<option value="1">CB</option>
					<option value="2">Chèque</option>
					<option value="3">Espèce</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label">Etat de l'intervention</label>
								
			<div class="col-sm-5">
				<select class="form-control" name="etat_intervention">
					<option value="1">Non vu</option>
					<option value="2">En cours</option>
					<option value="3">Terminé - Réparer</option>
					<option value="4">Terminé - Non réparé</option>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label" for="field-ta">Information complementaire</label>
						
			<div class="col-sm-5">
				<textarea placeholder="Information complémentaire uniquement pour le bon de livraison" id="field-ta" class="form-control" name="info_complementaire_bdl"></textarea>
			</div>
		</div>
		<br><br><br>
		<center>
			<div class="form-group">
				<button class="btn btn-green" type="submit">Valider</button>
			</div>
		</center>

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