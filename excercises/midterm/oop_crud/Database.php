<?php

class Database
{
    private $host = "localhost";
    private $username = "root";
    private $password = "1234";
    private $database = "crud_form";
    private $port = 3307;

    protected $connection;

    public function __construct(){
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database, $this->port);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

}