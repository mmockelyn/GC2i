<?php
// include ('error.php');
//mysql connect
$host = "localhost";
$user = "root";
$pass = "1992maxime";
$base = "inter";
$port = "3306";

mysql_connect($host, $user, $pass);
mysql_select_db($base);

$rootsite = "http://192.168.1.50/inter/";


//versionning

$sql_version = mysql_query("SELECT version_latest FROM maj ORDER BY idmaj DESC");
$donnee_version = mysql_fetch_array($sql_version);

$version = $donnee_version['version_latest'];
?>