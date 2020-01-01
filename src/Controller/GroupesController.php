<?php
// src/Controller/GroupesController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GroupesController extends AbstractController
{
    /**
      * @Route("/lucky/groupes")
      */
    public function groupes()
    {
        $groupes = random_int(0, 100);

/*        return new Response(
            '<html><body>Lucky number: '.$groupes.'</body></html>'
        );*/
        return $this->render('groupes.html.twig', [
            'groupes' => $groupes,
        ]);
    }
}
?>