
<?php
    $conexion = mysqli_connect("127.0.0.1", "root", "", "instrumentos");
    if (!$conexion) {
        die("Error de conexión a la base de datos: " . mysqli_connect_error());
    }
?>



