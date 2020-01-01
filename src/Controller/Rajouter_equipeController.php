<?php
// src/Controller/Rajouter_equipeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Rajouter_equipeController extends AbstractController
{
    /**
      * @Route("/lucky/rajouter_equipe")
      */
    public function rajouter_equipe()
    {
        $rajouter_equipe = random_int(0, 100);

/*        return new liste_groupe(
            '<html><body>Lucky creer_groupe: '.$creer_groupe.'</body></html>'
        );*/
        return $this->render('rajouter_equipe.html.twig', [
            'rajouter_equipe' => $rajouter_equipe,
        ]);
    }
}
?>
