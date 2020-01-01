<?php
// src/Controller/Delete_rencontreControllerAPI.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

use App\Entity\Rencontre;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Delete_rencontreControllerAPI extends AbstractController
{
    /**
      * @Route("/api/lucky/delete_rencontre", methods={"GET", "HEAD"})
      */
    public function delete_rencontre(Request $request)
    {
        $encoders = array( new JsonEncoder());
        $normalizers = array(new ObjectNormalizer());
        $serializer = new Serializer($normalizers, $encoders);
        
        $entityManager = $this->getDoctrine()->getManager();
        $equipe1 = $request->get('equipe1');
        $equipe2 = $request->get('equipe2');
        
        $val = $this->getDoctrine()->getRepository('App:Rencontre')->findOneBy([
         'nom_dom' => $equipe1,
         'nom_ext' => $equipe2,
        ]);
            
        $entityManager->remove($val);
        $entityManager->flush();
        
        $jsonContent = $serializer->serialize($equipe1,'json');
                
        
        $response = new JsonResponse();
        $response->headers->set('Content-Type', 'application/json');
        $response->setContent($jsonContent);
        return $response;
    }
    
}
?>