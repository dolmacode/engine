<?php

    $_COOKIE['_pi'] = "";
    $_COOKIE['_di'] = "";
    $_COOKIE['_hsah'] = "";
    $_COOKIE['_eman'] = "";

    unset($_COOKIE['_pi']);
    unset($_COOKIE['_di']);
    unset($_COOKIE['_hsah']);
    unset($_COOKIE['_eman']);

    session_destroy();

    header('Location: ./');