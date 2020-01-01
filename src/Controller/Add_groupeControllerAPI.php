<?php
// src/Controller/Add_groupeControllerAPI.php
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



class Add_groupeControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/add_groupe", methods={"GET", "HEAD"})
      */
    public function yourAction(Request $request){
        $equipe1 = $request->get('equipe1');
        $equipe2 = $request->get('equipe2');
        $equipe3 = $request->get('equipe3');
        $equipe4 = $request->get('equipe4');
        $lettre = $request->get('lettre');
        
        $entityManager = $this->getDoctrine()->getManager();
        
        for ($i = 1; $i<5; $i++){
            $a = (string)$i;
            $b = "equipe" . $a;
            $equipe = $request->get($b);
            
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
        }
        
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        
        $jsonContent = $serializer->serialize($lettre,'json');
                
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        return $response;
    }
}
?>
