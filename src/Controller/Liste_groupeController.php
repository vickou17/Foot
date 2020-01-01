<?php
// src/Controller/Liste_groupeController.php
namespace App\Controller;

use App\Entity\Groupe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Liste_groupeController extends AbstractController
{
    /**
      * @Route("/lucky/liste_groupe")
      */
    public function liste_groupe()
    {
         $A = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
             'lettre' => 'A'
         ]);
        
        $B = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
            'lettre' => 'B'
        ]);
        
        $C = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
            'lettre' => 'C'
        ]);
        
        $D = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
            'lettre' => 'D'
        ]);
        
        $E = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
            'lettre' => 'E'
        ]);
        
        $F = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
            'lettre' => 'F'
        ]); 

        return $this->render('liste_groupe.html.twig', [
            'A' => $A,
            'B' => $B,
            'C' => $C,
            'D' => $D,
            'E' => $E,
            'F' => $F,
        ]);
    }
}
?>