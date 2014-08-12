<div class="row">
	
	<!-- Profile Info and Notifications -->
	<div class="col-md-6 col-sm-8 clearfix">
		
		<ul class="user-info pull-left pull-none-xsm">
		
			<!-- Profile Info -->
			<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<img src="<?php echo $rootsite; ?>assets/images/avatar/<?php echo $donnees_login['images']; ?>.jpg" alt="" class="img-circle" />
					<?php echo $donnees_login['nom']; ?> <?php echo $donnees_login['prenom']; ?>
				</a>
			</li>
		
		</ul>

	
	</div>
	
	
	<!-- Raw Links -->
	<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
		<ul class="list-inline links-list pull-right">
			
			<li class="sep"></li>
			
			<li>
				Version: <?php echo $version; ?>
			</li>
			
			<li class="sep"></li>
			
			<li>
				<a href="<?php echo $rootsite; ?>logout.php">
					Log Out <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
		
	</div>
	
</div>