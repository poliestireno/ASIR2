


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .color{
        background-color: purple;
    }
</style>
</head>
<body>
    <?php 
    $num1 = rand(1,99);
    $num2 = rand(1,99);
    $num3 = rand(1,99);
    $num4 = rand(1,99);
    $suma = $num1+$num2+$num3+$num4;
    ?>
    <ul>
        <li><?php echo $num1 ?> </li>
        <li><?php echo $num2 ?> </li>
        <li><?php echo $num3 ?> </li>
        <li><?php echo $num4 ?> </li>
    </ul>
   <h2 class="color"> <?php 
    echo "la suma de los numeros es: {$suma}"
    // media
    // mediana
    
    ?> </h2>
</body>
</html>