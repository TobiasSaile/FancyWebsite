<?php

namespace FancyWebsite\Controller;

use FancyWebsite\view\view;

class DefaultController{
    public function index()
    {
        $view = new View('default/index');
        $view->title = 'Startseite';
        $view->heading = 'Startseite';
        $view->display();
    }
}