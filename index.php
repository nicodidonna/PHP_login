<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="./bootstrap-italia/css/bootstrap-italia.min.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Registrazione PHP</title>
</head>
<body>
    <div class="container">
    

<form action="php/register.php" method="POST">

    <h3 class="text-center">REGISTRAZIONE</h3>

    <label for="email">Inserisci la tua emai</label>
    <input type="email" name="email" id="email" required>

    <label for="username">Inserisci username</label>
    <input type="text" name="username" id="username" required>

    <label for="password">Inserisci password</label>
    <input type="password" name="password" id="password" required>

    <button type="submit" class="btn  btn-primary mt-2">REGISTRATI</button>
    <p class="mt-1">Hai già un account? <a href="login.html"><b>ACCEDI</b></a></p>

</form>

    </div>
<script>
window.__PUBLIC_PATH__ = './bootstrap-italia/fonts';
</script>
<script src="./bootstrap-italia/js/bootstrap-italia.bundle.min.js"></script>
</body>
</html>