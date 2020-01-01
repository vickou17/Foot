<?php
// src/Controller/Add_equipeControllerAPI.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use App\Entity\Groupe;
use App\Entity\Classement;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;



class Add_equipeControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/add_equipe", methods={"GET", "HEAD"})
      */ 
    public function yourAction(Request $request){
        global $equipe;
        global $lettre;
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
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
        
        $jsonContent = $serializer->serialize($equipe,'json');
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        return $response;
    }
    
    public function equipe(){
        
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        //$equipe = $request->get('equipe');
        
        $jsonContent = $serializer->serialize($equipe,'json');
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        
        return $response;
    }
    
    
}
?>
