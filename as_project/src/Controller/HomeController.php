<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Repository\EvenementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/event', name: 'event')]
    public function event(EntityManagerInterface $em): Response
    {
        $eventC = $em
            ->createQueryBuilder()
            ->select('count(e.id)')
            ->from('App:Evenement', 'e');
        $eventNumber = $eventC->getQuery()->getSingleScalarResult();

        $events = $em
            ->getRepository(Evenement::class)
            ->findAll();

        return $this->render('event/index.html.twig', [
            'controller_name' => 'HomeController',
            'events' => $events,
            'eventNumber' => $eventNumber
        ]);
    }


    #[Route('/evenement/{id}', name: 'evenement')]
    public function evenement(EntityManagerInterface $em, int $id, EvenementRepository $evenementRepository): Response
    {

        return $this->render('event/evenement.html.twig', [
            'controller_name' => 'HomeController',
            'event' => $evenementRepository->findBy(["id"=>$id])[0]
        ]);
    }

    #[Route('/account', name: 'account')]
    public function account(): Response
    {
        return $this->render('account/compte.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
