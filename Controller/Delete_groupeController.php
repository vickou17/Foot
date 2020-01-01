<?php
// src/Controller/Delete_groupeController.php
namespace App\Controller;

use App\Entity\Groupe;
use App\Entity\Classement;
use App\Entity\Rencontre;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Delete_groupeController extends AbstractController
{
    /**
      * @Route("/lucky/delete_groupe")
      */
    public function delete_groupe(Request $request)
    {
         /*$A = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
             'lettre' => 'A'
         ]);*/
        $entityManager = $this->getDoctrine()->getManager();
        $lettre = $request->get('lettre');
        
        $val = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
         'lettre' => $lettre
        ]);
        
        $length = count($val, COUNT_NORMAL);
        for($i=0; $i<$length; $i++){
            $entityManager->remove($val[$i]);
            $entityManager->flush();
        }
        
        
        $val2 = $this->getDoctrine()->getRepository('App:Classement')->findBy([
         'lettre_gr' => $lettre
        ]);
        
        $length2 = count($val2, COUNT_NORMAL);
        for($i=0; $i<$length2; $i++){
            $entityManager->remove($val2[$i]);
            $entityManager->flush();
        }
        
        $val3 = $this->getDoctrine()->getRepository('App:Rencontre')->findBy([
         'lettre_groupe' => $lettre
        ]);
        
        $length3 = count($val3, COUNT_NORMAL);
        for($i=0; $i<$length3; $i++){
            $entityManager->remove($val3[$i]);
            $entityManager->flush();
        }
        
        
        return $this->render('delete_groupe.html.twig', [
            'lettre' => $lettre,
        ]);
    }
    
}
?>