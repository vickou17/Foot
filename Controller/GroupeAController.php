<?php
// src/Controller/GroupeAController.php
namespace App\Controller;

use App\Entity\Groupe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GroupeAController extends AbstractController
{
    /**
      * @Route("/lucky/groupeA")
      */
    public function groupeA()
    {
         $A = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
             'lettre' => 'A'
         ]);

        return $this->render('groupeA.html.twig', [
            'A' => $A,
        ]);
    }
}
?>