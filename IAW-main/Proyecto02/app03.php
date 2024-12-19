<?php

//var_export($_POST);

require_once("dbutils.php");


$argumentos = array(
    ":SABOR"=>$_POST['SABOR'],
    ":FECHA_CADUCIDAD"=>$_POST['FECHA_CADUCIDAD'],
    ":COLOR_ENVOLTORIO"=>$_POST['COLOR_ENVOLTORIO']
);

if ($_POST['BOTON']== 'INSERTAR')
{
    $query = "INSERT INTO POLVORONES( SABOR, FECHA_CADUCIDAD, COLOR_ENVOLTORIO) VALUES 
            (:SABOR, :FECHA_CADUCIDAD, :COLOR_ENVOLTORIO)";  
}
else if ($_POST['BOTON']== 'BORRAR')
{
    $query= "DELETE FROM POLVORONES WHERE COLOR_ENVOLTORIO=:COLOR_ENVOLTORIO";
    $argumentos = array(
        ":COLOR_ENVOLTORIO"=>$_POST['COLOR_ENVOLTORIO']
    );

}
else
{
    $query = "UPDATE POLVORONES SET FECHA_CADUCIDAD=:FECHA_CADUCIDAD,COLOR_ENVOLTORIO=:COLOR_ENVOLTORIO WHERE SABOR=:SABOR";  
}



$miCon = conectarDB();
realizarQuery($miCon,$query,$argumentos,false);

echo 'PROCESADO CORRECTAMENTE';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>