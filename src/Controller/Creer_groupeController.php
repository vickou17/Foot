<?php
// src/Controller/Creer_groupeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Creer_groupeController extends AbstractController
{
    /**
      * @Route("/lucky/creer_groupe")
      */
    public function creer_groupe()
    {
        $creer_groupe = random_int(0, 100);

/*        return new liste_groupe(
            '<html><body>Lucky creer_groupe: '.$creer_groupe.'</body></html>'
        );*/
        return $this->render('creer_groupe.html.twig', [
            'creer_groupe' => $creer_groupe,
        ]);
    }
}
?>
