<?php
// src/Fantasmo/ApiBundle/Entity/Client.php

namespace Fantasmo\ApiBundle\Entity;

use FOS\OAuthServerBundle\Entity\Client as BaseClient;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Client extends BaseClient
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", columnDefinition="CHAR(10) NOT NULL")
     */
    protected $name;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}