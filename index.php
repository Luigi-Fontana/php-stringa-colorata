<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Primo Esercizio PHP</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <?php
            if (empty($_GET['password'])) {
                $output = 'Inserire password';
            } else {
                $password = $_GET['password'];
                if ($password == 'boolean') {
                    $class = 'ok';
                    $output = 'Password Corretta';
                } else {
                    $class = 'ko';
                    $output = 'Password Errata';
                };
            }
        ?>

        <p class="<?php echo $class; ?>"><?php echo $output; ?></p>
    </body>
</html>
