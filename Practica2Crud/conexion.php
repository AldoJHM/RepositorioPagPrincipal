<?php
    $host = 'localhost';
    $user = 'id21894822_aldo';
    $password = '@ALDOhernandez28';
    $db = 'id21894822_cursofebjul24';

    $conection = @mysqli_connect($host,$user,$password,$db);
    if (!$conection) {
        echo "Error en la conexion";
    }else {
    }
?>