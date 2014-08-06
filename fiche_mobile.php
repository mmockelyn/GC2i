
<?php
include ('../inc/config.php');
$idintervention = $_GET['idintervention'];
$query_inter_info = "SELECT * FROM client, mobile, technicien
    WHERE mobile.idclient = client.idclient
    AND idinterventionmobile =".$idintervention;
$result = mysql_query($query_inter_info);
$donnee_inter_info = mysql_fetch_array($result);

$msg = "Votre Facture en ligne\r\nhttp://client.lsiinformatique.fr/";
?>
<link rel="stylesheet" type="text/css" href="styles.css">

<page id="inter_info">
    <div id="header">
        <div class="societe">
            <b>LSI INFORMATIQUE</b><br>
            35 Avenue de Bretagne<br>
            85100 Les Sables d'Olonne<br>
            Tel: 02 51 23 24 24
        </div>
        <div class="left">
            <h3><b>BON D'INTERVENTION N°<?php echo $donnee_inter_info['idintervention']; ?></b></h3><br>
            <br>
            <br>
            Date de fin prévu: <?php echo $donnee_inter_info['date_maintenance_prevue']; ?><br>
            Technicien Responsable: 
                <?php
                    if($donnee_inter_info['idtechnicien'] == 1){echo "Maxime";}
                    if($donnee_inter_info['idtechnicien'] == 2){echo "Alexis";}
                    if($donnee_inter_info['idtechnicien'] == 3){echo "Valentin";}
                ?>
            <br><br>

            <qrcode value="<?php echo $msg; ?>" style="width: 20mm;"></qrcode>
            <u><b>Vos Identifiants de connexion:</b></u><br>
            Votre Login: <?php echo $donnee_inter_info['nom']; ?><br>
            Votre Mot de Passe: Non afficher par sécurité
        </div>
        <div class="right">
            <h2><b><?php echo $donnee_inter_info['nom']; ?> <?php echo $donnee_inter_info['prenom']; ?></b></h2><br>
            <br>
            <?php echo $donnee_inter_info['adresse1']; ?><br>
            <br>
            <?php echo $donnee_inter_info['adresse2']; ?>
            <br>
            <br>
            <?php echo $donnee_inter_info['cp']; ?> <?php echo $donnee_inter_info['ville']; ?>
            <br>
            <br>
            Tel: <?php echo $donnee_inter_info['tel']; ?><br>
            Portable: <?php echo $donnee_inter_info['port']; ?><br>
            Mail: <?php echo $donnee_inter_info['mail']; ?>
        </div>
    </div>
    <div id="corps">
        <div class="prestation_realise">
            <div class="titre">Prestation à réaliser</div>
            <div class="box"><?php echo $donnee_inter_info['desc_probleme']; ?></div>
        </div>
        <div class="inter_materiel">
            <div class="titre">Intervention sur</div>
            <div class="box">
                <b>Matériel:</b> <?php echo $donnee_inter_info['materiel']; ?><br>
                <b>Marque:</b> <?php echo $donnee_inter_info['marque']; ?><br>
                <b>Serie:</b> <?php echo $donnee_inter_info['serie']; ?><br><br>
                <b>N° de Série:</b> <?php echo $donnee_inter_info['num_serie']; ?><br>
                <b>N° IMEI:</b> <?php echo $donnee_inter_info['num_imei']; ?>
            </div>
        </div>
        <div class="materiel_fournis">
            <div class="titre">Périphérique et associée</div>
            <div class="box">
                Accessoire:<br />
                <?php echo $donnee_inter_info['accessoire']; ?>
                <br>
            </div>
        </div>
        <div class="autre">
            <div class="titre">En savoir plus sur le téléphone</div>
            <div class="box">
                <b>Garantie:</b>
                <?php
                    if($donnee_inter_info['garantie'] == 0){echo "NON";}
                    if($donnee_inter_info['garantie'] == 1){echo "OUI";}
                ?><br>
                <b>Si garantie, date d'achat:</b> <?php echo $donnee_inter_info['date_achat']; ?><br>
                <b>Le Téléphone démarre t-il ?</b>
                <?php 
                    if($donnee_inter_info['tel_demarre'] == 0){echo "NON";}
                    if($donnee_inter_info['tel_demarre'] == 1){echo "OUI";}
                ?><br>
                <b>Code Sim:</b> <?php echo $donnee_inter_info['code_util']; ?><br>
                <b>Opérateur:</b> <?php echo $donnee_inter_info['operateur']; ?><br>
                <b>Le client a-t-il sauvegarder c'est données ?</b>
                <?php 
                    if($donnee_inter_info['sauvegarde'] == 0){echo "NON";}
                    if($donnee_inter_info['sauvegarde'] == 1){echo "OUI";}
                ?><br>
                <b>Le client accepte t-il une restauration eventuelle ?</b>
                <?php 
                    if($donnee_inter_info['restauration'] == 0){echo "NON";}
                    if($donnee_inter_info['restauration'] == 1){echo "OUI";}
                ?>
            </div>
        </div>
        <div class="signature_client">
            <div class="titre">Signature du Client</div>
            <div class="box"></div>
        </div>
        <div class="signature_technique">
            <div class="titre">Signature du Technicien</div>
            <div class="box"></div>
        </div>
    </div>
</page>

<page_footer>
LSI Informatique - Société SARL au capital de 1000€ - Siret: 753 865 229 00011 - TVA intra: FR56 753 865 229 - APE: 4741Z
</page_footer>
<?php
$content = ob_get_clean();

    // convert in PDF
    require_once(dirname(__FILE__).'/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple01.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    ?>