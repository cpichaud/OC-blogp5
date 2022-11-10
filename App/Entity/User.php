<?php

namespace App\Entity;



class User
{
    private $id;
    private $lastname;
    private $firstname;
    private $email;
    private $phone;
    private $password;
    private $role;
    private $post_id;


    public function getId():int
    {
        return $this->id;
    }

    public function getLastname():string
    {
        return $this->lastname;
    }
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    public function getFirstname():string
    {
        return $this->firstname;
    }
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getEmail():string
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPhone():int
    {
        return $this->phone;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPassword():string
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getRole():int
    {
        return $this->role;
    }
    public function setrole($role)
    {
        $this->role = $role;
    }

    public function getPost_id():int
    {
        return $this->post_id;
    }
    public function setPost_id($post_id)
    {
        $this->post_id = $post_id;
    }

    public function __toString()
    {
        
    }

    
    
}
