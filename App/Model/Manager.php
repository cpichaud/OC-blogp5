<?php

namespace App\Model;

use App\config\connectionDb;
use App\Entity\User;

class Manager extends connectionDb
{
    // public function create(string $lastname, string $firstname, string $email, int $phone, string $password, $role)
    // {
    //     $sql = "INSERT INTO user(firstname, lastname, email, phone, password, role)  VALUES ()" ;

       
        
    // }

    public function readAll()
    {
        $users = [];
        $sql = "SELECT * FROM user WHERE id = ?" ;
        $test = $this->db->query($sql);

        while ($user = $test->fetch()) {
            $users[] = new User($user);
        }
        return $users;
    }

    // public function read(int $id)
    // {
    //     $sql = "" ;

    // }
}
