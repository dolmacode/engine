<?php
    if (isset($_GET['cookies_accept'])) {
        setcookie('_ca', 1);
        header('Location: ./?q='.$_GET['q']);
    }

    $q = '';
    if (isset($_GET['q']) and !empty($_GET['q'])) {
        $q = 'q='.$_GET['q'].'&';
    }

    if (!isset($_COOKIE['_ca'])) {
        $ret = '
        <div class="cookies-agreement-container">
            <div class="cac-text">
                Наш сайт использует Cookie-файлы.
            </div>
            
            <div class="cac-btn">
                <a href="?'.$q.'cookies_accept" class="cac-button">Принято</a>
            </div>
        </div>
        ';
        return $ret;
    }