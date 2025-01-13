<?php

function conectarDB(): PDO
{
    $db= new PDO("mysql:host=localhost;dbname=DB_EVA2","root","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}

function realizarQuery($conexion,$texto,$argumentos=null,$isfetch=false)
{
    $comand=$conexion->prepare($texto);
    $comand->execute($argumentos);
    if($isfetch) return $comand->fetchAll();
}

?>
