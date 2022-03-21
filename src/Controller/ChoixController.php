<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Haie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class ChoixController extends AbstractController
{
    /**
     * @Route("/choix", name="choix")
     */
    public function index(): Response
    {
        $client = $this->getDoctrine()->getRepository(Client::class)->findAll();
        $haies = $this->getDoctrine()->getRepository(Haie::class)->findAll();
        return $this->render('choix/index.html.twig',array('lesClients' => $client, 'mesHaies' => $haies));
            [
            'controller_name' => 'ChoixController',
        ];
    }
}
