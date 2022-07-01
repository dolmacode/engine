<?php

    session_start();
    $db = require_once 'application/engine/db.php';
    $config = require_once 'application/engine/config.php';
    $ss = require_once 'application/engine/stylesheets.php';

    $header = require_once 'application/engine/templates/header.php';
    $footer = require_once 'application/engine/templates/footer.php';
    $cookies = require_once 'application/engine/templates/cookies.php';
    $totop = require_once 'application/engine/templates/totop.php';

    if (!empty($_GET['q'])) {
        switch ($_GET['q']) {
            case 'auth':
                $page_display = require_once 'public/auth.php';
                break;
            case 'logout':
                $page_display = require_once 'public/logout.php';
                break;
            case 'admin':
                $page_display = require_once 'public/admin.php';
                break;
            default:
                $page_display = require_once 'public/home.php';
        }
    } else $page_display = require_once 'public/home.php';