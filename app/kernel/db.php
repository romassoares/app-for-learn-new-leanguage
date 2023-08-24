<?php

namespace app\kernel;

use Exception;
use PDO;
use PDOException;

class DB
{
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $port;
    private static $pdo;

    public function __construct()
    {
        $this->host = '127.0.0.1';
        $this->user = 'root';
        $this->pass = '';
        $this->dbname = 'app_learn';
        $this->port = 3306;
    }
    public function conect()
    {
        try {
            if (is_null(self::$pdo)) {
                self::$pdo =  new PDO("mysql:host=$this->host;port=$this->port;charset=utf8mb4;dbname=" . $this->dbname, $this->user, $this->pass);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$pdo;
        } catch (PDOException $e) {
            throw new Exception('Database Connection Error: ' . $e->getMessage());
        }
    }
}
