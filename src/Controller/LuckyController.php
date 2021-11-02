<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky", name="lucky")
     */
    public function number(int $max): Response
    {
$ma = random_int(0,$max) ;

        return $this->render('lucky/number.html.twig', [
            'ma' => $ma ,
        ]);
    }
}
