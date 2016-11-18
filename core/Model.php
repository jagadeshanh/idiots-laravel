<?php

class Model extends Database {

    private $table;
    private $connection;

    function __construct()
    {
        parent::__construct();
        $this->connection = $this->getConnection();
    }

    function setTable($table)
    {
        $this->table = $table;
    }

    function getTable()
    {
        return $this->table;
    }

    function disconnect(){
        $this->connection->close();
    }

    function all(){
        $sql = "SELECT * FROM " . $this->getTable();
        $result = $this->getConnection()->query($sql);
        $this->disconnect();
        return $result;
    }

}