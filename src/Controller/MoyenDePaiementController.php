<?php

namespace App\Controller;

use App\Entity\MoyenDePaiement;
use App\Form\MoyenDePaiementType;
use App\Repository\MoyenDePaiementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/moyenDePaiement')]
class MoyenDePaiementController extends AbstractController
{
    #[Route('/', name: 'app_moyen_de_paiement_index', methods: ['GET'])]
    public function index(MoyenDePaiementRepository $moyenDePaiementRepository): Response
    {
        return $this->render('moyen_de_paiement/index.html.twig', [
            'moyen_de_paiements' => $moyenDePaiementRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_moyen_de_paiement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MoyenDePaiementRepository $moyenDePaiementRepository): Response
    {
        $moyenDePaiement = new MoyenDePaiement();
        $form = $this->createForm(MoyenDePaiementType::class, $moyenDePaiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $moyenDePaiementRepository->add($moyenDePaiement, true);

            return $this->redirectToRoute('app_moyen_de_paiement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('moyen_de_paiement/new.html.twig', [
            'moyen_de_paiement' => $moyenDePaiement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_moyen_de_paiement_show', methods: ['GET'])]
    public function show(MoyenDePaiement $moyenDePaiement): Response
    {
        return $this->render('moyen_de_paiement/show.html.twig', [
            'moyen_de_paiement' => $moyenDePaiement,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_moyen_de_paiement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MoyenDePaiement $moyenDePaiement, MoyenDePaiementRepository $moyenDePaiementRepository): Response
    {
        $form = $this->createForm(MoyenDePaiementType::class, $moyenDePaiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $moyenDePaiementRepository->add($moyenDePaiement, true);

            return $this->redirectToRoute('app_moyen_de_paiement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('moyen_de_paiement/edit.html.twig', [
            'moyen_de_paiement' => $moyenDePaiement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_moyen_de_paiement_delete', methods: ['POST'])]
    public function delete(Request $request, MoyenDePaiement $moyenDePaiement, MoyenDePaiementRepository $moyenDePaiementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$moyenDePaiement->getId(), $request->request->get('_token'))) {
            $moyenDePaiementRepository->remove($moyenDePaiement, true);
        }

        return $this->redirectToRoute('app_moyen_de_paiement_index', [], Response::HTTP_SEE_OTHER);
    }
}
