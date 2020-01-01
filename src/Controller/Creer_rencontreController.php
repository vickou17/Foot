<?php
// src/Controller/Creer_rencontreController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Creer_rencontreController extends AbstractController
{
    /**
      * @Route("/lucky/creer_rencontre")
      */
    public function creer_rencontre()
    {
        $creer_rencontre = random_int(0, 100);

/*        return new creer_rencontre(
            '<html><body>Lucky creer_rencontre: '.$creer_rencontre.'</body></html>'
        );*/
        return $this->render('creer_rencontre.html.twig', [
            'creer_rencontre' => $creer_rencontre,
        ]);
    }
}
?>