<?php
// Conectar a la base de datos SQLite
$db = new SQLite3('DBs/baseqlite01.db');

// Ejecutar una consulta SELECT
$resultado = $db->query('SELECT * FROM empleados');

// Iterar sobre los resultados y mostrarlos
while ($fila = $resultado->fetchArray(SQLITE3_ASSOC)) {
    echo "Nombre: " . $fila['nombre'] . " - Salario: " . $fila['salario'] . "<br>";
}

// Cerrar la conexión a la base de datos
$db->close();
?>