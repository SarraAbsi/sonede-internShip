<?php

    if (isset($_POST['decline-account'])) {
        // getting data from form
        $cin = $_POST['cin'];

        // connecting to db
        include_once "../inc/connection.inc.php";

        // inserting data into RANK table
        $deleteQuery = " DELETE FROM `admin` WHERE cin = '$cin'; ";
        $db->query($deleteQuery);

        // redirecting back to Home (request-panel-dashboard)
        header('refresh:0;url=../src/admin/admin-accounts.php?deleted=true');

        // end of IF
    }


