<?php
include ('../inc/config.php');
$idintervention = $_GET['idintervention'];
$sql_inter = mysql_query("SELECT * FROM intervention, client WHERE intervention.idclient = client.idclient AND idintervention = $idintervention");
$donnee_inter = mysql_fetch_array($sql_inter); 
$nom = $donnee_inter['nom'];
$categorie = $donnee_inter['categorie_materiel'];
$modele = $donnee_inter['modele_materiel'];
$marque = $donnee_inter['marque_materiel'];
$serie = $donnee_inter['num_serie'];


$mail = $donnee_inter['mail']; // Déclaration de l'adresse de destination.
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

<table>
	<tr>
		<td><b>N° Intervention:</b></td>
		<td>INT000$idintervention</td>
	</tr>
	<tr>
		<td><b>Catégorie:</b></td>
		<td>$categorie</td>
	</tr>
	<tr>
		<td><b>Marque:</b></td>
		<td>$marque</td>
	</tr>
	<tr>
		<td><b>Modèle:</b></td>
		<td>$modele</td>
	</tr>
	<tr>
		<td><b>Numéro de Série:</b></td>
		<td>$serie</td>
	</tr>
</table>

<br><br><br>
Madame, Monsieur,<br><br>
Afin de pouvoir bénéficier de la garantie, nous vous remercions de bien vouloir nous faire parvenir,<br>
dans les meilleurs délais, la facture d'achat du produit référencé ci-dessus.<br><br>

Nous vous prions de croire, Madame, Monsieur, au dévouement de toute notre équipe.<br><br>

Le Responsable.


</body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Votre Intervention N° INT000$idintervention - Demande de justificatif";
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

print("L'email &agrave; bien &eacute;t&eacute; envoy&eacute;");
//==========
?>
