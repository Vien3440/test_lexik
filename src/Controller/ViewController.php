<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ViewController
 *
 * 
 */

namespace App\Controller;

use App\Form\GroupeType;
use App\Form\UserType;
use App\Service\EntityService;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class ViewController {

    /**
     * @Route("/", name="homepage")
     */
    public function index(RegistryInterface $doctrine, Request $request, Environment $twig, EntityService $es, FormFactoryInterface $formfactory) {

        $formUser  = $this->formUser($doctrine, $request, $formfactory);
        $formGroup = $this->formGroupe($doctrine, $request, $formfactory);
        $users     = $es->getAll();

        return new Response($twig->render('index.html.twig', array(
                    "users"     => $users,
                    "formUser"  => $formUser->createView(),
                    "formGroup" => $formGroup->createView()))
        );
    }

    /**
     * @Route("/research", name="research")
     */
    public function indexResearch(RegistryInterface $doctrine, Request $request, Environment $twig, EntityService $es, FormFactoryInterface $formfactory) {

        $formUser  = $this->formUser($doctrine, $request, $formfactory);
        $formGroup = $this->formGroupe($doctrine, $request, $formfactory);
        $users     = $es->getResearch($request->query->get('name'));

        return new Response($twig->render('index.html.twig', array(
                    "users"     => $users,
                    "formUser"  => $formUser->createView(),
                    "formGroup" => $formGroup->createView()))
        );
    }
    /**
     * Créate form new User and  validation logic
     * 
     * @param type $doctrine
     * @param type $request
     * @param type $formfactory
     * @return type
     */
    private function formUser($doctrine, $request, $formfactory) {

        $formUser = $formfactory->createBuilder(UserType::class)->getForm();
        $formUser->handleRequest($request);

        if ($formUser->isSubmitted() && $formUser->isValid()) {
            $task = $formUser->getData();
            $em   = $doctrine->getManager();
            $em->persist($task);
            $em->flush();
        }

        return $formUser;
    }
    /**
     * Créate form new Groupe and  validation logic
     * 
     * @param type $doctrine
     * @param type $request
     * @param type $formfactory
     * @return type
     */
    private function formGroupe($doctrine, $request, $formfactory) {

        $formGroupe = $formfactory->createBuilder(GroupeType::class)->getForm();
        $formGroupe->handleRequest($request);

        if ($formGroupe->isSubmitted() && $formGroupe->isValid()) {
            $task = $formGroupe->getData();
            $em   = $doctrine->getManager();
            $em->persist($task);
            $em->flush();
        }

        return $formGroupe;
    }

}
