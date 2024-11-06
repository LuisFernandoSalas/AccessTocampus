<?php
    include'../PHPfunctions/Functions.php';
    include'../PHP/connections/connection.php';

    if($_SERVER["REQUEST_METHOD"] == "GET")
        {
            //llamamos el nombre del estudiante
            $tuitionStudent = $_GET["tuitions"];

            //ejecutamos la consulta que elimina al alumno
            $sqlDelete = "DELETE FROM current_students WHERE tuitions_Student = '$tuitionStudent'";
            
            $answer = $connection -> query($sqlDelete);

            validation($answer);
            echo "<script>window.location.href = '../interfases/Delete.php'</script>";

        }
    ?>