<?php
include ('../inc/config.php');
$idintervention = $_GET['idintervention'];
$sql_inter = mysql_query("SELECT * FROM intervention, client WHERE intervention.idclient = client.idclient AND idintervention = $idintervention");
$donnee_inter = mysql_fetch_array($sql_inter); 
?>
<?php
date_default_timezone_set("UTC");
/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */

    // get the HTML
    ob_start();
?>
<style type="text/Css">
<!--
.test1
{
    border: solid 1px #FF0000;
    background: #FFFFFF;
    border-collapse: collapse;
}
-->
</style>
<link rel="stylesheet" type="text/css" href="styles_pdf.css">
<page id="page">
    <div id="header">
        <div class="left">
            <b>EASYTECH - SAV CENTER</b><br>
            8 Rue Octave Voyer<br>
            85100 Les Sables d'Olonne<br>
            Tel: 02.51.23.24.24<br>
            Siret: 753 865 229 00011<br>
            Nos horaire d'ouverture:
            <h5>
            Lundi: de 12H à 19H<br>
            Du Mardi au Samedi: de 10H à 12H30 et de 14H30 à 18H30.
            </h5>
        </div>
        <div class="right">
            <img src="<?php echo $rootsite; ?>/pdf/inter/impression/logo-easytech.png" />
        </div>
    </div>
    <br><br><br>
    <u><b>Objet: Nouveau portail client</b></u>
    <br><br><br>
    <div id="corps">
        <div class="box_client">
            Code Client: <b>CLT000<?php echo $donnee_inter['idclient']; ?></b><br>
            <?php echo $donnee_inter['nom']; ?> <?php echo $donnee_inter['prenom']; ?><br><br>
            <?php echo $donnee_inter['adresse1']; ?><br>
            <?php echo $donnee_inter['adresse2']; ?><br>
            <?php echo $donnee_inter['cp']; ?> <?php echo $donnee_inter['ville']; ?><br>
            Tel: <?php echo $donnee_inter['tel']; ?> | Port: <?php echo $donnee_inter['port']; ?>
        </div>
        <br /><br><br><br><br><br>
        <div class="corps_msg">
        Madame, Monsieur,
        <br><br><br>
        Nous tenons à vous informez que dans le cadre du lancement d'un nouveau logiciel d'intervention, vous avez la possibilité d'accedez <br>au portail client:<br>
        <br><br>
        Adresse: <u>https://client.lsiinformatique.Fr</u>
        <br><br>
        <u>Voici vos identifiants:</u>
        <br>
        <b>Utilisateur: </b><?php echo $donnee_inter['nom']; ?><br>
        <b>Mot de Passe:</b> <?php echo $donnee_inter['nom']; ?>
        <br>
        <br>
        Pour le moment vous ne pouvez pas modifier votre mot de passe mais nous travaillons actuellement sur ce point.
        <br>
        <br>
        Nous ne manqueront pas de vous tenir informé quand la possibilité de changer votre mot de passe ce faira.
        <br>
        <br>
        Nous vous prions de croire, Madame, Monsieur, au dévouement de toute notre équipe.
        <br>
        <br />
        <br>
        <br>
        <div class="responsable">Le Responsable</div>

        </div>
    </div>
</page>
<page_footer>
    Easytech - SAV CENTER | SARL au capital de 1000€ | RCS de la Roche Sur Yon 753 865 229 | TVA Intra: FR56 753 865 229
</page_footer>
<?php
    $content = ob_get_clean();

    // convert in PDF
    require_once(dirname(__FILE__).'/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
//      $html2pdf->setModeDebug();
        $html2pdf->setDefaultFont('Arial');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple01.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
