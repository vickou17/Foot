<?php
// src/Controller/Liste_equipeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class Liste_equipeController extends AbstractController
{
    /**
      * @Route("/lucky/liste_equipe")
      */
    public function liste_equipe()
    {
         $A = $this->getDoctrine()->getRepository('App:Groupe')->findAll();
        
        return $this->render('liste_equipe.html.twig', [
            'A' => $A,
        ]);
    }
}
?>