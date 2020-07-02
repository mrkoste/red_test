<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';
$Core = new \RedT\Core();


    $Core->isAjax = true;
    $Core->handleRequest();
