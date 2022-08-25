<?php

    session_start();
    // \/ mesma coisa que o require_once
    // require('vendor/autoload.php');
    require_once __DIR__ .'/vendor/autoload.php';

    define('INCLUDE_PATH_STATIC','http://localhost/redesocialdevweb20_/DankiCode/Views/pages/');
    define('INCLUDE_PATH','http://localhost/redesocialdevweb20_/');

    $app = new DankiCode\Application();

    $app -> run();

?>