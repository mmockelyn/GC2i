<?php
include ('../../../inc/header.php');
include ('../../../inc/sidebar.php');
date_default_timezone_set('EUROPE/PARIS');
$date = date('d/m/Y');
?>	
	</div>	
	<div class="main-content">
		
<?php include ('../../../inc/headerbar.php'); ?>

<hr />
			<ol class="breadcrumb bc-3">
						<li>
				<a href="index.html"><i class="entypo-home"></i>Accueil</a>
			</li>
				<li class="active">
			
							<strong>Mobile</strong>
					</li>
					</ol>
			



<h3>Liste des Interventions Mobile</h3>
				<a href="nouv.inter.php">
					<button class="btn btn-green btn-icon icon-left" type="button">
						Nouvelle Intervention
						<i class="entypo-plus"></i>
					</button>
				</a>
					<br />
<table class="table table-bordered datatable" id="table-1">

	<thead>
		<tr>
			<th>ID</th>
			<th>Identité Client</th>
			<th>Date</th>
			<th>Materiel</th>
			<th>Etat</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query_intervention = mysql_query("SELECT * FROM mobile, client WHERE mobile.idclient = client.idclient");
			while($donnee_intervention = mysql_fetch_array($query_intervention))
				{
		?>
		<?php 
				if($donnee_intervention['etat_intervention'] == 1){echo "<div class=blocred>";}
				if($donnee_intervention['etat_intervention'] == 2){echo "<div class=blocyellow>";}
				if($donnee_intervention['etat_intervention'] == 3){echo "<div class=blocyellow>";}
				if($donnee_intervention['etat_intervention'] == 4){echo "<div class=blocgreen>";}
				if($donnee_intervention['etat_intervention'] == 5){echo "<div class=blocyellow>";}
				if($donnee_intervention['etat_intervention'] == 6){echo "<div class=blocyellow>";}
				if($donnee_intervention['etat_intervention'] == 7){echo "<div class=blocgreen>";}
				if($donnee_intervention['etat_intervention'] == 8){echo "<div class=blocgreen>";}
			?>
		<tr>
			<td><?php echo $donnee_intervention['idinterventionmobile']; ?></td>
			<td>
				<strong><?php echo $donnee_intervention['civilite']; ?> <?php echo $donnee_intervention['nom']; ?> <?php echo $donnee_intervention['prenom']; ?></strong><br>
				<?php echo $donnee_intervention['adresse1']; ?><br>
				<?php echo $donnee_intervention['cp']; ?> <?php echo $donnee_intervention['ville']; ?><br>
				Tel: <?php echo $donnee_intervention['tel']; ?><br>
				Port: <?php echo $donnee_intervention['port']; ?>
			</td>
			<td><?php echo $donnee_intervention['date']; ?></td>
			<td>
				Matériel:<?php echo $donnee_intervention['materiel'];?><br>
				Marque: <?php echo $donnee_intervention['marque']; ?><br>
				Serie: <?php echo $donnee_intervention['serie']; ?>
			</td>
			<?php 
				if($donnee_intervention['etat_intervention'] == 1){echo "<td class=blocred>";}
				if($donnee_intervention['etat_intervention'] == 2){echo "<td class=blocyellow>";}
				if($donnee_intervention['etat_intervention'] == 3){echo "<td class=blocyellow>";}
				if($donnee_intervention['etat_intervention'] == 4){echo "<td class=blocgreen>";}
				if($donnee_intervention['etat_intervention'] == 5){echo "<td class=blocyellow>";}
				if($donnee_intervention['etat_intervention'] == 6){echo "<td class=blocyellow>";}
				if($donnee_intervention['etat_intervention'] == 7){echo "<td class=blocgreen>";}
				if($donnee_intervention['etat_intervention'] == 8){echo "<td class=blocgreen>";}
			?>

				<?php
					switch ($donnee_intervention['etat_intervention']) {
						case '1':
							echo "<div class=blocred>Pris en charge par un technicien</div>";
							break;

						case '2':
							echo "<div class=blocyellow>Problème Matériel: Pièce en attente de commande</div>";
							break;

						case '3':
							echo "<div class=blocyellow>Probleme Matériel: Problème en cours de traitement</div>";
							break;

						case '4':
							echo "<div class=blocgreen>Probleme Matériel: Résolue, en attente du client</div>";
							break;

						case '5':
							echo "<div class=blocyellow>Probleme Logiciel: en attente de plus d'information</div>";
							break;

						case '6':
							echo "<div class=blocyellow>Probleme Logiciel: en cours de Traitement</div>";
							break;

						case '7':
							echo "<div class=blocgreen>Probleme Logiciel: Résolue, en attente du Client</div>";
							break;

						case '8':
							echo "<div class=blocgreen>Intervention Terminé</div>";
							break;
						
						default:
							echo "<div class=>no information</div>";	
							break;
					}
				?>
			</td>
			<td>
				<a href="modif.inter.php?idintervention=<?php echo $donnee_intervention['idinterventionmobile']; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Editer
				</a>
				
				<a href="supp.inter.php?idintervention=<?php echo $donnee_intervention['idinterventionmobile']; ?>" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Supprimé
				</a>
				
				<a href="<?php echo $rootsite; ?>/pdf/fiche_mobile.php?idintervention=<?php echo $donnee_intervention['idinterventionmobile']; ?>" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					Fiche Intervention
				</a>
			</td>
		</tr>
		<?php } ?>
		</div>
		
		
	</tbody>
