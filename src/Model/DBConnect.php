<?php

namespace App\Model;

use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=namdatabase;charset=utf8";
        $this->username = "root";
        $this->password = "Quangnamhd9x@";
    }

    public function connectDB()
    {
        $connect = new PDO($this->dsn, $this->username, $this->password);
        return $connect;
    }
}