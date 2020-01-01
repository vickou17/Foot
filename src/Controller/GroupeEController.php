<?php
// src/Controller/GroupeEController.php
namespace App\Controller;

use App\Entity\Groupe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GroupeEController extends AbstractController
{
    /**
      * @Route("/lucky/groupeE")
      */
    public function groupeE()
    {
         $E = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
             'lettre' => 'E'
         ]);

        return $this->render('groupeE.html.twig', [
            'E' => $E,
        ]);
    }
}
?>