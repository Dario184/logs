<?php 
    $db = new mysqli("localhost","root","","log");
    if($db->errno){
        die("Error connecting to database");
        exit();
    }
    echo "Connesso correttamente \n";
?>