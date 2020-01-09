<?php
// src/Controller/ClassementAController.php
namespace App\Controller;

use App\Entity\Classement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClassementAController extends AbstractController
{
    /**
      * @Route("/lucky/classementA")
      */
    public function classementA()
    { 
        $A = $this->getDoctrine()->getRepository('App:Classement')->findBy(
             array('lettre_gr' => 'A'),
             array('points' => 'DESC'),
         );
        
        return $this->render('classementA.html.twig', [
            'A' => $A,
        ]);
    }
}
?>