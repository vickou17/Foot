<?php
// src/Controller/Liste_rencontreControllerAPI.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use App\Entity\Rencontre;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Liste_rencontreControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/liste_rencontre", methods={"GET", "HEAD"})
      */
    public function liste_rencontre()
    {
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $A = $this->getDoctrine()->getRepository('App:Rencontre')->findAll();
        
        $jsonContent = $serializer->serialize($A,'json');

        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        return $response;
    }
}
?> 