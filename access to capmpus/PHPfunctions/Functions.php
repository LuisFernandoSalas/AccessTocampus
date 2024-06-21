<?php
    function validation($connect)
    {
        if($connect)
        {
            echo"<script>alert('Tarea realizada con exito :)');</script>";
        }
        else
            {
                echo"<script>alert('La tarea tiene dificultades para re<lizarse :(');</script>s";
            }
    }

    function callStudents()
        {
            
            include '../PHP/connections/connection.php';

            $names = ['Id_Student', 'names_Student', 'lastNamePaernal_Student', 'lastNameMaternal_Student'];
    
            $sqlquery = "SELECT " . implode(", ", $names) . " FROM current_students";
    
            echo "<select name='students'>";
    
            $anser = $connection -> query($sqlquery);
            if($anser)
            {
                while($rowF = mysqli_fetch_assoc($anser)){
                    $stu_ID = $rowF["Id_Student"];
                    $nameStudent = $rowF["names_Student"];
                    $lastNamePaternal = $rowF["lastNamePaernal_Student"];
                    $lastNameMaternal = $rowF["lastNameMaternal_Student"];
    
                    echo "<option value = '$stu_ID'> $lastNamePaternal / $lastNameMaternal / $nameStudent</option>";
                }
            }else{
                echo "<script>alert('error')</script>";
            }
    
            echo "</select>";
        }
?>