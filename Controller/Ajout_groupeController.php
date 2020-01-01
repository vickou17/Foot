<?php
// src/Controller/Ajout_groupeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class Ajout_groupeController extends AbstractController
{
    /**
      * @Route("/lucky/ajout_groupe")
      */
    public function ajout_groupe()
    {
        $ajout_groupe = random_int(0, 100);

/*        return new liste_groupe(
            '<html><body>Lucky creer_groupe: '.$creer_groupe.'</body></html>'
        );*/
        return $this->render('ajout_groupe.php', [
            'ajout_groupe' => $ajout_groupe,
        ]);
    }
}
?>
