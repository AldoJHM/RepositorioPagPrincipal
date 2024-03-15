<?php
include("conexion.php");

$noProducto = $_POST['noProducto'];
$nombreProducto = $_POST['nombreProducto'];
$precioProducto = $_POST['precioProducto'];
$unidadesProducto = $_POST['unidadesProducto'];
$descripcionPro = $_POST['descripcionPro'];
$sql = "INSERT INTO productos (noProducto, nombreProducto, precioProducto, unidadesProducto, descripcionPro)
        VALUES ('$noProducto', '$nombreProducto', '$precioProducto', '$unidadesProducto', '$descripcionPro')";
if(mysqli_query($conection, $sql)) {
    echo 'Nueva fila creada exitosamente';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conection);
}

mysqli_close($conection);
?>
