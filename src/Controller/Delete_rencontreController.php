<?php
// src/Controller/Delete_rencontreController.php
namespace App\Controller;

use App\Entity\Rencontre;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Delete_rencontreController extends AbstractController
{
    /**
      * @Route("/lucky/delete_rencontre")
      */
    public function delete_rencontre(Request $request)
    {
         /*$A = $this->getDoctrine()->getRepository('App:Groupe')->findBy([
             'lettre' => 'A'
         ]);*/
        $entityManager = $this->getDoctrine()->getManager();
        $equipe1 = $request->get('equipe1');
        $equipe2 = $request->get('equipe2');
        
        $val = $this->getDoctrine()->getRepository('App:Rencontre')->findOneBy([
         'nom_dom' => $equipe1,
         'nom_ext' => $equipe2,
        ]);
            
        $entityManager->remove($val);
        $entityManager->flush();
        
        
        return $this->render('delete_rencontre.html.twig', [
            'equipe1' => $equipe1,
            'equipe2' => $equipe2,
        ]);
    }
    
}
?>