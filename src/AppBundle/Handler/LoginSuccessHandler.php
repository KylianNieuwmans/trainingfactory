<?php
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 31-5-2018
 * Time: 09:03
 */

namespace AppBundle\Handler;


use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    /**
     * @var RouterInterface $router
     */
    protected $router;
    /**
     * @var AuthorizationCheckerInterface $authorizationchecker
     */
    protected $authorizationchecker;

    public function __construct(RouterInterface $router, AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->router = $router;
        $this->authorizationchecker = $authorizationChecker;
    }

    /**
     * @param Request $request
     * @param TokenInterface $token
     * @return Response never null
     */

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        if($this->authorizationchecker->isGranted('ROLE_USER'));
        {
            $response = new RedirectResponse($this->router->generate('user'));
        }
    }
}