<?php
    var_dump(isset($titrePage));
    $titrePage;
    var_dump(isset($titrePage));

    $titrePage = 'Titre de la page';

    var_dump($titrePage);
    var_dump(isset($titrePage));
    var_dump('Est ce que ma variable existe : ' . isset($titrePage));

    var_dump(empty($titrePage));
    var_dump('Est ce que ma variable est vide : ' . empty($titrePage));
    unset($titrePage);
    var_dump(isset($titrePage));

    var_dump(defined('MA_CONSTANTE'));
    define('MA_CONSTANTE', 'version php : '.phpversion());
    var_dump(MA_CONSTANTE);
    var_dump(defined('MA_CONSTANTE'));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $titrePage ?></title>
</head>
<body>
<h1>
    <?php
    echo 'Hello World';
    ?>
</h1>
</body>
</html>

