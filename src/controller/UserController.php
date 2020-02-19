<?php

namespace Project\Controller;

use Twig\Environment;
//use Tracy\Debugger;
//Debugger::enable();
use Project\Model;

class UserController
{

    protected $twig = null;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function home()
    {
        return $this->twig->render('home.twig');
    }

    public function contact()
    {
        return $this->twig->render('contact.twig');
    }

    public function parcours()
    {
        return $this->twig->render('parcours.twig');
    }

    public function realisation()
    {
        return $this->twig->render('realisation.twig');
    }
}


