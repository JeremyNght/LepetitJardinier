<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Devis;
use App\Entity\Haie;
use App\Entity\Tailler;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class MesureController extends AbstractController
{
    /**
     * @Route("/mesure", name="mesure")
     */
    public function index(): Response {
        $request = Request::createFromGlobals();

        $session = new Session();

        $choix = $request->get('choix');
        $client = $request->get('client');
        $longeur = $request->get('Longeur');
        $hauteur = $request->get('Hauteur');
        $numHaie = $request->get('type');

        $typeClient = $this->getDoctrine()->getRepository(Client::class)->findOneBy(['id'=>$client]);
        $classNumHaie = $this->getDoctrine()->getRepository(Haie::class)->findOneBy(['id'=>$numHaie]);

        $session->set('choix', $choix);

        $devis = new Devis();

        $devis->setClient($typeClient);
        $devis->setDate(new DateTime());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($devis);
        $entityManager->flush();

        $devisId = $devis->getId();

        $classDevis = $this->getDoctrine()->getRepository(Devis::class)->findOneBy(['id'=>$devisId]);

        $tailler = new Tailler();

        $tailler->setNumHaie($classNumHaie);
        $tailler->setNumDevis($classDevis);
        $tailler->setHauteur($hauteur);
        $tailler->setLongueur($longeur);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($tailler);
        $entityManager->flush();

        $prixUnitaire = 0;
        $prixFinal = 0;
        $remise = 0;
        $montantRemise = 0;
        switch ($classNumHaie->categorie->libelle){
            case "Abélia":
                $prixUnitaire = 25;
                break;
            case "Laurier":
                $prixUnitaire = 30;
                break;
            case "Thuya":
                $prixUnitaire = 35;
                break;
            case "Troène":
                $prixUnitaire = 28;
                break;
        }
        $prixFinal = $prixUnitaire*$longeur;
        if($hauteur>1.5){
            $prixFinal *= 1.5;
        }
        if($choix === "entreprise"){
            $remise = 10;
            $montantRemise = $prixFinal/10;
            $prixFinal -= $montantRemise;
        }

        return $this->render('mesure/index.html.twig',
            [
            'controller_name' => 'MesureController',
                'type' => $classNumHaie->categorie->libelle,
                'choix' => $choix,
                'longueur'=>$longeur,
                'hauteur'=>$hauteur,
                'remise' => $remise,
                'montantremise'=>$montantRemise,
                'montant' => $prixFinal
        ]);
    }
}
