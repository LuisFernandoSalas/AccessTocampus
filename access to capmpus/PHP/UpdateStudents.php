<?php

    include'../PHP/connections/connection.php';
    include'../PHPfunctions/Functions.php';

    $lastNamePaernal_Student    = $_POST['lastNamePaernal_Student'];
    $lastNameMaternal_Student   = $_POST['lastNameMaternal_Student'];
    $names_Student              = $_POST['names_Student'];
    $semester_Student           = $_POST['semester_Student'];
    $especiality_Student        = $_POST['especiality_Student'];
    $cluster_Student            = $_POST['cluster_Student'];
    $shiftStudent               = $_POST['shiftStudent'];
    $CURP_Student               = $_POST['CURP_Student'];
    $tuitions_Student           = $_POST['tuitions_Student'];
    $passwordEmailStudent       = $_POST['passwordEmailStudent'];
    $emailInstitutionalStudent  = $_POST['emailInstitutionalStudent'];
    $tutorEmail                 = $_POST['tutorEmail'];
    $accessOfStudent            = $_POST['accessOfStudent'];
    $aplications                = $_POST['aplications'];
    $imagenPath         = "../PhotoStudents/";

    $sqlUpdate = " UPDATE current_students SET
    lastNamePaernal_Student   = '$lastNamePaernal_Student',  
    lastNameMaternal_Student  = '$lastNameMaternal_Student', 
    names_Student             = '$names_Student',            
    semester_Student          = '$semester_Student',         
    especiality_Student       = '$especiality_Student',      
    cluster_Student           = '$cluster_Student',          
    shiftStudent              = '$shiftStudent',             
    CURP_Student              = '$CURP_Student',             
    tuitions_Student          = '$tuitions_Student',         
    passwordEmailStudent      = '$passwordEmailStudent',     
    emailInstitutionalStudent = '$emailInstitutionalStudent',
    tutorEmail                = '$tutorEmail',               
    accessOfStudent           = '$accessOfStudent',          
    aplications               = '$aplications'    
    WHERE tuitions_Student = '$tuitions_Student'";

    if (isset($_FILES['photography_Student']) && $_FILES['photography_Student']['size'] > 0) 
    {
        $FileImagen = $_FILES['photography_Student']['tmp_name'];
        $nameFile 	= $_FILES['photography_Student']['name'];
        $TypeFile = GetImageSize($FileImagen);
        $imagenPath = $imagenPath . $nameFile;
        //todo: we verify that it is a valid format for a photo
        if ($TypeFile[2] == 3 || $TypeFile[2] == 2) 
        {
            //*We perform the query of inserting data and inserting the photo
            if (move_uploaded_file($FileImagen, $imagenPath)) 
                {
                    $answer = $connection->query($sqlUpdate);
                    validation($answer);

                    $Updatesql = "UPDATE current_students
                                    SET photography_Student = '$imagenPath'
                                    WHERE tuitions_Student = '$tuitions_Student'";

                    $answer = $connection -> query($Updatesql);
                    validation($answer);
                    echo "<script>window.location.href = '../interfases/Update.php';</script>";
                } 
        } 
        else 
        {
            echo "<script>  alert('El archivo no es compatible revise el formato del archivo e intentelo mas tarde ');"; 
        }
    }else{
        echo "<script>alert('La foto a tenido problemas para guardarse porfavor intentelo de nuevo');  window.location.href = '../interfases/Update.php'; </script>"; 
    }
?>