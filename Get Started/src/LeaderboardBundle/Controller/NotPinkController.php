<?php

namespace LeaderboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NotPinkController extends Controller
{
    public function crimzon_cloverAction($type)
    {
        $video= "";
        if($type == 'type1'){
            $video = "https://www.youtube.com/embed/bmTHw9vL3Vs";
        } else if ($type == 'type3'){
            $video = "https://www.youtube.com/embed/foDTJceKio8";
        } else if ($type == 'typeZ'){
            $video = "https://www.youtube.com/embed/dFgb1vrF-F8";
        }
        return $this->render('LeaderboardBundle:Crimzon_Clover:index.html.twig',
            array("type"=>$video));
    }

    public function ikarugaAction($style)
    {
        $background = "";
        $color = "";
        if($style == 'white'){
            $background = 'white';
        } else if ($style == 'black'){
            $background = 'black';
            $color = 'white';
        } 
        return $this->render('LeaderboardBundle:Ikaruga:index.html.twig',
        array("styleBg"=>$background,"styleColor"=>$color));
    }

    public function yaoiAction(){
        return $this->render('LeaderboardBundle:Yaoi:index.html.twig');
    }
}