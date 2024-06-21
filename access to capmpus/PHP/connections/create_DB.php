<?php
    $host = '127.0.0.1';
    $userName = 'root';
    $password = '';

    $connect = new mysqli($host, $userName, $password);

    if($connect->connect_error)
    {
        die("<script>La base de datos a tenido un error al crearse</script>" . $connect -> connect_error);
    }else
        {
            $DB = "CREATE DATABASE students";

            if($connect->query($DB) === TRUE)
            {
                echo"<script>alert('La tarea se realizo correctamente :)');</script>";
            }else
                {
                    echo"<script>alert('La tarea a tenido problemas para realizarse :(');</script>";
                }
        }
    $connect->close();
?>