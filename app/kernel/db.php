<?php

namespace app\kernel;

use Exception;
use PDO;
use PDOException;

class DB
{
    private $user;
    private $pass;
    private $dbname;
    private static $pdo;

    public function __construct()
    {
        $this->user = 'root';
        $this->pass = '';
        $this->dbname = 'app_learn';
    }

    public function conect()
    {
        try {
            if (is_null(self::$pdo)) {
                self::$pdo =  new PDO("mysql:host=127.0.0.1;dbname=" . $this->dbname, $this->user, $this->pass);

                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$pdo;
        } catch (PDOException $e) {
            throw new Exception('Database Connection Error: ' . $e->getMessage());
        }
    }
}
