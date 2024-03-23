<?php
include("conexion.php");

$noProducto = $_POST['noProducto'];
$sql = "DELETE FROM productos WHERE noProducto = $noProducto";
if(mysqli_query($conection, $sql)) {
    echo 'Eliminacion correctamente';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conection);
}
mysqli_close($conection);

?>