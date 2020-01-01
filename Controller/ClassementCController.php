<?php
// src/Controller/ClassementCController.php
namespace App\Controller;

use App\Entity\Classement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClassementCController extends AbstractController
{
    /**
      * @Route("/lucky/classementC")
      */
    public function classementC()
    {
        $C = $this->getDoctrine()->getRepository('App:Classement')->findBy(
             array('lettre_gr' => 'C'),
             array('points' => 'DESC')
            
         );
        
        return $this->render('classementC.html.twig', [
            'C' => $C,
        ]);
    }
}
?>