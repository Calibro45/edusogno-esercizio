<?php

session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {

    header("location: login.html");
    exit;

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css?v=<?php echo time(); ?>">
    <title>Area Personale</title>
</head>
<body>

    <header>
        <div class="logo">
            <img src="https://edusogno.com/logo-black.svg" alt="">
        </div>
        <button>
            <a class="logout" href="logout.php">Disconnettiti</a>
        </button>
    </header>

    <main>
        <div class="container-lg">
            <h1>Ciao <span class="user-name"><?=$_SESSION['name']?></span> ecco i tuo eventi</h1>

            <div class="card-container">

            <?php foreach($_SESSION['events'] as $event) { ?>

                <div class="card-wrap">
                    <h2 class="card-title"><?= $event['nome_evento']?></h2>
                    <p class="card-text"><?= substr($event['data_evento'], 0, -3)?></p>
                    <button class="card-button">join</button>
                </div>
                
            <?php } ?>
                
            </div>
        </div>
    </main>
</body>
</html>