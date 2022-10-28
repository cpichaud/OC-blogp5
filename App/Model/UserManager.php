<?php

namespace App\Model;


class UserManager
{

    public function create(string $lastname, string $firstname, string $email, int $phone, string $password, $role)
    {
        $sql = "INSERT INTO user(firstname, lastname, email, phone, password, role)  VALUES ()" ;


        
    }
}
