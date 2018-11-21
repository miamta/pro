<?php
namespace AppBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{

      /**
       * @Route("/frontal/", name="homepage")
       */
      public function index(Request $request)
      {
          // replace this example code with whatever you need
          return $this->render('frontal/index.html.twig');
        }

        /**
         * @Route("/frontal/", name="registrarUsuario")
         */
        public function registrarUsuario(Request $request)
        {
            // replace this example code with whatever you need
            return $this->render('frontal/registrarUsuario.html.twig');
          }

          /**
           * @Route("/login/", name="login")
           */
          public function login(Request $request)
          {
              // replace this example code with whatever you need
              return $this->render('login/login.html.twig');
          }

          /**
           * @Route("/contacto/", name="contacto")
           */
          public function contacto(Request $request)
          {
              // replace this example code with whatever you need
              return $this->render('contacto/contacto.html.twig');
          }



    }
