<?php

require_once('./config.php');

$email = $connection->real_escape_string($_POST['email']);
$password = $connection->real_escape_string($_POST['password']);

if($_SERVER["REQUEST_METHOD"] == 'POST') {

    $sql_select = "SELECT * FROM utenti WHERE email = '$email'";
    $sqlSelectEvent = "SELECT * FROM `eventi` WHERE attendees LIKE '%{$email}%';";

    if($result = $connection->query($sql_select)) {

        if($result->num_rows == 1) {

            $row = $result->fetch_array(MYSQLI_ASSOC);

            if(password_verify($password, $row['password'])) {

                session_start();

                $resultEvent = $connection->query($sqlSelectEvent);

                if($resultEvent->num_rows > 0) {

                    $events = [];
    
                    while($rowEvent = $resultEvent->fetch_array(MYSQLI_ASSOC)) {
    
                        array_push($events, $rowEvent);
                    }
                }

                $_SESSION['logged'] = true;
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['nome'];
                $_SESSION['events'] = $events;

                header("location: pagina-personale.php");

            } else {

                echo 'la password non è corretta';
            }

        } else {

            echo 'non ci sono utenti con questa mail';
    
        }

    } else {

        echo 'errore in fase di login';
    }

    $connection->close();
}