<?php

namespace Cmv\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accueil
 *
 * @ORM\Table(name="accueil")
 * @ORM\Entity(repositoryClass="Cmv\SiteBundle\Entity\AccueilRepository")
 */
class Accueil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="film_1_titre", type="string", length=255)
     */
    private $film1Titre;

    /**
     * @var string
     *
     * @ORM\Column(name="film_1_lien", type="string", length=255)
     */
    private $film1Lien;

    /**
     * @var string
     *
     * @ORM\Column(name="film_1_description", type="string", length=200)
     */
    private $film1Description;
    /**
     * @ORM\OneToOne(targetEntity="Cmv\SiteBundle\Entity\Article")
     */
    private $film1LienArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="film_2_titre", type="string", length=255)
     */
    private $film2Titre;

    /**
     * @var string
     *
     * @ORM\Column(name="film_2_lien", type="string", length=255)
     */
    private $film2Lien;

    /**
     * @var string
     *
     * @ORM\Column(name="film_2_description", type="string", length=200)
     */
    private $film2Description;
    /**
     * @ORM\OneToOne(targetEntity="Cmv\SiteBundle\Entity\Article")
     */
    private $film2LienArticle;
    /**
     * @var string
     *
     * @ORM\Column(name="film_3_titre", type="string", length=255)
     */
    private $film3Titre;

    /**
     * @var string
     *
     * @ORM\Column(name="film_3_lien", type="string", length=255)
     */
    private $film3Lien;

    /**
     * @var string
     *
     * @ORM\Column(name="film_3_description", type="string", length=255)
     */
    private $film3Description;
    /**
     * @ORM\OneToOne(targetEntity="Cmv\SiteBundle\Entity\Article")
     */
    private $film3LienArticle;


    public function __construct(){
        $this->film1Titre='';
        $this->film1Description='';
        $this->film1Lien='';
        $this->film2Titre='';
        $this->film2Description='';
        $this->film2Lien='';
        $this->film3Titre='';
        $this->film3Description='';
        $this->film3Lien='';
    }
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Accueil
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set film1Titre
     *
     * @param string $film1Titre
     * @return Accueil
     */
    public function setFilm1Titre($film1Titre)
    {
        $this->film1Titre = $film1Titre;

        return $this;
    }

    /**
     * Get film1Titre
     *
     * @return string 
     */
    public function getFilm1Titre()
    {
        return $this->film1Titre;
    }

    /**
     * Set film1Lien
     *
     * @param string $film1Lien
     * @return Accueil
     */
    public function setFilm1Lien($film1Lien)
    {
        $this->film1Lien = $film1Lien;

        return $this;
    }

    /**
     * Get film1Lien
     *
     * @return string 
     */
    public function getFilm1Lien()
    {
        return $this->film1Lien;
    }

    /**
     * Set film1Description
     *
     * @param string $film1Description
     * @return Accueil
     */
    public function setFilm1Description($film1Description)
    {
        $this->film1Description = $film1Description;

        return $this;
    }

    /**
     * Get film1Description
     *
     * @return string 
     */
    public function getFilm1Description()
    {
        return $this->film1Description;
    }

    /**
     * Set film2Titre
     *
     * @param string $film2Titre
     * @return Accueil
     */
    public function setFilm2Titre($film2Titre)
    {
        $this->film2Titre = $film2Titre;

        return $this;
    }

    /**
     * Get film2Titre
     *
     * @return string 
     */
    public function getFilm2Titre()
    {
        return $this->film2Titre;
    }

    /**
     * Set film2Lien
     *
     * @param string $film2Lien
     * @return Accueil
     */
    public function setFilm2Lien($film2Lien)
    {
        $this->film2Lien = $film2Lien;

        return $this;
    }

    /**
     * Get film2Lien
     *
     * @return string 
     */
    public function getFilm2Lien()
    {
        return $this->film2Lien;
    }

    /**
     * Set film2Description
     *
     * @param string $film2Description
     * @return Accueil
     */
    public function setFilm2Description($film2Description)
    {
        $this->film2Description = $film2Description;

        return $this;
    }

    /**
     * Get film2Description
     *
     * @return string 
     */
    public function getFilm2Description()
    {
        return $this->film2Description;
    }

    /**
     * Set film3Titre
     *
     * @param string $film3Titre
     * @return Accueil
     */
    public function setFilm3Titre($film3Titre)
    {
        $this->film3Titre = $film3Titre;

        return $this;
    }

    /**
     * Get film3Titre
     *
     * @return string 
     */
    public function getFilm3Titre()
    {
        return $this->film3Titre;
    }

    /**
     * Set film3Lien
     *
     * @param string $film3Lien
     * @return Accueil
     */
    public function setFilm3Lien($film3Lien)
    {
        $this->film3Lien = $film3Lien;

        return $this;
    }

    /**
     * Get film3Lien
     *
     * @return string 
     */
    public function getFilm3Lien()
    {
        return $this->film3Lien;
    }

    /**
     * Set film3Description
     *
     * @param string $film3Description
     * @return Accueil
     */
    public function setFilm3Description($film3Description)
    {
        $this->film3Description = $film3Description;

        return $this;
    }

    /**
     * Get film3Description
     *
     * @return string 
     */
    public function getFilm3Description()
    {
        return $this->film3Description;
    }

    /**
     * Set film1LienArticle
     *
     * @param \Cmv\SiteBundle\Entity\Article $film1LienArticle
     * @return Accueil
     */
    public function setFilm1LienArticle(\Cmv\SiteBundle\Entity\Article $film1LienArticle = null)
    {
        $this->film1LienArticle = $film1LienArticle;

        return $this;
    }

    /**
     * Get film1LienArticle
     *
     * @return \Cmv\SiteBundle\Entity\Article 
     */
    public function getFilm1LienArticle()
    {
        return $this->film1LienArticle;
    }

    /**
     * Set film2LienArticle
     *
     * @param \Cmv\SiteBundle\Entity\Article $film2LienArticle
     * @return Accueil
     */
    public function setFilm2LienArticle(\Cmv\SiteBundle\Entity\Article $film2LienArticle = null)
    {
        $this->film2LienArticle = $film2LienArticle;

        return $this;
    }

    /**
     * Get film2LienArticle
     *
     * @return \Cmv\SiteBundle\Entity\Article 
     */
    public function getFilm2LienArticle()
    {
        return $this->film2LienArticle;
    }

    /**
     * Set film3LienArticle
     *
     * @param \Cmv\SiteBundle\Entity\Article $film3LienArticle
     * @return Accueil
     */
    public function setFilm3LienArticle(\Cmv\SiteBundle\Entity\Article $film3LienArticle = null)
    {
        $this->film3LienArticle = $film3LienArticle;

        return $this;
    }

    /**
     * Get film3LienArticle
     *
     * @return \Cmv\SiteBundle\Entity\Article 
     */
    public function getFilm3LienArticle()
    {
        return $this->film3LienArticle;
    }
}
