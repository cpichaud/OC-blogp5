<?php 

namespace App\config;

use PDO;
class connectionDb
{
    protected $db;
    


    public function __construct()
    {

        $this->db = new PDO('mysql:host=localhost;dbname=blogdb_p5;charset=utf8', 'root', 'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
    }
}