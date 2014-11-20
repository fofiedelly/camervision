<?php

namespace Cmv\SiteBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="Cmv\SiteBundle\Entity\ImageRepository")
 */
class Image
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
     * @ORM\ManyToOne(targetEntity="Application\Sonata\MediaBundle\Entity\Media" , cascade={"all"})
     * @Assert\File(
     * maxSize="1.2M",
     * maxSizeMessage="Votre image ne doit pas depasser 1.2 Mo",
     * mimeTypes={"image/png","png","image/jpeg","image/jpg","jpg","jpeg"},
     * mimeTypesMessage="Seules les images PNG & JPEG sont acceptees",
     * uploadErrorMessage="Nous pouvons pas accepter des images plus lourdes que 1.2 Mo ",
     * uploadErrorMessage="L'image n'a pas pu etre uploadee"
     * )
     */
    private $image;

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
     * Set image
     *
     * @param \Application\Sonata\MediaBundle\Entity\Media $image
     * @return Image
     */
    public function setImage(\Application\Sonata\MediaBundle\Entity\Media $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Application\Sonata\MediaBundle\Entity\Media
     */
    public function getImage()
    {
        return $this->image;
    }

}