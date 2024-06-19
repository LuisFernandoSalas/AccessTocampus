<?php 
    include'../PHP/connections/connection.php';
    include'../PHPfunctions/Functions.php';
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
    <form action="../PHP/deleteStudents.php" method="POST">
        <h1>Interfaz de Baja de Alumnos</h1>
        <p>Seleccione al alumno que desea dar de baja:</p>
        <?php callStudents() ?>
        <button type="submit" onclick="return confirm('¿Deseas ejecutar la consulta SQL?')">Dar de Baja</button>
    </form>
    <form action="menu.php">
        <input type="submit" value="Volver a la página principal"  onclick="closeWin()">
    </form>

    
    <script src="../JAVASCRIPT/closeWindow.js"></script>
</body>
</html>