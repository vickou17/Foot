<?php
// src/Controller/Supprimer_rencontreController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Supprimer_rencontreController extends AbstractController
{
    /**
      * @Route("/lucky/supprimer_rencontre")
      */
    public function supprimer_rencontre()
    {
        $supprimer_rencontre = random_int(0, 100);

/*        return new supprimer_rencontre(
            '<html><body>Lucky supprimer_rencontre: '.$supprimer_rencontre.'</body></html>'
        );*/
        return $this->render('supprimer_rencontre.html.twig', [
            'supprimer_rencontre' => $supprimer_rencontre,
        ]);
    }
}
?>