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
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use App\Entity\Category;

#[Route('/transaction')]
class TransactionController extends AbstractController
{
    #[Route('/', name: 'app_transaction_index', methods: ['GET'])]
    public function index(TransactionRepository $transactionRepository): Response
    {
        $user = $this->getUser();
        
        return $this->render('transaction/index.html.twig', [
            'transactions' => $transactionRepository->findByUserOrderedByDescId($user),
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
                    'constraints' => new NotBlank(['message' => 'Sélectionnez une catégorie']),
                    'label' => 'Catégorie'
                ]);
            })
            ->add('name', TextType::class, ['label' => 'Nom'])
            ->add('montant', NumberType::class, ['label' => 'Montant'])
            ->add('type', EntityType::class, [
                'class' => 'App\Entity\Type',
                'choice_label' => 'title',
                'disabled' => true,
                'placeholder' => "Sélectionnez un type",
                'constraints' => new NotBlank(['message' => 'Sélectionnez un type']),
                'label' => 'Type'
            ])
            ->add('moyenDePaiement', EntityType::class, [
                'class' => 'App\Entity\MoyenDePaiement',
                'choice_label' => 'title',
                'placeholder' => "Sélectionnez un moyen de paiement",
                'constraints' => new NotBlank(['message' => 'Sélectionnez un moyen de paiement']),
                'label' => 'Moyen de paiement'
            ])
            ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $transaction->setUser($user);
                $transaction->setName($form->getData()['name']);
                $transaction->setMontant($form->getData()['montant']);
                $transaction->setType($form->getData()['type']);
                $transaction->setCategory($form->getData()['category']);
                $transaction->setMoyenDePaiement($form->getData()['moyenDePaiement']);
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
                    'constraints' => new NotBlank(['message' => 'Sélectionnez une catégorie']),
                    'label' => 'Catégorie'
                ]);
            })
            ->add('name', TextType::class, ['label' => 'Nom'])
            ->add('montant', NumberType::class, ['label' => 'Montant'])
            ->add('type', EntityType::class, [
                'class' => 'App\Entity\Type',
                'choice_label' => 'title',
                'disabled' => true,
                'placeholder' => "Sélectionnez un type",
                'constraints' => new NotBlank(['message' => 'Sélectionnez un type']),
                'label' => 'Type'
            ])
            ->add('moyenDePaiement', EntityType::class, [
                'class' => 'App\Entity\MoyenDePaiement',
                'choice_label' => 'title',
                'placeholder' => "Sélectionnez un moyen de paiement",
                'constraints' => new NotBlank(['message' => 'Sélectionnez un moyen de paiement']),
                'label' => 'Moyen de paiement'
            ])
            ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $transaction->setUser($user);
                $transaction->setName($form->getData()['name']);
                $transaction->setMontant($form->getData()['montant']);
                $transaction->setType($form->getData()['type']);
                $transaction->setCategory($form->getData()['category']);
                $transaction->setMoyenDePaiement($form->getData()['moyenDePaiement']);
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
    public function edit(Request $request, TypeRepository $typeRepository, CategoryRepository $categoryRepository, EntityManagerInterface $em, TransactionRepository $transactionRepository, Transaction $transaction): Response
    {
        $user = $this->getUser();

        $currentId = $_SERVER['REQUEST_URI'];
        $currentId = str_replace("edit", "",$currentId);
        $currentId = str_replace("/", "",$currentId);
        $currentId = str_replace("transaction", "",$currentId);

        $currentId = intval($currentId);
        
        $currentTransaction = $em->createQueryBuilder('t')
            ->select('t')
            ->from('App\Entity\Transaction', 't')
            ->where('t.id = :id')
            ->setParameter('id', $currentId)
            ->orderBy('t.id', 'ASC')
            ->getQuery()
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $currentName = $currentTransaction[0]['name'];
        $currentMontant = $currentTransaction[0]['montant'];

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
                    'constraints' => new NotBlank(['message' => 'Sélectionnez une catégorie']),
                    'label' => 'Catégorie'
                ]);
            })
            ->add('name', TextType::class, ['data' => $currentName, 'label' => 'Nom'])
            ->add('montant', NumberType::class, ['data' => $currentMontant, 'label' => 'Montant'])
            ->add('type', EntityType::class, [
                'class' => 'App\Entity\Type',
                'choice_label' => 'title',
                'disabled' => true,
                'placeholder' => "Sélectionnez un type",
                'constraints' => new NotBlank(['message' => 'Sélectionnez un type']),
                'label' => 'Type'
            ])
            ->add('moyenDePaiement', EntityType::class, [
                'class' => 'App\Entity\MoyenDePaiement',
                'choice_label' => 'title',
                'placeholder' => "Sélectionnez un moyen de paiement",
                'constraints' => new NotBlank(['message' => 'Sélectionnez un moyen de paiement']),
                'label' => 'Moyen de paiement'
            ])
            ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $transaction->setUser($user);
                $transaction->setName($form->getData()['name']);
                $transaction->setMontant($form->getData()['montant']);
                $transaction->setType($form->getData()['type']);
                $transaction->setCategory($form->getData()['category']);
                $transaction->setMoyenDePaiement($form->getData()['moyenDePaiement']);
                $em->persist($transaction);
                $em->flush();
                $transactionRepository->add($transaction, true);

                return $this->redirectToRoute('app_transaction_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->renderForm('transaction/edit.html.twig', compact('form'));
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
                    'constraints' => new NotBlank(['message' => 'Sélectionnez une catégorie']),
                    'label' => 'Catégorie'
                ]);
            })
            ->add('name', TextType::class, ['data' => $currentName, 'label' => 'Nom'])
            ->add('montant', NumberType::class, ['data' => $currentMontant, 'label' => 'Montant'])
            ->add('type', EntityType::class, [
                'class' => 'App\Entity\Type',
                'choice_label' => 'title',
                'disabled' => true,
                'placeholder' => "Sélectionnez un type",
                'constraints' => new NotBlank(['message' => 'Sélectionnez un type']),
                'label' => 'Type'
            ])
            ->add('moyenDePaiement', EntityType::class, [
                'class' => 'App\Entity\MoyenDePaiement',
                'choice_label' => 'title',
                'placeholder' => "Sélectionnez un moyen de paiement",
                'constraints' => new NotBlank(['message' => 'Sélectionnez un moyen de paiement']),
                'label' => 'Moyen de paiement'
            ])
            ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $transaction->setUser($user);
                $transaction->setName($form->getData()['name']);
                $transaction->setMontant($form->getData()['montant']);
                $transaction->setType($form->getData()['type']);
                $transaction->setCategory($form->getData()['category']);
                $transaction->setMoyenDePaiement($form->getData()['moyenDePaiement']);
                $em->persist($transaction);
                $em->flush();
                $transactionRepository->add($transaction, true);

                return $this->redirectToRoute('app_transaction_index', [], Response::HTTP_SEE_OTHER);
            }

            return $this->renderForm('transaction/edit.html.twig', compact('form'));
         }
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
