<?php

class PagesController extends Controller
{
    public function home()
    {
        return $this->render('pages/home');
    }

    public function error()
    {
        return $this->render('pages/error');
    }
}