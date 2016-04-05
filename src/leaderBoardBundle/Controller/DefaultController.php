<?php

namespace leaderBoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('leaderBoardBundle:Default:index.html.twig');
    }
}
