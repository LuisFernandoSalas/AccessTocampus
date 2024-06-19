<?php

    //*We make the connection to the database through the query
    $user = "root";
    $password = "";

    $host = "127.0.0.1";
    $dataBase = "Students";

    //*query for connection
    $connection = new mysqli($host, $user, $password, $dataBase);

    if($connection->connect_error)
    {
        echo "Error en la conexion de la base de datos";
    }

?>