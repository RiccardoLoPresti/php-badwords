<?php

$nome = $_POST['nome'];
$paragrafo = $_POST['paragrafo'];
$parolaccia = $_POST['parolaccia'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <title>Landing-Page</title>
</head>
<body>
    <h1>Ciao <?php echo ucwords($nome) ?>!</h1>

    <h3>Questo è il tuo paragrafo:</h3>
    <p><?php echo $paragrafo ?></p>
    <h3>La sua lunghezza è di:</h3>
    <p><?php echo strlen($paragrafo) ?></p>

    <?php
    
    $array_paragrafo = explode(' ', $paragrafo);
    $paragrafo_censurato = str_replace($parolaccia,'***',$paragrafo);

    ?>

    <h3>Questo è il tuo paragrafo cesurato, fai il bravo:</h3>
    <p><?php echo $paragrafo_censurato ?></p>
    <h3>La sua lunghezza è di:</h3>
    <p><?php echo strlen($paragrafo_censurato) ?></p>

</body>
</html>