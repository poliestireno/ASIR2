<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    $sem = rand(0,2);
    ?>

    <table border="2px">
    <tr><td style="background-color: 
    <?php
        if ($sem==0)
        {
            echo "red";
        }
    ?>
    ; width:20px;height:20px"></td></tr>
    <tr><td style=" background-color: <?php
        if ($sem==1)
        {
            echo "orange";
        }
    ?>; width:20px;height:20px"></td></tr>
    <tr><td style="background-color: <?php
        if ($sem==2)
        {
            echo "green";
        }
    ?>;width:20px;height:20px"></td></tr>
    </table>
</body>
</html>