<?php
// src/Controller/ClassementDController.php
namespace App\Controller;

use App\Entity\Classement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClassementDController extends AbstractController
{
    /**
      * @Route("/lucky/classementD")
      */
    public function classementD()
    {
        $D = $this->getDoctrine()->getRepository('App:Classement')->findBy(
             array('lettre_gr' => 'D'),
             array('points' => 'DESC')
            
         );
        
        return $this->render('classementD.html.twig', [
            'D' => $D,
        ]);
    }
}
?>