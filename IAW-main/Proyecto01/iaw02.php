<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 style="background-color: <?php

        

        if (rand(0,1) == 0)
        {
            echo 'red';
        }
        else
        {
            echo 'blue';
        }

        
    ?>
    ;"><?php echo "Hola Mundo!!"?></h2>
</body>
</html>