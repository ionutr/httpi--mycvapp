<?php

namespace Httpi\Mycv\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HttpiMycvAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}
