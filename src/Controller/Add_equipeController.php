<?php
// src/Controller/Add_equipeController.php
namespace App\Controller;

use App\Entity\Groupe;
use App\Entity\Classement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;



class Add_equipeController extends AbstractController
{
    /**
      * @Route("/lucky/add_equipe")
      */

    
    public function yourAction(Request $request){
        $equipe = $request->get('equipe');
        $lettre = $request->get('lettre');
        
        $entityManager = $this->getDoctrine()->getManager();
        
        $groupe = new Groupe();
        $groupe->setName($equipe);
        $groupe->setLettre($lettre);
        $groupe->setIdGroupe(0);
        
        $entityManager->persist($groupe);       
        $entityManager->flush();
        
        $classement = new Classement();
        $classement->setNomEq($equipe);
        $classement->setLettreGr($lettre);
        $classement->setButEq(0);
        $classement->setPoints(0);
        $classement->setNbMatch(0);
        
        $entityManager->persist($classement);       
        $entityManager->flush();
        
        return $this->render('add_equipe.html.twig', [
            'equipe' => $equipe,
            'lettre' => $lettre,
        ]);
    }
}
?>
