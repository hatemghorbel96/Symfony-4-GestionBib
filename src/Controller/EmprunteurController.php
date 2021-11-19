<?php

namespace App\Controller;

use App\Entity\Emprunteur;
use App\Form\EmprunteurType;
use App\Repository\EmprunteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/emprunteur")
 */
class EmprunteurController extends AbstractController
{
    /**
     * @Route("/", name="emprunteur_index", methods={"GET"})
     */
    public function index(EmprunteurRepository $emprunteurRepository): Response
    {
        return $this->render('emprunteur/index.html.twig', [
            'titre'=>'Emprunteurs',
            'soustitre'=>'Index',
            'lien'=>$this->generateUrl('emprunteur_index'),
            'emprunteurs' => $emprunteurRepository->findAll(),
        ]);
    }


    /**
     * @Route("/new", name="emprunteur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $emprunteur = new Emprunteur();
        $form = $this->createForm(EmprunteurType::class, $emprunteur);
        $form->add('Empranter', SubmitType::class, ['attr' => ['class' => 'form-control']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', 'vous avez emprunté ce livre!');
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($emprunteur);
            $entityManager->flush();

            return $this->redirectToRoute('emprunteur_new');
        }

        return $this->render('emprunteur/new.html.twig', [
            'titre'=>'Emptranteur',
            'soustitre'=>'cree',
            'lien'=>$this->generateUrl('emprunteur_index'),
            'emprunteur' => $emprunteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="emprunteur_show", methods={"GET"})
     */
    public function show(Emprunteur $emprunteur): Response
    {
        return $this->render('emprunteur/show.html.twig', [
            'titre'=>'Emptranteur',
            'soustitre'=>'details',
            'lien'=>$this->generateUrl('emprunteur_index'),
            'emprunteur' => $emprunteur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="emprunteur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Emprunteur $emprunteur): Response
    {
        $form = $this->createForm(EmprunteurType::class, $emprunteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('emprunteur_index');
        }

        return $this->render('emprunteur/edit.html.twig', [
            'titre'=>'Emptranteur',
            'soustitre'=>'modifier',
            'lien'=>$this->generateUrl('emprunteur_index'),
            'emprunteur' => $emprunteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="emprunteur_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Emprunteur $emprunteur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$emprunteur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($emprunteur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('emprunteur_index');
    }
}
