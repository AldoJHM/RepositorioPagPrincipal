<?php
include("conexion.php");

$noProducto = $_POST['noProducto'];
$nombreProducto = $_POST['nombreProducto'];
$precioProducto = $_POST['precioProducto'];
$unidadesProducto = $_POST['unidadesProducto'];
$descripcionPro = $_POST['descripcionPro'];

$sql = "UPDATE productos SET nombreProducto = '$nombreProducto', precioProducto = $precioProducto,
        unidadesProducto = $unidadesProducto, descripcionPro = '$descripcionPro' WHERE noProducto = $noProducto";

if (mysqli_query($conection, $sql)) {
    echo 'Nueva fila actualizada exitosamente';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conection);
}

mysqli_close($conection);

?>