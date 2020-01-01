<?php
// src/Controller/Recherche_equipeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Recherche_equipeController extends AbstractController
{
    /**
      * @Route("/lucky/recherche_equipe")
      */
    public function recherche_equipe()
    {
        $recherche_equipe = random_int(0, 100);

/*        return new recherche_equipe(
            '<html><body>Lucky recherche_equipe: '.$recherche_equipe.'</body></html>'
        );*/
        return $this->render('recherche_equipe.html.twig', [
            'recherche_equipe' => $recherche_equipe,
        ]);
    }
}
?>