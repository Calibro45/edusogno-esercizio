<?php

$user = 'root';
$password = 'root';
$db = 'edusogno';
$host = 'localhost';
$port = 3306;

$connection = new mysqli($host, $user, $password, $db);

if($connection === false) {

    die('errore durante la connessione: ' . $connection->connect_error);
}

