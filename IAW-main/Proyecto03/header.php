<?php
session_start();

var_export($_SESSION);

if (! $_SESSION['user_ok'])
{
    header("Location: login.php");
    exit;
}

if (isset($_SESSION['tiempo_ultimo_submit']))
{
    // set tiempo de expiración
    $minutosExpiracion = 0.5;

    //if el momento actual -tiempo_ultimo_submit > 5 min expiro 

    $segundosInactivo = time() - $_SESSION['tiempo_ultimo_submit'];

    if ($segundosInactivo >= ($minutosExpiracion * 60) )
    {
        // remove all session variables
        session_unset();
        // destroy the session
        session_destroy();
        header("Location: login.php");
        exit();
    }
}
$_SESSION['tiempo_ultimo_submit']=time();





?>