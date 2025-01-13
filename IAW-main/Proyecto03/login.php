<?php

require_once("dbutils.php");

var_export($_POST);

// COMPROBAR SI EXISTE user y pass 
if (isset($_POST["login_button"]))
{
    $miCon = conectarDB();
    $query = "SELECT * FROM USERS WHERE ALIAS=:ALIAS AND PASS=:PASS";
    $argumentos = array(
        ":ALIAS"=>$_POST['user'],
        ":PASS"=>md5($_POST['pass'])     
    );
    $results = realizarQuery($miCon,$query,$argumentos,true);
    if ($results)
    {
        // logado correctamente
        header("Location: app.php");
        exit;
    }
    else
    {
        // volver al login

    }
    meter sesiones
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="POST">
    <div>user:
        <input type="text" name="user">      
    </div>
    <div>password:
        <input type="password" name="pass">
    </div>
    <div>
        <input type="submit" name="login_button" value="login">
    </div>
</form>
</body>
</html>