<?php

//var_export($_POST);

// es la primera vez ??
if (count($_POST) == 0) 
{
    $cont=0;
    $num_oculto = rand(1,50);
}
else    // las siguientes veces
{
    $cont = $_POST["contador"];
    $cont++;  // $cont = $cont + 1;

    $num_oculto = $_POST['numeroOculto'];
    if ($num_oculto == $_POST['numeroJugador'])
    {
        echo "<script>alert('EDLB con ". $cont. " intentos');</script>";
    }
    else if ($num_oculto > $_POST['numeroJugador'])
    {
        echo "<script>alert('El nº introducido es mEnor que el nº oculto');</script>";
    }
    else
    {
        echo "<script>alert('El nº introducido es mAyor que el nº oculto');</script>";
    }
}

//echo "num ale:".$num_oculto;



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="iaw16.php" method="post">
        <div>
            <label>Introduce número:</label>
        </div>
        <div>
            <input type="number" name="numeroJugador"/>
            <input type="hidden" name="numeroOculto" value="<?php echo $num_oculto?>"/>
            <input type="hidden" name="contador" value="<?php echo $cont?>"/>
        </div>
        <div>
            <input type="submit" name="boton" value="GO!"/>
        </div>
    </form>
    <div>
        <h3>Nº de intentos: <?php echo $cont?></h3>
    </div>
</body>
</html>