<?php 
    include'../PHP/connections/connection.php';
    include'../PHPfunctions/Functions.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css">
    <title>Interfaz de Baja de Alumnos - Proyecto de Acceso a la Inscripción</title>
</head>
<body>
<form action="" method = "POST">
        <label for="alumno">Buscar Alumno:</label>
        <input type="text" id="Student" name="Student">
    
        <table>
                <thead>
                    <th>APELLIDO PATERNO</th>
                    <th>APELLIDO MATERNO</th>
                    <th>NOMBRE (S)</th>
                    <th>FOTOGRAFIA</th>
                    <th>SEMESTRE</th>
                    <th>ESPECIALIDAD</th>
                    <th>GRUPO</th>
                    <th>TURNO</th>
                    <th>CURP</th>
                    <th>MATRICULA</th>
                    <th>CORREO DEL ALUMNO</th>
                    <th>CONTACTO DE TUTOR(A)</th>
                    <th></th>
                </thead>
            <tbody  id = "table">

            </tbody>

        </table>
    </form>
    <script>
        
        getData();

        document.getElementById('Student').addEventListener('keyup', getData)

        function getData()
        {
            let input = document.getElementById("Student").value
            let content = document.getElementById("table")
            let url = "../PHP/DeleteSearch.php";

            let formData  = new FormData()
            formData.append('Student', input)

            fetch(url, {

                method: "POST", 
                body: formData

            }).then(response => response.json())
            .then(data => {
                table.innerHTML = data;
            }).catch(err => console.log(err))
        }
    </script>
    <form action="menu.php">
        <input type="submit" value="Volver a la página principal"  onclick="closeWin()">
    </form>

    
    <script src="../JAVASCRIPT/closeWindow.js"></script>
</body>
</html>