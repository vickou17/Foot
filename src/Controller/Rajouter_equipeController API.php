<?php
// src/Controller/Rajouter_equipeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Rajouter_equipeController extends AbstractController
{
    /**
      * @Route("/api/lucky/rajouter_equipe", methods={"GET", "HEAD"})
      */
    public function rajouter_equipe()
    {
        

        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $rajouter_equipe = random_int(0, 100);
        
        $jsonContent = $serializer->serialize($rajouter_equipe,'json');
        
        
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        return $response;
    }
}
?>
