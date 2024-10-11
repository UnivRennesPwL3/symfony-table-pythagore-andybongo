<?php

namespace App\Controller;

use App\Utility\PythagoreUtility;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PythagoreController extends AbstractController
{
    private $pythagoreUtility;

   
    public function __construct(PythagoreUtility $pythagoreUtility)
    {
        $this->pythagoreUtility = $pythagoreUtility;
    }

    #[Route('/pythagore/view', name: 'app_pythagore_view')]
    public function displayPythagore(): Response
    {
        
        $tableHtml = $this->pythagoreUtility->display(10);

        return $this->render('displayPythagore.html.twig', [
            'tableHtml' => $tableHtml,
            
        ]);
    }
}