<?php 
    require 'conn.php';
    if (isset($_POST['username']) and isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!$db->query("SELECT email,password FROM email='$email' && password='$password'")){
            $db->query("INSERT INTO (email,password) VALUES ('$email,$password')");
        }
        session_start();
        $_SESSION['user'] = $username;
        echo "Loggato con successo";
    }
?>