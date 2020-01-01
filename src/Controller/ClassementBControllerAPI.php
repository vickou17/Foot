<?php
// src/Controller/ClassementBControllerAPI.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use App\Entity\Classement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClassementBControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/classementB", methods={"GET", "HEAD"})
      */
    public function classementB()
    { 
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $B = $this->getDoctrine()->getRepository('App:Classement')->findBy(
             array('lettre_gr' => 'B'),
             array('points' => 'DESC'),
         );
        
        $jsonContent = $serializer->serialize($B,'json');
        
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        return $response;
    }
}
?>