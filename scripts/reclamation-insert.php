<?php

    if (isset($_POST['insert-rec'])) {
        
        // getting data
        $user = $_POST['user'];
        $type = $_POST['type'];
        $note = $_POST['notes'];

        // getting the date
        $date= date('l / m / y');

        
        // db connection
        include_once "../inc/connection.inc.php";

        // making sure type is valid
        if ($type == "nothing") {
            header('refresh:0;url=../src/admin/reclamation.php?inserted=false');
        }else{
            // inserting data into reclamations table
            $insertQuery = " INSERT INTO `reclamations`(`date`, `type`, `note`, `user`) VALUES ('$date', '$type', '$note', '$user') ";
            $db->query($insertQuery);

            // redirecting back to Home (request-panel-dashboard)
            header('refresh:0;url=../src/admin/reclamation.php?inserted=true');
        }

    }









