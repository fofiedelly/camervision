<?php

namespace Cmv\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="Cmv\SiteBundle\Entity\CategorieRepository")
 */
class Categorie
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
     * @ORM\Column(name="code",  type="string",length=255, unique=true)
     */
    private $code;
    /**
     * @ORM\OneToMany(targetEntity="Article", mappedBy="categorie")
     */
    private $articles;
    /**
     * @ORM\ManyToOne(targetEntity="CategorieParent",inversedBy="categories")
     */
    private $categorieParent;
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;


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
     * Set nom
     *
     * @param string $nom
     * @return Categorie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Categorie
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
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add articles
     *
     * @param \Cmv\SiteBundle\Entity\Article $articles
     * @return Categorie
     */
    public function addArticle(\Cmv\SiteBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;

        return $this;
    }

    /**
     * Remove articles
     *
     * @param \Cmv\SiteBundle\Entity\Article $articles
     */
    public function removeArticle(\Cmv\SiteBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set categorieParent
     *
     * @param \Cmv\SiteBundle\Entity\CategorieParent $categorieParent
     * @return Categorie
     */
    public function setCategorieParent(\Cmv\SiteBundle\Entity\CategorieParent $categorieParent = null)
    {
        $this->categorieParent = $categorieParent;

        return $this;
    }

    /**
     * Get categorieParent
     *
     * @return \Cmv\SiteBundle\Entity\CategorieParent 
     */
    public function getCategorieParent()
    {
        return $this->categorieParent;
    }

    /**
     * Set code
     *
     * @param integer $code
     * @return Categorie
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return integer 
     */
    public function getCode()
    {
        return $this->code;
    }
}
