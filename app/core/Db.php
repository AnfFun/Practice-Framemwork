<?php

namespace app\core;


use PDO;
class Db
{
    protected $db;

    public function __construct()
    {
        $config = require 'app/config/db.php';
        $this->db = new PDO('mysql:host=' . $config['host'] . ';dbname='.$config['name'], $config['user'], $config['password']);
    }

}