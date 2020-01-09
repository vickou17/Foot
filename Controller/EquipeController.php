<?php
// src/Controller/EquipeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EquipeController extends AbstractController
{
    /**
      * @Route("/lucky/equipe")
      */
    public function equipe()
    {
        $equipe = random_int(0, 100);

/*        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );*/
        return $this->render('equipe.html.twig', [
            'equipe' => $equipe,
        ]);
    }
}
?>