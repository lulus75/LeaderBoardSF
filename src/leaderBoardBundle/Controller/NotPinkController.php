<?php

namespace leaderBoardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NotPinkController extends Controller
{

    public function crimzon_cloverAction($type)
    {
        $video = '';
        if (empty($type)) {
            $video = "https://www.youtube.com/embed/dFgb1vrF-F8";
        } else {
            if ($type == 'typeZ') {
                $video = "https://www.youtube.com/embed/dFgb1vrF-F8";
            }
            if ($type == 'type1') {
                $video = "https://www.youtube.com/embed/bmTHw9vL3Vs";
            }
            if ($type == 'type3') {
                $video = "https://www.youtube.com/embed/foDTJceKio8";
            }
        }
        return $this->render('leaderBoardBundle:Default:crimzon-clover.html.twig', array('type' => $video));
    }



    public function ikarugaAction()
    {
        $color = '';
        $fontColor = '';

        if (empty($_GET)) {
            $color = "white";
            $fontColor = "black";
        } else {
            if ($_GET['color'] == 'black') {
                $color = "black";
                $fontColor = "white";
            }
            if ($_GET['color'] == 'white') {
                $color = "white";
                $fontColor = "black";
            }
        }
        return $this->render('leaderBoardBundle:Default:ikaruga.html.twig', array('color' => $color, 'fontColor' => $fontColor));
    }
}
