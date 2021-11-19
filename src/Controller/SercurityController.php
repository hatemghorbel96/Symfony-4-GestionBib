<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Form\RegistrationType;
use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class SercurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")

     */
    public function registration (Request $request, EntityManagerInterface $em )
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();

        } return $this->render('test/index.html.twig',
                                ['form' =>$form->createView(),
                                'titre'=>'editer role',
                                'soustitre'=>'',
                                'lien'=>$this->generateUrl('accueil'),
                            ]);
    }
}
