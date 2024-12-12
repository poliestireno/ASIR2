<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once("dbutils.php");

$miCon = conectarDB();
//var_export($miCon);

$aPolvorones = 
realizarQuery($miCon,"SELECT * FROM POLVORONES",null,isfetch: true);

var_export($aPolvorones);

?>

