<?php
    session_start();
    include 'connections/connection.php';
    $tuitions = $_GET['tuitions'];


    $sqlSelect = "SELECT * FROM current_students WHERE tuitions_Student = '$tuitions'";

    $answer = $connection->query($sqlSelect);

    $numRows = $answer -> num_rows;

    if($numRows > 0)
    {
        if($row = $answer->fetch_assoc())
        {
            $lastNamePaternal = $row['lastNamePaernal_Student'];
            $lastNameMaternal = $row['lastNameMaternal_Student'];
            $names = $row['names_Student'];
            $photography = $row['photography_Student'];
            $semester = $row['semester_Student'];
            $especiality = $row['especiality_Student'];
            $cluster = $row['cluster_Student'];
            $shift = $row['shiftStudent'];
            $CURP = $row['CURP_Student'];
            $tuitions = $row['tuitions_Student'];
            $passwordEmail = $row['passwordEmailStudent'];
            $emailInstitutional = $row['emailInstitutionalStudent'];
            $tutor = $row['tutorEmail'];
            $access = $row['accessOfStudent'];
            $aplications = $row['aplications'];
        }
        $_SESSION['UserUpdate']['lastNamePaernal_Student'] = $lastNamePaternal;
        $_SESSION['UserUpdate']['lastNameMaternal_Student'] = $lastNameMaternal;
        $_SESSION['UserUpdate']['names_Student'] = $names;
        $_SESSION['UserUpdate']['photography_Student'] = $photography;
        $_SESSION['UserUpdate']['semester_Student'] = $semester;
        $_SESSION['UserUpdate']['especiality_Student'] = $especiality;
        $_SESSION['UserUpdate']['cluster_Student'] = $cluster;
        $_SESSION['UserUpdate']['shiftStudent'] = $shift;
        $_SESSION['UserUpdate']['CURP_Student'] = $CURP;
        $_SESSION['UserUpdate']['tuitions_Student'] = $tuitions;
        $_SESSION['UserUpdate']['passwordEmailStudent'] = $passwordEmail;
        $_SESSION['UserUpdate']['emailInstitutionalStudent'] = $emailInstitutional;
        $_SESSION['UserUpdate']['tutorEmail'] = $tutor;
        $_SESSION['UserUpdate']['accessOfStudent'] = $access;
        $_SESSION['UserUpdate']['aplications'] = $aplications;

    }
    
    echo "<script>window.location.href = '../interfases/Update.php';</script>";    
?>