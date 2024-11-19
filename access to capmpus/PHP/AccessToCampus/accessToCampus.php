<?php
    include'../connections/connection.php';

    $password = $_POST["clave"];

    $sqlAccess = "SELECT * FROM dgeti_campus WHERE password_campus = '$password'";

    $answer = $connection->query($sqlAccess);
    $num_rows = $answer -> num_rows;

    if($num_rows > 0)
    {
        echo "<script>window.location.href = '../../interfases/menu.php'</script>";
    }else
        {
            echo"<script>window.location.href = '../../'</script>";
        }


?>