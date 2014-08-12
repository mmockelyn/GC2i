<?php
include ('../inc/config.php');
$idclient = $_GET['idclient'];
$sql_client = mysql_query("SELECT * FROM client WHERE idclient = $idclient");
$donnee_client = mysql_fetch_array($sql_client);
$nom = $donnee_client['nom'];

$mail = $donnee_client['mail']; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
    $passage_ligne = "\r\n";
}
else
{
    $passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
$message_html = "<html><head></head><body>
Madame, Monsieur,<br><br>
Nous tenons à vous informez que dans le cadre du lancement d'un nouveau logiciel d'intervention, vous avez la possibilité d'accedez
au portail client:<br><br><br>
Adresse:<br>
https://client.lsiinformatique.Fr<br><br>
Voici vos identifiants:<br>
Utilisateur: $nom <br>
Mot de Passe: $nom<br><br><br><br>
Pour le moment vous ne pouvez pas modifier votre mot de passe mais nous travaillons actuellement sur ce point.<br><br>
Nous ne manqueront pas de vous tenir informé quand la possibilité de changer votre mot de passe ce faira.<br><br>
Nous vous prions de croire, Madame, Monsieur, au dévouement de toute notre équipe.<br><br>

Le Responsable


</body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Votre espace client - Bienvenue - GC2i";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"EASYTECH SAV\"<contact@lsiinformatique.fr>".$passage_ligne;
$header.= "Reply-to: \"WeaponsB\" <contact@lsiinformatique.fr>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);

print("Email envoyé");
//==========
?>
