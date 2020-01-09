<?php
// src/Controller/Add_rencontreController.php
namespace App\Controller;

use App\Entity\Rencontre;
use App\Entity\Classement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;



class Add_rencontreController extends AbstractController
{
    /**
      * @Route("/lucky/add_rencontre")
      */

    
    public function yourAction(Request $request){
        $equipe1 = $request->get('equipe1');
        $equipe2 = $request->get('equipe2');
        $resultat1 = $request->get('resultat1');
        $resultat2 = $request->get('resultat2');
        $lettre = $request->get('lettre');
        
        if($resultat1 > $resultat2){
            $winner = $equipe1;
        }
        elseif($resultat1 < $resultat2){
            $winner = $equipe2;
        }
        else{
            $winner = 'inexistant haha :P';
        }
        
        $entityManager = $this->getDoctrine()->getManager();    
        
        $rencontre = new Rencontre();
        $rencontre->setResultatDom($resultat1);
        $rencontre->setResultatExt($resultat2);
        $rencontre->setNomDom($equipe1);
        $rencontre->setNomExt($equipe2);
        $rencontre->setLettreGroupe($lettre);
        
        $entityManager->persist($rencontre);       
        $entityManager->flush();
        
        
        
        $classement = new Classement();
        
        $A = $this->getDoctrine()->getRepository('App:Classement')->findBy([
            'lettre_gr' => $lettre,
        ]);
        
        $length = count($A,COUNT_NORMAL);
        for($i=0; $i<$length; $i++){
            if($A[$i]->getNomEq() == $equipe1){
                $A[$i]->setButEq($A[$i]->getButEq()+$resultat1);
                $A[$i]->setNbMatch($A[$i]->getNbMatch()+1);
                
                if($resultat1 > $resultat2){
                    $A[$i]->setPoints($A[$i]->getPoints()+3);
                }
                if($resultat1 == $resultat2){
                    $A[$i]->setPoints($A[$i]->getPoints()+1);
                }
                //$entityManager->persist($classement);       
                $entityManager->flush();
            }
            if($A[$i]->getNomEq() == $equipe2){
                $A[$i]->setButEq($A[$i]->getButEq()+$resultat2);
                $A[$i]->setNbMatch($A[$i]->getNbMatch()+1);
                
                if($resultat2 > $resultat1){
                    $A[$i]->setPoints($A[$i]->getPoints()+3);
                }
                if($resultat1 == $resultat2){
                    $A[$i]->setPoints($A[$i]->getPoints()+1);
                }
                //$entityManager->persist($classement);       
                $entityManager->flush();
            }            
            
        }
        
        
    
        
        /*if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $classement = $form->getData();
    
            if($classement['nom_eq'] == $equipe1){
                $classement['but_eq'] += $resultat1;
            }
            if($classement['nom_eq'] == $equipe2){
                $classement['but_eq'] += $resultat2;
            }
             
            $entityManager->persist($classement);       
            $entityManager->flush();
        }*/
        
        
        return $this->render('add_rencontre.html.twig', [
            'equipe1' => $equipe1,
            'equipe2' => $equipe2,
            'resultat1' => $resultat1,
            'resultat2' => $resultat2,
            'lettre' => $lettre,
            'winner' => $winner,
        ]);
    }
    
}
?>
