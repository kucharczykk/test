<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
//    private function countUsersAction()
//    {
//        $users = $this->getDoctrine()
//            ->getRepository('AppBundle:users')
//            ->findAll();
//        return $users;
//    }

    public function indexAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');
        $result = $repository->countUsers();

//        $user = $repository->getByUsername('ka31544');




        return $this->render('main/index.html.twig', array(
            'count' => $result,
//            'user' => $user,
        ));
    }
}
