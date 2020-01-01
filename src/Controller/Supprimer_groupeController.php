<?php
// src/Controller/Supprimer_groupeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Supprimer_groupeController extends AbstractController
{
    /**
      * @Route("/lucky/supprimer_groupe")
      */
    public function supprimer_groupe()
    {
        $supprimer_groupe = random_int(0, 100);

/*        return new liste_groupe(
            '<html><body>Lucky creer_groupe: '.$creer_groupe.'</body></html>'
        );*/
        return $this->render('supprimer_groupe.html.twig', [
            'supprimer_groupe' => $supprimer_groupe,
        ]);
    }
}
?>
