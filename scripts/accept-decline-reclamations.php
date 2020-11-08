<?php
    
    if (isset($_POST['accept'])) {

        // redirecting back to Home (request-panel-dashboard)
        header('refresh:0;url=../src/admin/reclamationAdmin.php?reclamation=followed');

        // end of IF
    }


    if (isset($_POST['mute'])) {
        // getting data from form
        $id = $_POST['id'];

        // connecting to db
        include_once "../inc/connection.inc.php";

        // inserting data into RANK table
        $deleteQuery = " DELETE FROM `reclamations` WHERE id = '$id'; ";
        $db->query($deleteQuery);

        // redirecting back to Home (request-panel-dashboard)
        header('refresh:0;url=../src/admin/reclamationAdmin.php?reclamation=muted');

        // end of IF
    }


