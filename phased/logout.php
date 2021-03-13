<?php 
include "status.php"; 
include "header.php"; 
?> 

<html> 
<head> 
</head> 
<body> 

    <?php 


    if (isset($_COOKIE['phased'])) {
        unset($_COOKIE['phased']);
        setcookie('phased', '', time() - 3600, '/'); 
        session_destroy();
    }

    header("location: index.php");

exit();
?> 
