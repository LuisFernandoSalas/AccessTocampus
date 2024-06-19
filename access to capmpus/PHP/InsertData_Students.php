<?php
    include'connections/connection.php';
    include'../PHPfunctions/Functions.php';    

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        //*We call up all the fields from the form and store them for later use in aconsultation
        $lastNamePaternal   = $_POST['lastNamePaternal_Student'];
        $lastNameMaternal   = $_POST['lastNameMaternal_Student'];
        $nameStudent        = $_POST['names_Student'];
        $semesterStudemt    = $_POST['semester_Student'];
        $especialityStudent = $_POST['especiality_Student'];
        $clusterStudent     = $_POST['cluster_Student'];
        $shiftStudent       = $_POST['shift_Student'];
        $CURPstudent        = $_POST['CURP_Student'];
        $tuitionsStudent    = $_POST['tuitions_Student'];
        $mailStudent        = $_POST['emailInstitutionalStudent'];
        $passwordStudent    = $_POST['passwordEmailStudent'];
        $tutorMail          = $_POST['tutorEmail'];
        $imagenPath         = "../PhotoStudents/";

        //*Query to insert data into the table
        $sqlInser = "INSERT INTO current_students(
         lastNamePaernal_Student, 
         lastNameMaternal_Student ,
         names_Student ,
         semester_Student ,
         especiality_Student ,
         cluster_Student ,
         shiftStudent ,
         CURP_Student ,
         tuitions_Student ,
         passwordEmailStudent ,
         emailInstitutionalStudent ,
         tutorEmail 
        )
        VALUES
        (
        '$lastNamePaternal',
        '$lastNameMaternal',
        '$nameStudent',
        '$semesterStudemt',
        '$especialityStudent',
        '$clusterStudent',
        '$shiftStudent',
        '$CURPstudent',
        '$tuitionsStudent',
        '$passwordStudent',
        '$mailStudent',
        '$tutorMail'
        )
        ";

        //! We check that the image has been sent and that its size is greater than zero
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
                        $answer = $connection -> query($sqlInser);
                        validation($answer);

                        $Updatesql = "UPDATE current_students
                                        SET photography_Student = '$imagenPath'
                                        WHERE Id_Student = (SELECT MAX(Id_Student) FROM current_students)";

                        $answer = $connection -> query($Updatesql);
                        validation($answer);
                        echo "<script>window.location.href = '../interfases/Insert_Data.html';</script>";
                    } 
            } 
            else 
            {
                echo "<script>  alert('El archivo no es compatible revise el formato del archivo e intentelo mas tarde ');"; 
            }
        }else{
            echo "<script>alert('La foto a tenido problemas para guardarse porfavor intentelo de nuevo');  window.location.href = '../interfases/Insert_Data.html'; </script>"; 
        }


        //end to if
    }



?>