<html>
    <link  rel="stylesheet" type="text/css" href="../../CSS/styles.css">
</html>
<?php
    session_start();

    include"../connections/connection.php";

    $pass = $_POST['QR'];

    $sqlpass = "SELECT * 
                FROM current_students
                WHERE accessOfStudent = '$pass'";

    $answer = $connection -> query($sqlpass);

    $numRows = $answer->num_rows;

    $view = "";

    if($numRows > 0)
    {
            while($row = $answer->fetch_assoc())
            {
                $view .= "<img src='" . $row['photography_Student'] . "' alt = 'Imagen de el alumno'>" . $row['names_Student'] . $row['lastNamePaernal_Student'] . $row['lastNameMaternal_Student'] . $row['semester_Student'] . $row['cluster_Student'] . $row['shiftStudent'] . $row['especiality_Student'];

                $applications = $row['aplications'];
            }
            
            if($applications > 0)
            {
                $applications--;

                $sqlUpdate = "UPDATE current_students SET aplications = $applications WHERE accessOfStudent = '$pass'";

                $answer = $connection->query($sqlUpdate);
            }else
            {
                $view = "HAZ EXCEDIDO EL LIMITE DE USOS DE TU CODIGO, PORFAVOR REPORTATE EN PREFECTURA";
            }
    }else
        {
            $view = "No se a podido acceder";
        }

        $_SESSION['view'] = $view;
        
    
    header('Location:../../interfases/QRreader.php');

    exit();
?>