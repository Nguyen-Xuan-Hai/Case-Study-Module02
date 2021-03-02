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
        $this->dsn = 'mysql:host=127.0.0.1;dbname=case_study';
        $this->username = 'root';
        $this->password = '123456';
    }

    public function connect()
    {
        try {
            return new PDO($this->dsn, $this->username, $this->password);
        }catch (\PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}