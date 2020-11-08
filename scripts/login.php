<?php

    if(isset($_POST["login-button"])){

        // db access
        include_once "../inc/connection.inc.php";

        #getting login
        $cin = $_POST['cin'];
        $password = $_POST['password'];

        #session
        session_start();

        #if login found in db then proceed, otherwise error message
        $searchQuery = " SELECT * FROM users WHERE cin = '$cin' ; ";
        $executeSearch = $db -> query( $searchQuery );

        if ( $data =  $executeSearch ->fetch()){
            // cin exists
            // making sure the password is correct
            if( $data['pwd'] == $password ){

                #getting the user's data
                $username = $data['username'];
                $rank = $data['rank'];
                $cin = $data['cin'];
                #storing data into a session for futre use
                $_SESSION['username'] = $username;
                $_SESSION['rank'] = $rank;
                $_SESSION['cin'] = $cin;

                // redirecting to controlPanel
                header('refresh:0;url=../src/admin/controlPanel.php');
            }else{
                // redirecting back to Home page
                header('refresh:0;url=../index.php?login=wrong');
            }
        }else{
            // redirecting back to Home page
            header('refresh:0;url=../index.php?login=wrong');
        }
    }

?>