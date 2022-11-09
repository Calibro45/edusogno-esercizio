<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/style.css?v=<?php echo time(); ?>">
    <title>Edusogno</title>
</head>

<body>

    <header>
        <div class="logo">
            <img src="https://edusogno.com/logo-black.svg" alt="">
        </div>
    </header>

    <main>
        
        <div class="container">
            <h1>Crea il tuo account</h1>
            
            <form class="card-wrap" method="post" action="./register.php">

                <label for="name">inserisci il nome</label>
                <input type="text" id="name" placeholder="Mario" name="name" required>
    
                <label for="surname">Inserisci il cognome</label>
                <input type="text" id="surname" placeholder="Rossi" name="surname" required>
    
                <label for="emal">Inserisci l'e-mail</label>
                <input type="text" id="email" placeholder="name@example.com" name="email" required>
    
                <label for="password">Inserisci la password</label>
                <input type="password" id="password" placeholder="scrivila qui" name="password" required>
    
                <button type="submit" name="register">Registrati</button>
                
                <a href="./login.html">Hai già un account? <span class="link">Accedi</span></a>
            </form>
    
            
        </div>
    </main>

</body>

</html>