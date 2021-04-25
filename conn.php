<?php 
    $db = new mysqli("localhost","root","","logs");
    if($db->errno){
        die("Error connecting to database");
        exit();
    }
    echo "Connesso correttamente \n";
?>