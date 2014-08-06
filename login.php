<?php include ('inc/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	
	<title>GC2i | Connexion</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/animation.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/neon.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.10.2.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
</head>
<?php
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {
	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {

		$base = mysql_connect ('localhost', 'root', '1992maxime');
		mysql_select_db ('inter', $base);

		// on teste si une entrée de la base contient ce couple login / pass
		$sql = 'SELECT count(*) FROM membre WHERE login="'.mysql_escape_string($_POST['login']).'"  AND pass_md5="'.mysql_escape_string(md5($_POST['pass'])).'"';
		$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
		$data = mysql_fetch_array($req);


		mysql_free_result($req);
		mysql_close();

		// si on obtient une réponse, alors l'utilisateur est un membre
		if ($data[0] == 1) {
			session_start();
			$_SESSION['login'] = $_POST['login'];

			header('Location: index.php');
			exit();
		}
		// si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
		elseif ($data[0] == 0) {
			$erreur = '<div class="col-md-12">
					<div class="alert alert-danger"><strong>Erreur!</strong> Compte non reconnue.</div>
				</div>';
		}
		// sinon, alors la, il y a un gros problème :)
		else {
			$erreur = '<div class="col-md-6">
					<div class="alert alert-danger"><strong>Erreur!</strong> Problème dans la base de donnée: Plusieurs membres enregistrés sous ce pseudo.</div>
				</div>';
		}
	}
	else {
	$erreur = '<div class="col-md-6">
			<div class="alert alert-danger"><strong>Erreur!</strong> Au moins un des champs est vide</div>
		</div>';
	}
}
?>
<body class="page-body login-page login-form-fall">

<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="#" class="logo">
				<strong><h2><font color=white>GCO</font></h2></strong>
			</a>
			
			<p class="description">Bienvenue utilisateur, veuillez vous connectez</p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>Connexion en cour...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form method="post" role="form" action="login.php">
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
						
						<input type="text" class="form-control" name="login" value="<?php if (isset($_POST['login'])) echo htmlentities(trim($_POST['login'])); ?>" id="login" autocomplete="off" />
					</div>
					
				</div>
				
				<div class="form-group">
					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						
						<input type="password" class="form-control" name="pass" value="<?php if (isset($_POST['pass'])) echo htmlentities(trim($_POST['pass'])); ?>" id="pass"  autocomplete="off" />
					</div>
				
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login" name="connexion" value="Connexion">
						Connexion
						<i class="entypo-login"></i>
					</button>
				</div>
				
			</form>
			
			
			<div class="login-bottom-links">
				
				<a href="#" class="link">Mot de passe Perdu?</a>
				
				<br />
				
				<a href="#">Condition d'utilisation</a>  - <a href="#">Mention légale</a>
				<?php
				if (isset($erreur)) echo '<br /><br />',$erreur;
				?>
			</div>
			
		</div>
		
	</div>
	
</div>


	<!-- Bottom Scripts -->
	<script src="assets/js/gsap/main-gsap.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/neon-login.js"></script>
	<script src="assets/js/neon-custom.js"></script>

</body>
</html>