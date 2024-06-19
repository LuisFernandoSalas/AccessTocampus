<html>
    <link  rel="stylesheet" type="text/css" href="../../CSS/styles.css>
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
            $view .="<img src = '" . $row['photography_Student'] . "' alt='img' >"  . "<br>";
            $view .="<p><b>" . $row['semester_Student'] . " " .$row['cluster_Student'] . " " .$row['shiftStudent'] . " " . $row['especiality_Student'] . "</p></b>";
            $applications = $row['aplications'];
        }
        
        $applications--;
        $sqlUpdate = "UPDATE current_students SET aplications = $applications WHERE accessOfStudent = '$pass'";
    }
    
    if($applications < 1)
    {
        $view = "ACCESO DENEGADO USO DE CODIGOS EXEDIDO PORFAVOR REPORTARSE EN PREFECTURA" .  $applications;        
    }

    $_SESSION['view'] = $view;
    header('Location:../../interfases/QRreader.php');

    exit();
?>