<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/number")
      */
    public function number()
    {
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        $number = random_int(0, 100);
        
        $jsonContent = $serializer->serialize($number,'json');
        
/*        return new liste_groupe(
            '<html><body>Lucky creer_groupe: '.$creer_.'</body></html>'
        );*/
        
        $response = new JsonResponse();
        $response->setContent($jsonContent);
        return $response;

    }
}
?>