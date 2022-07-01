<?php
    require_once 'startup.php';
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="all">
    <meta name="title" content="<?= $config['com_name'] ?>">
    <meta name="description" content="<?= $config['meta_description'] ?>">
    <meta name="keywords" content="<?= $config['meta_keywords'] ?>">
    <link rel="icon" type="image/png" href="<?= $config['favicon'] ?>">
    <link rel="stylesheet" type="text/css" href="application/assets/css/public/<?php if(isset($_GET['q']) and !empty($_GET['q'])){echo $_GET['q'];} else echo 'home'; ?>.css">
    <?php foreach($ss as $val): ?>
    <link rel="stylesheet" type="text/css" href="application/assets/css/system/<?= $val ?>">
    <?php endforeach; ?>
    <title><?= $config['com_name'] ?></title>
</head>
<body>
    <div id="top"></div>
    <div id="root">
        <?php

           echo $page_display;
           echo $cookies;
           echo $totop;

        ?>
    </div>
</body>
</html>