<?php
include ('../inc/config.php');
$idintervention = $_GET['idintervention'];
$sql_inter = mysql_query("SELECT * FROM intervention, client, technicien WHERE intervention.idclient = client.idclient AND intervention.employe = technicien.idtechnicien AND idintervention = $idintervention");
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
            <img src="http://192.168.1.50/inter/pdf/inter/impression/logo-easytech.png" />
        </div>
    </div>

    <div id="corps">
        <div class="box_entre">Bon d'entrée</div>
        <div class="box_client">
            Code Client: <b>CLT000<?php echo $donnee_inter['idclient']; ?></b><br>
            <?php echo $donnee_inter['nom']; ?> <?php echo $donnee_inter['prenom']; ?><br><br>
            <?php echo $donnee_inter['adresse1']; ?><br>
            <?php echo $donnee_inter['adresse2']; ?><br>
            <?php echo $donnee_inter['cp']; ?> <?php echo $donnee_inter['ville']; ?><br>
            Tel: <?php echo $donnee_inter['tel']; ?> | Port: <?php echo $donnee_inter['port']; ?>
        </div>
        <div class="box_num_doss">
            <div style="font-size: 12px">Numéro de dossier:</div><br>
            <barcode value="INT000<?php echo $donnee_inter['idintervention']; ?>" style="width: 20mm"></barcode>
            <div style="float: right">INT000<?php echo $donnee_inter['idintervention']; ?></div>
        </div>
        <div class="box_ref_doss">
            <div style="font-size: 12px">Référence Dossier:</div><br>
            <barcode value="INT000<?php echo $donnee_inter['idintervention']; ?>" style="width: 20mm"></barcode>
            <div style="float: right">INT000<?php echo $donnee_inter['idintervention']; ?></div>
        </div>
        <div class="box_info_main">
            <table>
                <tr>
                    <td>Date d'entrée:</td>
                    <td><?php echo $donnee_inter['date_entre']; ?></td>
                </tr>
                <tr>
                    <td>Provenance:</td>
                    <td>
                        <?php
                            if($donnee_inter['provenance'] == 1){echo "Atelier";}
                            if($donnee_inter['provenance'] == 2){echo "Exterieur";}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Technicien:</td>
                    <td><?php echo $donnee_inter['nom_technicien']; ?> <?php echo $donnee_inter['prenom_technicien']; ?></td>
                </tr>
            </table>
        </div>
        <div class="box_appareil_header">
            Appareil: <?php echo $donnee_inter['categorie_materiel']; ?> <?php echo $donnee_inter['marque_materiel']; ?> <?php echo $donnee_inter['modele_materiel']; ?>
        </div>
        <div class="box_appareil_left">
            <table>
                <tr>
                    <td>Catégorie:</td>
                    <td><?php echo $donnee_inter['categorie_materiel']; ?></td>
                </tr>
                <tr>
                    <td>Marque:</td>
                    <td><?php echo $donnee_inter['marque_materiel']; ?></td>
                </tr>
                <tr>
                    <td>Modèle:</td>
                    <td><?php echo $donnee_inter['modele_materiel']; ?></td>
                </tr>
                <tr>
                    <td>Référence:</td>
                    <td><?php echo $donnee_inter['reference_materiel']; ?></td>
                </tr>
                <tr>
                    <td>N° de Série:</td>
                    <td><?php echo $donnee_inter['num_serie']; ?></td>
                </tr>
            </table>
            <br>
            <br>
            <br>
        </div>
        <div class="box_appareil_right">
            <table>
                <tr>
                    <td>Date d'achat:</td>
                    <td><?php echo $donnee_inter['date_achat']; ?></td>
                </tr>
                <tr>
                    <td>Lieu d'achat:</td>
                    <td><?php echo $donnee_inter['lieu_achat']; ?></td>
                </tr>
                <tr>
                    <td>N° Facture d'achat:</td>
                    <td><?php echo $donnee_inter['num_fact_achat']; ?></td>
                </tr>
                <tr>
                    <td>Garantie:</td>
                    <td>
                        <?php 
                            if($donnee_inter['garantie'] == 1){echo "OUI";}
                            if($donnee_inter['garantie'] == 0){echo "NON";}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Type de garantie:</td>
                    <td>
                        <?php
                                switch($donnee_inter['type_garantie'])
                                    {
                                        case "1":
                                        print("HG - Hors Garantie");
                                        break;

                                        case "2":
                                        print("1 an");
                                        break;

                                        case "3":
                                        print("2 ans");
                                        break;

                                        case "4":
                                        print("3 ans");
                                        break;

                                        case "5":
                                        print("5 ans");
                                        break;

                                        case "6":
                                        print("10 ans");
                                        break;

                                        case "7":
                                        print("A vie");
                                        break;

                                        default:
                                        print("Inconnue");
                                        break;
                                    }
                            ?>
                    </td>
                </tr>
                <tr>
                    <td>Retour:</td>
                    <td>
                        <?php
                            if($donnee_inter['retour'] == 1){echo "OUI";}
                            if($donnee_inter['retour'] == 0){echo "NON";}
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Type de Retour:</td>
                    <td>
                        <?php
                            switch($donnee_inter['type_retour'])
                                {
                                    case "1":
                                    print("Retour Constructeur");
                                    break;

                                    case "2":
                                    print("Retour Magasin d'achat");
                                    break;

                                    default:
                                    print("Inconnu");
                                    break;
                                }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <div class="box_symptome">
            <div class="box_symptome_header">Symptome</div>
            <div class="box_symptome_corps">
                <?php echo $donnee_inter['symptome']; ?>
            </div>
        </div>
        <div class="box_devis">
            <div class="box_devis_header">Devis:
                <?php
                            if($donnee_inter['devis'] == 0){echo "NON";}
                            if($donnee_inter['devis'] == 1){echo "OUI";}
                        ?>
            </div>
            <div class="box_devis_corps">
                Montant autorisé: 
                <?php
                    if($donnee_inter['montant_autorise_devis'] == true){echo $donnee_inter['montant_autorise_devis'];}else{echo "0,00";}
                ?> €
            </div>
        </div>
        <br>
        <div class="box_remarques">
            <div class="box_remarques_header">Remarques</div>
            <div class="box_remarques_corps">
                <?php echo $donnee_inter['remarques']; ?>
            </div>
        </div>
        <div class="box_acompte">
            <div class="box_acompte_header">Acompte</div>
            <div class="box_acompte_corps">
                Montant perçu:
                            <?php
                                if($donnee_inter['montant_acompte'] == true){echo $donnee_inter['montant_acompte'];}else{echo "0,00";}
                            ?> €
            </div>
        </div>
        <br>
        <div class="box_info_complementaire">
            <div class="box_info_complementaire_header">Information Complémentaire</div>
            <div class="box_info_complementaire_corps">
            <?php echo $donnee_inter['remarques']; ?>
            </div>
        </div>
        <br>
        <div class=""
        <div class="box_signature">
            <b>Signature du Client:</b>
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
