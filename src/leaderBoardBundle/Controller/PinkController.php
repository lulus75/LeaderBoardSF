<?php

namespace leaderBoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PinkController extends Controller
{
    public function deathsmilesAction()
    {
        return $this->render('leaderBoardBundle:Default:deathsmiles.html.twig');
    }
    public function mushihimesamaAction()
    {
        return $this->render('leaderBoardBundle:Default:mushihimesama.html.twig');
    }
}
