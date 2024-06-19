<?php

    // * We include the documents for the operation of the creation of tables
    include'connection.php';
    require'../../PHPfunctions/Functions.php';

    
    //* We create the students table and verify through the "validation()" function that it is executed correctly
    $CreateTable = "CREATE TABLE current_students 
    (
        Id_Student                INT(6) AUTO_INCREMENT PRIMARY KEY,
        lastNamePaernal_Student   VARCHAR(20) NOT NULL,
        lastNameMaternal_Student  VARCHAR(20) NOT NULL, 
        names_Student             VARCHAR(20) NOT NULL,
        photography_Student       VARCHAR(150) NOT NULL,
        semester_Student          INT(1) NOT NULL,
        especiality_Student       VARCHAR(20) NOT NULL,
        cluster_Student           VARCHAR(1) NOT NULL,
        shiftStudent              VARCHAR(10) NOT NULL,
        CURP_Student              VARCHAR(18) NOT NULL,
        tuitions_Student          BIGINT(14) NOT NULL,
        passwordEmailStudent      VARCHAR(15)NOT NULL, 
        emailInstitutionalStudent VARCHAR(75) NOT NULL,
        tutorEmail                VARCHAR(75) NOT NULL,
        accessOfStudent           VARCHAR(75) NOT NULL,
        aplications               INT(1) DEFAULT 2
    )";

    $confirm = $connection -> query($CreateTable);
    validation($confirm);

    echo "<script>window.location.href='../../interfases/'</script>"
?>