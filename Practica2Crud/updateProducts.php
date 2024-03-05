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
    echo '<script language="javascript">alert("Nueva fila actualizada exitosamente"); window.location.href="index.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conection);
}

mysqli_close($conection);

header("Location: index.php")
?>