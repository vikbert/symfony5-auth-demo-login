<?php

declare(strict_types = 1);

namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

trait SecurityRequestTrait
{
    public function getEmail(Request $request): string
    {
        return $request->request->get('email', '');
    }

    public function getPassword(Request $request): string
    {
        return $request->request->get('password', '');
    }

    public function getCsrfToken(Request $request): string
    {
        return $request->request->get('_csrf_token', '');
    }

    public function supportLoginFormRequest(Request $request): bool
    {
        return $request->isMethod(Request::METHOD_POST) &&
            $request->attributes->get('_route') === 'app_login';
    }

    public function getLoginUrl(UrlGeneratorInterface $generator): string
    {
        return $generator->generate('app_login');
    }

    public function getProfileUrl(UrlGeneratorInterface $generator): string
    {
        return $generator->generate('app_profile');
    }
}
