<?php
    include ('conexion.php');
    $query = "SELECT * from productos";
    $result = mysqli_query($conection, $query);
    
    if(!$result){
        die('La consulta fallo'.mysqli_error($conection));
    }
    $json = array();
    while($row = mysqli_fetch_array($result)){
        $json [] = array(
            'noProducto' => $row['noProducto'],
            'nombreProducto' => $row['nombreProducto'],
            'precioProducto' => $row['precioProducto'],
            'unidadesProducto' => $row['unidadesProducto'],
            'descripcionPro' => $row['descripcionPro']
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
?>