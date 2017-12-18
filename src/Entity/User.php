<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @UniqueEntity("email", message="Ce mail est déja rentrée" )
 */
class User {
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


     /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true )
     * @Assert\Email()
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=45, nullable=true )
     */
    private $user_firstname;

    /**
     * @ORM\Column(type="string", length=45, nullable=true )
     */
    private $user_lastname;

    
    /**
     * @ORM\ManyToOne(targetEntity="Groupe", inversedBy="id")
     */
    private $fk_group;
    
    
    
    function getId() {
        return $this->id;
    }
    
    function getEmail() {
        return $this->email;
    }

    function getUserFirstname() {
        return $this->user_firstname;
    }

    function getUserLastname() {
        return $this->user_lastname;
    }

    function getFkGroup() {
        return $this->fk_group;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setUserFirstname($user_firstname) {
        $this->user_firstname = $user_firstname;
    }

    function setUserLastname($user_lastname) {
        $this->user_lastname = $user_lastname;
    }

    function setFkGroup($fk_group) {
        $this->fk_group = $fk_group;
    }


}
