<?php

namespace BooksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BooksBundle:Default:index.html.twig');
    }
}
