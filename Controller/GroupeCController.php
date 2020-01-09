<?php
// src/Controller/GroupeCController.php
namespace App\Controller;

use App\Entity\Groupe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GroupeCController extends AbstractController
{
    /**
      * @Route("/lucky/groupeC")
      */
    public function groupeC()
    {
         $C = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
             'lettre' => 'C'
         ]);

        return $this->render('groupeC.html.twig', [
            'C' => $C,
        ]);
    }
}
?>