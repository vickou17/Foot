<?php
// src/Controller/ClassementCControllerAPI.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use App\Entity\Classement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClassementCControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/classementC", methods={"GET", "HEAD"})
      */
    public function classementC()
    { 
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $C = $this->getDoctrine()->getRepository('App:Classement')->findBy(
             array('lettre_gr' => 'C'),
             array('points' => 'DESC'),
         );
        
        $jsonContent = $serializer->serialize($C,'json');
        
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        return $response;
    }
}
?>