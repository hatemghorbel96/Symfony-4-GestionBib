<?php

namespace App\Controller;

use App\Entity\Editeur;
use App\Form\EditeurType;
use App\Repository\EditeurRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/editeur")
 */
class EditeurController extends AbstractController
{
    /**
     * @Route("/", name="editeur_index", methods={"GET"})
     */
    public function index(EditeurRepository $editeurRepository): Response
    {
        return $this->render('editeur/index.html.twig', [
            'titre'=>'Editeur',
            'soustitre'=>'Index',
            'lien'=>$this->generateUrl('editeur_index'),
            'editeurs' => $editeurRepository->findAll(),
        ]);
    }

    /**
     * @IsGranted("ROLE_EDITOR")
     * @Route("/new", name="editeur_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $editeur = new Editeur();
        $form = $this->createForm(EditeurType::class, $editeur);
        $form->add('valider',SubmitType::class,['attr'=>['class'=>'form-control']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($editeur);
            $entityManager->flush();

            return $this->redirectToRoute('editeur_index');
        }

        return $this->render('editeur/new.html.twig', [
            'titre'=>'Editeur',
            'soustitre'=>'Nouveau',
            'lien'=>$this->generateUrl('editeur_index'),
            'editeur' => $editeur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="editeur_show", methods={"GET"})
     */
    public function show(Editeur $editeur): Response
    {
        return $this->render('editeur/show.html.twig', [
            'titre'=>'Editeur',
            'soustitre'=>'Affiche',
            'lien'=>$this->generateUrl('editeur_index'),
            'editeur' => $editeur,
        ]);
    }

    /**
     * @IsGranted("ROLE_EDITOR")
     * @Route("/{id}/edit", name="editeur_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Editeur $editeur): Response
    {
        $form = $this->createForm(EditeurType::class, $editeur);
        $form->add('modifier', SubmitType::class, ['attr' => ['class' => 'form-control']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('editeur_index');
        }

        return $this->render('editeur/edit.html.twig', [
            'titre'=>'Editeur',
            'soustitre'=>'Editer',
            'lien'=>$this->generateUrl('editeur_index'),
            'editeur' => $editeur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_EDITOR")
     * @Route("/{id}", name="editeur_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Editeur $editeur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$editeur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($editeur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('editeur_index');
    }
}
