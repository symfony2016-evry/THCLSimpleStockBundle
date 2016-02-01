<?php

namespace SYMSimpleStockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SYMSimpleStockBundle:Default:index.html.twig');
    }
}
