<?php 
// header
include('inc/partials/header.php');


    session_start();

    if ( isset( $_SESSION ['username'] ) ){
        // user already logged in, redirect
        header('refresh:1;url=src/admin/controlPanel.php');
    }else{
        // no user is logged in
        include('inc/home/main-side-panel.php');
        include('inc/home/request-form.php');
    }


//  footer
include('inc/partials/footer.php');