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
            
            <form class="card-wrap" method="post" action="./register.php" id="form">

                <div class="form-control">
                    <label for="name">Nome</label>
                    <input type="text" id="name" placeholder="Mario" name="name">
                    <small>Error msg</small>
                </div>

                <div class="form-control">
                    <label for="surname">Cognome</label>
                    <input type="text" id="surname" placeholder="Rossi" name="surname">
                    <small>Error msg</small>
                </div>

                <div class="form-control">
                    <label for="emal">E-mail</label>
                    <input type="text" id="email" placeholder="name@example.com" name="email">
                    <small>Error msg</small>
                </div>

                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="scrivila qui" name="password">
                    <small>Error msg</small>
                    <ul class="password">
                        <li>La Password deve contenere:</li>
                        <li>1 Lettera Maiuscola</li>
                        <li>1 Lettera Minuscola</li>
                        <li>Almeno un Numero</li>
                        <li>Almeno 8 Caratteri</li>
                        <li>Può contenere caratteri speciali</li>
                    </ul>
                </div>
                    
                <button type="submit" name="register">Registrati</button>
                
                <a href="./login.html">Hai già un account? <span class="link">Accedi</span></a>
            </form>
    
            
        </div>
    </main>

    <script src="./assets/js/script.js"></script>
</body>

</html>