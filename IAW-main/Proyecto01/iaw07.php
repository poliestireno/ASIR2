<?php

// lista no ordenada de los 3 inputs

//var_export($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?php echo $_POST['pag_web'] ?></li>
        <li><?php echo $_POST['telefono'] ?></li>
        <li><?php echo $_POST['email'] ?></li>
    </ul>
    
</body>
</html>