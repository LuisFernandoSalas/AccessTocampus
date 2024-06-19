<?php
    include'../PHPfunctions/Functions.php';
    include'../PHP/connections/connection.php';

    if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            //llamamos el nombre del estudiante
            $stu_ID = $_POST["students"];

            //ejecutamos la consulta que elimina al alumno
            $sqlDelete = "DELETE FROM current_students WHERE Id_Student = '$stu_ID'";
            
            $answer = $connection -> query($sqlDelete);

            validation($answer);
            echo "<script>window.location.href = '../interfases/Delete.php'</script>";

        }
    ?>