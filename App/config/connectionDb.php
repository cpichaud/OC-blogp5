<?php 

namespace App\config;

use PDO;
class connectionDb
{
    protected $db;
    


    public function __construct()
    {
        $host = "localhost";
        $dbName = "blogdb_p5";
        $user = "root";
        $password = "root";
        $chartset ="utf8";

        $this->db = new PDO('mysql:host='.$host.';dbname='.$dbName.';charset='.$chartset.'', ''.$user.'', ''.$password.'',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        
    }
}