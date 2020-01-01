<?php
// src/Controller/Liste_rencontreController.php
namespace App\Controller;

use App\Entity\Rencontre;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Liste_rencontreController extends AbstractController
{
    /**
      * @Route("/lucky/liste_rencontre")
      */
    public function liste_rencontre()
    {
         $A = $this->getDoctrine()->getRepository('App:Rencontre')->findAll();

        return $this->render('liste_rencontre.html.twig', [
            'A' => $A,
        ]);
    }
}
?> 