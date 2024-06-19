<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/styles.css" >
    <title>Lector de QR</title>
</head>
<body class="bodyfeo">
    <center>
    <h3 class="ayuda"> Lector de QR </h1>
    <form id="form2" class="form2" action="../PHP/AccessToCampus/QRpass.php" method="post">
        <label for="QR">Código QR:</label>
        <input type="text" name="QR" id="QR">
    </form>

    <?php
        if(isset($_SESSION["view"]) && $_SESSION["view"] != null)
        {
            echo $_SESSION["view"];
        }
    session_destroy();
    ?>
    
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var input = document.getElementById('QR');
    input.focus();
});
</script>
</html>