<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use LaravelDoctrine\ORM\Auth\Authenticatable;
use LaravelDoctrine\Extensions\Timestamps\Timestamps;
use LaravelDoctrine\ORM\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword, Timestamps, Notifiable, HasApiTokens;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $email;

    /**
     * @var string
     * @ORM\Column(type="string",nullable=false)
     */
    protected $name;


    public function getId()
    {
        return $this->id;
    }
    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @return mixed
     */
    
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}