<?php

require_once("dbutils.php");

$miCon = conectarDB();
//var_export($miCon);

$aPolvorones = 
realizarQuery($miCon,"SELECT * FROM POLVORONES",null,isfetch: true);

//var_export($aPolvorones);




realizarQuery($miCon,"SELECT * FROM POLVORONES",null,isfetch: true);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="contanier-fluid">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>SABOR</th>
        <th>FECHA_CADUCIDAD</th>
        <th>COLOR_ENVOLTORIO</th>
      </tr>
    </thead>
    <tbody>
      
    <?php
         foreach ($aPolvorones as $polvoronI) 
         {
            
            echo '<tr>';
            echo "<td>".$polvoronI['SABOR']."</td>";
            echo "<td>".$polvoronI['FECHA_CADUCIDAD']."</td>";
            echo "<td>".$polvoronI['COLOR_ENVOLTORIO']."</td>";
            echo "</tr>";
         }
    ?>
    <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
    </tr>


    </tbody>
  </table>
    </div>
</body>
</html>
