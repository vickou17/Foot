<?php
// src/Controller/ClassementFController.php
namespace App\Controller;

use App\Entity\Classement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClassementFController extends AbstractController
{
    /**
      * @Route("/lucky/classementF")
      */
    public function classementF()
    {
        $F = $this->getDoctrine()->getRepository('App:Classement')->findBy(
             array('lettre_gr' => 'F'),
             array('points' => 'DESC')
            
         );
        
        return $this->render('classementF.html.twig', [
            'F' => $F,
        ]);
    }
}
?>