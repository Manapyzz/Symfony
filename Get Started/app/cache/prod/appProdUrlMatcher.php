<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // leaderboard_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'leaderboard_homepage');
            }

            return array (  '_controller' => 'LeaderboardBundle\\Controller\\DefaultController::indexAction',  '_route' => 'leaderboard_homepage',);
        }

        // leaderboard_deathsmiles
        if ($pathinfo === '/deathsmiles') {
            return array (  '_controller' => 'LeaderboardBundle\\Controller\\PinkController::deathsmilesAction',  '_route' => 'leaderboard_deathsmiles',);
        }

        // leaderboard_mushihimesama
        if ($pathinfo === '/mushihimesama') {
            return array (  '_controller' => 'LeaderboardBundle\\Controller\\PinkController::mushihimesamaAction',  '_route' => 'leaderboard_mushihimesama',);
        }

        // leaderboard_crimzon_clover
        if ($pathinfo === '/crimzon_clover') {
            return array (  '_controller' => 'LeaderboardBundle\\Controller\\NotPinkController::crimzon_cloverAction',  '_route' => 'leaderboard_crimzon_clover',);
        }

        // leaderboard_ikaruga
        if ($pathinfo === '/ikaruga') {
            return array (  '_controller' => 'LeaderboardBundle\\Controller\\NotPinkController::ikarugaAction',  '_route' => 'leaderboard_ikaruga',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
