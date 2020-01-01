<?php
// src/Controller/ClassementEControllerAPI.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use App\Entity\Classement;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClassementEControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/classementE", methods={"GET", "HEAD"})
      */
    public function classementE()
    { 
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $E = $this->getDoctrine()->getRepository('App:Classement')->findBy(
             array('lettre_gr' => 'E'),
             array('points' => 'DESC'),
         );
        
        $jsonContent = $serializer->serialize($E,'json');
        
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        return $response;
    }
}
?>