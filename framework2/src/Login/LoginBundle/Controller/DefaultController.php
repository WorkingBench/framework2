<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Login\LoginBundle\Entity\Users;
use Login\LoginBundle\Models\Login;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $user = $this->getDoctrine()
                ->getRepository('LoginLoginBundle:Users');
        if ($request->getMethod() == 'POST') {
            $session->clear();
            $username = $request->get('username');
            $email = $request->get('email');
            $password = md5($request->get('password'));
            $remember = $request->get('remember');

            $user = $this->getDoctrine()
                    ->getRepository('LoginLoginBundle:Users')
                    ->findOneBy(array(
                'username' => $username,
                'password' => $password
            ));

            if ($user) {
                if ($remember == 'remember-me') {
                    $login = new Login();
                    $login->setUsername($username);
                    $login->setPassword($password);
                    $login->setEmail($email);
                    $session->set('login', $login);
                }
                return $this->render('LoginLoginBundle:Default:welcome.html.twig');
            } else {
                return $this->render('LoginLoginBundle:Default:login.html.twig', array('name' => 'Login Failed!'));
            }
        } else {
            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $user = $this->getDoctrine()
                        ->getRepository('LoginLoginBundle:Users')
                        ->findOneBy(array(
                    'username' => $username,
                    'password' => $password
                ));
                if ($user) {
                    return $this->render('LoginLoginBundle:Default:welcome.html.twig');
                }
            }
        }
        return $this->render('LoginLoginBundle:Default:login.html.twig');
    }

    public function signupAction(Request $request) {
        if ($request->getMethod() == "POST") {
            $username = $request->get('username');
            $email = $request->get('email');
            $password = $request->get('password');

            $user = new Users();
            $user->setUsername($username);
            $user->setEmail($email);
            $user->setType('U');
            $user->setPassword(md5($password));
            $en = $this->getDoctrine()->getManager();
            $en->persist($user);
            $en->flush();
        }
        return $this->render('LoginLoginBundle:Default:signup.html.twig');
    }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('LoginLoginBundle:Default:login.html.twig');
    }

    public function welcomeAction() {
        return $this->render('LoginLoginBundle:Default:welcome.html.twig');
    }

    public function forumAction() {
        return $this->render('LoginLoginBundle:Default:forum.html.twig');
    }

    public function profileAction() {
        return $this->render('LoginLoginBundle:Default:profile.html.twig');
    }
}
