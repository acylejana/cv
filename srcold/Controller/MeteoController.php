<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeteoController extends AbstractController
{
    /**
     * @Route("/meteo", name="meteo")
     */
    public function index(): Response
    {
        return $this->render('meteo/index.html.twig', [
            'controller_name' => 'MeteoController',
        ]);
    }

    public function temps(): Response
    {
        return new Response( "<h1>le temps est manifique<h1>" );
        
    }
    public function matin(): Response
    {
        return new Response( "<h1>ce matin est manifique<h1>" );
        
    }
    public function previsions( ): Response
    {
        return new Response( "<h1>ce matin est manifique</h1>" );
        
    }
    public function prevision( $moment, $prenom): Response
    {
        return $this->render(
        'meteo/meteo.html.twig',
        
        [
                'moment' => $moment,
                'prenom' => $prenom
        ]);
    }

}
