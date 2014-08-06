    <?php
    /* il faut demarrer la session*/
    session_start();
     
    if (empty($_SESSION['id'])) //les membres connectes ne peuvent pas s'inscrire
    {
    /* il faut que toutes les variables du formulaire existent*/
    if(isset($_POST['nom']) && isset($_POST['mdp']) && isset($_POST['email']))
    {
    /*il faut que tous les champs soient renseignes*/
    if($_POST['nom']!="" && $_POST['mdp']!="" && $_POST['email']!="")
    {
    /*connexion a la BDD*/
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=inter', 'root', '');
    }
    catch (Exception $e)
    {
    die('Erreur : ' . $e->getMessage());
    }
     
    /* on teste l'adresse email, si c'est bon, on continue, sinon, on affiche un message d'erreur*/
    if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}.[a-z]{2,4}$#", $_POST['email']))
    {
    /*on verifie si un membre ne possede pas deja le meme pseudo*/
    $req = $bdd->prepare('SELECT idmembre FROM utilisateur WHERE nom = :nom');
    $req->execute(array('nom'=> $_POST['nom']));
    $nb_resultats_recherche_membre=$req->fetch();
     
    if(!$nb_resultats_recherche_membre) /*si il n'y a pas de resultat*/
    {
    /*on crypte le mot de passe*/
    $mdp = sha1($_POST['mdp']);
     
    /*Si le pseudo est libre et l'email valide, alors on enregistre le nouveau membre*/
    $req=$bdd->prepare('INSERT INTO utilisateur(nom, pass, email, date_inscription) VALUES(:nom, :pass, :email, CURDATE())');
    $req->execute(array('nom'=>$_POST['nom'], 'pass'=>$mdp, 'email'=>$_POST['email']));
     
    echo "Merci de votre inscription";
    }
    else
    {
    echo "Un membre possede deja ce nom";
    }	
    }
    else
    {
    echo "Votre adresse email n'est pas valide";
    }
    }
    else
    {
    echo "Il faut remplir tous les champs";
    }
    }
    else
    {
    echo "Une erreur s'est produite";
    }
    }
    else
    {
    echo "Vous n'avez pas le droit d'acceder a cette page";
    }
    ?>