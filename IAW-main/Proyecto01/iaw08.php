<?php
var_export($_POST);

$n33 = "";
$n44 = "";

if (isset($_POST['enviar']))
{
    $n33 = $_POST['n3'];
    $n44 = $_POST['n4']; 
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
    <form action="iaw09.php" method="POST">
        <div>
            <input name="n1" type="text" value="<?php echo $n33 ?>"/>
        </div>
        <div>
            <input name="n2" type="text" value="<?php echo $n44 ?>"/>
        </div>
        <div>
            <input name="sumar" type="submit" value="+"/> 
        </div>
        <div>
            <input name="concatenar" type="submit" value="C"/> 
        </div>
    </form>
</body>
</html>