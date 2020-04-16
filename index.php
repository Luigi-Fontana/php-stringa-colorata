<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Primo Esercizio PHP</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <?php
            $password = $_GET['password'];
            if ($password == 'boolean') {
                echo '<p class="ok">La password è corretta</p>';
            } elseif ($password == '') {
                echo '<p>Inserisci la password</p>';
            } else {
                echo '<p class="ko">La password è sbagliata</p>';
            };
        ?>


    </body>
</html>
