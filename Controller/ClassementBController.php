<?php
// src/Controller/ClassementBController.php
namespace App\Controller;

use App\Entity\Classement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClassementBController extends AbstractController
{
    /**
      * @Route("/lucky/classementB")
      */
    public function classementB()
    {
        $B = $this->getDoctrine()->getRepository('App:Classement')->findBy(
             array('lettre_gr' => 'B'),
             array('points' => 'DESC')
            
         );
        
        return $this->render('classementB.html.twig', [
            'B' => $B,
        ]);
    }
}
?>