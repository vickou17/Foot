<?php
// src/Controller/ClassementController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ClassementController extends AbstractController
{
    /**
      * @Route("/lucky/classement")
      */
    public function classement()
    {
        $classement = random_int(0, 100);

/*        return new Classement(
            '<html><body>Lucky number: '.$classement.'</body></html>'
        );*/
        return $this->render('classement.html.twig', [
            'classement' => $classement,
        ]);
    }
}
?>