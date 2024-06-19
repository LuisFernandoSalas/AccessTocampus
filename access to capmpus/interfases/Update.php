<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css">
    <title>Actualizar Datos</title>
</head>
<body>
    <header>Actualizar Datos</header>
    <h3>Alumno: </h3><!--Pones el nombre del alumno-->
    <form action="../PHP/UpdateStudents.php" enctype="multipart/form-data" method = "post">
            <label for="lastNamePaternal_Student">Apellido paterno del alumno:</label>
            <input type="text" id="lastNamePernal_Student" name="lastNamePaernal_Student" value="<?php if(isset($_SESSION['UserUpdate']['lastNamePaernal_Student']) && $_SESSION['UserUpdate']['lastNamePaernal_Student'] != "")
                {echo $_SESSION['UserUpdate']['lastNamePaernal_Student'];}?>">
            
            <label for="lastNameMaternal_Student">Apellido materno del alumno:</label>
            <input type="text" id="lastNameMaternal_Student" name="lastNameMaternal_Student" value="<?php if(isset($_SESSION['UserUpdate']['lastNameMaternal_Student']) && $_SESSION['UserUpdate']['lastNameMaternal_Student'] != "")
                {echo $_SESSION['UserUpdate']['lastNameMaternal_Student'];}?>">
            
            <label for="names_Student">Nombre(s) del Alumno:</label>
            <input type="text" id="names_Student" name="names_Student" value="<?php if(isset($_SESSION['UserUpdate']['names_Student']) && $_SESSION['UserUpdate']['names_Student'] != "")
                {echo $_SESSION['UserUpdate']['names_Student'];}?>">
            
            <label for="semester_Student">Semestre:</label>
            <select name="semester_Student" id="semester_Student" >
                <option value="<?php if(isset($_SESSION['UserUpdate']['semester_Student']) && $_SESSION['UserUpdate']['semester_Student'] != "")
                {echo $_SESSION['UserUpdate']['semester_Student'];}?>"><?php if(isset($_SESSION['UserUpdate']['semester_Student']) && $_SESSION['UserUpdate']['semester_Student'] != "")
                {echo $_SESSION['UserUpdate']['semester_Student'];}?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
    
            <label for="especiality_Student">Especialidad:</label>
            <select id="especiality_Student" name="especiality_Student">
                <option value="<?php if(isset($_SESSION['UserUpdate']['especiality_Student']) && $_SESSION['UserUpdate']['especiality_Student'] != '')
                {echo $_SESSION['UserUpdate']['especiality_Student'];}?>"> <?php if(isset($_SESSION['UserUpdate']['especiality_Student']) && $_SESSION['UserUpdate']['especiality_Student'] != "")
                {echo $_SESSION['UserUpdate']['especiality_Student'];}?> </option>

                <option value="programacion">Programación</option>
                <option value="soporte">Soporte y Mantenimiento</option>
                <option value="logistica">Logística</option>
                <option value="mecanica">Mecánica Industrial</option>
                <option value="analisis">Análisis Clínicos</option>
            </select>

            <label for="cluster_Student">Grupo:</label>
            <select id="cluster_Student" name="cluster_Student">
                <option value=value="<?php if(isset($_SESSION['UserUpdate']['cluster_Student']) && $_SESSION['UserUpdate']['cluster_Student'] != "")
                    {echo $_SESSION['UserUpdate']['cluster_Student'];}?>"><?php if(isset($_SESSION['UserUpdate']['cluster_Student']) && $_SESSION['UserUpdate']['cluster_Student'] != "")
                    {echo $_SESSION['UserUpdate']['cluster_Student'];}?></option>
                <option value="A">A</option>
                <option value="B">B</option>
            </select>
    
            <label for="shiftStudent">Turno:</label>
            <select name="shiftStudent" id="shiftStudent">
                <option value="<?php if(isset($_SESSION['UserUpdate']['shiftStudent']) && $_SESSION['UserUpdate']['shiftStudent'] != "")
                    {echo $_SESSION['UserUpdate']['shiftStudent'];}?>"><?php if(isset($_SESSION['UserUpdate']['shiftStudent']) && $_SESSION['UserUpdate']['shiftStudent'] != "")
                    {echo $_SESSION['UserUpdate']['shiftStudent'];}?></option>

                <option value="matutino">Matutino</option>
                <option value="vespertino">Vespertino</option>
            </select>
            
            <label for="CURP_Student">CURP:</label>
            <input type="text" id="CURP_Student" name="CURP_Student" value="<?php if(isset($_SESSION['UserUpdate']['CURP_Student']) && $_SESSION['UserUpdate']['CURP_Student'] != "")
                {echo $_SESSION['UserUpdate']['CURP_Student'];}?>">
            
            <label for="tuitions_Student">Matrícula:</label>
            <input type="text" id="tuitions_Student" name="tuitions_Student" value="<?php if(isset($_SESSION['UserUpdate']['tuitions_Student']) && $_SESSION['UserUpdate']['tuitions_Student'] != "")
                {echo $_SESSION['UserUpdate']['tuitions_Student'];}?>">
    
            <label for="emailInstitutionalStudent">Correo institucional:</label>
            <input type="email" name="emailInstitutionalStudent" id="emailInstitutionalStudent" value="<?php if(isset($_SESSION['UserUpdate']['emailInstitutionalStudent']) && $_SESSION['UserUpdate']['emailInstitutionalStudent'] != "")
                {echo $_SESSION['UserUpdate']['emailInstitutionalStudent'];}?>">
    
            <label for="passwordEmailStudent">Contraseña de correo institucional:</label>
            <input type="password" name="passwordEmailStudent" id="passwordEmailStudent" value="<?php if(isset($_SESSION['UserUpdate']['passwordEmailStudent']) && $_SESSION['UserUpdate']['passwordEmailStudent'] != "")
                {echo $_SESSION['UserUpdate']['passwordEmailStudent'];}?>">
    
            <label for="tutorEmail">Correo del tutor(a):</label>
            <input type="email" name="tutorEmail" id="tutorEmail" value="<?php if(isset($_SESSION['UserUpdate']['tutorEmail']) && $_SESSION['UserUpdate']['tutorEmail'] != "")
                {echo $_SESSION['UserUpdate']['tutorEmail'];}?>">

            <img class="imgLittle" src="<?php if(isset($_SESSION['UserUpdate']['photography_Student']) && $_SESSION['UserUpdate']['photography_Student'] != "")
                {echo $_SESSION['UserUpdate']['photography_Student'];}?>" alt=""><br>
    
            <label for="photography_Student">Foto del alumno:</label>
            <input type="file" name="photography_Student" id="photography_Student">


            <label for="accessOfStudent">Código de acceso:</label>
            <input type="text" name="accessOfStudent" id="accessOfStudent" value="<?php if(isset($_SESSION['UserUpdate']['accessOfStudent']) && $_SESSION['UserUpdate']['accessOfStudent'] != "")
                {echo $_SESSION['UserUpdate']['accessOfStudent'];}?>">

            <label for="aplications">Limite de usos:</label>
            <input type="number" name="aplications" id="aplications" value="<?php if(isset($_SESSION['UserUpdate']['aplications']) && $_SESSION['UserUpdate']['aplications'] != "")
                {echo $_SESSION['UserUpdate']['aplications'];}?>">
            
            <button type="submit">Guardar cambios</button>
    </form>

    <form action="Search.php">
        <input type="submit" value="Volver al Buscar alumnos">
    </form>
</body>
</html>