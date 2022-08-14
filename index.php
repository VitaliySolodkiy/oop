<?php
require_once "./functions/main.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "./elements/menu.php";
    ?>
    <div class="container">
        <?php

        if (file_exists("./pages/$page.php")) { //проверяет есть ли файл по заданному пути. Также может проверять и наличие папки
            require "./pages/$page.php";
        } else {
            echo "<h1>Page not found</h1>";
        }

        /*         if (file_exists('users.txt')) {
            $lines = file('users.txt');
            foreach ($lines as $line) {
                list($currentLogin, $currentEmail, $currentPassword) = explode('|', $line);
                if (password_verify(123456, "$2y$10$.7czCZoNSLkHxoZLPQxnFuH6bywxve41aPAnBPlrnfLgFWMHDSyLS")) {
                    echo "true";
                } else {
                    echo "false";
                }
            }
        } */

        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>