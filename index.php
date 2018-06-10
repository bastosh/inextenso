<?php

require 'app/bootstrap.php';

$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/': $controller = (new MotivationController())->show(); break;
    default: $controller = (new PagesController())->error();
}
