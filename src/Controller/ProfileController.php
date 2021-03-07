<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(Security $security
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_USER');

        return $this->render(
            'profile/index.html.twig',
            [
                'user' => $security->getUser(),
            ]
        );
    }
}
