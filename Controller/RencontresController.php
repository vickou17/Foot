<?php
// src/Controller/RencontresController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RencontresController extends AbstractController
{
    /**
      * @Route("/lucky/rencontres")
      */
    public function rencontres()
    {
        $rencontres = random_int(0, 100);

/*        return new Response(
            '<html><body>Lucky number: '.$rencontres.'</body></html>'
        );*/
        return $this->render('rencontres.html.twig', [
            'rencontres' => $rencontres,
        ]);
    }
}
?>