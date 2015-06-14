<?php

namespace Academy\Bundle\JoinBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcademyJoinBundle:Default:index.html.twig', array('name' => $name));
    }
}
