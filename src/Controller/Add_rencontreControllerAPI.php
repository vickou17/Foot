<?php
// src/Controller/Add_rencontreControllerAPI.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use App\Entity\Rencontre;
use App\Entity\Classement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;



class Add_rencontreControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/add_rencontre", methods={"GET", "HEAD"})
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
        
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $jsonContent = $serializer->serialize($winner,'json');
        
        
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        return $response;
    }
    
}
?>
