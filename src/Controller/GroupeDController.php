<?php
// src/Controller/GroupeDController.php
namespace App\Controller;

use App\Entity\Groupe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GroupeDController extends AbstractController
{
    /**
      * @Route("/lucky/groupeD")
      */
    public function groupeD()
    {
         $D = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
             'lettre' => 'D'
         ]);

        return $this->render('groupeD.html.twig', [
            'D' => $D,
        ]);
    }
}
?>