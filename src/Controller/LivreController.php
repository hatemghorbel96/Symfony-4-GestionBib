<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Form\LivreType;
use App\Entity\PropertySearch;
use App\Repository\LivreRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/livre")
 */
class LivreController extends AbstractController
{
    /**
     * @Route("/", name="livre_index")
     */
    /**
     * @Route("/", name="livre_index", methods={"GET"})
     */
    public function index(LivreRepository $livreRepository): Response
    {

        return $this->render('livre/index.html.twig', [
            'titre'=>'Livre',
            'soustitre'=>'Index',
            'lien'=>$this->generateUrl('livre_index'),
            'livres' => $livreRepository->findAll(),
        ]);
    }

    /**
     * @IsGranted("ROLE_EDITOR")
     * @Route("/new", name="livre_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $livre = new Livre();
        $form = $this->createForm(LivreType::class, $livre);
        $form->add('valider',SubmitType::class,['attr'=>['class'=>'form-control']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $livre->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            // Move the file to the directory where brochures are stored
            try {
                $file->move(
                    $this->getParameter('uploads_directory'),
                    $fileName
                );
            } catch (FileException $e) {
                // ... handle exception if something happens during file upload
            }
            $entityManager = $this->getDoctrine()->getManager();
            $livre->setImage($fileName);
            $entityManager->persist($livre);
            $entityManager->flush();

            return $this->redirectToRoute('livre_index');
        }

        return $this->render('livre/new.html.twig', [
            'titre'=>'Livre',
            'soustitre'=>'Nouveau',
            'lien'=>$this->generateUrl('livre_index'),
            'livre' => $livre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="livre_show", methods={"GET"})
     */
    public function show(Livre $livre): Response
    {
        return $this->render('livre/show.html.twig', [
            'titre'=>'Livre',
            'soustitre'=>'Affiche',
            'lien'=>$this->generateUrl('livre_index'),
            'livre' => $livre,
        ]);
    }

    /**
     * @IsGranted("ROLE_EDITOR")
     * @Route("/{id}/edit", name="livre_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Livre $livre): Response
    {
        $form = $this->createForm(LivreType::class, $livre);
        $form->add('modifier', SubmitType::class, ['attr' => ['class' => 'form-control']]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('livre_index');
        }

        return $this->render('livre/edit.html.twig', [
            'titre'=>'Livre',
            'soustitre'=>'Editer',
            'lien'=>$this->generateUrl('livre_index'),
            'livre' => $livre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @IsGranted("ROLE_EDITOR")
     * @Route("/{id}", name="livre_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Livre $livre): Response
    {
        if ($this->isCsrfTokenValid('delete'.$livre->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($livre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('livre_index');
    }
}
