<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use App\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * Description of UserController
 *
 * 
 */
class UserController extends Controller {

    /**
     * @Route("/user/{{id}}/remove", name="userRemove")
     */
    public function index($id, RegistryInterface $doctrine) {

        $user = $doctrine->getRepository(User::class)->find($id);
        $em = $doctrine->getManager();
        $em->remove($user);
        $em->flush();
        
     return new RedirectResponse($this->generateUrl("homepage"));
        
    }

}
