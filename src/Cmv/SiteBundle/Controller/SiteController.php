<?php

namespace Cmv\SiteBundle\Controller;

use Cmv\SiteBundle\Entity\Article;
use Cmv\SiteBundle\Entity\CategorieParent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Cmv\SiteBundle\Entity\Accueil;

class SiteController extends Controller
{
    public function indexAction()
    {
        $accueil= $this->getDoctrine()->getManager()->getRepository('CmvSiteBundle:Accueil')->find(1);

        return $this->render('CmvSiteBundle:Site:index.html.twig', array('accueil'=>$accueil));
    }
    public function navbarAction(){
        return $this->render('CmvSiteBundle:Site:navbar.html.twig',array());
    }
    public function aboutAction(){

    }
    public function triAction(){
        $mot1='Films';
        $mot2='Documentaires';
        $description='Dans ce catalogue, vous trouverez les documentaires et les films que nous
         avons realises, produits ou coproduits depuis la creation de CamerVision jusqu\'aujourd\'hui. ';


        $articles = $this->getDoctrine()->getManager()->getRepository('CmvSiteBundle:Article')->getFilmsDocs();

        return $this->render('CmvSiteBundle:Site:tri.html.twig',array(
            'articles'=>$articles,
            'mot1'=>$mot1,
            'mot2'=>$mot2,
             'description'=>$description,

        ));
    }
    public function clipsAction(){
        $mot1='Clips';
        $mot2='Videos';
        $description='Retrouvez ici les clips videos que nous avons realises ';

        $articles = $this->getDoctrine()->getManager()->getRepository('CmvSiteBundle:Article')->getClipsVideos();


        return $this->render('CmvSiteBundle:Site:tri.html.twig',array(
            'articles'=>$articles,
            'mot1'=>$mot1,
            'mot2'=>$mot2,
            'description'=>$description
        ));
    }
    public function ActuAction(){
        $mot1='Actualites';
        $mot2='Camervision';
        $description='Dans ce catalogue, vous trouverez les documentaires et les films que nous
         avons realises, produits ou coproduits depuis la creation de CamerVision jusqu\'aujourd\'hui. ';

        $articles = $this->getDoctrine()->getManager()->getRepository('CmvSiteBundle:Article')->getActu();

        return $this->render('CmvSiteBundle:Site:tri.html.twig',array(
            'articles'=>$articles,
            'mot1'=>$mot1,
            'mot2'=>$mot2,
            'description'=>$description
        ));
    }
    public function lireAction(Article $article){


        return $this->render('CmvSiteBundle:Site:lire.html.twig',array(
            'article'=>$article,
        ));
    }



}
