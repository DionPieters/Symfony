<?php

namespace clientsBundle\Controller;

use clientsBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction() {
        return $this->render('clientsBundle:Default:index.html.twig');
    }
}
