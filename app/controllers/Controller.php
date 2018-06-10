<?php

class Controller
{
    public function render($view, $args = [])
    {
        extract($args);
        return require VIEWS.$view.'.php';
    }
}