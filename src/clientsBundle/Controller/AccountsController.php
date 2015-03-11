<?php

namespace clientsBundle\Controller;

use clientsBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccountsController extends Controller
{
    public function indexAction()
    {  
	    $users = $this->getDoctrine()
	        ->getRepository('clientsBundle:user')
	        ->findAllJoinedToPermission();

	    // exit(\Doctrine\Common\Util\Debug::dump($users)); 

        return $this->render('clientsBundle:Accounts:accounts.html.twig', array('users' => $users));
    }

    public function accountInfoAction($id)
    {
    	$userInfo = $this->getDoctrine()
	        ->getRepository('clientsBundle:user')
	        ->findOneByUsernameJoinedToPermission($id);

        // exit(\Doctrine\Common\Util\Debug::dump($userInfo));
    	return $this->render('clientsBundle:Accounts:accountDetail.html.twig', array('userInfo' => $userInfo));
    }
}
