<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Form\TransactionType;
use App\Repository\TransactionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Repository\TypeRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\Validator\Constraints\NotBlank;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormBuilderInterface;

#[Route('/transaction')]
class TransactionController extends AbstractController
{
    #[Route('/', name: 'app_transaction_index', methods: ['GET'])]
    public function index(TransactionRepository $transactionRepository): Response
    {
        return $this->render('transaction/index.html.twig', [
            'transactions' => $transactionRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_transaction_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TypeRepository $typeRepository, CategoryRepository $categoryRepository, EntityManagerInterface $em, TransactionRepository $transactionRepository): Response
    {
        $user = $this->getUser();
        $transaction = new Transaction();
        if($_GET['type'] == 'credit')
        {
            $form = $this->createFormBuilder(['type' => $typeRepository->find(1)])
            ->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) use ($categoryRepository) {
                $type = $event->getData()['type'] ?? null;

                $categories = $type === null ? [] : $categoryRepository->findByTypeOrderedByAscName($type);

                $event->getForm()
                ->remove('category')
                ->add('category', EntityType::class, [
                    'class' => 'App\Entity\Category',
                    'choice_label' => 'title',
                    'choices' => $categories,
                    'placeholder' => "Sélectionnez une catégorie",
                    'constraints' => new NotBlank(['message' => 'Sélectionnez une catégorie'])
                ]);
            })
            ->add('name')
            ->add('montant')
            ->add('type', EntityType::class, [
                'class' => 'App\Entity\Type',
                'choice_label' => 'title',
                'disabled' => true,
                'placeholder' => "Sélectionnez un type",
                'constraints' => new NotBlank(['message' => 'Sélectionnez un type'])
            ])
            ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $transaction->setUser($user);
                $transaction->setName($form->getData()['name']);
                $transaction->setMontant($form->getData()['montant']);
                $transaction->setType($form->getData()['type']);
                $transaction->setCategory($form->getData()['category']);
                $em->persist($transaction);
                $em->flush();
                $transactionRepository->add($transaction, true);

                return $this->redirectToRoute('app_transaction_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->renderForm('transaction/new.html.twig', compact('form'));
        }

        elseif($_GET['type'] == 'debit')
        {
            $form = $this->createFormBuilder(['type' => $typeRepository->find(2)])
            ->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) use ($categoryRepository) {
                $type = $event->getData()['type'] ?? null;

                $categories = $type === null ? [] : $categoryRepository->findByTypeOrderedByAscName($type);

                $event->getForm()
                ->remove('category')
                ->add('category', EntityType::class, [
                    'class' => 'App\Entity\Category',
                    'choice_label' => 'title',
                    'choices' => $categories,
                    'placeholder' => "Sélectionnez une catégorie",
                    'constraints' => new NotBlank(['message' => 'Sélectionnez une catégorie'])
                ]);
            })
            ->add('name')
            ->add('montant')
            ->add('type', EntityType::class, [
                'class' => 'App\Entity\Type',
                'choice_label' => 'title',
                'disabled' => true,
                'placeholder' => "Sélectionnez un type",
                'constraints' => new NotBlank(['message' => 'Sélectionnez un type'])
            ])
            ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $transaction->setUser($user);
                $transaction->setName($form->getData()['name']);
                $transaction->setMontant($form->getData()['montant']);
                $transaction->setType($form->getData()['type']);
                $transaction->setCategory($form->getData()['category']);
                $em->persist($transaction);
                $em->flush();
                $transactionRepository->add($transaction, true);

                return $this->redirectToRoute('app_transaction_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->renderForm('transaction/new.html.twig', compact('form'));
        }
    }

    #[Route('/{id}', name: 'app_transaction_show', methods: ['GET'])]
    public function show(Transaction $transaction): Response
    {
        return $this->render('transaction/show.html.twig', [
            'transaction' => $transaction,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_transaction_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Transaction $transaction, TransactionRepository $transactionRepository): Response
    {
        $form = $this->createForm(TransactionType::class, $transaction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $transactionRepository->add($transaction, true);

            return $this->redirectToRoute('app_transaction_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('transaction/edit.html.twig', [
            'transaction' => $transaction,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_transaction_delete', methods: ['POST'])]
    public function delete(Request $request, Transaction $transaction, TransactionRepository $transactionRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$transaction->getId(), $request->request->get('_token'))) {
            $transactionRepository->remove($transaction, true);
        }

        return $this->redirectToRoute('app_transaction_index', [], Response::HTTP_SEE_OTHER);
    }
}
