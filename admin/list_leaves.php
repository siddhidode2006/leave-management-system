<?php 
    include '../include/db-connection.php';
    include '../include/session.php';
    
    // Check if user is logged in
    checkLogin();
    
    // Check if user is admin
    if (!isAdmin()) {
        header('Location: ../login.php');
        exit();
    }
    include '../templates/admin-header.php';
?>