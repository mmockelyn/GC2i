<?php
session_start();
if (!isset($_SESSION['login'])) {
header ('Location: http://inter.lsiinformatique.fr/login.php');
exit();
}
include ('config.php');
$result = mysql_query("SELECT id,login,email,images,nom,prenom FROM membre WHERE login = '".$_SESSION['login']. "'") or die(mysql_error());
$donnees_login = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>GC2i | Gestion Intervention</title>

	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/css/font-icons/entypo/css/animation.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
		<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/css/neon-core.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/css/neon-theme.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/css/neon-forms.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/css/neon.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/css/custom.css">
	<link rel="stylesheet" href="<?php echo $rootsite; ?>assets/css/table.css">

	<script src="<?php echo $rootsite; ?>assets/js/jquery-1.10.2.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
</head>
<body class="page-body  page-fade">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->	
	
	<div class="sidebar-menu">
		
			
		<header class="logo-env">
			
			<!-- logo -->
			<div class="logo">
				<a href="index.php">
					<img src="<?php echo $rootsite; ?>assets/images/logo.png" alt="" />
				</a>
			</div>
			
						<!-- logo collapse icon -->
			
									
			
			<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
			<div class="sidebar-mobile-menu visible-xs">
				<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
					<i class="entypo-menu"></i>
				</a>
			</div>
			
		</header>
				