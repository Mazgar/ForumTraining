<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends Controller
{

    public function indexAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {

    }

    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
    {

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('User/login.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
        ));

    }

  
}
