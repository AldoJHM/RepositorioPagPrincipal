<?php
    $host = 'localhost';
    $user = 'id21977174_aldo';
    $password = '@ALDOhernandez28';
    $db = 'id21977174_cursofebjul24';

    $conection = @mysqli_connect($host,$user,$password,$db);
    if (!$conection) {
        echo "Error en la conexion";
    }else {
    }
?>