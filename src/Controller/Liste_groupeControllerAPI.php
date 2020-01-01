<?php
// src/Controller/Liste_groupeControllerAPI.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use App\Entity\Groupe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Liste_groupeControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/liste_groupe", methods={"GET", "HEAD"})
      */
    public function liste_groupeA()
    {
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $A = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
            'lettre' => 'A'
        ]);
        
        $jsonContent = $serializer->serialize($A,'json');
        
        $responseA = new JsonResponse();
        $responseA->headers->set('Content-Type', 'application/json');
        $responseA->setContent($jsonContent);
        return $responseA;
    }
    
    public function liste_groupeB()
    {
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $B = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
            'lettre' => 'B'
        ]);
        
        $jsonContent = $serializer->serialize($B,'json');
        
        $responseB = new JsonResponse();
        $responseB->headers->set('Content-Type', 'application/json');
        $responseB->setContent($jsonContent);
        return $responseB;
    }
    
    public function liste_groupeC()
    {
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $C = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
            'lettre' => 'C'
        ]);
        
        $jsonContent = $serializer->serialize($C,'json');
        
        $responseC = new JsonResponse();
        $responseC->headers->set('Content-Type', 'application/json');
        $responseC->setContent($jsonContent);
        return $responseC;
    }
    
    public function liste_groupeD()
    {
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $D = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
            'lettre' => 'D'
        ]);
        
        $jsonContent = $serializer->serialize($D,'json');
        
        $responseD = new JsonResponse();
        $responseD->headers->set('Content-Type', 'application/json');
        $responseD->setContent($jsonContent);
        return $responseD;
    }
    
    public function liste_groupeE()
    {
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $E = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
            'lettre' => 'E'
        ]);
        
        $jsonContent = $serializer->serialize($E,'json');
        
        $responseE = new JsonResponse();
        $responseE->headers->set('Content-Type', 'application/json');
        $responseE->setContent($jsonContent);
        return $responseE;
    }
    
    public function liste_groupeF()
    {
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $F = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
            'lettre' => 'F'
        ]);
        
        $jsonContent = $serializer->serialize($F,'json');
        
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        return $response;
    }
}
?>