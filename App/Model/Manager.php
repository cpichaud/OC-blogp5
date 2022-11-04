<?php

namespace App\Model;

use PDO;
use App\config\connectionDb;
use App\Entity\User;

class Manager extends connectionDb
{
    // public function create(string $lastname, string $firstname, string $email, int $phone, string $password, $role)
    // {
    //     $sql = "INSERT INTO user(firstname, lastname, email, phone, password, role)  VALUES ()" ;

       
        
    // }

    //first test with user
    public function findAll()
    {
        $users = null;
        $sql = "SELECT * FROM `user`" ;
        $test = $this->db->query($sql);
         while ($user = $test->fetch()) {
            // var_dump($user);
            // var_dump('new user:', new User());
            // die();
            $users = new User($user);

        }
    
        return $users;
    }

    // public function findById(int $id)
    // {
    //     $sql = "SELECT * FROM user WHERE id = ?" ;
    //     $userId = $this->db->prepare($sql);
    //     $userId->bindValue(1, $id, PDO::PARAM_INT);
    //     $userId->execute();

    //     return new User($userId->fetch());

    // }
}
