<?php
// src/Controller/Liste_equipeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class Liste_equipeControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/liste_equipe", methods={"GET", "HEAD"})
      */
    public function liste_equipe()
    {
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $A = $this->getDoctrine()->getRepository('App:Groupe')->findAll();
        
        return $this->render('liste_equipe.html.twig', [
            'A' => $A,
        ]);
        
        $jsonContent = $serializer->serialize($A,'json');
        
        /*$response->headers->set('Content-Type', 'application/json');*/
        $response = new JsonResponse();
        $response->setContent($jsonContent);
        return $response;
    }
}
?>