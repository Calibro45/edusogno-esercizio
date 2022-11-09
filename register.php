<?php

require_once('./config.php');

$name = $connection->real_escape_string($_POST['name']);
$surname = $connection->real_escape_string($_POST['surname']);
$email = $connection->real_escape_string($_POST['email']);
$password = $connection->real_escape_string($_POST['password']);

$hashedPass = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO utenti(nome, cognome, email, password) VALUES('$name', '$surname', '$email', '$hashedPass')";

if($connection->query($sql) === true) {
    
    header("location: login.html");

} else {

    echo 'errore';
}

