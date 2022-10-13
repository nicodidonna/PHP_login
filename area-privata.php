<?php 

session_start();

if(!isset($_SESSION['loggato']) || $_SESSION['loggato'] !== true){

    header("location: ../login.html");
    exit;

}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="stylesheet" href="./bootstrap-italia/css/bootstrap-italia.min.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Privata</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">AREA PRIVATA</h1>
    <?php 
    echo "<h5 class='text-center'>Ciao <span style='color: red;'>".strtoupper($_SESSION['username']). "</span> questa è la tua area privata.</h5>";
    ?>
    
    <div class="row mt-2">
        <div class="col text-center">
    <br>
    <a href="./login.html">
        <button class="btn btn-primary">DISCONNETTI</button>
    </a>
    </div>
    </div>

    </div>
<script>
window.__PUBLIC_PATH__ = './bootstrap-italia/fonts';
</script>
<script src="./bootstrap-italia/js/bootstrap-italia.bundle.min.js"></script>
</body>
</html>