</table>
<script type="text/javascript">
jQuery(window).load(function()
{
	$("#table-2").dataTable({
		"sPaginationType": "bootstrap",
		"sDom": "t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
		"bStateSave": false,
		"iDisplayLength": 8,
		"aoColumns": [
			{ "bSortable": false },
			null,
			null,
			null,
			null
		]
	});
	
	$(".dataTables_wrapper select").select2({
		minimumResultsForSearch: -1
	});
	
	// Highlighted rows
	$("#table-2 tbody input[type=checkbox]").each(function(i, el)
	{
		var $this = $(el),
			$p = $this.closest('tr');
		
		$(el).on('change', function()
		{
			var is_checked = $this.is(':checked');
			
			$p[is_checked ? 'addClass' : 'removeClass']('highlight');
		});
	});
	
	// Replace Checboxes
	$(".pagination a").click(function(ev)
	{
		replaceCheckboxes();
	});
});
	
// Sample Function to add new row
var giCount = 1;

function fnClickAddRow() 
{
	$('#table-2').dataTable().fnAddData(['<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount+".2", giCount+".3", giCount+".4", giCount+".5" ]);
	
	replaceCheckboxes(); // because there is checkbox, replace it
	
	giCount++;
}
</script>
<script type="text/javascript">
var responsiveHelper;
var breakpointDefinition = {
    tablet: 1024,
    phone : 480
};
var tableContainer;

	jQuery(document).ready(function($)
	{
		tableContainer = $("#table-1");
		
		tableContainer.dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"bStateSave": true,
			

		    // Responsive Settings
		    bAutoWidth     : false,
		    fnPreDrawCallback: function () {
		        // Initialize the responsive datatables helper once.
		        if (!responsiveHelper) {
		            responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
		        }
		    },
		    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
		        responsiveHelper.createExpandIcon(nRow);
		    },
		    fnDrawCallback : function (oSettings) {
		        responsiveHelper.respond();
		    }
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
</script>



<br />
<br />


<br /><!-- Footer -->
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



	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/datatables/responsive/css/datatables.responsive.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/select2/select2.css">

	<!-- Bottom Scripts -->
	<script src="<?php echo $rootsite; ?>assets/js/gsap/main-gsap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/bootstrap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/joinable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/resizeable.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-api.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/datatables/TableTools.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/dataTables.bootstrap.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/datatables/jquery.dataTables.columnFilter.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/datatables/lodash.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/datatables/responsive/js/datatables.responsive.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/select2/select2.min.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-chat.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-custom.js"></script>
	<script src="<?php echo $rootsite; ?>assets/js/neon-demo.js"></script>

</body>
</html>