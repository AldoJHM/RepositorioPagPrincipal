<?php
include("conexion.php");

$noProducto = $_POST['noProducto'];
$sql = "DELETE FROM productos WHERE noProducto = $noProducto";
if(mysqli_query($conection, $sql)) {
    echo '<script language="javascript">alert("Eliminacion correctamente"); window.location.href="index.php";</script>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conection);
}

mysqli_close($conection);

header("Location: index.php")
?>