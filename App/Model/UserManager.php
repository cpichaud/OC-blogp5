<?php

namespace App\Model;

use PDO;

class UserManager
{

    public function create(string $username, string $lastname, string $firstname, string $email, int $phone, string $password, $role)
    {
        $sql = "INSERT INTO user(firstname, lastname, username, email, phone, password, role)  VALUES ()" ;
       
        $test = $this->db->query($sql);

        
    }
}
