<?php 

$nrandom = rand(0,9);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($nrandom == $_POST['nnn'] )
        {
            echo "<h2>EBDLB</h2>";
        }
        else
        {
            echo "<h1>CHUFLA!!!!!!!!</h1>";
        }
    ?>
</body>
</html>