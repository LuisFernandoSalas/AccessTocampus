<?php

    $pass = $_POST['password'];
    $mail = $_POST['mail'];

    $dates = ['passwordEmailStudent','emailInstitutionalStudent','emailInstitutionalStudent'];

    $sqlQuery = "SELECT " . implode(", ", $dates) . " FROM ";