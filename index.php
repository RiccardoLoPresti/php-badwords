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
        input,textarea{
            margin: 10px 0;
        }
        label{
            font-weight: bold;
        }
        button{
            padding: 5px 20px;
        }
    </style>
    <title>PHP Badwords</title>
</head>
<body> 

    <h1>Benvenuto!</h1>

    <h3>Inserisci qui i tuoi dati:</h3>

    <form action="./landing-page.php" method="POST">
        <label for="paragrafo">Nome:</label><br>
        <input type="text" name="nome" placeholder="Scrivi qui il tuo nome"><br>
        <label for="paragrafo">Paragrafo:</label><br>
        <textarea type="text" name="paragrafo" placeholder="Scrivi qui il paragrafo"></textarea><br>
        <label for="paragrafo">Parola brutta da censurare:</label><br>
        <input type="text" name="parolaccia" placeholder="Scrivi qui la parola brutta"><br>
        <button type="submit">Invia</button>
    </form>
</body>
</html>