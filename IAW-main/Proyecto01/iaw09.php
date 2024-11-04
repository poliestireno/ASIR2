
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php

    var_export($_POST);

   if (isset($_POST['sumar']))
   {
    $valore = $_POST['n1'] + $_POST['n2'];
   }
   else if (isset($_POST['concatenar']))
   {
    $valore = $_POST['n1'] . $_POST['n2'];
   }

?>
    <form action="iaw10.php" method="POST">
        <div>
            <input name="resultado" type="text" value="<?php echo $valore?>"/>
        </div>
        <div>
            <input name="enviar" type="submit" value="dar!"/> 
        </div>
    </form>
</body>
</html>