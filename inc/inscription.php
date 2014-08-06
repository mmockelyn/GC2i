
        <?php
    /* il faut demarrer la session*/
    session_start();
     
    if (empty($_SESSION['id'])) //les membres connectes ne peuvent pas s'inscrire
    {
    ?>
    <form action="inscriptionok.php" method="post">
    <fieldset>
    <legend>Vos identifiants</legend>
    <label>Votre Nom </label><input type="text" size="25" name="nom" /><br />
    <label>Votre mot de passe </label><input type="password" size="25" name="mdp" /><br />
    <label>Votre email </label><input type="text" size="25" name="email" /><br />
    <input type="submit" value="envoyer"/>
    </fieldset>
    </form>
    <?php
    }
    else
    {
    echo "Vous n'avez pas le droit d'acceder a cette page";
    }
    ?>