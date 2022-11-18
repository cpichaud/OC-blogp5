<?php

namespace App\Model;

use PDO;
use App\config\connectionDb;
use App\Entity\User;

class Manager extends connectionDb
{


 

    /**
     * @param string $lastname
     * @param string $firstname
     * @param string $email
     * @param integer $phone
     * @param string $password
     * @param [type] $role
     * @return int
     */
    public function createUser(string $lastname, string $firstname, string $email, int $phone, string $password, $role)
    {
        $sql = "INSERT INTO user(firstname, lastname, email, phone, password, role)  
        VALUES (:firstname, :lastname, :email, :phone, :password, :role)" ;
        $r = $this->db->prepare($sql);
        $r->execute([
            ':firstname' => $firstname,
            ':lastname'  => $lastname,
            ':email'     => $email,
            ':phone'     => $phone,
            ':password'  => $password,
            ':role'      => $role
        ]);

        $new = $this->db->lastInsertId();
        return $new;  
    }

    /**
     * @return array
     */
    public function findAll():array
    {
        $users = [];
        $sql = "SELECT * FROM `user`" ;
        $r = $this->db->query($sql);
         while ($user = $r->fetch()) {
            new User($user);
            $users[] = $user;
            
        }
        return $users;
    }

    public function findById(int $id)
    {
        $sql = "SELECT * FROM user WHERE id = ?" ;
        $userId = $this->db->prepare($sql);
        $userId->bindValue(1, $id, PDO::PARAM_INT);
        $userId->execute();

        return new User($userId->fetch());

    }

    public function findByEmail(string $email)
    {
        $sql = "SELECT * FROM user WHERE email = ?" ;
        $userEmail = $this->db->prepare($sql);
        $userEmail->bindValue(1, $email, PDO::PARAM_STR);
        $userEmail->execute();
        $r = $userEmail->fetch();
        return new User($r);
    }

    public function Delete(int $id)
    {
        $sql = "DELETE FROM user WHERE id = ?" ;
        $delete = $this->db->prepare($sql);
        $delete->execute([$id]);
    }
    
}
