<?php

session_start();

var_export($_SESSION);

$_SESSION["nombre"] = "Rudolf";

var_export($_SESSION);

$_SESSION["nombre"] = "Begoña";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="p2.php">vamos a P2</a>
    <div>
        <a href="cerrar_sesion.php">CERRAR SESIONNNNNNNNNNNN </a>
    </div>
</body>
</html>