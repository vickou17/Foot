<?php

namespace App\Controller;

use App\Entity\Groupe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class GroupeController extends AbstractController
{
    /**
     * @Route("/groupe", name="groupe")
     */
   /* public function index()
    {
        return $this->render('groupe/index.html.twig', [
            'controller_name' => 'GroupeController',
        ]);
    }*/
    public function createGroupe(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $groupe = new Groupe();
        $groupe->setName('Paris SG');
        $groupe->setLettre('B');
        $groupe->setIdGroupe(4);
        
        $entityManager->persist($groupe);
        
        $entityManager->flush();
    
            
        //$number = random_int(0, 100);

        return new Response('Saved new product with id '.$groupe->getId());
    }
    
}
    
    

    

