<?php

namespace Frontend\SchoolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SchoolBundle:Default:index.html.twig', array('name' => $name));
    }
}
