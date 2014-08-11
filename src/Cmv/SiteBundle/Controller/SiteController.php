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
        $accueil = new Accueil();
        $accueil->setDescription('Créé depuis 2010, Camer Vision est une société de production audiovisuelle basée à
        Yaoundé-Cameroun. Elle met son expertise au service de toute personne ou entreprise ayant des projets dans le
        domaine de l\'audiovisuel. Camer Vision met à votre disposition un matériel
        dernière génération et une équipe jeune et dynamique prête à intervenir pour toute réalisation de vos projets audiovisuels d\'entreprise:
         vidéo événementielle,films publicitaires,des documentaires et des clips vidéos grâce à sa filiale Brightness Pictures, nous disposons
          d\'un savoir faire pouvant s\'adapter à tout type de réalisation vidéo, de la conception à la diffusion,
        nous vous aiderons et vous conseillerons durant les différentes étapes de votre projet.');
        $accueil->setFilm1Description('En Afrique et au Cameroun en particulier, les traditions ancestrales occupent
        encore une place importante dans le quotidien des populations. Malgré les multiples... ');
        $accueil->setFilm1Titre('AtchueLah, francis Meli');

        return $this->render('CmvSiteBundle:Site:index.html.twig', array('accueil'=>$accueil));

    }
    public function aboutAction(){

    }
    public function triAction(){
        $mot1='Films';
        $mot2='Documentaires';
        $description='Dans ce catalogue, vous trouverez les documentaires et les films que nous
         avons realises, produits ou coproduits depuis la creation de CamerVision jusqu\'aujourd\'hui. ';
        $articles= array();
        $article=new Article();
        $article->setDescription('En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.');
        $article->setTitre('ATCHUELAH de Francis Meli');
        $article->setContenu('En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.');
        $article->setTitre('ATCHUELAH de Francis Meli');
        $articles[]=$article;
        $articles[]=$article;
        $articles[]=$article;
        $articles[]=$article;
        $articles[]=$article;


        return $this->render('CmvSiteBundle:Site:tri.html.twig',array(
            'articles'=>$articles,
            'mot1'=>$mot1,
            'mot2'=>$mot2,
             'description'=>$description
        ));
    }
    public function projetsAction(){
        $mot1='Projets en cours';
        $mot2='Projets en Developpement';
        $description='Dans ce catalogue, vous trouverez les documentaires et les films que nous
         avons realises, produits ou coproduits depuis la creation de CamerVision jusqu\'aujourd\'hui. ';
        $articles= array();
        $article=new Article();
        $article->setDescription('En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.');
        $article->setTitre('ATCHUELAH de Francis Meli');
        $article->setContenu('En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.');
        $article->setTitre('ATCHUELAH de Francis Meli');
        $articles[]=$article;
        $articles[]=$article;
        $articles[]=$article;
        $articles[]=$article;
        $articles[]=$article;


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
        $articles= array();
        $article=new Article();
        $article->setDescription('En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.');
        $article->setTitre('ATCHUELAH de Francis Meli');
        $article->setContenu('En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.');
        $article->setTitre('ATCHUELAH de Francis Meli');
        $articles[]=$article;
        $articles[]=$article;
        $articles[]=$article;
        $articles[]=$article;
        $articles[]=$article;


        return $this->render('CmvSiteBundle:Site:tri.html.twig',array(
            'articles'=>$articles,
            'mot1'=>$mot1,
            'mot2'=>$mot2,
            'description'=>$description
        ));
    }
    public function lireAction(){
        $article=new Article();
        $article->setDescription('En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.');
        $article->setTitre('ATCHUELAH de Francis Meli');
        $article->setContenu('En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.En Afrique et au Cameroun en particulier, les traditions ancestrales
        occupent encore une place importante dans le quotidien des populations. Malgré les multiples
        obstacles qui se dressent devant elles, certaines de ces coutumes continuent de se perpétuer de
         générations en générations. Parmi elles, la « Vénérations des crânes » elle est
          l une des plus anciennes traditions ancestrales des Bamilékés,
        un peuples de l Ouest Cameroun. Cest un moyen pour ce peuple de communier leurs ancêtres.');
        $article->setTitre('ATCHUELAH de Francis Meli');

        return $this->render('CmvSiteBundle:Site:lire.html.twig',array(
            'article'=>$article,
        ));
    }



}
