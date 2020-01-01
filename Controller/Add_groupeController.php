<?php
// src/Controller/Add_groupeController.php
namespace App\Controller;

use App\Entity\Groupe;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;



class Add_groupeController extends AbstractController
{
    /**
      * @Route("/lucky/add_groupe")
      */

    /*public function createGroupe(): Response
    {

      
        $groupe = new Groupe();
        
        /*$sql = ('SELECT * FROM equipe');
        $result = mysqli_query($db_handle,$sql);
        
        
        
        $entityManager = $this->getDoctrine()->getManager();
        
        $groupe = new Groupe();
        $groupe->setName('Manchester City');
        $groupe->setLettre('C');
        $val = $groupe->getId();
        settype($val, "integer");
        $groupe->setIdGroupe($val);
        
        $entityManager->persist($groupe);
        
        $entityManager->flush();
    
            
        //$number = random_int(0, 100);

        return $this->render('add_groupe.html.twig', [
            'number' => $var,
        ]);
    }*/
    public function yourAction(Request $request){
        $equipe1 = $request->get('equipe1');
        $equipe2 = $request->get('equipe2');
        $equipe3 = $request->get('equipe3');
        $equipe4 = $request->get('equipe4');
        $lettre = $request->get('lettre');
        
        $entityManager = $this->getDoctrine()->getManager();
        
        for ($i = 1; $i<5; $i++){
            $a = (string)$i;
            $b = "equipe" . $a;
            $equipe = $request->get($b);
            
            $groupe = new Groupe();
            $groupe->setName($equipe);
            $groupe->setLettre($lettre);
            $groupe->setIdGroupe(0);
            
            $entityManager->persist($groupe);       
            $entityManager->flush();
        }
        
        
        return $this->render('add_groupe.html.twig', [
            'equipe1' => $equipe1,
            'equipe2' => $equipe2,
            'equipe3' => $equipe3,
            'equipe4' => $equipe4,
            'lettre' => $lettre,
        ]);
    }
}
?>
