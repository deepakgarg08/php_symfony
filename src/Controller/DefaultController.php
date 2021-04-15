<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default/", name="default")
     */

    //     * @Route("/default/{name}", name="default")

    public function index(/*$name*/)
    {
//        return $this->render('default/index.html.twig', [
//            'controller_name' => 'DefaultController',
//        ]);
//        return $this->json(['username' => 'Deepak']);
//        return $this->json(['username' => 'Deepak']);
//        return new Response('Hello  ' .  $name);
//        return $this->redirect("https://www.google.com");

         return $this->redirectToRoute("default2");
//        return new Response('<b>Hello Deepak</b>');

    }

    /**
     * @Route("/default2/", name="default2")
     */
    public function index2()

    {

        return new Response('<b>Hello Deepak from default2</b>');

    }

}
