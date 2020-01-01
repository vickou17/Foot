<?php
// src/Controller/ClassementEController.php
namespace App\Controller;

use App\Entity\Classement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClassementEController extends AbstractController
{
    /**
      * @Route("/lucky/classementE")
      */
    public function classementE()
    {
        $E = $this->getDoctrine()->getRepository('App:Classement')->findBy(
             array('lettre_gr' => 'E'),
             array('points' => 'DESC')
            
         );
        
        return $this->render('classementE.html.twig', [
            'E' => $E,
        ]);
    }
}
?>