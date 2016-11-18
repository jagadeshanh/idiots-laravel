<?php

class Database{

    private $host = 'localhost';
    private $user = 'root';
    private $password = 'root';
    private $database = 'agstore';

    private $connection;

    function __construct()
    {
        $this->connection = new mysqli($this->host,$this->user,$this->password,$this->database);
    }

    function getConnection(){
        return $this->connection;
    }

}