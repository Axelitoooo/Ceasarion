<?php

namespace App\Controller;

use App\Entity\Personnalite;
use App\Repository\PersonnaliteRepository;
use App\Form\PersonnaliteType;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class PersonnaliteController extends AbstractController
{
    private $entityManager;
    private $personnaliteRepository;

    public function __construct(EntityManagerInterface $entityManager, PersonnaliteRepository $personnaliteRepository)
    {
        $this->entityManager = $entityManager;
        $this->personnaliteRepository = $personnaliteRepository;
    }

    #[Route('/personnalites', name: 'personnalites_index')]
    public function index(Request $request): Response
    {
        $personnalites = $this->personnaliteRepository->findAll();

        // Create a Pagerfanta instance and configure it
        $adapter = new ArrayAdapter($personnalites);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(10); // Set the maximum number of items per page
        $pagerfanta->setCurrentPage($request->query->getInt('page', 1)); // Get the current page from the request query parameters

        return $this->render('personnalite/index.html.twig', [
            'personnalites' => $pagerfanta->getCurrentPageResults(),
            'pagerfanta' => $pagerfanta,
        ]);
    }

    #[Route('/personnalites/{id}', name: 'personnalite_show')]
    public function show(Personnalite $personnalite): Response
    {
        return $this->render('personnalite/show.html.twig', [
            'personnalite' => $personnalite,
        ]);
    }

    #[Route('/admin/personnalites', name: 'admin_personnalites')]
    public function adminPersonnalites(): Response
    {
        $personnalites = $this->personnaliteRepository->findAll();

        return $this->render('admin/blog/personnalite.html.twig', [
            'personnalites' => $personnalites,
        ]);
    }

    #[Route('/admin/personnalites/{id}/edit', name: 'admin_personnalite_edit')]
    public function edit(Request $request, Personnalite $personnalite): Response
    {
        $form = $this->createForm(PersonnaliteType::class, $personnalite);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
    
            return $this->redirectToRoute('admin_personnalites');
        }
    
        return $this->render('admin/blog/personnalite_edit.html.twig', [
            'personnalite' => $personnalite,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/personnalites/new', name: 'admin_personnalite_create')]
    public function create(Request $request): Response
    {
        $personnalite = new Personnalite();
        $form = $this->createForm(PersonnaliteType::class, $personnalite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($personnalite);
            $this->entityManager->flush();

            return $this->redirectToRoute('admin_personnalites');
        }
        return $this->render('admin/blog/personnalite_create.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}