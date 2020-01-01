<?php
// src/Controller/GroupeEControllerAPI.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use App\Entity\Groupe;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GroupeEControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/groupeE", methods={"GET", "HEAD"})
      */
    public function groupeE()
    {
        $encoders = array(new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
         $E = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
             'lettre' => 'E'
         ]);

        $jsonContent = $serializer->serialize($E,'json');
        
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        return $response;
    }
}
?>