<?php 
if (!isset($_SESSION)) {
    session_start();
  }

$loggedin = false; 

if(isset($_SESSION["loggedin"])) { 

    $loggedin=true; 
}



?> 