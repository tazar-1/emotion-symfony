<?php

namespace AppBundle\Controller;

use EmotionBundle\Form\UsersType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use EmotionBundle\Entity\Users;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        return $this->render('EmotionBundle:Default:index.html.twig', array(
            'User' => $user
        ));
    }

    public function CompteAction(){

        #$em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
            #$em->getRepository('EmotionBundle:Users')->find($id);
        return $this->render('EmotionBundle:Default:profile.html.twig', array(
            'User' => $user));
    }
}
