<?php
// src/Controller/GroupeFController.php
namespace App\Controller;

use App\Entity\Groupe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GroupeFController extends AbstractController
{
    /**
      * @Route("/lucky/groupeF")
      */
    public function groupeF()
    {
         $F = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
             'lettre' => 'F'
         ]);

        return $this->render('groupeF.html.twig', [
            'F' => $F,
        ]);
    }
}
?>