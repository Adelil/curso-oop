<?php
namespace CodeExperts\DB;

use \PDO;

abstract class Entity
{
    private $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }
    public function findAll()
    {
        return 'SELECT * FROM products';
    }
}
