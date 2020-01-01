<?php
// src/Controller/GroupeBController.php
namespace App\Controller;

use App\Entity\Groupe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GroupeBController extends AbstractController
{
    /**
      * @Route("/lucky/groupeB")
      */
    public function groupeB()
    {
         $B = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
             'lettre' => 'B'
         ]);

        return $this->render('groupeB.html.twig', [
            'B' => $B,
        ]);
    }
}
?>