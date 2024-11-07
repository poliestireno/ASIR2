<?php
var_export($_POST);
$valor_oculto = "trece";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>JOLA</h1>
    <form action="iaw14.php" method="post">

        <input type="hidden" name="inputOculto" value="<?php echo $valor_oculto?>"/>
        <input type="text" name="input1" value="sos"/>
        <input type="submit" value="go!"/>
    </form>
</body>
</html>