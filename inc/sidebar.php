		<ul id="main-menu" class="">
			<!-- add class "multiple-expanded" to allow multiple submenus to open -->
			<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
			<!-- Search Bar -->
			<li id="search">
				<form method="get" action="">
					<input type="text" name="q" class="search-input" placeholder="Search something..."/>
					<button type="submit">
						<i class="entypo-search"></i>
					</button>
				</form>
			</li>
			<li>
				<a href="<?php echo $rootsite; ?>index.php">
					<i class="entypo-gauge"></i>
					<span>Accueil</span>
				</a>
			</li>
			<li class="root-level has-sub">
				<a href="#">
					<i class="entypo-tools"></i>
					<span>Maintenance</span>
				</a>
				<ul>
					<li>
						<a href="<?php echo $rootsite; ?>core/main/client/">
							<i class="entypo-user"></i>
							<span>Client</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $rootsite; ?>core/main/inter/">
							<i class="entypo-flash"></i>
							<span>Intervention</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $rootsite; ?>core/main/mobile/">
							<i class="entypo-phone"></i>
							<span>Intervention Mobile</span>
						</a>
					</li>
					<li>
						<a href="<?php echo $rootsite; ?>core/main/cnt/">
							<i class="entypo-doc-text-inv"></i>
							<span>Contrat de Maintenance</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="<?php echo $rootsite; ?>/core/main/support">
					<i class="entypo-phone"></i>
					<span>Support client</span>
					<?php
						$sql_support_row = mysql_query("SELECT count('somme') FROM support_client WHERE etat_support <= 1");
						$result = mysql_fetch_row($sql_support_row);
					?>
					<span class="badge badge-secondary"><?php echo $result[0]; ?></span>
				</a>
			</li>
		</ul>