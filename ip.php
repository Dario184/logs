<?php
    require 'conn.php';
    $ip = $_SERVER['REMOTE_ADDR'];
    echo $ip;
    if (isset($_POST['email']) and isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email . " " . $password . "\n";
        $db->query("INSERT INTO log_user (mail,password) VALUES ('$email','$password')");
        if($result = $db->query("SELECT * FROM log_user WHERE mail='$email'")){
            $idc = $result->fetch_row()[0];
            $db->query("INSERT INTO log_IP (IP,Dotted_decimal) VALUES ('$idc','$ip')");
        }
        session_start();
        $_SESSION['user'] = $email;
        echo "Loggato con successo";
    }
?>

