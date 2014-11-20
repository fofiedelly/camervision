<?php

namespace Cmv\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 */
class User extends BaseUser{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     *ORM\Column(name="prenom",type="string",length=200, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(name="nom", type="string", length=200, nullable=true)
     */
    private $nom;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
} 