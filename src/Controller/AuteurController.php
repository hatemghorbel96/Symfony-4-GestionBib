<?php

namespace App\Controller;

use App\Entity\Auteur;
use App\Form\AuteurType;
use App\Repository\AuteurRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/auteur")
 */
class AuteurController extends AbstractController
{
    /**
     * @Route("/", name="auteur_index", methods={"GET"})
     */
    public function index(AuteurRepository $auteurRepository): Response
    {
        return $this->render('auteur/index.html.twig', [
            'titre'=>'Auteur',
            'soustitre'=>'Index',
            'lien'=>$this->generateUrl('auteur_index'),
            'auteurs' => $auteurRepository->findAll(),
        ]);
    }

    /**
     * @IsGranted("ROLE_EDITOR")
     * @Route("/new", name="auteur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $auteur = new Auteur();
        $form = $this->createForm(AuteurType::class, $auteur);
        $form->add('valider',SubmitType::class,['attr'=>['class'=>'form-control']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($auteur);
            $entityManager->flush();

            return $this->redirectToRoute('auteur_index');
        }

        return $this->render('auteur/new.html.twig', [
            'titre'=>'Auteur',
            'soustitre'=>'nouveau',
            'lien'=>$this->generateUrl('auteur_index'),
            'auteur' => $auteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="auteur_show", methods={"GET"})
     */
    public function show(Auteur $auteur): Response
    {
        return $this->render('auteur/show.html.twig', [
            'titre'=>'Auteur',
            'soustitre'=>'Affiche',
            'lien'=>$this->generateUrl('auteur_index'),
            'auteur' => $auteur,
        ]);
    }

    /**
     * @IsGranted("ROLE_EDITOR")
     * @Route("/{id}/edit", name="auteur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Auteur $auteur): Response
    {
        $form = $this->createForm(AuteurType::class, $auteur);
        $form->add('modifier', SubmitType::class, ['attr' => ['class' => 'form-control']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('auteur_index');
        }

        return $this->render('auteur/edit.html.twig', [
            'titre'=>'Auteur',
            'soustitre'=>'Editer',
            'lien'=>$this->generateUrl('auteur_index'),
            'auteur' => $auteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_EDITOR")
     * @Route("/{id}", name="auteur_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Auteur $auteur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$auteur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($auteur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('auteur_index');
    }
}
