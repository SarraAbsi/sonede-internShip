<?php
    
    if (isset($_POST['accept'])) {
        // getting data from form
        $cin = $_POST['cin'];
        $rank = $_POST['rank'];

        // connecting to db
        include_once "../inc/connection.inc.php";

        // copying data into wanted table
        $insertQuery = " INSERT INTO users (`cin`, `username`, `pwd`, `rank`) SELECT `cin`, `username`, `pwd`, `rank` FROM `requests` WHERE `cin` = $cin; ";
        $db->query($insertQuery);
        // deleting data from request table
        $db->query(" DELETE FROM `requests`  WHERE `cin` = $cin; ");

        // redirecting back to Home (request-panel-dashboard)
        header('refresh:0;url=../src/admin/requests.php?accepted=true');

        // end of IF
    }


    if (isset($_POST['decline'])) {
        // getting data from form
        $cin = $_POST['cin'];

        // connecting to db
        include_once "../inc/connection.inc.php";

        // inserting data into RANK table
        $deleteQuery = " DELETE FROM `requests` WHERE cin = '$cin'; ";
        $db->query($deleteQuery);

        // redirecting back to Home (request-panel-dashboard)
        header('refresh:0;url=../src/admin/requests.php?deleted=true');

        // end of IF
    }


