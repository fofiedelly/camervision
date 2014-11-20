<?php

namespace Cmv\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="Cmv\SiteBundle\Entity\ArticleRepository")
 */
class Article
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
     * @ORM\Column(name="code", type="string",length=255, unique=true)
     */
    private $code;
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity="Categorie" ,inversedBy="articles")
     */
    private $categorie;
    /**
     * @ORM\Column(name="etat", type="boolean", nullable=false )
     */
    private $etat;
    /**
     * @ORM\Column(name="code_youtube",type="string",length=20, nullable=true)
     */
    private $codeYoutube;
    /**
     * @ORM\Column(name="dateSave", type="datetime", nullable=false)
     */
    private $dateSave;

    /**
     * @ORM\ManyToMany(targetEntity="Image",cascade={"persist"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $image;

    public function __construct(){
        $this->dateSave=new \DateTime();

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
     * Set titre
     *
     * @param string $titre
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Article
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
     * Set contenu
     *
     * @param string $contenu
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set categorie
     *
     * @param \Cmv\SiteBundle\Entity\Categorie $categorie
     * @return Article
     */
    public function setCategorie(\Cmv\SiteBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Cmv\SiteBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set code
     *
     * @param integer $code
     * @return Article
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

    /**
     * Set dateSave
     *
     * @param \datetime $dateSave
     * @return Article
     */
    public function setDateSave(\datetime $dateSave)
    {
        $this->dateSave = $dateSave;

        return $this;
    }

    /**
     * Get dateSave
     *
     * @return \datetime
     */
    public function getDateSave()
    {
        return $this->dateSave;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     * @return Article
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set codeYoutube
     *
     * @param string $codeYoutube
     * @return Article
     */
    public function setCodeYoutube($codeYoutube)
    {
        $this->codeYoutube = $codeYoutube;

        return $this;
    }

    /**
     * Get codeYoutube
     *
     * @return string 
     */
    public function getCodeYoutube()
    {
        return $this->codeYoutube;
    }

    /**
     * Set image
     *
     * @param \Cmv\SiteBundle\Entity\Image $image
     * @return Article
     */
    public function setImage(\Cmv\SiteBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Cmv\SiteBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add image
     *
     * @param \Cmv\SiteBundle\Entity\Image $image
     * @return Article
     */
    public function addImage(\Cmv\SiteBundle\Entity\Image $image)
    {
        $this->image[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \Cmv\SiteBundle\Entity\Image $image
     */
    public function removeImage(\Cmv\SiteBundle\Entity\Image $image)
    {
        $this->image->removeElement($image);
    }
}
