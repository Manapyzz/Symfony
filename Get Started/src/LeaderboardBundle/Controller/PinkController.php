<?php

namespace LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PinkController extends Controller
{
    public function deathSmilesAction()
    {
        return $this->render('LeaderboardBundle:DeathSmiles:index.html.twig');
    }

    public function mushihimesamaAction()
    {
        return $this->render('LeaderboardBundle:Mushihimesama:index.html.twig');
    }
}
