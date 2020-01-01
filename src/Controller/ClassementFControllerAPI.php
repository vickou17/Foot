<?php
// src/Controller/ClassementFControllerAPI.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use App\Entity\Classement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClassementFControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/classementF", methods={"GET", "HEAD"})
      */
    public function classementF()
    { 
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $F = $this->getDoctrine()->getRepository('App:Classement')->findBy(
             array('lettre_gr' => 'F'),
             array('points' => 'DESC'),
         );
        
        $jsonContent = $serializer->serialize($F,'json');
        
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        return $response;
    }
}
?>