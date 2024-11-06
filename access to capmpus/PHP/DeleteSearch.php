<?php

    include'connections/connection.php';

    session_start();

    $dates = ['lastNamePaernal_Student','lastNameMaternal_Student','names_Student','photography_Student','semester_Student','especiality_Student','cluster_Student', 'shiftStudent', 'CURP_Student', 'tuitions_Student', 'emailInstitutionalStudent', 'tutorEmail'];

    $student = isset($_POST['Student']) ? $connection->real_escape_string($_POST['Student']) : null;

    $where = "";

    if ($student != null)
    {
        $where = "WHERE (";

        $length = count($dates);
        for ($i = 0; $i < $length; $i++)
        {
            $where .= $dates[$i] . " LIKE '%" . $student . "%' OR ";
        }
        $where = substr_replace($where, "", -3);
        $where .= ")";
    }

    $searchsql = "SELECT " . implode(", ", $dates) . " FROM current_students $where";

    $answer = $connection->query($searchsql);
    $numRows = $answer->num_rows;

    $results = "";

    if($numRows > 0)
    {
        while($row = $answer->fetch_assoc())
        {
            $results .= "<tr>";
            $results .= "<td>" . $row['lastNamePaernal_Student']        . "</td>";
            $results .= "<td>" . $row['lastNameMaternal_Student']       . "</td>";
            $results .= "<td>" . $row['names_Student']                  . "</td>";
            $results .= "<td><img src='" . $row['photography_Student']  . "' alt='Fotografia de el estudiante>'</td>";
            $results .= "<td>" . $row['semester_Student']               . "</td>";
            $results .= "<td>" . $row['especiality_Student']            . "</td>";
            $results .= "<td>" . $row['cluster_Student']                . "</td>";
            $results .= "<td>" . $row['shiftStudent']                   . "</td>";
            $results .= "<td>" . $row['CURP_Student']                   . "</td>";
            $results .= "<td>" . $row['tuitions_Student']               . "</td>";
            $results .= "<td>" . $row['emailInstitutionalStudent']      . "</td>";
            $results .= "<td>" . $row['tutorEmail']                     . "</td>";
            $results .=
                "<td>
                    <a href='../PHP/deleteStudents.php?tuitions=" . $row['tuitions_Student'] . "' onclick=\"return confirm('¿Desea eliminar al alumno?')\">Eliminar alumno</a>
                </td>";
            $results .= "</tr>";
            
        }
    }else
        {
            $results .= "<tr>";
            $results .= "<td colspan='7'> No se encontro ningun alumno con dichos atributos :( </td>";
            $results .= "</tr>";
        }

        echo json_encode($results, JSON_UNESCAPED_UNICODE);
?>