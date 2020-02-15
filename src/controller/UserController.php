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

}


